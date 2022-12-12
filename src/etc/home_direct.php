<?php
    include "koneksi.php";

    session_start();
    $level = $_SESSION['level'];

    if ($level == "admin"){
        header('location:../view/pages_admin.php');
    } else if ($level == "user") {
        header('location:../view/pages_user.php');
    } else if ($level == "") {
        header('location:../../index.php');
    }
?>