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
if (isset($_POST['admin_btn'])){
    $delete = $_POST['admin_btn'];
        mysqli_query($connection, "DELETE FROM articles WHERE id = $delete ");
    
}

if(isset($_POST['admin_checkbox']) && isset($_POST['check_admin'])) {

    mysqli_query($connection, "UPDATE `articles` SET `post_look`=" . $_POST['check_admin'] . " WHERE `id` =". $_POST['admin_checkbox']);


}

if (isset($_POST['admin_del_btn'])){
    $delete_thr = $_POST['admin_del_btn'];
        mysqli_query($connection, "DELETE FROM `articles_categories` WHERE id=". $delete_thr );
    
}

if (isset($_POST['admin_add_btn'])){
    echo $_POST['admin_add_btn'];
        mysqli_query($connection, "INSERT INTO `articles_categories` (`title`) VALUES ('". $_POST['admin_add_btn'] . "')");
    
}

if(isset($_POST['admin_upd_btn']) && isset($_POST['val_admin'])) {

    mysqli_query($connection, "UPDATE `articles` SET `title`=" . $_POST['val_admin'] . " WHERE `id` =". $_POST['admin_upd_btn']);


}