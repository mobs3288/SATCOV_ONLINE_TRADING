<?php
    require_once dirname(__FILE__).'/../model/Guest.php';

    $guest= new Guest();

    if ($_REQUEST['Register']){
        $guest->Register();
    } 


?>