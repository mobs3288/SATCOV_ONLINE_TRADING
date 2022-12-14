<!DOCTYPE html>
<html>
<head>
	<title>Saham</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../../assets/css/data_saham_style.css">
</head>
<body>
	<?php 
	session_start();
	date_default_timezone_set("Asia/Jakarta");
	if($_SESSION['username']==""){
		header("location:index.php?pesan=gagal");
	}

	// cek apakah yang mengakses halaman ini adalah admin
	if ( $_SESSION['level'] != 'admin'){ 
		echo "<div class='alert'>Anda tidak memiliki akses untuk halaman ini.</div>";
		exit; 
	} 
	if(isset($_GET['pesan'])){
		if ($_GET['pesan']=="register"){
         echo "<div class='success'>Data Saham berhasil register ke database</div>";
      	}
		if ($_GET['pesan']=="failed"){
			echo "<div class='alert'>Datanya kosong masbro</div>";
		}
	}
 
	?>

	<div class="topnav">
		<img src = "../../assets/img/logo.png" width="85" height="50">
		<div class = "logo_user">
			<a href = "#account"><img src = "../../assets/img/logo_user.png" width ="30" height="30"></a>
		</div>
	</div>
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
	<br>
	<h1>Manage Stock</h1><br><br><br>

	<div class="form-outline">
      <form action="pages_cek_search.php" method="post">
  		  <input type="search" id="search" class="search" placeholder="Search..." aria-label="Search" name = "search"/>
      </form>
	</div>
	
	<br/>
	<!-- Trigger the modal with a button -->
	<a href = "pages_add_saham.php">
		<button type="button" class="tombol_add" data-toggle="modal" data-target="#myModal">+ Add Stock Exchange</button><br><br>
	</a>

	<?php
		if (date("H") < 17 or (date("H") > 8 and date("H") < 17)){

	?>
	<script>        
		$(document).ready(function(){
			$(".refresh").load("../etc/auto_update_saham_all.php");
			setInterval(function() {
				$(".refresh").load("../etc/auto_update_saham_all.php");
			},3000);
		});
	</script>	<?php } ?>

	<div class = "refresh"></div>

	<script>        
		$(document).ready(function(){
			$(".table").load("../etc/auto_update_saham.php");
			setInterval(function() {
				$(".table").load("../etc/auto_update_saham.php");
			},4000);
		});
	</script>

	<div class = "table"></div>

</body>
</html>