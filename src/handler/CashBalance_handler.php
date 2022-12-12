<?php
    require_once dirname(__FILE__).'/../model/CashBalance.php';

    $cb = new CashBalance();

    if ($_REQUEST['Withdraw']){
        $cb->Withdraw();
    } else if ($_REQUEST['topup']){
        $cb->topUp();
    }
    //<button type="submit" class="tombol_buy" value = "Withdraw" name = "Withdraw">SELL</button><br><br>
?>