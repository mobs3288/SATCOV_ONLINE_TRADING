<!DOCTYPE html>
<html>
<head>
	<title>SATCOV ONLINE TRADING</title>
	<link rel="icon" type="image/x-icon" href="../../assets/img/logo2.png">
	<link rel="stylesheet" type="text/css" href="../../assets/css/otp_style.css">
</head>
<body>

	<?php
	if (isset($_GET['pesan'])) {
		if ($_GET['pesan'] == "gagal") {
			echo "<div class='alert'>Username Is Not Registered</div>";
		} else if ($_GET['pesan'] == "tidakvalid") {
			echo "<div class='alert'>OTP Number Is Not Valid!</div>";
		}
	}
	?>
	<img src = "../../assets/img/logo.png"><br><br>
 
	<div class="kotak_login">
		<p class="tulisan_login">OTP</p>
 
		<form action="pages_otp_enter.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="username" required="required"><br><br>
 
			<button type="submit" class="tombol_login">SEND OTP</button><br><br>
		</form>

	</div>
	<div class = "akun">
		<center><p>Don't Have Account Yet? <a href = "pages_register.php">Sign Up</a></p></center>
	</div>
</body>
</html>
<!-- ashiap -->