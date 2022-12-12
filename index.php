<!DOCTYPE html>
<html>
<head>
	<title>Halaman admin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/css/user_home_style.css">
</head>
<body>
	<?php
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Login Dulu yah mas</div>";
		} 
	}
	?>
	<div class="topnav">
		<img src = "assets/img/logo.png" width="85" height="50">
		<div class = "logo_user">
			<a href = "#account"><img src = "assets/img/photo1.jpeg" width ="30" height="30" class="rounded"></a>
		</div>
	</div><br>

	<script>        
		$(document).ready(function(){
			$(".time").load("src/etc/auto_time.php");
			setInterval(function() {
				$(".time").load("src/etc/auto_time.php");
			},1000);
		});
	</script>

	<div class = "time"></div>

	<h1><?php
		include dirname(__FILE__).'/src/etc/koneksi.php';
		$conn = new mysqli($host,$user,$password,$database);

		date_default_timezone_set("Asia/Jakarta");
		//echo date('H'). "<br>";


		if(date("H") >= 18 or date('H')>= 0 and date('H') < 5){
			$salam = "Good Night, ";
		} else if (date("H") >= 5 and date("H") < 12){
			$salam = "Good Morning, ";
		} else if (date("H") >= 12 and date("H") < 18) {
			$salam = "Good Afternoon, ";
		}
		
		echo ($salam ."<b>Guest!</b>"."<br>");
	?></h1>
	<h2>You login as a Guest</h2>

	<div class="sidenav">
			<a href="home_direct.php">Home</a>
			<a href="src/view/pages_login.php">Account</a>
			<a href="src/view/pages_login.php">Stock</a>
			<a href="src/view/pages_login.php">Portofolio</a>
			<a href="src/view/pages_login.php">History</a>
			<a href="src/view/pages_login.php">Cash Balance</a>
		<br>

		<form action="src/view/pages_login.php">
			<input type="submit" value="LOGIN" class = "tombol_logout" />
		</form>
	</div> 

	<script>        
		$(document).ready(function(){
			$(".refresh").load("src/etc/auto_update_saham_all.php");
			setInterval(function() {
				$(".refresh").load("src/etc/auto_update_saham_all.php");
			},4000);
		});
	</script>

	<div class = "refresh"></div>
	<div class = "table1">
		<div class = "table3">
			<h3> IHSG (Index Harga Saham Gabungan) </h3>
			<h3> 7.089,21 </h3>
		</div>
		
		<script>        
		$(document).ready(function(){
			$(".table").load("src/etc/show_saham_home_guest.php");
			setInterval(function() {
				$(".table").load("src/etc/show_saham_home_guest.php");
			},2500);
		});
		</script>
		<div class = "table"></div>
	</div>
</body>
</html>