<!DOCTYPE html>
<html>
<head>
	<title>Halaman user</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}

	if ( $_SESSION['level'] != 'admin' && $_SESSION['level'] != 'user'){ 
		echo "<div class='alert'>Anda tidak memiliki akses untuk halaman ini.</div>";
		exit; 
	} 
 
	?>
	<h1>Halaman User</h1>
 
	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>

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
	<a href="info_saham.php">INFO SAHAM</a><br>
	<a href="account.php">AKON</a>
 
	<br/>
	<br/>
</body>
</html>