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

    $delf = mysqli_query($connection, "DELETE FROM `articles` WHERE `id` = ".$delid);
};

if (isset($_POST["onoff"]) && isset($_POST["idpost"])) {

    echo $_POST["idpost"];

    mysqli_query($connection, "UPDATE `articles` SET `post_look`=" . $_POST["onoff"] . " WHERE `id`=" . $_POST["idpost"]);
   
};