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
	<div class="topnav">
		<img src = "logo.png" width="85" height="50">
		<div class = "logo_user">
			<a href = "#account"><img src = "logo_user.png" width ="30" height="30"></a>
		</div>
	</div>

	<script>        
		$(document).ready(function(){
			$(".time").load("auto_time.php");
			setInterval(function() {
				$(".time").load("auto_time.php");
			},1000);
		});
	</script>

	<div class = "time"></div>

	<h1><?php
		include "koneksi.php";
		$conn = new mysqli($host,$user,$password,$database);

		date_default_timezone_set("Asia/Jakarta");
		//echo date('H'). "<br>";


		if(date("H") >= 18 or date('H')>= 0 and date('H') < 5){
			$salam = "Good Night, ";
		} else if (date("H") >= 5 and date("H") < 12){
			$salam = "Good Morning, ";
		} else if (date("H") >= 12 and date("H") < 18) {
			$salam = "Good Afternoon, ";
		}
		
		$user = $_SESSION['username'];

		$sql = "SELECT * FROM user WHERE username = '$user' ";
		$result = mysqli_query($conn, $sql);
		// hitung hasil dan cek ada atau tidaknya data
		$is_exist = mysqli_num_rows($result);
		if($is_exist > 0){
		// keluarkan hasil
			$data = mysqli_fetch_assoc($result);
			echo ($salam ."<b>".$data['nama_lengkap']."!</b>"."<br><br>");
		}
	?></h1>
	<h2>You login as a <?php echo $_SESSION['level']; ?></h2>

	<?php
		if ($_SESSION['level'] == "admin"){ ?>
			<div class="sidenav">
				<a href="home_direct.php">Home</a>
				<a href="account.php">Account</a>
				<a href="data_saham.php">Manage Stock</a>
				<a href="#contact">Admin</a>
				<a href="#services">User Management</a>

				<form action="logout.php">
					<input type="submit" value="LOG OUT" class = "tombol_logout" />
				</form>
			</div>
	<?php } ?>

	<?php
		if ($_SESSION['level'] == "user"){ ?>
			<div class="sidenav">
				<a href="home_direct.php">Home</a>
				<a href="account.php">Account</a>
				<a href="info_saham.php">Stock</a>
				<a href="porto.php">Portofolio</a>
				<a href="cash_balance.php">Cash Balance</a>
			<br>

				<form action="logout.php">
					<input type="submit" value="LOG OUT" class = "tombol_logout" />
				</form>
			</div> 
	<?php } ?>
	
	<div class = "table">
		<a href="logout.php">LOGOUT</a><br>
		<a href="data_saham.php">ADD SAHAM</a><br>
		<a href="info_saham.php">INFO SAHAM</a><br>
		<a href="account.php">AKON</a><br>
		<a href="cash_balance.php">CASH BALANCE</a><br>
		<a href="porto.php">PORTOFOLIO</a><br>
	</div>
 
	<br/>
	<br/>

</body>
</html>