<?php
    session_start();
    include "koneksi.php";

	$conn = new mysqli($host,$user,$password,$database);

    //dapatkan data user dari form register
    $user = [
        'username' => $_SESSION['username'],
        'password' => $_POST['password'],
        'password_confirmation' => $_POST['password_confirmation'],
    ];

    //validasi jika password & password_confirmation sama

    if($user['password'] != $user['password_confirmation']){
        $_SESSION['error'] = 'Password yang anda masukkan tidak sama dengan password confirmation.';
        $_SESSION['nama_lengkap'] = $_POST['nama_lengkap'];
        $_SESSION['username'] = $_POST['username'];
        header("Location:register.php");
        return;
    }

    if($user['password'] == null || $user['password_confirmation'] == null){
        $_SESSION['error'] = 'Gaboleh kosong yah mas!';
        header("Location:register.php");
        return;
    }

    //check apakah user dengan username tersebut ada di table users
    $sql = "SELECT * FROM user WHERE username = '".$user['username']."'";
    $result = $conn->query($sql);
        
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $sql = "DELETE FROM user where username = '".$user['username']."'";
            $conn->query($sql);
        }
    }

    header("location:index.php");

?>
