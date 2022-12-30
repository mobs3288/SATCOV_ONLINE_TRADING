<!DOCTYPE html>
<html>
<head>
	<title>SATCOV ONLINE TRADING</title>
    <link rel="icon" type="image/x-icon" href="../../assets/img/logo2.png">
	<link rel="stylesheet" type="text/css" href="../../assets/css/otp_style.css">
</head>
<body>

	<?php 
	if (isset($_GET['pesan'])) {
		if ($_GET['pesan'] == "gagal") {
			echo "<div class='alert'>You Don't Have Access To This Pages</div>";
		} else if ($_GET['pesan'] == "kosong"){
            echo "<div class='alert'>Cannot Be Empty!</div>";
        }
	}
	?>
	<img src = "../../assets/img/logo.png"><br><br>
 
	<div class="kotak_login">
		<p class="tulisan_login">Change Password</p>
 
        <form action="../handler/User_handler.php" method="post">
            <div class="form-group">
                <label>New Password</label>
                <input type="password" name="new_password" class="form_login" id="new_password" value="<?php echo @$_SESSION['new_password']?>" placeholder="Password" required><br><br>

                <label>New Password Confirmation</label>
                <input type="password" name="password_confirmation" class="form_login" id="password_confirmation" value="<?php echo @$_SESSION['password_confirmation']?>" placeholder="Password" required>
                <br><br><br>
                <center>
                    <button type="submit" class="tombol_fsell_modal" value = "forgotPassword" name = "forgotPassword">Change</button>
                </center><br>
            </div>
        </form>

	</div>
</body>
</html>
<!-- ashiap -->