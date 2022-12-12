<!DOCTYPE html>
<html>
<head>
	<title>CERITANYA SATGAS COVID ONLINE TRADING</title>
	<link rel="stylesheet" type="text/css" href="../../assets/css/otp_style.css">
</head>
<body>

	<?php 

	?>
	<img src = "../../assets/img/logo.png"><br><br>
 
	<div class="kotak_login">
		<p class="tulisan_login">Change Password</p>
 
        <form action="../etc/validate_forgot.php" method="post">
            <div class="form-group">
                <label>New Password</label>
                <input type="password" name="new_password" class="form_login" id="new_password" value="<?php echo @$_SESSION['new_password']?>" placeholder="Password"><br><br>

                <label>New Password Confirmation</label>
                <input type="password" name="password_confirmation" class="form_login" id="password_confirmation" value="<?php echo @$_SESSION['password_confirmation']?>" placeholder="Password">
                <br><br><br>
                <center>
                    <button type="submit" class="tombol_fsell_modal">Change</button>
                </center><br>
            </div>
        </form>

	</div>
</body>
</html>
<!-- ashiap -->