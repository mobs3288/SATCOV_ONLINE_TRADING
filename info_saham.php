<!DOCTYPE html>
<html>
  <head>
    <title>Informasi Saham</title>
    <link rel="stylesheet" type="text/css" href="info_saham.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  </head>
  <body>
    <?php 
      session_start();
    
      // cek apakah yang mengakses halaman ini sudah login
      if($_SESSION['level']==""){
        header("location:index.php?pesan=gagal");
      }

      if ( $_SESSION['level'] != 'admin' && $_SESSION['level'] != 'user'){ 
        echo "<div class='alert'>Anda tidak memiliki akses untuk halaman ini.</div>";
        exit; 
      } 
    
    ?>
    
    <div class="topnav">
      <img src="logo.png" width="85" height="50" />
      <div class="logo_user">
        <img src="logo_user.png" width="45" height="45" />
      </div>
    </div>

    <div class="sidenav">
      <a href="#about">Home</a>
      <a href="#services">Account</a>
      <a href="#infostock">Info Stock</a>
      <a href="#stock">Stock</a>
      <b href="#stock">Buy Stock</b>
      <b href="#stock">Sell Stock</b>
      <a href="#portofolio">Portofolio</a>
      <a href="#cash">Cash Balance</a>
      <b href="#cash">Top Up</b>
      <b href="#cash">Withdrawal</b>

      <br><br><br><br>
      <form action="logout.php">
        <input type="submit" value="LOG OUT" class="tombol_logout" />
      </form>
    </div>
    <br />
    <form action="">
      <input type="text" value="Search.." class="search" />
    </form>

    <div class="table">
      <div class="tableinfo">
        <img src="data1.png" width="455" height="460" />
        <img src="data1.png" width="200" height="200" />
      </div>
    </div>
    <br />
    <br />
  </body>
</html>
