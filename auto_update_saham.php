<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="update_saham.css">
</head>
<body>
    <div class = "grid-container">
        <?php
            include "koneksi.php";

            $conn = new mysqli($host,$user,$password,$database);

            $sql = "SELECT * FROM saham ORDER BY harga DESC LIMIT 4 ";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                    // output data of each row
                while($row = $result->fetch_assoc()) {?>
                    <div class = "grid-item">
                        <div class = "kode_saham">
                            <?php echo $row["kode_saham"]; 
                            ?> 
                        </div>
                        <div class = "nama_saham">
                            <?php echo $row["nama_saham"]; 
                            ?> 
                        </div>
                        <div class = "harga">
                            <?php echo $row["harga"]; 
                            ?> 
                        </div>
                    </div>
                    <?php
                    $data_saham = $row["kode_saham"];
                    $harga_update = rand(50, 40000);
                    $sql_update = "UPDATE saham SET harga = '".$harga_update."' WHERE kode_saham = '".$data_saham."'";
                    mysqli_query($conn, $sql_update);
                    }
            }

            $conn->close();
        ?>
    </div>
</body>
</html>