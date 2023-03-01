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

if(isset($_POST['categories_id'])){
    $delit_categories = $_POST["categories_id"];
    mysqli_query($connection, "DELETE FROM `articles_categories` WHERE `id` =" . $delit_categories );
}

//update categories
if (isset($_POST["previousElement"]) && isset($_POST["id_categories_update"])) {
    mysqli_query($connection, "UPDATE `articles_categories` SET `title`='" . $_POST["previousElement"] . "' WHERE `id`= " . $_POST["id_categories_update"]);
}

//add post
if (isset($_POST['add_post_title']) && isset($_POST['add_post_text']) && isset($_POST['chec_post']) && isset($_POST['chec_post_selected'])) {
    mysqli_query($connection, "INSERT INTO `articles` (`title`,`text`,`categorie_id`,`post_look`,`pubdate`) VALUES ('" . $_POST['add_post_title'] . "', '" . $_POST['add_post_text'] . "', '" . $_POST['chec_post_selected'] . "', '" . $_POST['chec_post'] . "',  NOW()  ) ");
};