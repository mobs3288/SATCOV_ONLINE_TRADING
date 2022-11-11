<!DOCTYPE html>
<html>
<head>
	<title>Halaman admin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style_admin_home.css">
</head>
<body>
	<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['username']==""){
		header("location:index.php?pesan=gagal");
	}

	// cek apakah yang mengakses halaman ini adalah admin
	if ( $_SESSION['level'] != 'admin'){ 
		echo "<div class='alert'>Anda tidak memiliki akses untuk halaman ini.</div>";
		exit; 
	} 
 
	?>

	<h1>Halaman Admin</h1>
 
	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>

	<script>        
		$(document).ready(function(){
			$(".time").load("auto_time.php");
			setInterval(function() {
				$(".time").load("auto_time.php");
			},1000);
		});
	</script>

	<div class = "time"></div>

	<?php
		include "koneksi.php";
		$conn = new mysqli($host,$user,$password,$database);

		date_default_timezone_set("Asia/Jakarta");
		//echo date('H'). "<br>";

		if(date("H") >= 18){
			$salam = "Selamat Malam!: ";
		} else if (date("H") >= 5 and date("H") < 12){
			$salam = "Selamat Pagi!: ";
		} else if (date("H") >= 12 and date("H") < 15) {
			$salam = "Selamat Siang!: ";
		} else if (date("H") >= 15 and date("H") < 18) {
			$salam = "Selamat Sore!: ";
		}
		
		$user = $_SESSION['username'];

		$sql = "SELECT * FROM user WHERE username = '$user' ";
		$result = mysqli_query($conn, $sql);
		// hitung hasil dan cek ada atau tidaknya data
		$is_exist = mysqli_num_rows($result);
		if($is_exist > 0){
		// keluarkan hasil
			$data = mysqli_fetch_assoc($result);
			echo ($salam ."<b>".$data['nama_lengkap']."</b>"."<br><br>");
		}
	?>

	<a href="logout.php">LOGOUT</a><br>
	<a href="data_saham.php">ADD SAHAM</a><br>
	<a href="info_saham.php">INFO SAHAM</a><br>
	<a href="account.php">AKON</a>
 
	<br/>
	<br/>

</body>
</html>