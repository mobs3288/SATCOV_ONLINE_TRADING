<?php
    require_once dirname(__FILE__).'/../model/Admin.php';

    $admin= new Admin();

    if ($_REQUEST['addSaham']){
        $admin->add_saham();
    } else if ($_REQUEST['changePassword']){
        $admin->changePassword();
    }
?>