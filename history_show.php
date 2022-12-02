<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style_hist_show.css">
</head>
<body>
    <div class = "grid-container">
        <?php
            include "koneksi.php";?>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Code</th>
                        <th>Lot</th>
                        <th>Price</th>
                        <th>Status</th>
                    </tr>
            <?php
            session_start();

            $conn = new mysqli($host,$user,$password,$database);

            //WHERE username = '".$_SESSION['username']."'

            $user = $_SESSION['username'];

            $sql = "SELECT * FROM history INNER JOIN saham on (saham.kode_saham = history.kode_saham) WHERE history.username = '".$_SESSION['username']."'";
            $result = $conn->query($sql);
            $count = 1;

            if ($result->num_rows > 0) {
                    // output data of each row
                while($row = $result->fetch_assoc()) {
                    $rupiah = "Rp " . number_format($row['harga'],2,',','.');
                    ?>
                        <tr>
                            <td><?php echo $count;?>
                            </td>
                            <td><?php echo $row['kode_saham'];?> </td>
                            <td><?php echo $row['lot'] ;?> </td>
                            <td><?php echo $rupiah;?> </td>
                            <td><?php 
                                if ($row['status'] == "Buy"){
                                ?>
                                    <div class = "buy">
                                        <?php echo "Buy";?>
                                    </div>
                                <?php
                                } else{?>
                                    <div class = "sell">
                                        <?php echo "Sell"; ?>
                                    </div>
                                    <?php
                                }
                            ?> </td>
                        </tr>
                    <?php
                    $count = $count + 1;
                }
                
            }

            $conn->close();
            
        ?>  
            </table>
    </div>
</body>
</html>