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
	<link rel="stylesheet" type="text/css" href="style_data_saham.css">
</head>
<body>
	<?php 
	session_start();
 
	if($_SESSION['username']==""){
		header("location:index.php?pesan=gagal");
	}

	// cek apakah yang mengakses halaman ini adalah admin
	if ( $_SESSION['level'] != 'admin'){ 
		echo "<div class='alert'>Anda tidak memiliki akses untuk halaman ini.</div>";
		exit; 
	} 
	if(isset($_GET['pesan'])){
		if ($_GET['pesan']=="register"){
         echo "<div class='success'>Data Saham berhasil register ke database</div>";
      	}
		if ($_GET['pesan']=="failed"){
			echo "<div class='alert'>Datanya kosong masbro</div>";
		}
	}
 
	?>

	<div class="topnav">
		<img src = "logo.png" width="85" height="50">
		<div class = "logo_user">
			<a href = "#account"><img src = "logo_user.png" width ="30" height="30"></a>
		</div>
	</div>

	<div class="sidenav">
		<a href="halaman_admin.php">Home</a>
		<a href="#services">Account</a>
		<a href="#clients">Manage Stock</a>
		<a href="#contact">Admin</a>
		<a href="#services">Setting</a>
		<a href="#services">User Management</a>

		<form action="logout.php">
         	<input type="submit" value="LOG OUT" class = "tombol_logout" />
      	</form>
	</div>
	<br>
	<h1>Manage Stock Exchanges</h1><br><br><br>

	<div class="form-outline">
  		<input type="search" id="form1" class="search" placeholder="Search..." aria-label="Search" />
	</div>
	<br/>
	<br/>
	<!-- Trigger the modal with a button -->
	<button type="button" class="tombol_add" data-toggle="modal" data-target="#myModal">+ Add Stock Exchange</button>

	<!-- Modal -->
	<div class="modal fade" id="myModal" role="dialog">
	<div class="modal-dialog">
	
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Add Stock</h4>
			</div>
			<form action="process_add_saham.php" method="post">
				<div class="form-group">
					<label for="kode_saham">Kode Saham</label>
					<input type="text" name="kode_saham" class="form-control" id="kode_saham" value="<?php echo @$_SESSION['kode_saham']?>" aria-describedby="kode_saham" autocomplete="off">

				</div>
				<div class="form-group">
					<label for="nama_saham">Nama Saham</label>
					<input type="text" name="nama_saham" class="form-control" id="nama_saham" value="<?php echo @$_SESSION['nama_saham']?>" aria-describedby="nama_saham" autocomplete="off">

				</div>
				<div class="form-group">
					<label for="harga">Harga</label>
					<input type="harga" name="harga" class="form-control" id="harga" value="<?php echo @$_SESSION['harga']?>">
				</div>

                <button type="submit" class="tombol_add_modal">Add</button>
			</form>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
	</div>
	<script>        
		$(document).ready(function(){
			$(".table").load("auto_update_saham.php");
			setInterval(function() {
				$(".table").load("auto_update_saham.php");
			},3000);
		});
	</script>

	<div class = "table"></div>

</body>
</html>