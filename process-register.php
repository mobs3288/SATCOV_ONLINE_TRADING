<?php
session_start();

include "koneksi.php";

//dapatkan data user dari form register
$user = [
	'nama_lengkap' => $_POST['nama_lengkap'],
	'username' => $_POST['username'],
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

if($user['password'] == null){
	$_SESSION['error'] = 'Gaboleh kosong yah mas!';
	header("Location:register.php");
	return;
}

//check apakah user dengan username tersebut ada di table users
$query = "select * from user where username = ? limit 1";
$stmt = $mysqli->stmt_init();
$stmt->prepare($query);
$stmt->bind_param('s', $user['username']);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_array(MYSQLI_ASSOC);

//jika username sudah ada, maka return kembali ke halaman register.
if($row != null){
	$_SESSION['error'] = 'Username: '.$user['username'].' yang anda masukkan sudah ada di database.';
	$_SESSION['nama_lengkap'] = $_POST['nama_lengkap'];
	$_SESSION['password'] = $_POST['password'];
	$_SESSION['password_confirmation'] = $_POST['password_confirmation'];
	header("Location:register.php");
	return;

}else{
	$password = $user['password'];
	$level = 'user';

	//username unik. simpan di database.
	$query = "insert into user (nama_lengkap, username, password, level) values  (?,?,?,?)";
	$stmt = $mysqli->stmt_init();
	$stmt->prepare($query);
	$stmt->bind_param('ssss', $user['nama_lengkap'],$user['username'],$password, $level);
	$stmt->execute();
	$result = $stmt->get_result();
	var_dump($result);

	header("location:index.php?pesan=register");
}

?>
