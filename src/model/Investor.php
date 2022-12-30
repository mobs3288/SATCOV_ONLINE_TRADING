<?php
require_once "User.php";
class Investor extends User{
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
    
        $sql = mysqli_query($mysqli,"select * from user where username='$user' and password = '$pass'");
    
        $cek = mysqli_num_rows($sql);
    
        if($cek > 0 and ($jml_lot != NULL and $harga_S >= 50 and $harga_S <= 40000 and $jml_lot > 0)){
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
                                    $harga = ($jml_lot * 100) * $harga_S;
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
                            
                            $sql = "UPDATE history SET lot_sell_check ='$cek_lot'WHERE kode_saham = '$kode' AND username = '$user' AND status = 'Buy' limit 1";
                            $conn->query($sql);

                            $sql = "select * from user where username='$user'";
                            $result = $conn->query($sql);
    
                            if ($result->num_rows > 0){
                                while($row = $result->fetch_assoc()){
                                    $sql1 = "SELECT * FROM history WHERE username = '$user' AND kode_saham = '$kode' AND status = 'Buy' AND lot_sell_check > 0 LIMIT 1";
                                    $result1 = $conn->query($sql1);

                                    if ($result1->num_rows > 0) {
                                        while ($row1 = $result1->fetch_assoc()) {
                                            $harga = $row1['harga'] - ($jml_lot * 100) * $harga_S;
                                            if ($harga < 0){
                                                $harga =($jml_lot * 100) * $harga_S;
                                            }

                                            $sql = "UPDATE history SET harga ='$harga'WHERE kode_saham = '$kode' AND username = '$user' AND status = 'Buy' limit 1";
                                            $conn->query($sql);
                                            break;
                                        }
                                    }
                                    $harga = ($jml_lot * 100) * $harga_S;
                                    $harga_update = $row['saldo'] + $harga;
    
                                    $sql = "UPDATE user SET saldo ='$harga_update' WHERE username = '$user'";
                                    $conn->query($sql);
    
                                    $sql2 = "INSERT INTO history (id_transaction, kode_saham, lot, harga,  username, status, lot_sell_check) VALUES (NULL,'$kode', '$jml_lot', '$harga','$user', 'Sell', NULL)";
                                    mysqli_query($conn, $sql2);
                                }
                            } 
                        } else {
                            header("location:../view/pages_saham.php");
                            return false;
                        }
                        header("location:../view/pages_saham.php?pesan=jual");
                        return true;
                    }
            }
        } 
        header("location:../view/pages_saham.php");
        return false;
    }

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
    
        $sql = mysqli_query($mysqli,"select * from user where username='$user' and password = '$pass'");
        $cek = mysqli_num_rows($sql);

        $sql3 = "SELECT * FROM saham WHERE kode_saham = '$kode'";
        $result = $conn->query($sql3);
    
        if($result->num_rows > 0 and $cek > 0 and $jml_lot != NULL and ($jml_lot > 0 and $jml_lot <= 1000) and $kode != NULL){
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
    
                                        $harga_upd = $row['harga'] + $harga;
    
                                        $sql = "UPDATE history SET harga ='$harga_upd' WHERE username = '$user' AND kode_saham = '$kode' AND status = 'Buy' LIMIT 1";
                                        $conn->query($sql);
    
                                        $lot_upd = $jml_lot + $row['lot_sell_check'];
    
                                        $sql = "UPDATE history SET lot_sell_check ='$lot_upd' WHERE username = '$user' AND kode_saham = '$kode' AND status = 'Buy' AND lot_sell_check AND lot_sell_check != 0 LIMIT 1";
                                        $conn->query($sql);
                                    }
                                }
                            }
                            $sql_update = "UPDATE user SET saldo = '$harga_update' WHERE username = '$user'";
                            mysqli_query($conn, $sql_update);
                            header("location:../view/pages_saham.php?pesan=beli");
                            return true;
                        } else {
                            header("location:../view/pages_saham.php?pesan=gagalbeli");
                            return false;
                        }
                        
                    }
            } else {
                header("location:../view/pages_saham.php?pesan=gagalbeli");
                return false;
            }
    
    
        } else {
            header("location:../view/pages_saham.php?pesan=gagalbeli");
            return false;
        }
    }
}
?>