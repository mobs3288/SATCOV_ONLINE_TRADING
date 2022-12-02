<?php
    include "koneksi.php";
    session_start();

    $conn = new mysqli($host,$user,$password,$database);
    $ids = $_GET['id'] ?? 0;

    $sql = "SELECT * FROM saham WHERE kode_saham = '".$ids."'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $_SESSION['kode_saham'] = $row['kode_saham'];
            $_SESSION['nama_saham'] = $row['nama_saham'];
            $_SESSION['harga_saham'] = $row['harga_saham'];
            $_SESSION['country'] = $row['country'];
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
	<link rel="stylesheet" type="text/css" href="saham_style.css">
</head>
<body>
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
				include "koneksi.php";

				$conn = new mysqli($host,$user,$password,$database);

				$sql = "SELECT * FROM saham WHERE kode_saham = '".$_SESSION['kode_saham']."'";
				$result = $conn->query($sql);
			
				if ($result->num_rows > 0) {
						// output data of each row
					while($row = $result->fetch_assoc()) {
						$data_saham = $row["kode_saham"];
						$harga_update = rand(50, 40000);
						$sql_update = "UPDATE saham SET harga_saham = '".$harga_update."' WHERE kode_saham = '".$data_saham."'";
						$_SESSION['harga_saham'] = $row["harga_saham"];
						$_SESSION['kode_saham'] = $row["kode_saham"];
						echo $row["harga_saham"];

						mysqli_query($conn, $sql_update);
						}
				}
            ?>
		</div>
		</center>
	</div>
</body>
</html>
