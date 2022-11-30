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
    include "phpqrcode/qrlib.php"; 
 
    // nama folder tempat penyimpanan file qrcode
    $penyimpanan = "temp/";
    
    // membuat folder dengan nama "temp"
    if (!file_exists($penyimpanan))
        mkdir($penyimpanan);
    
    // isi qrcode yang ingin dibuat. akan muncul saat di scan
    

	$conn = new mysqli($host,$user,$password,$database);

	$sql = "SELECT * FROM user WHERE username = '".$_SESSION['username']."'";
	$result = $conn->query($sql);

    $tot = $_POST['saldo'];
    $rupiah = "Rp " . number_format($tot,2,',','.');
    $isi = $rupiah; 
    QRcode::png($isi, $penyimpanan.'total.png', QR_ECLEVEL_H, 10, 1);

	if ($result->num_rows > 0) {
			// output data of each row
        while($row = $result->fetch_assoc()) {
                ?>
                
                <center>
                <div class="kotak_login">
                    <p class="tulisan_login">TOTAL</p>
            
                    <form action="topup.php" method="post">
                        <label>Total Top Up</label><br>
                        <div class = "lot">
                            <?php
                                echo $rupiah;
                                $_SESSION['tot'] = $tot;
                            ?>
                        </div>                        
                        <div class = "hasil">
                            <?php echo '<img src="'.$penyimpanan.'total.png" >'; ?>
                        </div>
                        <br><br><br><br><br><br><br><br><br><br><br><br>
                        <input type="submit" class="tombol_buy" value="Verify"><br><br>
            
                    </form>

                </div>
                </center>
                
                
                <?php 
            }
	}
?>

</body>
</html>