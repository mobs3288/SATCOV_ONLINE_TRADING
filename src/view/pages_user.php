<!DOCTYPE html>
<html>
<head>
	<title>Halaman admin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../../assets/css/user_home_style.css">
</head>
<body>
	<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['username']==""){
		header("location:index.php?pesan=gagal");
	}

	// cek apakah yang mengakses halaman ini adalah admin
	if ( $_SESSION['level'] != 'admin' and $_SESSION['level'] != 'user'){ 
		echo "<div class='alert'>Anda tidak memiliki akses untuk halaman ini.</div>";
		exit; 
	} 
 
	?>
	<div class="topnav">
		<img src = "../../assets/img/logo.png" width="85" height="50">
		<div class = "logo_user">
			<a href = "#account"><img src = "../../assets/img/photo1.jpeg" width ="30" height="30" class="rounded"></a>
		</div>
	</div><br>

	<script>        
		$(document).ready(function(){
			$(".time").load("../etc/auto_time.php");
			setInterval(function() {
				$(".time").load("../etc/auto_time.php");
			},1000);
		});
		$(document).ready(function(){
			$(".time2").load("../etc/auto_time.php");
			setInterval(function() {
				$(".time2").load("../etc/auto_time.php");
			},1000);
		});
	</script>

	<?php
		if (date("H") >= 17 and date("H") < 8){
	?><div class = "time"></div>
	<?php } else { ?>
		<div class = "time2"></div>
	<?php } ?>

	<h1><?php
		include dirname(__FILE__).'/../etc/koneksi.php';
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
			echo ($salam ."<b>".$data['nama_lengkap']."!</b>"."<br>");
		}
	?></h1>
	<h2>You login as a <?php echo $_SESSION['level']; ?></h2>

	<?php
		if ($_SESSION['level'] == "admin"){ ?>
			<div class="sidenav">
				<a href="../etc/home_direct.php">Home</a>
				<a href="pages_account.php">Account</a>
				<a href="pages_data_saham.php">Manage Stock</a>

				<form action="../etc/logout.php">
					<input type="submit" value="LOG OUT" class = "tombol_logout" />
				</form>
			</div>
	<?php } ?>

	<?php
		if ($_SESSION['level'] == "user"){ ?>
			<div class="sidenav">
				<a href="../etc/home_direct.php">Home</a>
				<a href="pages_account.php">Account</a>
				<a href="pages_info_saham.php">Stock</a>
				<a href="pages_porto.php">Portofolio</a>
				<a href="pages_history.php">History</a>
				<a href="pages_cash_balance.php">Cash Balance</a>
			<br>

				<form action="../etc/logout.php">
					<input type="submit" value="LOG OUT" class = "tombol_logout" />
				</form>
			</div> 
	<?php } ?>

	<?php
		if (date("H") >= 17 and date("H") < 8){

	?>
	<script>        
		$(document).ready(function(){
			$(".refresh").load("../etc/auto_update_saham_all.php");
			setInterval(function() {
				$(".refresh").load("../etc/auto_update_saham_all.php");
			},4000);
		});
	</script><?php } ?>

	<div class = "refresh"></div>
	<div class = "table1">
		<div class = "table3">
			<h3> IHSG (Index Harga Saham Gabungan) </h3>
			<h3> 
			<script>        
				$(document).ready(function(){
					$(".ihsg").load("../etc/show_ihsg.php");
					setInterval(function() {
						$(".ihsg").load("../etc/show_ihsg.php");
					},2500);
				});
			</script>
			<div class = "ihsg"></div>
			</h3>
		</div>
		
		<script>        
		$(document).ready(function(){
			$(".table").load("../etc/show_saham_home_user.php");
			setInterval(function() {
				$(".table").load("../etc/show_saham_home_user.php");
			},2500);
		});
		</script>
		<div class = "table"></div>
	</div>
</body>
</html>