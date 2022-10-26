<!DOCTYPE html>
<html>
<head>
	<title>CERITANYA SATGAS COVID ONLINE TRADING</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
	<h1>INI CERITANYA SATGAS COVID ONLINE TRADING</h1>
 
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
 
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
 
		<form action="cek_login.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
		</form>
      <center>
      <form action="register.php">
         <input type="submit" value="REGISTER" class = "tombol_register" />
      </form>
	</center>
	</div>

	<center>
		<img src="ojek.png" width="90" height="90">
	</center>
</body>
</html>
<!-- ashiap -->