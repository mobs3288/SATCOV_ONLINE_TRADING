<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style_porto_show.css">
</head>
<body>
    <div class = "grid-container">
        <?php
            include "koneksi.php";?>
                <table>
                    <tr>
                        <th>Code</th>
                        <th>Lot</th>
                        <th>Average Price</th>
                        <th>Value</th>
                        <th>Profit</th>
                    </tr>
            <?php
            session_start();

            $conn = new mysqli($host,$user,$password,$database);

            //WHERE username = '".$_SESSION['username']."'

            $user = $_SESSION['username'];

            $sql = "SELECT * FROM history INNER JOIN saham on (saham.kode_saham = history.kode_saham) WHERE history.username = '".$_SESSION['username']."' AND status = 'Buy'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                    // output data of each row
                while($row = $result->fetch_assoc()) {
                    $harga = $row["harga"];
                    $avr_price = $harga / ($row['lot'] * 100) ;
                    $rupiah = "Rp " . number_format($harga,2,',','.');
                    $lot = $row['lot'];

                    ?>
                        <tr>
                            <td><?php echo("<a href = saham.php?id={$row['kode_saham']}> ".$row['kode_saham']." </a>");?></td>
                            <td><?php echo $lot;?> </td>
                            <td><?php echo $avr_price ;?> </td>
                            <td><?php echo $rupiah;?> </td>
                            <td>
                                <?php 
                                    $query_saham = "SELECT * FROM saham WHERE kode_saham = '".$row['kode_saham']."'";
                                    $p = $conn->query($query_saham);

                                    if ($p->num_rows > 0) {
                                        // output data of each row
                                        while($row1 = $p->fetch_assoc()){
                                            $harga_now = ($lot * 100) * $row1['harga_saham'];
                                            $surplus_modefaka = ($harga_now - $harga);
                                            //echo number_format((float)$surplus_modefaka, 2, '.', '');
                                            if ($surplus_modefaka >= 0){
                                                ?>
                                                <div class = "profit">
                                                    <?php echo "Profit";?>
                                                </div>
                                                <?php
                                            } else{?>
                                                <div class = "loss">
                                                    <?php echo "Loss"; ?>
                                                </div>
                                                <?php
                                            }
                                            //harga sekarang / average price * 100%
                                        }
                                    }
                                ?> 
                            </td>
                        </tr>
                    <?php
                    }
            }

            $conn->close();
        ?></table>
    </div>
</body>
</html>