<?php
    include "koneksi.php";

	$conn = new mysqli($host,$user,$password,$database);

	$sql = "SELECT * FROM saham ORDER BY id LIMIT 5";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
			// output data of each row
        while($row = $result->fetch_assoc()) {
            echo "Kode Saham: " . $row["kode_saham"]. "<br>".  "Nama Saham: " . $row["nama_saham"]. "<br>". "Harga: Rp." . $row["harga"]. "<br>". "<br>";
            $data_saham = $row["kode_saham"];
            $harga_update = rand(50, 40000);
            $sql_update = "UPDATE saham SET harga = '".$harga_update."' WHERE kode_saham = '".$data_saham."'";
            mysqli_query($conn, $sql_update);
            }
	}
	$conn->close();
?>