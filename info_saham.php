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
	<link rel="stylesheet" type="text/css" href="info_saham.css">
</head>
<body>
	<?php 
	session_start();
 
	if($_SESSION['username']==""){
		header("location:index.php?pesan=gagal");
	}

	// cek apakah yang mengakses halaman ini adalah admin
	if ( $_SESSION['level'] != 'admin' and $_SESSION['level'] != 'user' ){ 
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

	<div class="sidenav">
		<a href="halaman_admin.php">Home</a>
		<a href="#services">Account</a>
		<a href="#clients">Info Stock</a>
		<a href="#contact">Stock</a>
    <b href="#contact">Buy Stock</b>
    <b href="#contact">Sell Stock</b>
		<a href="#services">Portofolio</a>
		<a href="#contact">Cash Balance</a>
    <b href="#contact">Top Up</b>
    <b href="#contact">Withdrawal</b><br>

		<form action="logout.php">
         	<input type="submit" value="LOG OUT" class = "tombol_logout" />
    </form>
	</div>
	<br>
	<h1> Stock Exchanges </h1><br><br><br>

	<div class="form-outline">
      <form action="cek_search.php" method="post">
  		  <input type="search" id="search" class="search" placeholder="Search..." aria-label="Search" name = "search"/>
      </form>
	</div>
  
	<br/>
	<br/>
	<script>        
		$(document).ready(function(){
			$(".table").load("auto_update_saham.php");
			setInterval(function() {
				$(".table").load("auto_update_saham.php");
			},3000);
		});
	</script>

	<div class = "table"></div>
</body>
</html>