<!DOCTYPE html>
<html>
<head>
	<title>SATCOV ONLINE TRADING</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="../../assets/img/logo2.png">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../../assets/css/konfirm_beli_style.css">
</head>
<body>

<?php
    include dirname(__FILE__).'/../etc/koneksi.php';
    session_start();
    date_default_timezone_set("Asia/Jakarta");

    if ($_SESSION['level'] != 'user' ){ 
		echo "<div class='alert'>You Don't Have Access To This Pages</div>";
		exit; 
	} 

	$conn = new mysqli($host,$user,$password,$database);

	$sql = "SELECT * FROM user WHERE username = '".$_SESSION['username']."'";
	$result = $conn->query($sql);

    $tot = (int)$_POST['saldo'];
    $rupiah = "Rp " . number_format($tot,2,',','.');

	if ($result->num_rows > 0) {
			// output data of each row
        while($row = $result->fetch_assoc()) {
                ?>
                
                <center>
                <div class="kotak_login">
                    <p class="tulisan_login">TOTAL</p>
            
                    <form action="../handler/CashBalance_handler.php" method="post">
                        <label>Total Withdraw amount</label><br>
                        <div class = "lot">
                            <?php
                                echo $rupiah;
                                $_SESSION['tot'] = $tot;
                            ?>
                        </div>
                        <br>
                        <label>Bank</label><br>
                        <div class = "lot">
                            <?php
                                echo $_POST['bank'];
                            ?>
                        </div>
                        <br>
                        <label>Account Number</label><br>
                        <div class = "lot">
                            <?php
                                echo $_POST['no_rekening'];
                            ?>
                        </div>
                        <br>
                        <label>Password</label>
                        <input type="password" name="password" class="form_login" placeholder="Password .." required="required"><br><br><br>
                        <button type="submit" class="tombol_buy" value = "Withdraw" name = "Withdraw">WITHDRAW</button><br><br>
            
                    </form>

                </div>
                </center>
                
                
                <?php 
            }
	}
?>

</body>
</html>