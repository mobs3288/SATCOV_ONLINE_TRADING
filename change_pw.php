<?php
    session_start();
    include "koneksi.php";

	$conn = new mysqli($host,$user,$password,$database);

    //dapatkan data user dari form register
    $user = [
        'username' => $_SESSION['username'],
        'new_password' => $_POST['new_password'],
        'old_password' => $_POST['old_password'],
        'password_confirmation' => $_POST['password_confirmation'],
    ];

    //validasi jika password & password_confirmation sama

    if($user['new_password'] != $user['password_confirmation']){
        $_SESSION['error'] = 'Password yang anda masukkan tidak sama dengan password confirmation.';
        $_SESSION['nama_lengkap'] = $_POST['nama_lengkap'];
        $_SESSION['username'] = $_POST['username'];
        header("Location:account.php");
        return;
    }

    if($user['new_password'] == null || $user['password_confirmation'] == null){
        $_SESSION['error'] = 'Gaboleh kosong yah mas!';
        header("Location:account.php");
        return;
    }

    //check apakah user dengan username tersebut ada di table users
    $sql = "SELECT * FROM user WHERE username = '".$user['username']."'";
    $result = $conn->query($sql);
        
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $sql = "UPDATE user set  password = '".$user['new_password']."'where username = '".$user['username']."'";
            $conn->query($sql);
        }
    }

    header("location:account.php?pesan=berhasilchange");

?>
