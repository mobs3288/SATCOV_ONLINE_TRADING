<?php
class CashBalance{
    public function showAmount(){
        include dirname(__FILE__).'/../etc/koneksi.php';
        $conn = new mysqli($host,$user,$password,$database);

        $user = $_SESSION['username'];

        $sql = "SELECT * FROM user WHERE username = '$user' ";
        $result = mysqli_query($conn, $sql);
        // hitung hasil dan cek ada atau tidaknya data
        $is_exist = mysqli_num_rows($result);
        if($is_exist > 0){
        // keluarkan hasil
            $data = mysqli_fetch_assoc($result);
            echo ("<b><br>".$data['nama_lengkap']."</b>"."<br>");
            $rupiah = "Rp " . number_format($data['saldo'],2,',','.');
            $_SESSION['saldo'] = $data['saldo'];
            echo ("<b><br>".$rupiah."</b>"."<br><br>");

            return true;
        } else {
            return false;
        }

        
    }

    public function Withdraw(){
        session_start();
        include dirname(__FILE__).'/../etc/koneksi.php';
    
        $conn = new mysqli($host,$user,$password,$database);
        $pass = sha1($_POST['password']);
        $user = $_SESSION['username'];
        $tot = $_SESSION['tot'];
    
        $sql = mysqli_query($mysqli,"select * from user where username='$user' and password = '$pass'");
    
        $cek = mysqli_num_rows($sql);
    
        if($cek > 0 and (is_int($tot) and ($tot >= 10000))){
            $sql = "SELECT * FROM user WHERE username = '$user'";
            $result = $conn->query($sql);
        
            if ($result->num_rows > 0) {
                    // output data of each row
                while($row = $result->fetch_assoc()) {
                    $saldo_upd = $row['saldo'] - $tot;
                    if ($saldo_upd >= 0) {
                        $sql = "UPDATE user SET saldo ='$saldo_upd' WHERE username = '$user'";
                        $conn->query($sql);
                        header("location:../view/pages_cash_balance.php?pesan=berhasiltarik");
                        return true;
                    } else {
                        header("location:../view/pages_cash_balance.php?pesan=gagal");
                        return false;
                    }
                }
            } else {
                header("location:../view/pages_cash_balance.php?pesan=gagal");
                return false;
            }
        } else {
            header("location:../view/pages_cash_balance.php?pesan=gagal");
            return false;
        }
    }

    public function topUp(){
        session_start();
        include dirname(__FILE__).'/../etc/koneksi.php';
    
        $conn = new mysqli($host,$user,$password,$database);
        $user = $_SESSION['username'];
        $tot = $_SESSION['tot'];
    
        $sql = mysqli_query($mysqli,"select * from user where username='$user'");
    
        $cek = mysqli_num_rows($sql);
    
        if($cek > 0 and $tot != 0 and ($tot >= 10000 and $tot <= 999999999)){
            $sql = "SELECT * FROM user WHERE username = '$user'";
            $result = $conn->query($sql);
        
            if ($result->num_rows > 0) {
                    // output data of each row
                while($row = $result->fetch_assoc()) {
                    $saldo_upd = $row['saldo'] + $tot;
                    $sql = "UPDATE user SET saldo ='$saldo_upd' WHERE username = '$user'";
                    $conn->query($sql);
    
                    }
            }
            header("location:../view/pages_cash_balance.php?pesan=berhasiltop");
            return true;
        } else {
            header("location:../view/pages_cash_balance.php?pesan=gagaltop");
            return false;
        }
    }
}
?>