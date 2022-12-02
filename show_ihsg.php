<?php 
    include "koneksi.php";

    session_start();

    $conn = new mysqli($host,$user,$password,$database);
	$sql = "SELECT * FROM saham";
	$result = $conn->query($sql);
	$rowcount = mysqli_num_rows( $result );
	//echo $rowcount;
	$total = 0;

	if ($result->num_rows > 0) {
						// output data of each row
		while($row = $result->fetch_assoc()) {
			$total = $total + $row['harga_saham'];
		}
	}
	echo round($total / $rowcount, 2);
?>