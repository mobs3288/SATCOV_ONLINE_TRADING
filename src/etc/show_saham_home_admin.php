<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style_admin_home.css">
</head>
<body>
    <div class = "grid-container">
        <?php
            include "koneksi.php";?>
                <table>
            <?php
            session_start();

            $conn = new mysqli($host,$user,$password,$database);

            //WHERE username = '".$_SESSION['username']."'

            $user = $_SESSION['username'];

            $sql = "SELECT * FROM saham ORDER BY RAND() DESC LIMIT 4 ";
            $result = $conn->query($sql);
            //$rowcount = mysqli_num_rows( $result );
            $total_harga = 0;

            if ($result->num_rows > 0) {
                    // output data of each row
                while($row = $result->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?php echo("<a href = ../view/pages_saham.php?id={$row['kode_saham']}> ".$row['kode_saham']." </a>");?></td>
                            <td><?php echo $row['nama_saham'];?> </td>
                            <td><?php echo $row['harga_saham'];?></td>
                        </tr>
                    <?php
                    
                }
            }
            //echo $rowcount;
            $conn->close();
            
        ?>  
        </table>
    </div>
</body>
</html>