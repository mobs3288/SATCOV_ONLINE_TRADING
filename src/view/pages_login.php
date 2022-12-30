<!DOCTYPE html>
<html>
<head>
	<title>SATCOV ONLINE TRADING</title>
	<link rel="icon" type="image/x-icon" href="../../assets/img/logo2.png">
	<link rel="stylesheet" type="text/css" href="../../assets/css/home_style.css">
</head>
<body>

	<?php 
	date_default_timezone_set("Asia/Jakarta");
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username Or Password Not Match!</div>";
		} else if ($_GET['pesan']=="register"){
         	echo "<div class='success'>Successfully Registered To Database, Please Login!</div>";
      	} else if ($_GET['pesan'] == "berhasilganti"){
			echo "<div class='success'>Successfully Changed Password</div>";
		}
	}
	clearstatcache();
	?>
	<img src = "../../assets/img/logo.png"><br><br>
 
	<div class="kotak_login">
		<p class="tulisan_login">LOGIN</p>
 
		<form action="../handler/User_handler.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required"><br><br><br>
 
			<button type="submit" class="tombol_login" value = "validate" name = "validate">LOGIN</button><br><br>

			<center>
			<div class = "forgot">
				<a href = "pages_otp.php">Forgot Password? </a>
			</div>
			</center>
 
		</form>

	</div>
	<div class = "akun">
		<center><p>Don't Have Account Yet? <a href = "pages_register.php">Sign Up</a></p></center>
	</div>
</body>
</html>
<!-- ashiap -->