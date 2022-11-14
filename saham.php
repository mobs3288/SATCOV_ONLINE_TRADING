<?php
    include "koneksi.php";
    session_start();

    $conn = new mysqli($host,$user,$password,$database);
    $ids = $_GET['id'] ?? 0;

    $sql = "SELECT * FROM saham WHERE kode_saham = '".$ids."'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $_SESSION['kode_saham'] = $row['kode_saham']. "<br>";
            $_SESSION['kode_saham'] = $row['kode_saham'];
            $_SESSION['nama_saham'] = $row['nama_saham'];
            $_SESSION['harga'] = $row['harga'];
            $_SESSION['country'] = $row['country'];
            }
	}
    $conn->close();
?>

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
	<link rel="stylesheet" type="text/css" href="saham_style.css">
</head>
<body>
	<?php 
 
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
    
    <div class="nama">
        <center>
        <h1><?php echo($_SESSION['kode_saham'])?></h1>
        <h2><?php echo($_SESSION['nama_saham'])?></h2><br>
        </center>
    </div>
    
	<div class = "table">
		<center>
		<div class = "harga">
            <?php 
            $harga = "Rp " . number_format($_SESSION['harga'],2,',','.');
            echo($harga)
            ?>
		</div>
		</center>
	</div>
	<form action="#" method="post">
		<input type="submit" class="tombol_buy" value="Fast Buy">
	</form><br>
	<form action="#" method="post">
		<input type="submit" class="tombol_buy" value="Simple Buy">
	</form>

	<form action="#" method="post">
		<input type="submit" class="tombol_sell" value="Fast Sell">
	</form><br>
	<form action="#" method="post">
		<input type="submit" class="tombol_sell" value="Simple Sell">
	</form>
</body>
</html>
