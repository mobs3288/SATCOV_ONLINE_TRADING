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
            echo $row['kode_saham'] ."<br>";
            echo $row['nama_saham'] ."<br>";
            echo $row['harga']. "<br>";
            echo $row['country']. "<br>";
            }
	}
    $conn->close();
?>
