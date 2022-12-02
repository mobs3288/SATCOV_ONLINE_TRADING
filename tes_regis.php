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
	<img src = "logo.png"><br>
 
	<div class="kotak_login">
		<p class="tulisan_login">REGISTER</p>
 
		<form action="process-register.php" method="post">
			<label>Nama Lengkap</label>
			<input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" value="<?php echo @$_SESSION['nama_lengkap']?>" aria-describedby="nama_lengkap" placeholder="Nama lengkap" autocomplete="off">
 
			<label>Username</label>
			<input type="text" name="username" class="form-control" id="username" value="<?php echo @$_SESSION['username']?>" aria-describedby="username" placeholder="username" autocomplete="off">
			
			<label>Password</label>
			<input type="password" name="password" class="form-control" id="password" value="<?php echo @$_SESSION['password']?>" placeholder="Password">
			
			<label>Password Confirmation</label>
			<input type="password" name="password_confirmation" class="form-control" id="password_confirmation" value="<?php echo @$_SESSION['password_confirmation']?>"  placeholder="Password">
 
			<br><br>
			<input type="submit" class="tombol_login" value="REGISTER">
 
		</form>

	</div>
	<div class = "akun">
		<center><p>Sudah punya akun? <a href = "index.php">Login</a></p></center>
	</div>
</body>
</html>
<!-- ashiap -->