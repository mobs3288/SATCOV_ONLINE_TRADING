<!DOCTYPE html>
<html>
<head>
	<title>SATCOV ONLINE TRADING</title>
	<link rel="icon" type="image/x-icon" href="../../assets/img/logo2.png">
	<link rel="stylesheet" type="text/css" href="../../assets/css/regist_style.css">
</head>
<body>

	<?php 
	date_default_timezone_set("Asia/Jakarta");
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username Or Password Not Match!</div>";
		} else if ($_GET['pesan']=="register"){
         echo "<div class='success'>Successfully Registered To Database, Please Login!</div>";
      }
	}
	clearstatcache();
	?>
	<img src = "../../assets/img/logo.png"><br>
 
	<div class="kotak_login">
		<p class="tulisan_login">REGISTER</p>
 
		<form action="../handler/Guest_handler.php" method="post">
			<label>Full Name</label>
			<input type="text" name="nama_lengkap" class="form_login" id="nama_lengkap" value="<?php echo @$_SESSION['nama_lengkap']?>" aria-describedby="nama_lengkap" placeholder="Nama lengkap" autocomplete="off">
 
			<label>Username</label>
			<input type="text" name="username" class="form_login" id="username" value="<?php echo @$_SESSION['username']?>" aria-describedby="username" placeholder="username" autocomplete="off">
			
			<label>Email</label>
			<input type="email" name="email" class="form_login" id="email" value="<?php echo @$_SESSION['email']?>" aria-describedby="email" placeholder="email" autocomplete="off">
						
			<label>Password</label>
			<input type="password" name="password" class="form_login" id="password" value="<?php echo @$_SESSION['password']?>" placeholder="Password">
			
			<label>Password Confirmation</label>
			<input type="password" name="password_confirmation" class="form_login" id="password_confirmation" value="<?php echo @$_SESSION['password_confirmation']?>"  placeholder="Password">
 
			<br><br>
			<button type="submit" class="tombol_login" value = "Register" name = "Register">REGISTER</button>
 
		</form>

	</div>
	<div class = "akun">
		<center><p>Already Has Account? <a href = "pages_login.php">Login</a></p></center>
	</div>
</body>
</html>
<!-- ashiap -->