<?php
    require_once dirname(__FILE__).'/../model/User.php';

    $forgot= new User();

    $forgot->forgotPassword();

?>