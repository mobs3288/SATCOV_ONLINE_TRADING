<!DOCTYPE html>
<html>
<head>
	<title>SATCOV ONLINE TRADING</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/x-icon" href="../../assets/img/logo2.png">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../../assets/css/porto_style.css">
</head>
<body>
	<?php 
	session_start();
	date_default_timezone_set("Asia/Jakarta");
	if($_SESSION['username']==""){
		header("location:index.php?pesan=gagal");
	}

	// cek apakah yang mengakses halaman ini adalah admin
	if ($_SESSION['level'] != 'user' ){ 
		echo "<div class='alert'>You Don't Have Access To This Pages</div>";
		exit; 
	} 
 
	?>

	<div class="topnav">
		<img src = "../../assets/img/logo.png" width="85" height="50">
		<div class = "logo_user">
			<a href = "pages_account.php"><img src = "
			<?php include dirname(__FILE__).'/../etc/show_photo.php'; 
			echo $_SESSION['image'];
			?>" width ="30" height="30" class="rounded"></a>
		</div>
	</div><br>
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
				<a href="pages_porto.php">Portfolio</a>
				<a href="pages_history.php">History</a>
				<a href="pages_cash_balance.php">Cash Balance</a>
			<br>

				<form action="../etc/logout.php">
					<input type="submit" value="LOG OUT" class = "tombol_logout" />
				</form>
			</div> 
	<?php } ?>
	<br>
	<h1>Portofolio</h1>

	<?php
		if (date("G") < 17 and (date("G") > 8 and date("G") < 17)){

	?>
	<script>        
		$(document).ready(function(){
			$(".refresh").load("../etc/auto_update_saham_all.php");
			setInterval(function() {
				$(".refresh").load("../etc/auto_update_saham_all.php");
			},2500);
		});
	</script> <?php } ?>

	<div class = "refresh"></div>
	<script>        
		$(document).ready(function(){
			$(".table").load("../etc/porto_show.php");
			setInterval(function() {
				$(".table").load("../etc/porto_show.php");
			},1500);
		});
	</script>

	<div class = "table"></div>



</body>
</html>