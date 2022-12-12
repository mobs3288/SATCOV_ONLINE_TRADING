<?php
require_once "User.php";
class Investor extends User{
     public function sellStock(){
        session_start();
        include dirname(__FILE__).'/../etc/koneksi.php';
    
        $conn = new mysqli($host,$user,$password,$database);
        $pass = $_POST['password'];
        $jml_lot = $_SESSION['lot'];
        $kode = $_SESSION['kode_saham'];
        $user = $_SESSION['username'];
        $harga = ($jml_lot * 100) * $_SESSION['harga_saham'];
    
        $sql = mysqli_query($mysqli,"select * from user where username='$user' and password = '$pass'");
    
        $cek = mysqli_num_rows($sql);
    
        if($cek > 0){
            $sql = "SELECT * FROM history WHERE username = '$user' AND kode_saham = '$kode' AND status = 'Buy' AND lot_sell_check > 0 LIMIT 1";
            $result = $conn->query($sql);
        
            if ($result->num_rows == 1) {
                    // output data of each row
                while($row = $result->fetch_assoc()) {
                        $cek_lot = $row['lot_sell_check'] - $jml_lot;
                        if ($cek_lot == 0){
    
                            $sql1 = "select * from user where username='$user'";
                            $result1 = $conn->query($sql1);
    
                            if ($result1->num_rows > 0){
                                while($row1 = $result1->fetch_assoc()){
                                    $harga = ($jml_lot * 100) * $_SESSION['harga_saham'];
                                    $harga_update = $row1['saldo'] + $harga;
    
                                    $sql = "UPDATE user SET saldo ='$harga_update' WHERE username = '$user'";
                                    $conn->query($sql);
    
                                    $sql2 = "INSERT INTO history (id_transaction, kode_saham, lot, harga,  username, status, lot_sell_check) VALUES (NULL,'$kode', '$jml_lot', '$harga','$user', 'Sell', NULL)";
                                    mysqli_query($conn, $sql2);
    
                                    $sql = "UPDATE history SET lot_sell_check='$cek_lot' WHERE username = '$user' AND kode_saham = '$kode' AND status = 'Buy' LIMIT 1";
                                    $conn->query($sql);
                                    
                                }
                            }
                        } else if ($cek_lot > 0) {
                            $harga = ($cek_lot) * ($row['harga'] / $row['lot']);
                            $sql = "UPDATE history SET lot_sell_check ='$cek_lot'WHERE kode_saham = '$kode' AND username = '$user' AND status = 'Buy' limit 1";
                            $conn->query($sql);
    
                            $sql = "UPDATE history SET harga ='$harga'WHERE kode_saham = '$kode' AND username = '$user' AND status = 'Buy' limit 1";
                            $conn->query($sql);
    
                            $sql = "select * from user where username='$user'";
                            $result = $conn->query($sql);
    
                            if ($result->num_rows > 0){
                                while($row = $result->fetch_assoc()){
                                    $harga = ($jml_lot * 100) * $_SESSION['harga_saham'];
                                    $harga_update = $row['saldo'] + $harga;
    
                                    $sql = "UPDATE user SET saldo ='$harga_update' WHERE username = '$user'";
                                    $conn->query($sql);
    
                                    $sql2 = "INSERT INTO history (id_transaction, kode_saham, lot, harga,  username, status, lot_sell_check) VALUES (NULL,'$kode', '$jml_lot', '$harga','$user', 'Sell', NULL)";
                                    mysqli_query($conn, $sql2);
                                }
                            }
                        }
                    }
            }
            header("location:../view/pages_saham.php?pesan=jual");
    
        }
    }

    public function buyStock(){
        session_start();
        include dirname(__FILE__).'/../etc/koneksi.php';
    
        $conn = new mysqli($host,$user,$password,$database);
        $pass = $_POST['password'];
        $jml_lot = $_SESSION['lot'];
        $kode = $_SESSION['kode_saham'];
        $user = $_SESSION['username'];
        $harga = ($jml_lot * 100) * $_SESSION['harga_saham'];
    
        $sql = mysqli_query($mysqli,"select * from user where username='$user' and password = '$pass'");
    
        $cek = mysqli_num_rows($sql);
    
        if($cek > 0){
            $data = mysqli_fetch_assoc($sql);
    
            $sql1 = mysqli_query($mysqli,"SELECT * FROM history WHERE username = '$user' AND kode_saham = '$kode' AND status = 'Buy' AND lot_sell_check > 0");
    
            $cek = mysqli_num_rows($sql1);
    
            $sql = "SELECT * FROM user WHERE username = '$user'";
            $result = $conn->query($sql);
        
            if ($result->num_rows > 0) {
                    // output data of each row
                while($row = $result->fetch_assoc()) {
                        $harga_update = $row['saldo'] - $harga;
                        if ($harga_update > 0){
                            if($cek == 0){
                                $sql2 = "INSERT INTO history (id_transaction, kode_saham, lot, harga,  username, status, lot_sell_check) VALUES (NULL,'$kode', '$jml_lot', '$harga','$user', 'Buy', '$jml_lot')";
                                mysqli_query($conn, $sql2);
                    
                            } else {
                                $sql = "SELECT * FROM history WHERE username = '$user' AND kode_saham = '$kode' AND status = 'Buy' LIMIT 1";
                                $result = $conn->query($sql);
    
                                if ($result->num_rows == 1) {
                                    while($row = $result->fetch_assoc()){
                                        $sql2 = "INSERT INTO history (id_transaction, kode_saham, lot, harga,  username, status, lot_sell_check) VALUES (NULL,'$kode', '$jml_lot', '$harga','$user', 'Buy', NULL)";
                                        mysqli_query($conn, $sql2);
                                        
                                        $lot_upd = $jml_lot + $row['lot'];
    
                                        $harga_upd = $row['harga'] + $harga;
    
                                        $sql = "UPDATE history SET harga ='$harga_upd' WHERE username = '$user' AND kode_saham = '$kode' AND status = 'Buy' LIMIT 1";
                                        $conn->query($sql);
    
                                        $lot_upd = $jml_lot + $row['lot'];
    
                                        $sql = "UPDATE history SET lot_sell_check ='$lot_upd' WHERE username = '$user' AND kode_saham = '$kode' AND status = 'Buy' LIMIT 1";
                                        $conn->query($sql);
                                    }
                                }
                            }
                            $sql_update = "UPDATE user SET saldo = '$harga_update' WHERE username = '$user'";
                            mysqli_query($conn, $sql_update);
                            header("location:../view/pages_saham.php?pesan=beli");
                        } else {
                            header("location:../view/pages_saham.php?pesan=gagalbeli");
                        }
                        
                    }
            } else {
                header("location:../view/pages_saham.php?pesan=gagalbeli");
            }
    
    
        } else {
            header("location:../view/pages_saham.php?pesan=gagalbeli");
        }
    }
}
?>