<?php
include('config/config.php');


if (isset($_POST['elements']) && isset($_POST['id_int_my'])) {


    $error = array();
    if ($_POST['elements']['name'] == '') {
        $error[] = 'Введіть ім\'я';
    }
    if ($_POST['elements']['nickname'] == '') {
        $error[] = 'Введіть нікнейм';
    }
    if ($_POST['elements']['text'] == '') {
        $error[] = 'Введіть текст коментаря';
    }
    if ($_POST['id_int_my'] == '') {
        $error[] = 'NONE ID';
    }

    if (empty($error)) {
        mysqli_query($connection, "INSERT INTO comments (`name`,`author`,`text`,`pubdate`,`articles_id`) VALUES ('" . $_POST['elements']['name'] . "','" . $_POST['elements']['nickname'] . "','" . $_POST['elements']['text'] . "', NOW(),'" . $_POST['id_int_my'] . "')");
        echo '<span style="color:00b118; font-weigth:bolt">Коментар добавлений</span>';
    } else {
        echo '<span style="color:red; font-weigth:bolt">' . $error[0] . '</span>';
    }
}


//echo $_POST['admin_btn'];
if (isset($_POST['admin_btn'])) {
    $delete = $_POST['admin_btn'];
    mysqli_query($connection, "DELETE FROM articles WHERE id = $delete ");
}

if (isset($_POST['admin_checkbox']) && isset($_POST['check_admin'])) {

    mysqli_query($connection, "UPDATE `articles` SET `post_look`=" . $_POST['check_admin'] . " WHERE `id` =" . $_POST['admin_checkbox']);
}

if (isset($_POST['admin_del_btn'])) {
    $delete_thr = $_POST['admin_del_btn'];
    mysqli_query($connection, "DELETE FROM `articles_categories` WHERE id=" . $delete_thr);
}

if (isset($_POST['admin_add_btn'])) {
    echo $_POST['admin_add_btn'];
    mysqli_query($connection, "INSERT INTO `articles_categories` (`title`) VALUES ('" . $_POST['admin_add_btn'] . "')");
}

if (isset($_POST['admin_upd_btn']) && isset($_POST['val_admin'])) {

    mysqli_query($connection, "UPDATE `articles_categories` SET `title` ='" . $_POST['val_admin'] . "' WHERE `id` =" . $_POST['admin_upd_btn']);
}


if (isset($_POST['title_sc']) && isset($_POST['text_sc']) && isset($_POST['select_sc']) && isset($_POST['checkbox_sc'])) {
    $_POST['checkbox_sc'] == "true" ? $post_scd = 1 : $post_scd =  0;

    $result = mysqli_query($connection, "INSERT INTO `articles` (`title`,`text`,`categorie_id`,`pubdate`,`post_look`) VALUES ('" . $_POST['title_sc'] . "','" . $_POST['text_sc'] . "','" . $_POST['select_sc'] . "',NOW(),'" . $post_scd . "')");

    if (!$result) {
        die('Помилка запиту: ' . mysqli_error($connection));
    }
    //echo $_POST['title_sc'];
}

if (isset($_POST['title_edit']) && isset($_POST['text_edit']) && isset($_POST['select_edit']) && isset($_POST['showimg']) && isset($_POST['sv_post']) && isset($_POST['checkbox_edit'])) {
    $_POST['checkbox_edit'] == "true" ? $post_edit = 1 : $post_edit =  0;
    $result = mysqli_query($connection, "UPDATE `articles` SET `title` ='" . $_POST['title_edit'] . "', `text` ='" . $_POST['text_edit'] . "', `categorie_id` ='" . $_POST['select_edit'] . "', `img` ='" . $_POST['showimg'] . "', `post_look` = '" . $post_edit . "' WHERE `id`='" . $_POST['sv_post'] . "'");
    if (!$result) {
        die('Помилка запиту: ' . mysqli_error($connection));
    }
}


if (isset($_POST['edit_obj'])) {

    $decode_json = json_decode($_POST['edit_obj']);

    $decode_json->checkbox_edit == true ? $post_edit = 1 : $post_edit =  0;
    $result = mysqli_query($connection, "UPDATE `articles` SET `title` ='" . $decode_json->title_edit . "', `text` ='" . $decode_json->text_edit . "', `categorie_id` ='" . $decode_json->select_edit . "', `post_look` = '" . $post_edit . "' WHERE `id`='" . $decode_json->sv_post . "'");

    var_dump($decode_json);
    if ($decode_json->showimg != false) {
        mysqli_query($connection, "UPDATE `articles` SET  `img` ='" . $decode_json->showimg . "' WHERE `id`='" . $decode_json->sv_post . "'");
    }
}

if ($_FILES['customFile']['error'] == UPLOAD_ERR_OK) {
    $_POST['id_edit_photo'];
    $file_name = $_FILES['customFile']['name'];
    $file_tmp = $_FILES['customFile']['tmp_name'];
    $file_size = 1 * 1024 * 1024;
    if ($_FILES['customFile']['size'] > $file_size) {
        echo 'error: завеликий розмір файлу';
        exit;
    };
    $upload_dir = 'img/';
    $upload_file = $upload_dir . $file_name;
    if (move_uploaded_file($file_tmp, $upload_file)) {
        chmod($upload_file, 0666);
    };
    echo $decode_json->sv_post;
    if (isset($decode_json->sv_post) && $_FILES['customFile']['name']) {

        $result = mysqli_query($connection, "UPDATE `articles` SET  `img` ='" . $_FILES['customFile']['name'] . "' WHERE `id`='" . $decode_json->sv_post . "'");
        if (!$result) {
            die('Помилка запиту: ' . mysqli_error($connection));
        }
    }
}

if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
    $result = mysqli_query($connection, "INSERT INTO `users` (`username`, `password`, `email`) VALUES ('" . $_POST['username'] . "', '" . $_POST['password'] . "', '" . $_POST['email'] . "')");
    if (!$result) {
        die('Помилка запиту: ' . mysqli_error($connection));
    }
}
