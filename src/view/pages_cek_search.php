<!DOCTYPE html>
<html>
<head>
	<title>Saham</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../../assets/css/cek_search_style.css">
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
		<img src = "../../assets/img/logo.png" width="85" height="50">
		<div class = "logo_user">
			<a href = "#account"><img src = "../../assets/img/logo_user.png" width ="30" height="30"></a>
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
	<br>
	<h1> Hasil Pencarian </h1>

	<div class="form-outline">
      <form action="pages_cek_search.php" method="post">
  		  <input type="search" id="search" class="search" placeholder="Search..." aria-label="Search" name = "search"/>
      </form>
	</div>

	<br/>
	<br/>
	
	<div class = "table">
		<div class = "grid-container">
			<?php
				include dirname(__FILE__).'/../etc/koneksi.php';

				$conn = new mysqli($host,$user,$password,$database);

				$sql = "SELECT * FROM saham ORDER BY id";
				$result = $conn->query($sql);

				if (date("H") >= 17 and date("H") < 8){
					if ($result->num_rows > 0) {
							// output data of each row
						while($row = $result->fetch_assoc()) {
							$data_saham = $row["kode_saham"];
							$harga_update = rand(50, 40000);
							$sql_update = "UPDATE saham SET harga_saham = '".$harga_update."' WHERE kode_saham = '".$data_saham."'";
							mysqli_query($conn, $sql_update);
							}
					}
				}

				$search = $_POST['search'];

				$sql = "SELECT * FROM saham WHERE kode_saham LIKE '%".$search."%' OR nama_saham LIKE '%".$search."%'" ;
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
						// output data of each row
					while($row = $result->fetch_assoc()) {
						$_SESSION['kode_saham'] = $row['kode_saham'];
						?>
						
						<div class = "grid-item">
							<div class = "kode_saham">
								<?php echo("<a href = pages_saham.php?id={$_SESSION['kode_saham']}> ".$row['kode_saham']." </a>");?>
								<div class = "nama_saham"> <?php
									echo($row['nama_saham'] . "<br>");?> 
								</div>
							</div>
							<div class = "harga"> <?php
								echo($row['harga_saham'] . "<br>");?> 
							</div>
						</div>
						<?php
							if ($result->num_rows == 0){
								echo("Gaada datanya mas bro");
							}
						}
				}

				$conn->close();
			?>
		</div>
	</div>
</body>
</html>