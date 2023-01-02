<?php
require_once "User.php";
class Investor extends User{
    // Fungsi untuk melakukkan penjualan saham yang dimiliki oleh user
     public function sellStock(){
        session_start();
        include dirname(__FILE__).'/../etc/koneksi.php';
    
        $conn = new mysqli($host,$user,$password,$database);
        $pass = sha1($_POST['password']);
        $jml_lot = $_SESSION['lot'];
        $kode = $_SESSION['kode_saham'];
        $user = $_SESSION['username'];
        $harga_S = $_SESSION['harga_saham'];
        $harga = ($jml_lot * 100) * $harga_S;
    
        // Query untuk melakukan pengecekan apakah username dan password yang dimasukkan vaid atau tidak
        $sql = mysqli_query($mysqli,"select * from user where username='$user' and password = '$pass'");
    
        $cek = mysqli_num_rows($sql);
    
        // Apabila username dan password valid, dan kondisi lainnya true maka lakukan
        if($cek > 0 and ($jml_lot != NULL and $harga_S >= 50 and $harga_S <= 40000 and $jml_lot > 0)){
            // Query untuk mencari saham paling atas dengan status buy dan lot_sell_check > 0
            $sql = "SELECT * FROM history WHERE username = '$user' AND kode_saham = '$kode' AND status = 'Buy' AND lot_sell_check > 0 LIMIT 1";
            $result = $conn->query($sql);
        
            // Apabila ada
            if ($result->num_rows == 1) {
                    // output data of each row
                while($row = $result->fetch_assoc()) {
                        $cek_lot = $row['lot_sell_check'] - $jml_lot;
                        // Mengecek apakah lot_sell_check == 0
                        if ($cek_lot == 0){
                            
                            // Query untuk melakukkan pencarian user pada database
                            $sql1 = "select * from user where username='$user'";
                            $result1 = $conn->query($sql1);
    
                            // Pengecekan apakah valid atau tidak, bila valid
                            if ($result1->num_rows > 0){
                                while($row1 = $result1->fetch_assoc()){
                                    $harga = ($jml_lot * 100) * $harga_S;
                                    $harga_update = $row1['saldo'] + $harga;
    
                                    // Query untuk melakukan update saldo user
                                    $sql = "UPDATE user SET saldo ='$harga_update' WHERE username = '$user'";
                                    $conn->query($sql);
    
                                    // Query untuk menambahkan data penjualan baru
                                    $sql2 = "INSERT INTO history (id_transaction, kode_saham, lot, harga,  username, status, lot_sell_check, harga_trans) VALUES (NULL,'$kode', '$jml_lot', '$harga','$user', 'Sell', NULL, $harga_S)";
                                    mysqli_query($conn, $sql2);
    
                                    // Query untuk melakukan update data kepada history saham teratas yang dimiliki oleh user 
                                    $sql = "UPDATE history SET lot_sell_check='$cek_lot' WHERE username = '$user' AND kode_saham = '$kode' AND status = 'Buy' LIMIT 1";
                                    $conn->query($sql);
                                    
                                }

                            } 
                        // Mengecek apakah cek_lot lebih dari satu apabila true maka
                        } else if ($cek_lot > 0) {
                            // Query untuk update history kedalam database dengan saham teratas
                            $sql = "UPDATE history SET lot_sell_check ='$cek_lot'WHERE kode_saham = '$kode' AND username = '$user' AND status = 'Buy' limit 1";
                            $conn->query($sql);

                            // Query untuk melakukan pengecekan username apakah ada di database
                            $sql = "select * from user where username='$user'";
                            $result = $conn->query($sql);
    
                            if ($result->num_rows > 0){
                                while($row = $result->fetch_assoc()){
                                    // Query untuk melakukan pencarian saham milik user dengan status buy, lot_sell_check > 0 pertama
                                    $sql1 = "SELECT * FROM history WHERE username = '$user' AND kode_saham = '$kode' AND status = 'Buy' AND lot_sell_check > 0 LIMIT 1";
                                    $result1 = $conn->query($sql1);

                                    // Pengecekan apakah datanya ada atau tidak
                                    if ($result1->num_rows > 0) {
                                        while ($row1 = $result1->fetch_assoc()) {
                                            $harga = ($row1['lot_sell_check'] * 100) * $row1['harga_trans'];

                                            // Query untuk melakukkan update harga pada saham pertama yang dimiliki oleh user dengan status buy
                                            $sql = "UPDATE history SET harga ='$harga'WHERE kode_saham = '$kode' AND username = '$user' AND status = 'Buy' limit 1";
                                            $conn->query($sql);
                                            break;
                                        }
                                    }
                                    $harga = ($jml_lot * 100) * $harga_S;
                                    $harga_update = $row['saldo'] + $harga;
    
                                    // Query untuk melakukan update saldo yang dimiliki oleh user pada database
                                    $sql = "UPDATE user SET saldo ='$harga_update' WHERE username = '$user'";
                                    $conn->query($sql);
    
                                    // Query untuk memasukkan data penjualan kedalam database
                                    $sql2 = "INSERT INTO history (id_transaction, kode_saham, lot, harga,  username, status, lot_sell_check, harga_trans) VALUES (NULL,'$kode', '$jml_lot', '$harga','$user', 'Sell', NULL, '$harga_S')";
                                    mysqli_query($conn, $sql2);
                                }
                            } 
                        } else {
                            header("location:../view/pages_saham.php");
                            // Mengembalikkan nilai false apabila gagal menjual
                            return false;
                        }
                        header("location:../view/pages_saham.php?pesan=jual");
                        // Mengembalikkan nilai true apabila berhasil menjual
                        return true;
                    }
            }
        } 
        header("location:../view/pages_saham.php");
        // Mengembalikkan nilai false apabila gagal menjual
        return false;
    }
    
    // Fungsi untuk melakukan pembelian saham
    public function buyStock(){
        session_start();
        include dirname(__FILE__).'/../etc/koneksi.php';
    
        $conn = new mysqli($host,$user,$password,$database);
        $pass = sha1($_POST['password']);
        $jml_lot = $_SESSION['lot'];
        $kode = $_SESSION['kode_saham'];
        $user = $_SESSION['username'];
        $harga_S = $_SESSION['harga_saham'];
        $harga = ($jml_lot * 100) * $harga_S;
    
        // Query untuk melakukan pengecekan apakah username, dan password yang dimasukkan ada di database
        $sql = mysqli_query($mysqli,"select * from user where username='$user' and password = '$pass'");
        $cek = mysqli_num_rows($sql);

        // Query untuk melakukan pencari kode saham yang dicari di database
        $sql3 = "SELECT * FROM saham WHERE kode_saham = '$kode'";
        $result = $conn->query($sql3);
    
        // Pengecekan apakah kondisi - kondisi dibawah valid atau tidak
        if($result->num_rows > 0 and $cek > 0 and $jml_lot != NULL and ($jml_lot > 0 and $jml_lot <= 1000) and $kode != NULL){
            $data = mysqli_fetch_assoc($sql);
    
            // Query untuk melakukan pencarian saham yang dimiliki oleh user dengan status buy, dan lot sell check > 0
            $sql1 = mysqli_query($mysqli,"SELECT * FROM history WHERE username = '$user' AND kode_saham = '$kode' AND status = 'Buy' AND lot_sell_check > 0");
    
            $cek = mysqli_num_rows($sql1);
    
            // Query untuk melakukan pencarian user pada database
            $sql = "SELECT * FROM user WHERE username = '$user'";
            $result = $conn->query($sql);
        
            // Apabila user terdapat pada database
            if ($result->num_rows > 0) {
                    // output data of each row
                while($row = $result->fetch_assoc()) {
                        $harga_update = $row['saldo'] - $harga;
                        // Pengecekan apakah harga update > 0 atau sebaliknya
                        if ($harga_update > 0){
                            // Pengecekan query cek bernilai kosong
                            if($cek == 0){
                                // Query untuk memasukkan data pembelian kedalam database 
                                $sql2 = "INSERT INTO history (id_transaction, kode_saham, lot, harga,  username, status, lot_sell_check, harga_trans) VALUES (NULL,'$kode', '$jml_lot', '$harga','$user', 'Buy', '$jml_lot', '$harga_S')";
                                mysqli_query($conn, $sql2);
                    
                            } else {
                                // Query untuk melakukkan pencari history yang dimiliki oleh user dengan kode saham tertentu dengan status buy dengan limit 1 atau teratas
                                $sql = "SELECT * FROM history WHERE username = '$user' AND kode_saham = '$kode' AND status = 'Buy' LIMIT 1";
                                $result = $conn->query($sql);
    
                                // Pengecekan apakah data yang dicari ada atau tidak
                                if ($result->num_rows == 1) {
                                    while($row = $result->fetch_assoc()){
                                        // Query untuk menambahkan data penjualan kedalam database
                                        $sql2 = "INSERT INTO history (id_transaction, kode_saham, lot, harga,  username, status, lot_sell_check, harga_trans) VALUES (NULL,'$kode', '$jml_lot', '$harga','$user', 'Buy', NULL, '$harga_S')";
                                        mysqli_query($conn, $sql2);
    
                                        $harga_upd = $row['harga'] + $harga;
    
                                        // Query untuk melakukan update harga pada tabel history
                                        $sql = "UPDATE history SET harga ='$harga_upd' WHERE username = '$user' AND kode_saham = '$kode' AND status = 'Buy' LIMIT 1";
                                        $conn->query($sql);
    
                                        $lot_upd = $jml_lot + $row['lot_sell_check'];
    
                                        // Query untuk melakukan update pada lot_sell_check pada tabel history
                                        $sql = "UPDATE history SET lot_sell_check ='$lot_upd' WHERE username = '$user' AND kode_saham = '$kode' AND status = 'Buy' AND lot_sell_check AND lot_sell_check != 0 LIMIT 1";
                                        $conn->query($sql);
                                    }
                                }
                            }
                            $sql_update = "UPDATE user SET saldo = '$harga_update' WHERE username = '$user'";
                            mysqli_query($conn, $sql_update);
                            header("location:../view/pages_saham.php?pesan=beli");
                            // Mengembalikkan nilai true apabila berhasil mmebeli saham
                            return true;
                        } else {
                            header("location:../view/pages_saham.php?pesan=gagalbeli");
                            // Mengembalikkan nilai false apabila gagal mmebeli saham
                            return false;
                        }
                        
                    }
            } else {
                header("location:../view/pages_saham.php?pesan=gagalbeli");
                // Mengembalikkan nilai false apabila gagal mmebeli saham
                return false;
            }
    
    
        } else {
            header("location:../view/pages_saham.php?pesan=gagalbeli");
            // Mengembalikkan nilai false apabila gagal mmebeli saham
            return false;
        }
    }
}
?>