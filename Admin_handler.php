<?php
    require_once 'Admin.php';

    if ($_REQUEST['addSaham']){
        $admin= new Admin();
        $admin->add_saham();
    }


?>