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
	<link rel="stylesheet" type="text/css" href="../../assets/css/saham_style.css">
</head>
<body>
	<h4 class="modal-title">
		<?php 
		echo $_SESSION['kode_saham']." ";?>
		<div class = "harga_kanan"> 
			<?php
				echo $_SESSION['harga_saham'];
				clearstatcache()
			?>
		</div>
	</h4>
</body>
</html>
