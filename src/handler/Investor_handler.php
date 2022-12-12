<?php
    require_once dirname(__FILE__).'/../model/Investor.php';

    $investor = new Investor();

    if ($_REQUEST['sellStock']){
        $investor->sellStock();
    } else if ($_REQUEST['buyStock']){
        $investor->buyStock();
    } else if ($_REQUEST['changePassword']){
        $investor->changePassword();
    }


?>