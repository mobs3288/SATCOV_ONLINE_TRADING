<?php
    include dirname(__FILE__).'/../etc/koneksi.php';
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
            $_SESSION['harga_saham'] = $row['harga_saham'];
            }
	}
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
	<link rel="stylesheet" type="text/css" href="../../assets/css/saham_style.css">
</head>
<body>
	<?php 
 	date_default_timezone_set("Asia/Jakarta");
	if($_SESSION['level']==NULL){
		header("location:index.php?pesan=gagal");
	}

	// cek apakah yang mengakses halaman ini adalah admin
	if ( $_SESSION['level'] != 'admin' and $_SESSION['level'] != 'user' ){ 
		echo "<div class='alert'>Anda tidak memiliki akses untuk halaman ini.</div>";
		exit; 
	} else {
		
	}
 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="jual"){
			echo "<div class='success'>Berhasil Menjual</div>";
		} else if ($_GET['pesan']=="beli"){
         	echo "<div class='success'>Berhasil membeli</div>";
      	} else if ($_GET['pesan']=="gagalbeli"){
			echo "<div class='alert'>Gagal Membeli</div>";
	 	} else if ($_GET['pesan']=="gagaljual"){
			echo "<div class='alert'>Gagal Menjual</div>";
		}
	}
	?>
	<div class="topnav">
		<img src = "../../assets/img/logo.png" width="85" height="50">
		<div class = "logo_user">
			<a href = "#account"><img src = "../../assets/img/photo1.jpeg" width ="30" height="30"></a>
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
	<br><br><br><br>
    
	<script>        
		$(document).ready(function(){
			$(".refresh").load("../etc/update_saham_now.php");
			setInterval(function() {
				$(".refresh").load("../etc/update_saham_now.php");
			},3500);
		});
	</script>
	
	<div class = "refresh"></div>

	<button type="button" class="tombol_buy" data-toggle="modal" data-target="#myModal">Buy</button><br><br>

	<!-- Modal -->
	<div class="modal fade" id="myModal" role="dialog">
	<div class="modal-dialog">
	
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<script>        
					$(document).ready(function(){
						$(".r").load("../etc/saham_modal.php");
						setInterval(function() {
							$(".r").load("../etc/saham_modal.php");
						},500);
					});
				</script>

				<div class = "r"></div>
			</div>
			<form action="pages_face_recog_buy.php" method="post">
				<div class="form-group">
					<label for="lot">Lot</label>
					<input type="number" min="1" name="lot" class="form-control" id="lot" value="<?php echo @$_POST['lot']?>" aria-describedby="lot" autocomplete="off">
				</div>
                <button type="submit" class="tombol_fbuy_modal">Buy</button>
			</form>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
	</div>

	<?php 
		include dirname(__FILE__).'/../etc/koneksi.php';

		$conn = new mysqli($host,$user,$password,$database);

		$sql = "SELECT * FROM history WHERE username = '".$_SESSION['username']."' AND status = 'Buy' AND lot_sell_check != 0 AND kode_saham = '".$_SESSION['kode_saham']."'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0){
	?>
	<button type="button" class="tombol_sell" data-toggle="modal" data-target="#myModal1">Sell</button><br><br>

	<!-- Modal -->
	<div class="modal fade" id="myModal1" role="dialog">
	<div class="modal-dialog">
	
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<script>        
					$(document).ready(function(){
						$(".r").load("../etc/saham_modal.php");
						setInterval(function() {
							$(".r").load("../etc/saham_modal.php");
						},500);
					});
				</script>

				<div class = "r"></div>
			</div>
			<form action="pages_face_recog_sell.php" method="post">
				<div class="form-group">
					<label for="lot">Lot</label>
					<input type="number" min="1" name="lot" class="form-control" id="lot" value="<?php echo @$_POST['lot']?>" aria-describedby="lot" autocomplete="off">
				</div>
                <button type="submit" class="tombol_fsell_modal">Sell</button>
			</form>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
	</div>
	<?php } ?>

</body>
</html>
