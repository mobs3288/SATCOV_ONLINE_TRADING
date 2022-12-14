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
	<link rel="stylesheet" type="text/css" href="../../assets/css/ganti_pw_style.css">
</head>
<body>        
<?php 
	session_start();
	date_default_timezone_set("Asia/Jakarta");
 
	if($_SESSION['username']==""){
		header("location:index.php?pesan=gagal");
	}

	// cek apakah yang mengakses halaman ini adalah admin
	if ( $_SESSION['level'] != 'admin' and $_SESSION['level'] != 'user' ){ 
		echo "<div class='alert'>Anda tidak memiliki akses untuk halaman ini.</div>";
		exit; 
	} 

	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Akun gagal terhapus</div>";
		}

		if($_GET['pesan']=="berhasilchange"){
			echo "<div class='success'>Password Berhasil diganti</div>";
		}
	}
	?>
	<div class="topnav">
		<img src = "../../assets/img/logo.png" width="85" height="50">
		<div class = "logo_user">
			<a href = "#account"><img src = "../../assets/img/photo1.jpeg" width ="30" height="30"></a>
		</div>
	</div>

	<?php
		if ($_SESSION['level'] == "admin"){ ?>
			<div class="sidenav">
				<a href="../etc/home_direct.php">Home</a>
				<a href="pages_account.php">Account</a>
				<a href="pages_data_saham.php">Manage Stock</a>

				<form action="../etc/logout.php">
					<input type="submit" value="LOG OUT" class = "tombol_logout" />
				</form>
			</div>
	<?php } ?>

	<?php
		if ($_SESSION['level'] == "user"){ ?>
			<div class="sidenav">
				<a href="../etc/home_direct.php">Home</a>
				<a href="pages_account.php">Account</a>
				<a href="pages_info_saham.php">Stock</a>
				<a href="pages_porto.php">Portofolio</a>
				<a href="pages_history.php">History</a>
				<a href="pages_cash_balance.php">Cash Balance</a>
			<br>

				<form action="../etc/logout.php">
					<input type="submit" value="LOG OUT" class = "tombol_logout" />
				</form>
			</div> 
	<?php } ?>
	
	<br><br>

    <h1> Change Password </h1>
	<div class = "table">
		<form action="
		<?php 
			echo "../handler/Investor_handler.php";
		?>" method="post">
			<div class="form-group">
				<label>Old Password</label>
				<input type="password" name="old_password" class="form_login" id="old_password" value="<?php echo @$_SESSION['old_password']?>"  placeholder="Password">

				<label>New Password</label>
				<input type="password" name="new_password" class="form_login" id="new_password" value="<?php echo @$_SESSION['new_password']?>" placeholder="Password">

				<label>New Password Confirmation</label>
				<input type="password" name="password_confirmation" class="form_login" id="password_confirmation" value="<?php echo @$_SESSION['password_confirmation']?>" placeholder="Password">
					
				<center>
					<button type="submit" class="tombol_fsell_modal" value = "changePassword" name = "changePassword">Change</button>
				</center>
			</div>
		</form>
	</div>
</body>
</html>