<!DOCTYPE html>
<html>
<head>
	<title>CERITANYA SATGAS COVID ONLINE TRADING</title>
	<link rel="stylesheet" type="text/css" href="regist_style.css">
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
	<br>
	<div class = "logo">
		<img src="logo.png"  style="width:15%">
	</div>
	<br>
	<div class="kotak_register">
		<p class="regist">REGISTER</p>
 
		<form action="process-register.php" method="post">
			<div class="form-group">
				<label for="username">Full Name</label>
				<input type="text" name="nama" class="form_register" id="name" value="<?php echo @$_SESSION['nama']?>" aria-describedby="name" autocomplete="off">
			</div>
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" name="username" class="form_register" id="username" value="<?php echo @$_SESSION['username']?>" aria-describedby="username" autocomplete="off">

			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" class="form_register" id="password" value="<?php echo @$_SESSION['password']?>" >
			</div>
				<div class="form-group">
				<label for="password">Confirm Password</label>
				<input type="password" name="password_confirmation" class="form_register" id="password_confirmation" value="<?php echo @$_SESSION['password_confirmation']?>">
			</div>
			<br>
			<center>
				<button type="submit" class="tombol_register">REGISTER</button>
			</center>
			<br><br>
		</form>
	</div>
	<div class = "akun">
		<p style="color:#FFFFFF;"> Sudah punya akun?
		<a href="index.php" style="color:#8E8BFF;">Login</a></p>
	</div>

</body>
</html>
<!-- ashiap -->