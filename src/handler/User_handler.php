<?php
    require_once dirname(__FILE__).'/../model/User.php';

    $user= new User();

    if ($_REQUEST['validate']){
        $user->validate();
    } else if ($_REQUEST['Register']){
        $user->Register();
    } else if ($_REQUEST['deleteAccount']){
        $user->deleteAccount();
    } else if ($_REQUEST['changePassword']){
        $user->changePassword();
    } else if ($_REQUEST['forgotPassword']){
        $user->forgotPassword();
    }


?>