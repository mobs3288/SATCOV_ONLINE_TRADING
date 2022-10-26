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
	<a href="logout.php">LOGOUT</a>
 
	<br/>
	<br/>
</body>
</html>