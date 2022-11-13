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
	<link rel="stylesheet" type="text/css" href="account_style.css">
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
				<a href="#contact">Admin</a>
				<a href="#services">Setting</a>
				<a href="#services">User Management</a>

				<form action="logout.php">
					<input type="submit" value="LOG OUT" class = "tombol_logout" />
				</form>
			</div>
	<?php } ?>

	<?php
		if ($_SESSION['level'] == "user"){ ?>
			<div class="sidenav">
				<a href="home_direct.php">Home</a>
				<a href="#services">Account</a>
				<a href="#clients">Info Stock</a>
				<a href="#contact">Stock</a>
				<a href="#services">Portofolio</a>
				<a href="#contact">Cash Balance</a>
			<br>

				<form action="logout.php">
					<input type="submit" value="LOG OUT" class = "tombol_logout" />
				</form>
			</div> 
	<?php } ?>
	
	<br>
	<br>
	<br>
	<div class = "photo">
		<img src="photo1.jpeg" alt="Avatar" width = 25%>
	</div>

	<form action="#" method="post">
		<input type="submit" class="tombol_level" value= <?php echo ucfirst($_SESSION['level']);?>><br><br>
	</form>

	<div class = "table">
		<center>
		<div class = "nama_user">
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
					echo ("<b><br><br>".$data['nama_lengkap']."</b>"."<br><br>");
				}
			?>
		</div>
		</center>

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
			echo ("Username: ". "<br>");
			echo ("<b>".$data['username']."</b>"."<br><br>");

			echo ("Password: ". "<br>");
			echo ("****************". "<br>");
			}
		?>
		<form action="#" method="post">
			<input type="submit" class="tombol_change" value="CHANGE">
		</form>
	</div>
	<form action="#" method="post">
		<input type="submit" class="tombol_delete" value="Delete Account">
	</form>


</body>
</html>