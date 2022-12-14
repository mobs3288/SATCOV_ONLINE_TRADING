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
	<link rel="stylesheet" type="text/css" href="../../assets/css/admin_home_style.css">
</head>
<body>
	<?php 
	include dirname(__FILE__).'/../etc/koneksi.php';
	session_start();
	date_default_timezone_set("Asia/Jakarta");
 
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
		<img src = "../../assets/img/logo.png" width="85" height="50">
		<div class = "logo_user">
			<a href = "#account"><img src = "../../assets/img/photo1.jpeg" width ="30" height="30" class="rounded"></a>
		</div>
	</div><br>

	<script>        
		$(document).ready(function(){
			$(".time").load("../etc/auto_time.php");
			setInterval(function() {
				$(".time").load("../etc/auto_time.php");
			},1000);
		});
		$(document).ready(function(){
			$(".time2").load("../etc/auto_time.php");
			setInterval(function() {
				$(".time2").load("../etc/auto_time.php");
			},1000);
		});
	</script>

	<?php
		if (date("H") < 17 or (date("H") > 8 and date("H") < 17)){
	?><div class = "time"></div>
	<?php } else { ?>
		<div class = "time2"></div>
	<?php } ?>

	<h1><?php
		include dirname(__FILE__).'/../etc/koneksi.php';
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

	<div class = "table2">
		<div class = "logo_u">
			<img src = "../../assets/img/user.png" alt = "Avatar" width = 100%>
		</div>
		<div class = "tulisan_count_user">
			<p> Total User </p>
			<h4>
				<?php 
					$sql = "SELECT * FROM user WHERE level = 'investor'";
					$result = $conn->query($sql);
					$rowcount = mysqli_num_rows( $result );
					echo $rowcount;
				?>
			</h4>
		</div>

		<div class = "logo_a">
			<img src = "../../assets/img/admin.png" alt = "Avatar" width = 100%>
		</div>
		<div class = "tulisan_count_admin">
			<p> Total Admin </p>
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
			<img src = "../../assets/img/saham.png" alt = "Avatar" width = 100%>
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

	<?php
		if (date("H") < 17 or (date("H") > 8 and date("H") < 17)){

	?><script>        
		$(document).ready(function(){
			$(".refresh").load("../etc/auto_update_saham_all.php");
			setInterval(function() {
				$(".refresh").load("../etc/auto_update_saham_all.php");
			},4000);
		});
	</script><?php
		}
	?>

	<div class = "refresh"></div>
	<div class = "table1">
		<div class = "table3">
			<h3> IHSG (Index Harga Saham Gabungan) </h3>
			<h3> 
			<script>        
				$(document).ready(function(){
					$(".ihsg").load("../etc/show_ihsg.php");
					setInterval(function() {
						$(".ihsg").load("../etc/show_ihsg.php");
					},2500);
				});
			</script>
			<div class = "ihsg"></div>
			</h3>
		</div>
		
		<script>        
		$(document).ready(function(){
			$(".table").load("../etc/show_saham_home_admin.php");
			setInterval(function() {
				$(".table").load("../etc/show_saham_home_admin.php");
			},2500);
		});
		</script>
		<div class = "table"></div>

		<a href = "pages_add_saham.php">
			<button type="button" class="tombol_add" data-toggle="modal" data-target="#myModal">+ Add Stock Exchange</button><br><br>
		</a>
	</div>
	<br/>
	<br/>
	<div class = "version">
		<p> v1.1.2-beta </p>
	</div>
</body>
</html>