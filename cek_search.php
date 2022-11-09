<?php
    include "koneksi.php";

	$conn = new mysqli($host,$user,$password,$database);

    $search = $_POST['search'];

	$sql = "SELECT * FROM saham WHERE kode_saham LIKE '%".$search."%'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo($row['kode_saham']);
            echo "<br>";
            }
	}

    if ($result->num_rows == 0){
        echo("Gaada datanya mas bro");
    }
	$conn->close();
?>