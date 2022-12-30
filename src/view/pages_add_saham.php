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
	<link rel="stylesheet" type="text/css" href="../../assets/css/add_saham_style.css">
</head>
<body>        
<?php 
	session_start();
	date_default_timezone_set("Asia/Jakarta");
	if($_SESSION['username']==""){
		header("location:index.php?pesan=gagal");
	}

	// cek apakah yang mengakses halaman ini adalah admin
	if ( $_SESSION['level'] != 'admin'){ 
		echo "<div class='alert'>You Don't Have Access To This Pages</div>";
		exit; 
	} 
	if(isset($_GET['pesan'])){
		if ($_GET['pesan']=="register"){
         echo "<div class='success'>Successfully Added Stock To Database</div>";
      	}
		if ($_GET['pesan']=="failed"){
			echo "<div class='alert'>Failed To Added Stock To Database</div>";
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
	
	<br><br>

    <h1>Add Stock</h1>

	<div class = "table">
        <form action="../handler/Admin_handler.php" method="post">
            <div class="form-group">
				<table>
					<tr>
						<td><label>Company Name</label></td>
						<td><input type="text" name="nama_saham" class="form_login" id="nama_saham" value="<?php echo @$_POST['nama_saham']?>" aria-describedby="nama_saham" autocomplete="off" required></td>
					</tr>
					<tr>
						<td><label>Code</label></td>
						<td><input type="text" name="kode_saham" class="form_login" id="kode_saham" value="<?php echo @$_POST['kode_saham']?>" aria-describedby="kode_saham" autocomplete="off" maxlength="4" minlength="4" required></td>
					</tr>
					<tr>
						<td><label>Open Price</label></td>
						<td><input type="number" min="50" max="40000" name="harga_saham" class="form_login" id="harga_saham" value="<?php echo @$_POST['harga_saham']?>" min=0></td>
					</tr>
				</table>
                <button type="submit" class="tombol_add_modal" value = "addSaham" name = "addSaham">+ Add Stock</button>
            </div>
        </form>
    </div>
</body>
</html>