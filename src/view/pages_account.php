<!DOCTYPE html>
<html>
<head>
	<title>SATCOV ONLINE TRADING</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/x-icon" href="../../assets/img/logo2.png">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../../assets/css/account_style.css">
</head>
<body>
	<?php 
	session_start();
	date_default_timezone_set("Asia/Jakarta");
    $_SESSION['password'] = NULL;
	$_SESSION['password_confirmation'] = NULL;
	if($_SESSION['level'] != 'admin' and $_SESSION['level'] != 'user'){
		header("location:../../index.php?pesan=gagal");
	}

	// cek apakah yang mengakses halaman ini adalah admin
	if ( $_SESSION['level'] != 'admin' and $_SESSION['level'] != 'user' ){ 
		echo "<div class='alert'>Anda tidak memiliki akses untuk halaman ini.</div>";
		exit; 
	} 

	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagalhapus"){
			echo "<div class='alert'>Failed To Delete Account</div>";
		}

		if($_GET['pesan']=="berhasilchange"){
			echo "<div class='success'>Successfully Changed Password</div>";
		}

		if($_GET['pesan']=="berhasil"){
			echo "<div class='success'>Successfully Changed Photo</div>";
		}

		if($_GET['pesan']=="gagalchange"){
			echo "<div class='alert'>Failed To Changed Password</div>";
		}

		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Failed To Changed Photo</div>";
		}
	}
	?>
	<div class="topnav">
		<img src = "../../assets/img/logo.png" width="85" height="50">
		<div class = "logo_user">
			<a href = "pages_account.php"><img src = "
			<?php include dirname(__FILE__).'/../etc/show_photo.php'; 
			echo $_SESSION['image'];
			?>" width ="30" height="30" class="rounded"></a>
		</div>
	</div><br>

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
				<a href="pages_porto.php">Portfolio</a>
				<a href="pages_history.php">History</a>
				<a href="pages_cash_balance.php">Cash Balance</a>
			<br>

				<form action="../etc/logout.php">
					<input type="submit" value="LOG OUT" class = "tombol_logout" />
				</form>
			</div> 
	<?php } ?>
	
	<br>
	<br>
	<br>
	<div class = "photo">
		<?php
			include dirname(__FILE__).'/../etc/show_photo.php';
			?>
				<div class="container">
					<input type="image" src="<?php echo $_SESSION['image']; ?>"  class="rounded" data-toggle="modal" data-target="#myModal3">
					<div class="middle">
						<div class="text"><input type="button" class="rounded" data-toggle="modal" data-target="#myModal3"></div>
					</div>
				</div>
			<?php
		?>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="myModal3" role="dialog">
	<div class="modal-dialog">
	
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				UPLOAD IMAGE
			</div>
			<form action="../etc/upload.php" method="post" enctype="multipart/form-data">
				<center>
					Select Image File to Upload:<br><br>
					<input type="file" name="file" id="file"><br>
					<input type="submit" name="submit" value="Upload" class = "tombol_upload_modal">
				</center>
			</form>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
			</div>
		</div>
	</div>
	</div>	

	<form method="post">
		<input type="submit" class="tombol_level" value= <?php 
			require_once dirname(__FILE__).'/../model/User.php'; 
			$user= new User(); 
			
			if ($_SESSION['level']!= "Investor"){
				require_once dirname(__FILE__).'/../model/Admin.php'; 
				$admin = new Admin();

				$admin->showRole();
			} else {
				$user->showRole();
			}
		?>>
		<br><br>
	</form>

	<div class = "table">
		<center>
		<div class = "nama_user">
			<?php
				require_once dirname(__FILE__).'/../model/User.php'; 
				$user= new User(); 
				
				if ($_SESSION['level']!= "Investor"){
					require_once dirname(__FILE__).'/../model/Admin.php'; 
					$admin = new Admin();

					$admin->showName();
				} else {
					$user->showName();
				}
			?>
		</div>
		</center>

		<?php
			require_once dirname(__FILE__).'/../model/User.php'; 
			$user= new User();

			echo "<br>"."<br>";
			echo ("Username: ". "<br>");
			$user->showUsername();

			echo ("Password: ". "<br>");
			echo ("****************". "<br>");
		?>
	<a href = "pages_ganti_pw.php">
		<button type="button" class="tombol_change">Change</button>
	</a>

	</div>

	<button type="button" class="tombol_delete" data-toggle="modal" data-target="#myModal2">Delete Account</button><br><br>

	<!-- Modal -->
	<div class="modal fade" id="myModal2" role="dialog">
	<div class="modal-dialog">
	
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				DELETE ACCOUNT
			</div>
			<form action="../handler/User_handler.php" method="post">
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form_login" id="password" value="<?php echo @$_SESSION['password']?>" placeholder="Password">
				
					<label>Password Confirmation</label>
					<input type="password" name="password_confirmation" class="form_login" id="password_confirmation" value="<?php echo @$_SESSION['password_confirmation']?>"  placeholder="Password">
				</div>
				<button type="submit" class="tombol_fsell_modal" value = "deleteAccount" name = "deleteAccount">Delete</button>
			</form>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
			</div>
		</div>
	</div>
	</div>
</body>
</html>