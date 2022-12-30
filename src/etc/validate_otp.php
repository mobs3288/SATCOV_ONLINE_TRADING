<?php
    session_start();
    $check = $_POST['otp_input'];

    if ($check == $_SESSION['otp']){
        header("Location:../view/pages_update_forgot_pw.php");
    } else {
        header("Location:../view/pages_otp.php?pesan=tidakvalid");
    }
?>