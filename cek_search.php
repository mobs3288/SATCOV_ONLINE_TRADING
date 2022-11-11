<?php
    include "koneksi.php";
    session_start();

	$conn = new mysqli($host,$user,$password,$database);

    $search = $_POST['search'];

	$sql = "SELECT * FROM saham WHERE kode_saham LIKE '%".$search."%'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $_SESSION['kode_saham'] = $row['kode_saham'];
            echo("<a href = saham.php?id={$_SESSION['kode_saham']}> ".$row['kode_saham']."<br> </a>");
            echo($row['nama_saham'] . "<br>");
            echo "<br>";
            }
	}


    if ($result->num_rows == 0){
        echo("Gaada datanya mas bro");
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
</head>
<body>
	<script>        
		$(document).ready(function(){
			$(".data").load("auto_update_saham_all.php");
			setInterval(function() {
				$(".data").load("auto_update_saham_all.php");
			},3000);
		});
	</script>

	<div class = "data"></div>

</body>
</html>