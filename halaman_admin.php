<!DOCTYPE html>
<html>
<head>
	<title>Halaman admin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style_admin_home.css">
</head>
<body>
	<?php 
	include "koneksi.php";
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['username']==""){
		header("location:index.php?pesan=gagal");
	}

	// cek apakah yang mengakses halaman ini adalah admin
	if ( $_SESSION['level'] != 'admin'){ 
		echo "<div class='alert'>Anda tidak memiliki akses untuk halaman ini.</div>";
		exit; 
	} 
 
	?>
	<div class="topnav">
		<img src = "logo.png" width="85" height="50">
		<div class = "logo_user">
			<a href = "#account"><img src = "photo1.jpeg" width ="30" height="30" class="rounded"></a>
		</div>
	</div><br>

	<script>        
		$(document).ready(function(){
			$(".time").load("auto_time.php");
			setInterval(function() {
				$(".time").load("auto_time.php");
			},1000);
		});
	</script>

	<div class = "time"></div>

	<h1><?php
		include "koneksi.php";
		$conn = new mysqli($host,$user,$password,$database);

		date_default_timezone_set("Asia/Jakarta");
		//echo date('H'). "<br>";


		if(date("H") >= 18 or date('H')>= 0 and date('H') < 5){
			$salam = "Good Night, ";
		} else if (date("H") >= 5 and date("H") < 12){
			$salam = "Good Morning, ";
		} else if (date("H") >= 12 and date("H") < 18) {
			$salam = "Good Afternoon, ";
		}
		
		$user = $_SESSION['username'];

		$sql = "SELECT * FROM user WHERE username = '$user' ";
		$result = mysqli_query($conn, $sql);
		// hitung hasil dan cek ada atau tidaknya data
		$is_exist = mysqli_num_rows($result);
		if($is_exist > 0){
		// keluarkan hasil
			$data = mysqli_fetch_assoc($result);
			echo ($salam ."<b>".$data['nama_lengkap']."!</b>"."<br><br>");
		}
	?></h1>
	<h2>You login as a <?php echo $_SESSION['level']; ?></h2>

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

	<div class = "table2">
		<div class = "logo_u">
			<img src = "user.png" alt = "Avatar" width = 100%>
		</div>
		<div class = "tulisan_count_user">
			<p> Total User </p>
			<h4>
				<?php 
					$sql = "SELECT * FROM user WHERE level = 'user'";
					$result = $conn->query($sql);
					$rowcount = mysqli_num_rows( $result );
					echo $rowcount;
				?>
			</h4>
		</div>

		<div class = "logo_a">
			<img src = "admin.png" alt = "Avatar" width = 100%>
		</div>
		<div class = "tulisan_count_admin">
			<p> Total User </p>
			<h4> 
				<?php 
					$sql = "SELECT * FROM user WHERE level = 'admin'";
					$result = $conn->query($sql);
					$rowcount = mysqli_num_rows( $result );
					echo $rowcount;
				?>
			</h4>
		</div>

		<div class = "logo_s">
			<img src = "saham.png" alt = "Avatar" width = 100%>
		</div>
		<div class = "tulisan_count_saham">
			<p> Total Saham </p>
			<h4> 
				<?php 
					$sql = "SELECT * FROM saham";
					$result = $conn->query($sql);
					$rowcount = mysqli_num_rows( $result );
					echo $rowcount;
				?>
			</h4>
		</div>
	</div>

	<script>        
		$(document).ready(function(){
			$(".refresh").load("auto_update_saham_all.php");
			setInterval(function() {
				$(".refresh").load("auto_update_saham_all.php");
			},4000);
		});
	</script>

	<div class = "refresh"></div>
	<div class = "table1">
		<div class = "table3">
			<h3> IHSG (Index Harga Saham Gabungan) </h3>
			<h3> 
			<script>        
				$(document).ready(function(){
					$(".ihsg").load("show_ihsg.php");
					setInterval(function() {
						$(".ihsg").load("show_ihsg.php");
					},2500);
				});
			</script>
			<div class = "ihsg"></div>
			</h3>
		</div>
		
		<script>        
		$(document).ready(function(){
			$(".table").load("show_saham_home_admin.php");
			setInterval(function() {
				$(".table").load("show_saham_home_admin.php");
			},2500);
		});
		</script>
		<div class = "table"></div>

		<button type="button" class="tombol_add" data-toggle="modal" data-target="#myModal12">+ Add Stock Exchange</button><br><br>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="myModal12" role="dialog">
	<div class="modal-dialog">

			<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Add Stock</h4>
			</div>
			<form action="Admin_handler.php" method="post">
				<div class="form-group">
					<label for="kode_saham">Kode Saham</label>
					<input type="text" name="kode_saham" class="form-control" id="kode_saham" value="<?php echo @$_POST['kode_saham']?>" aria-describedby="kode_saham" autocomplete="off">

				</div>
				<div class="form-group">
					<label for="nama_saham">Nama Saham</label>
					<input type="text" name="nama_saham" class="form-control" id="nama_saham" value="<?php echo @$_POST['nama_saham']?>" aria-describedby="nama_saham" autocomplete="off">

				</div>
				<div class="form-group">
					<label for="harga">Harga</label>
					<input type="text" name="harga_saham" class="form-control" id="harga_saham" value="<?php echo @$_POST['harga_saham']?>">
				</div>

				<div class="form-group">
					<label for="harga">Country</label>
					<input type="text" name="country" class="form-control" id="country" value="<?php echo @$_POST['country']?>">
				</div>

				<button type="submit" class="tombol_add_modal" value = "addSaham" name = "addSaham">Add</button>
			</form>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
	</div>
	<br/>
	<br/>
</body>
</html>