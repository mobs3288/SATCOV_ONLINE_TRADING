<?php
    include "koneksi.php";

    session_start();
    $level = $_SESSION['level'];

    if ($level == "admin"){
        header('location:halaman_admin.php');
    } else if ($level == "user") {
        header('location:halaman_user.php');
    }
?>