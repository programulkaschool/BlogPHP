<?php

include('config/config.php');

if (isset($_POST["my_inp_obj"])) {
    $error = array();

    if ($_POST["my_inp_obj"]["name"] == "") {
        $error[] = 'Введіть ім\'я';
    };
    if ($_POST["my_inp_obj"]["nickname"] == "") {
        $error[] = 'Введіть нік';
    };
    if ($_POST["my_inp_obj"]["text"] == "") {
        $error[] =  'Введіть текст';
    };
    if ($_POST["page_id"] == "") {
        $error[] =  'NODE ID';
    };
    if (empty($error)) {
        mysqli_query($connection, "INSERT INTO `comments` (`name`,`author`,`text`,`pubdate`,`articles_id`) VALUES ('" . $_POST["my_inp_obj"]["name"] . "', '" . $_POST["my_inp_obj"]["nickname"] . "','" . $_POST["my_inp_obj"]["text"] . "', NOW(),'" . $_POST["page_id"] . "')");

        echo '<span style="color: green; font-weight:bold;">Комент добавлений</span>';
    } else {
        echo '<span style="color: red; font-weight:bold;">' . $error[0] . '</span>';
    };
};


//delete post
if (isset($_POST["post_id"])) {
    $delit = $_POST["post_id"];
    mysqli_query($connection, "DELETE FROM `articles` WHERE `id` = $delit ");
}

// on_of

if (isset($_POST["chec"]) && isset($_POST["i_on_of"])) {
    mysqli_query($connection, "UPDATE `articles` SET `post_look`=" . $_POST["chec"] . " WHERE `id`= " . $_POST["i_on_of"]);
}

//ad categories

if (isset($_POST['add_categorie'])) {
    mysqli_query($connection, "INSERT INTO `articles_categories` (`title`) VALUES ('" . $_POST['add_categorie'] . "') ");
};

//delete categories

if (isset($_POST['categories_id'])) {
    $delit_categories = $_POST["categories_id"];
    mysqli_query($connection, "DELETE FROM `articles_categories` WHERE `id` =" . $delit_categories);
}

//update categories
if (isset($_POST["previousElement"]) && isset($_POST["id_categories_update"])) {
    mysqli_query($connection, "UPDATE `articles_categories` SET `title`='" . $_POST["previousElement"] . "' WHERE `id`= " . $_POST["id_categories_update"]);
}

//add post
if (isset($_POST['add_post_title']) && isset($_POST['add_post_text']) && isset($_POST['chec_post']) && isset($_POST['chec_post_selected'])) {
    mysqli_query($connection, "INSERT INTO `articles` (`title`,`text`,`categorie_id`,`post_look`,`pubdate`) VALUES ('" . $_POST['add_post_title'] . "', '" . $_POST['add_post_text'] . "', '" . $_POST['chec_post_selected'] . "', '" . $_POST['chec_post'] . "',  NOW()  ) ");
};

// if ($_FILES['customFile']['error'] === UPLOAD_ERR_OK) {
//     $filename = $_FILES['customFile']['name'];
//     $fil_tmp = $_FILES['customFile']['tmp_name'];
//     $max_size = 2 * 1024 * 1024;
//     if ($_FILES['customFile']['size'] > $max_size) {
//         echo 'Error: File size is too large';
//         exit;
//     };
//     $upload_dir = 'img/';
//     $upload_file = $upload_dir . $filename;
//     if (move_uploaded_file($fil_tmp, $upload_file)) {
//         chmod($upload_file, 0666);
//         echo $filename;
//     }else{
//         echo 'Error: Unable to move uploaded file.';
//     };
// }else{
//     echo 'Error: File upload failed';
// };

// update post

if (isset($_POST["all_post_edit"])) {
    $decode_json = json_decode($_POST["all_post_edit"]);
    mysqli_real_escape_string($connection, $decode_json->change_post_text);
    var_dump(mysqli_real_escape_string($connection, $decode_json->change_post_text));
    $result =  mysqli_query($connection, "UPDATE `articles` SET `title`='" . mysqli_real_escape_string($connection, $decode_json->change_post_title) . "', `text`='" . mysqli_real_escape_string($connection, $decode_json->change_post_text) . "', `categorie_id`='" . $decode_json->change_post_categories . "' WHERE `id`= " . $decode_json->change_id_post_update);

    if (!$result) {
        die("помилка запиту:" . mysqli_error($connection));
    }

    if ($decode_json->name_src_photo != false) {
        mysqli_query($connection, "UPDATE `articles` SET `img`='" . $decode_json->name_src_photo . "' WHERE `id`= " . $decode_json->change_id_post_update);
    };


    if ($_FILES['customFile']['error'] === UPLOAD_ERR_OK) {
        $filename = $_FILES['customFile']['name'];
        $fil_tmp = $_FILES['customFile']['tmp_name'];
        $max_size = 2 * 1024 * 1024;
        if ($_FILES['customFile']['size'] > $max_size) {
            echo 'Error: File size is too large';
            exit;
        };
        $upload_dir = 'img/';
        $upload_file = $upload_dir . $filename;
        if (move_uploaded_file($fil_tmp, $upload_file)) {
            chmod($upload_file, 0666);
            // echo $filename;
            mysqli_query($connection, "UPDATE `articles` SET `img`='" . $filename . "' WHERE `id`= " . $decode_json->change_id_post_update);
        } else {
            echo 'Error: Unable to move uploaded file.';
        };
    }
};


if ($_FILES['add_photo_post']['error'] === UPLOAD_ERR_OK) {
    $filename_photo = $_FILES['customFile']['name'];
    $fil_tmp_photo = $_FILES['customFile']['tmp_name'];
    $max_size_photo = 3 * 1024 * 1024;

    if ($_FILES['add_photo_post']['size'] > $max_size_photo) {
        echo 'Error: File size is too large';
        exit;
    };
    $upload_dir_photo = 'img/';
    $upload_file_photo = $upload_dir_photo . $filename_photo;

    if (move_uploaded_file($fil_tmp_photo, $upload_file_photo)) {
        chmod($upload_file_photo, 0666);
        // echo $filename;
       // mysqli_query($connection, "UPDATE `articles` SET `img`='" . $filename_photo . "' WHERE `id`= " . $decode_json->change_id_post_update);
    }
}
