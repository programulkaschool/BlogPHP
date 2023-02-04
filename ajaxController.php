<?php

include('config/config.php');

if (isset($_POST["my_inp_obj"])) {
    $error = array();

    if($_POST["my_inp_obj"]["name"] == ""){
        $error[] = 'Введіть іь\'я';
    };
    if($_POST["my_inp_obj"]["nickname"] == ""){
        $error[] = 'Введіть нік';
    };
    if($_POST["my_inp_obj"]["text"] == ""){
        $error[] =  'Введіть текст';
    };
    if($_POST["page_id"] == ""){
        $error[] =  'NODE ID';
    };
    if(empty($error)){
        //SQL
        echo '<span style="color: green; font-weight:bold;">Комент добавлений</span>';
    }else{
        echo '<span style="color: red; font-weight:bold;">' . $error[0] . '</span>';
    };
};
