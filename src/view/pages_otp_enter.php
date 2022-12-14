<!DOCTYPE html>
<html>
<head>
	<title>CERITANYA SATGAS COVID ONLINE TRADING</title>
	<link rel="stylesheet" type="text/css" href="../../assets/css/otp_style.css">
</head>
<body>

	<?php
	session_start();
	//ini wajib dipanggil paling atas
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	include dirname(__FILE__).'/../etc/koneksi.php';
	define('MyConst', TRUE);
	require dirname(__FILE__).'/../etc/safeEncrypt.php';
	
	$conn = new mysqli($host,$user,$password,$database);
    $user = $_POST['username'];

	$_SESSION['user_temp'] = $user;

	//ini sesuaikan foldernya ke file 3 ini
	require dirname(__FILE__).'/../../assets/library/PHPMailer/src/Exception.php';
	require dirname(__FILE__).'/../../assets/library/PHPMailer/src/PHPMailer.php';
	require dirname(__FILE__).'/../../assets/library/PHPMailer/src/SMTP.php';

	$sql = "SELECT * FROM user WHERE username = '$user'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
			// output data of each row
		while($row = $result->fetch_assoc()) {
			$email = $row['email'];

		}
	}
				//sesuaikan name dengan di form nya ya 
				
				$judul = "Your OTP Code is Here!";
				$pesan = rand(100000, 999999);

	$_SESSION['otp'] = $pesan;
	//Create an instance; passing `true` enables exceptions
	$mail = new PHPMailer(true);

	try {
		//Server settings
		$mail->SMTPDebug = 0;                      //Enable verbose debug output
		$mail->isSMTP();                                            //Send using SMTP
		$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
		$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
		$mail->Username   = $_SESSION['email.a'];                     //SMTP username
		$mail->Password   = $_SESSION['pass.a'];                               //SMTP password
		$mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
		$mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

		//pengirim
		$mail->setFrom('email@gmail.com', 'Your OTP Code is Here!');
		$mail->addAddress($email);     //Add a recipient
	
		//Content
		$mail->isHTML(true);                                  //Set email format to HTML
		$mail->Subject = $judul;
		$mail->Body    = $pesan;
		$mail->AltBody = '';
		//$mail->AddEmbeddedImage('gambar/logo.png', 'logo'); //abaikan jika tidak ada logo
		//$mail->addAttachment(''); 

		$mail->send();


	} catch (Exception $e) {
		//echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

	}
				//redirect ke halaman index.php
			
	?>
	<img src = "../../assets/img/logo.png"><br><br>
 
	<div class="kotak_login">
		<p class="tulisan_login">OTP</p>
		<center><h2> OTP has been sent!</h2>
		<form action="../etc/validate_otp.php" method="post">
			<label>Please enter the OTP sent to your email</label><br><br>
			<input style="text-align:center;" type="text" name="otp_input" class="form_login1" placeholder="Enter OTP here!" required="required" maxlength="6" minlength="6"><br><br>
 
			<label>Refresh to resend OTP</label><br><br></center>
			<button type="submit" class="tombol_login">VERIFY</button><br><br>
		</form>

	</div>
</body>
</html>
<!-- ashiap -->