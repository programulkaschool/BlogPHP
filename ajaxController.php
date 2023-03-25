<?php
include('config/config.php');

if (isset($_POST["my_inp_obj"])) {
    $error = array();

    if ($_POST["my_inp_obj"]["name"] == '') {
        $error[] = "Введіть ім'я";
    }
    if ($_POST["my_inp_obj"]["nickname"] == '') {
        $error[] = "Введіть нікнейм";
    }
    if ($_POST["my_inp_obj"]["text"] == '') {
        $error[] = "Введіть текст";
    }
    if ($_POST["page_id"]["text"] == '') {
        $error[] = "NONE ID";
    }

    if (empty($error)) {
        //SQL INSERT!!!
        mysqli_query($connection, "INSERT INTO `comments` (`name`, `author`, `text`, `pubdate`, `articles_id`) VALUES ('" . $_POST["my_inp_obj"]["name"] . "','" . $_POST["my_inp_obj"]["nickname"] . "','" . $_POST["my_inp_obj"]["text"] . "', NOW() , '" . $_POST['page_id'] . "')");
        echo '<span style="color: green; font-weight: bold;"> Комент Добавлений </span>';
    } else {
        echo '<span style="color: red; font-weight: bold;">' . $error[0] . '</span>';
    };
};

if (isset($_POST["del_post"])) {
    $delid = $_POST["del_post"];

    $delf = mysqli_query($connection, "DELETE FROM `articles` WHERE `id` = " . $delid);
};

if (isset($_POST["onoff"]) && isset($_POST["idpost"])) {

    echo $_POST["idpost"];

    mysqli_query($connection, "UPDATE `articles` SET `post_look`=" . $_POST["onoff"] . " WHERE `id`=" . $_POST["idpost"]);
};

if (isset($_POST["inp"])) {
    mysqli_query($connection, "INSERT INTO `article_categories` (`title`) VALUES ('" . $_POST["inp"] . "') ");
    echo $_POST["inp"];
};

if (isset($_POST["inpuptd"]) && isset($_POST["catid"])) {
    mysqli_query($connection, "UPDATE `article_categories` SET `title`='" . $_POST["inpuptd"] . "' WHERE `id`='" . $_POST["catid"] . "' ");
};

if (isset($_POST["deleteidbtn"])) {
    //mysqli_query($connection, "DELETE FROM `article_categories` WHERE `id` = ". $_POST["deleteidbtn"]);
    mysqli_query($connection, "DELETE FROM `article_categories` WHERE `id` = " . $_POST["deleteidbtn"]);
};

if (isset($_POST["usr"]) && isset($_POST["addtext"]) && isset($_POST["selectedVal"]) && isset($_POST["oneortwo"])) {
    mysqli_query($connection, "INSERT INTO articles (title,text,categorie_id,post_look,pubdate) VALUES ('" . $_POST['add_post_title'] . "', '" . $_POST['add_post_text'] . "', '" . $_POST['chec_post_selected'] . "', '" . $_POST['chec_post'] . "',  NOW()  ) ");
};




if (isset($_POST["post_all_edit"])) {
    
    $post_all_edit = json_decode($_POST["post_all_edit"]);
    $sql = mysqli_query($connection, "UPDATE `articles` SET `title`='" . $post_all_edit -> post_title_val . "', `text`='" . $post_all_edit -> post_text_val . "', `categorie_id`='" . $post_all_edit -> selected_post_categorie . "' WHERE `id`='" . $post_all_edit -> post_id . "' ");
    if(!$sql){
        die('Error: ' . mysqli_error($connection));
    }
    if ($post_all_edit -> photo_name !="false"){
            mysqli_query($connection, "UPDATE `articles` SET `img`='" . $post_all_edit -> photo_name . "' WHERE `id`='" . $post_all_edit -> post_id . "'");
    };
    var_dump($post_all_edit);
    

    if ($_FILES['customFile']['error'] === UPLOAD_ERR_OK) {
        $filename = $_FILES['customFile']['name'];
        $file_tmp = $_FILES['customFile']['tmp_name'];
        $max_size = 2 * 1024 * 1024;
        if ($_FILES['customFile']['size'] > $max_size) {
            echo 'ERROR: File size is too large';
            exit;
        };
        $upload_dir = 'img/';
        $upload_file = $upload_dir . $filename;
        if (move_uploaded_file($file_tmp, $upload_file)) {
            chmod($upload_file, 0666);
            echo $filename;
            mysqli_query($connection, "UPDATE `articles` SET `img`='" . $filename . "' WHERE `id`='" . $post_all_edit -> post_id . "' ");
            
        } else {
            echo 'Error: Unable to move uploaded file.';
        };
    } else {
        echo 'Error: Unable to move uploaded file.';
    }
}
// if (isset($_POST["usr"]) && isset($_POST["addtext"]) && isset($_POST["selectedVal"]) && isset($_POST["oneortwo"])) {
//     mysqli_query($connection, "INSERT INTO articles (title,text,categorie_id,post_look,pubdate) VALUES ('" . $_POST['add_post_title'] . "', '" . $_POST['add_post_text'] . "', '" . $_POST['chec_post_selected'] . "', '" . $_POST['chec_post'] . "',  NOW()  ) ");
// };

// if (isset($_POST["post_title_val"]) && isset($_POST["post_text_val"]) && isset($_POST["selected_post_categorie"]) && isset($_POST["post_id"])) {
//     var_dump($_POST["photo_name"]!="false");
//     $sql = mysqli_query($connection, "UPDATE `articles` SET `title`='" . $_POST["post_title_val"] . "', `text`='" . $_POST["post_text_val"] . "', `categorie_id`='" . $_POST["selected_post_categorie"] . "' WHERE `id`='" . $_POST["post_id"] . "' ");

//     if ($_POST["photo_name"]!="false"){
//         mysqli_query($connection, "UPDATE `articles` SET `img`='" . $_POST["photo_name"] . "' WHERE `id`='" . $_POST["post_id"] . "'");
//     };
// };