<?php

include('config/config.php');

if(isset($_POST['my_inp_obj'])){
    $error = array();
    
    if($_POST['my_inp_obj']['name'] == ''){
        $error[]  = 'Введіть ім\'я';
    }
    if($_POST['my_inp_obj']['nickname'] == ''){
        $error[]  ='Введіть нік';
    }
    if($_POST['my_inp_obj']['text'] == ''){
        $error[]  ='Введіть текст коментаря';
    }
    if($_POST['page_id'] == ''){
        $error[]  ='NONE ID';
    }

    if(empty($error)){
        //SQL
        echo '<span style="color: lightgreen; font-weight: bold;">Комент добавлений</span>';
    }else{
        echo '<span style="color: red; font-weight: bold;">' . $error[0] .  '</span>';
    };
}