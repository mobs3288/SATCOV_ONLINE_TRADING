<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../../assets/css/update_saham_style.css">
</head>
<body>
	<div class = "refresh"></div>
    <div class = "grid-container">
        <?php
            include "koneksi.php";
            session_start();

            $conn = new mysqli($host,$user,$password,$database);

            $sql = "SELECT * FROM saham ORDER BY harga_saham DESC LIMIT 4 ";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                    // output data of each row
                while($row = $result->fetch_assoc()) {
                    $_SESSION['kode_saham'] = $row['kode_saham'];?>
                    <div class = "grid-item">
                        <div class = "kode_saham">
                            <?php echo("<a href = ../view/pages_saham.php?id={$_SESSION['kode_saham']}> ".$row['kode_saham']." </a>");?>
                        </div>
                        <div class = "nama_saham">
                            <?php echo $row["nama_saham"]; 
                            ?> 
                        </div>
                        <div class = "harga">
                            <?php echo $row["harga_saham"]; 
                            ?> 
                        </div>
                    </div>
                    
                    <?php
                    }
            }

            $conn->close();
        ?>
    </div>
</body>
</html>