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
	<link rel="stylesheet" type="text/css" href="cash_style.css">
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
		if($_GET['pesan']=="berhasiltop"){
			echo "<div class='success'>Berhasil Top Up</div>";
      	} else if ($_GET['pesan']=="gagaltop"){
			echo "<div class='alert'>Gagal Top Up</div>";
		} else if ($_GET['pesan']=="berhasiltarik"){
			echo "<div class='success'>Berhasil Narik Mang</div>";
		} else if ($_GET['pesan']=="gagaltarik"){
			echo "<div class='alert'>Gagal Narik Mang</div>";
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
	<br><br><br><br>
	<h1> Cash Balance </h1><br>

	<div class = "table">
		<center>
		<div class = "saldo">
			<?php
				include "koneksi.php";
				$conn = new mysqli($host,$user,$password,$database);

				$user = $_SESSION['username'];

				$sql = "SELECT * FROM user WHERE username = '$user' ";
				$result = mysqli_query($conn, $sql);
				// hitung hasil dan cek ada atau tidaknya data
				$is_exist = mysqli_num_rows($result);
				if($is_exist > 0){
				// keluarkan hasil
					$data = mysqli_fetch_assoc($result);
					echo ("<b><br>".$data['nama_lengkap']."</b>"."<br>");
					$rupiah = "Rp " . number_format($data['saldo'],2,',','.');
					$_SESSION['saldo'] = $data['saldo'];
					echo ("<b><br>".$rupiah."</b>"."<br><br>");
				}
			?>
		</div>
		<br><br>
		</center>
	</div>

	<button type="button" class="tombol_top-up" data-toggle="modal" data-target="#myModal">Top Up</button><br><br>

	<!-- Modal -->
	<div class="modal fade" id="myModal" role="dialog">
	<div class="modal-dialog">
	
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<div class = "saldo">
					<?php $rupiah = "Rp " . number_format($_SESSION['saldo'],2,',','.'); echo $rupiah;?>
				</div>
			</div>
			<form action="konfirm_topup.php" method="post"><br>
				<div class="form-group">
					<label for="lot">Masukkan nominal Top Up</label>
					<input type="number" min="10000" name="saldo" class="form-control" id="saldo" value="<?php echo @$_POST['saldo']?>" aria-describedby="saldo" autocomplete="off">
				</div>
                <button type="submit" class="tombol_fbuy_modal">Top Up</button>
			</form>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
	</div>
	<button type="button" class="tombol_withdraw" data-toggle="modal" data-target="#myModal1">Withdraw</button><br><br>

	<!-- Modal -->
	<div class="modal fade" id="myModal1" role="dialog">
	<div class="modal-dialog">
	
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<div class = "saldo">
					<?php $rupiah = "Rp " . number_format($_SESSION['saldo'],2,',','.'); echo $rupiah;?>
				</div>
			</div>
			<form action="konfirm_tarik.php" method="post"><br>
				<div class="form-group input">
					<label for="lot">Masukkan nominal</label>
					<input type="number" min="10000" max ='' name="saldo" class="form-control" id="saldo" value="<?php echo @$_POST['saldo']?>" aria-describedby="lot" autocomplete="off">
				</div>
                <button type="submit" class="tombol_fsell_modal">Withdraw</button>
			</form>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal" onclick = genQR()>Close</button>
			</div>
		</div>
	</div>
	</div>


</body>
</html>