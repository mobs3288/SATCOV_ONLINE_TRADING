<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
	<title>Register Member</title>
</head>
<body>
	<div class="container">

		<div class="row">
			<div class="col-md-4 offset-md-4 mt-5">

				<?php
				if(isset($_SESSION['error'])) {
				?>
				<div class="alert alert-warning" role="alert">
				  <?php echo $_SESSION['error']?>
				</div>
				<?php
				}
				?>

				<?php
				if(isset($_SESSION['message'])) {
				?>
				<div class="alert alert-success" role="alert">
				  <?php echo $_SESSION['message']?>
				</div>
				<?php
				}
				?>


				<div class="card "><br>
					<div class = "tulisan_register">
						<h1>Register</h1>
					</div>
					<div class="card-body">
						<form action="process-register.php" method="post">
							<div class="form-group">
								<label for="username">Nama Lengkap</label>
								<input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" value="<?php echo @$_SESSION['nama_lengkap']?>" aria-describedby="nama_lengkap" placeholder="Nama lengkap" autocomplete="off">

							</div>
							<div class="form-group">
								<label for="username">Username</label>
								<input type="text" name="username" class="form-control" id="username" value="<?php echo @$_SESSION['username']?>" aria-describedby="username" placeholder="username" autocomplete="off">

							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" name="password" class="form-control" id="password" value="<?php echo @$_SESSION['password']?>" placeholder="Password">
							</div>
							<div class="form-group">
								<label for="password">Konfirmasi Password</label>
								<input type="password" name="password_confirmation" class="form-control" id="password_confirmation" value="<?php echo @$_SESSION['password_confirmation']?>"  placeholder="Password">
							</div>

                            <button type="submit" class="tombol_register">Register</button>
						</form>

					</div>
				</div>
			</div>

		</div>

	</div>
    <center>
        <p> Sudah punya akun?
		<a href="index.php">Login</a></p>
		<img src="ojek.png" width="90" height="90">
	</center>
</body>
<?php
session_destroy();
?>
