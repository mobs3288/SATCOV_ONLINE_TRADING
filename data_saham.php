<!DOCTYPE html>
<html>
<head>
	<title>Saham</title>
	<link rel="stylesheet" type="text/css" href="style_data_saham.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<?php 
	session_start();
 
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
			<img src = "logo_user.png" width ="45" height="45">
		</div>
	</div>

	<div class="sidenav">
		<a href="#about">Home</a>
		<a href="#services">Account</a>
		<a href="#clients">Manage Stock</a>
		<a href="#contact">Admin</a>
		<a href="#services">Setting</a>
		<a href="#services">User Management</a>

		<br><br><br><br><br><br><br><br><br><br><br><br><br>
		<form action="logout.php">
         	<input type="submit" value="LOG OUT" class = "tombol_logout" />
      	</form>
	</div>
	<br>
	<h1> Stock Exchanges </h1>
	<form action="#">
        <input type="submit" value="+ Add Stock Exchange" class = "tombol_add" />
    </form>

    <input type="submit" value="Search.." class = "search">
	

	<div class = "table">
		
	</div>
	<br/>
	<br/>
</body>
</html>