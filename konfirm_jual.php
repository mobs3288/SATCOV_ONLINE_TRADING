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
	<link rel="stylesheet" type="text/css" href="konfirm_beli.css">
</head>
<body>

<?php
    include "koneksi.php";
    session_start();
	$conn = new mysqli($host,$user,$password,$database);

    $beli_lot = $_POST['lot'];

    $sql = "SELECT * FROM history WHERE kode_saham = '".$_SESSION['kode_saham']."' AND username = '".$_SESSION['username']."' AND status = 'Buy' AND lot_sell_check > 0 LIMIT 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
            // output data of each row
        while($row = $result->fetch_assoc()) {
                if ($beli_lot <= $row['lot_sell_check']) {
                    $conn = new mysqli($host,$user,$password,$database);

                    $sql = "SELECT * FROM saham WHERE kode_saham = '".$_SESSION['kode_saham']."'";
                    $result = $conn->query($sql);
                
                
                    if ($result->num_rows > 0) {
                            // output data of each row
                        while($row = $result->fetch_assoc()) {
                                $hasil_rupiah = "Rp " . number_format(((($beli_lot * 100)) * $_SESSION['harga_saham']),2,',','.'); ?>
                                
                                <center>
                                <div class="kotak_login">
                                    <p class="tulisan_login">TOTAL</p>
                            
                                    <form action="jual.php" method="post">
                                        <label>Total Lot</label><br>
                                        <div class = "lot">
                                            <?php
                                                $_SESSION['lot'] = $beli_lot;
                                                echo $beli_lot;
                                            ?>
                                        </div>
                                        <br>
                                        <label>Total Harga</label><br>
                                        <div class = "harga">
                                            <?php
                                                echo $hasil_rupiah;
                                            ?>
                                        </div>
                                        <br>
                                        <label>Password</label>
                                        <input type="password" name="password" class="form_login" placeholder="Password .." required="required"><br><br><br>
                                        <input type="submit" class="tombol_buy" value="SELL"><br><br>
                            
                                    </form>
                
                                </div>
                                </center>
                                
                                
                                <?php 
                        }
                    }
                } else{
                    header("location:saham.php?pesan=gagaljual");
                }

        }
    } else {
        header("location:saham.php?pesan=gagaljual");
    }


?>

</body>
</html>