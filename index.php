<!DOCTYPE html>
<html>
<head>
	<title>CERITANYA SATGAS COVID ONLINE TRADING</title>
	<link rel="stylesheet" type="text/css" href="home_style.css">
</head>
<body>

	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		} else if ($_GET['pesan']=="register"){
         echo "<div class='success'>Berhasil register ke dalam sistem. Silakan login dengan username dan password yang sudah dibuat.</div>";
      }
	}
	clearstatcache();
	?>
	<img src = "logo.png"><br><br>
 
	<div class="kotak_login">
		<p class="tulisan_login">LOGIN</p>
 
		<form action="cek_login.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required"><br><br><br>
 
			<input type="submit" class="tombol_login" value="LOGIN"><br><br>

			<center>
			<div class = "forgot">
				<a href = "#forgot">Forgot Password? </a>
			</div>
			</center>
 
		</form>

	</div>
	<p align = "center">Belum punya akun? <a href = "register.php">Sign Up</a></p>
</body>
</html>
<!-- ashiap -->