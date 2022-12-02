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
	<link rel="stylesheet" type="text/css" href="ganti_pw.css">
</head>
<body>        
<?php 
	session_start();
 
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
		<img src = "logo.png" width="85" height="50">
		<div class = "logo_user">
			<a href = "#account"><img src = "photo1.jpeg" width ="30" height="30"></a>
		</div>
	</div>

	<?php
		if ($_SESSION['level'] == "admin"){ ?>
			<div class="sidenav">
				<a href="home_direct.php">Home</a>
				<a href="account.php">Account</a>
				<a href="data_saham.php">Manage Stock</a>

				<form action="logout.php">
					<input type="submit" value="LOG OUT" class = "tombol_logout" />
				</form>
			</div>
	<?php } ?>

	<?php
		if ($_SESSION['level'] == "user"){ ?>
			<div class="sidenav">
				<a href="home_direct.php">Home</a>
				<a href="account.php">Account</a>
				<a href="info_saham.php">Stock</a>
				<a href="porto.php">Portofolio</a>
				<a href="cash_balance.php">Cash Balance</a>
			<br>

				<form action="logout.php">
					<input type="submit" value="LOG OUT" class = "tombol_logout" />
				</form>
			</div> 
	<?php } ?>
	
	<br><br>

    <h1> Change Password </h1>

	<div class = "table">
        <form action="change_pw.php" method="post">
            <div class="form-group">
                <label>Old Password</label>
                <input type="password" name="old_password" class="form_login" id="old_password" value="<?php echo @$_SESSION['old_password']?>"  placeholder="Password">

                <label>New Password</label>
                <input type="password" name="new_password" class="form_login" id="new_password" value="<?php echo @$_SESSION['new_password']?>" placeholder="Password">

                <label>New Password Confirmation</label>
                <input type="password" name="password_confirmation" class="form_login" id="password_confirmation" value="<?php echo @$_SESSION['password_confirmation']?>" placeholder="Password">
                
                <center>
                    <button type="submit" class="tombol_fsell_modal">Change</button>
                </center>
            </div>
        </form>
    </div>
	<!-- Modal -->
	<!--
	<div class="modal fade" id="myModal1" role="dialog">
	<div class="modal-dialog">


		<div class="modal-content">
			<div class="modal-header">
				Change Password
			</div>
			<form action="change_pw.php" method="post">
				<div class="form-group">
					<label>New Password</label>
					<input type="password" name="new_password" class="form_login" id="new_password" value="<?php echo @$_SESSION['new_password']?>" placeholder="Password">

					<label>Password Confirmation</label>
					<input type="password" name="password_confirmation" class="form_login" id="password_confirmation" value="<?php echo @$_SESSION['password_confirmation']?>" placeholder="Password">
				
					<label>Enter Old Password</label>
					<input type="password" name="old_password" class="form_login" id="old_password" value="<?php echo @$_SESSION['old_password']?>"  placeholder="Password">
				</div>
				<button type="submit" class="tombol_fsell_modal">Change</button>
			</form>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
	</div>-->
</body>
</html>