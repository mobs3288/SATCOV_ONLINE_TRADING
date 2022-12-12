<?php
    require_once dirname(__FILE__).'/../model/User.php';

    $user= new User();

    if ($_REQUEST['validate']){
        $user->validate();
    } else if ($_REQUEST['Register']){
        $user->Register();
    }


?>