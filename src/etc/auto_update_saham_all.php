<?php
    include "koneksi.php";

	$conn = new mysqli($host,$user,$password,$database);

	$sql = "SELECT * FROM saham ORDER BY id";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
			// output data of each row
        while($row = $result->fetch_assoc()) {
            $data_saham = $row["kode_saham"];
            $harga_update = rand(50, 40000);
            $sql_update = "UPDATE saham SET harga_saham = '".$harga_update."' WHERE kode_saham = '".$data_saham."'";
            mysqli_query($conn, $sql_update);
            }
	}
	$conn->close();
?>

