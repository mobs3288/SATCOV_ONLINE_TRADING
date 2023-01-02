<?php
class CashBalance{
    // Fungsi untuk menampilkan saldo yang dimiliki oleh user
    public function showAmount(){
        include dirname(__FILE__).'/../etc/koneksi.php';
        $conn = new mysqli($host,$user,$password,$database);

        $user = $_SESSION['username'];

        // Query untuk mengambil data yang terdapat pada database sesuai dengan username
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

            // Mengembalikan true apabila berhasil menampilkan
            return true;
        } else {
            // Mengembalikan false apabila gagal menampilkan
            return false;
        }

        
    }

    // Fungsi yang digunakan untuk melakukan withdraw atau penarikan
    public function Withdraw(){
        session_start();
        include dirname(__FILE__).'/../etc/koneksi.php';
    
        $conn = new mysqli($host,$user,$password,$database);
        $pass = sha1($_POST['password']);
        $user = $_SESSION['username'];
        $tot = $_SESSION['tot'];
    
        // Query untuk mengecek apakah username, dan password yang dimasukkan valid dan ada di database
        $sql = mysqli_query($mysqli,"select * from user where username='$user' and password = '$pass'");
    
        $cek = mysqli_num_rows($sql);
    
        // Mengecek apakah ada di database, dan mengecek jumlah minimal penarikan
        if($cek > 0 and (is_int($tot) and ($tot >= 10000))){
            // Query untuk melakukan pencarian berdasarkan username
            $sql = "SELECT * FROM user WHERE username = '$user'";
            $result = $conn->query($sql);
        
            if ($result->num_rows > 0) {
                    // output data of each row
                while($row = $result->fetch_assoc()) {
                    $saldo_upd = $row['saldo'] - $tot;
                    // Mengecek apakah saldo mencukupi atau tidak
                    if ($saldo_upd >= 0) {
                        // Jika mencukupi maka akan melakukan update saldo pada user
                        $sql = "UPDATE user SET saldo ='$saldo_upd' WHERE username = '$user'";
                        $conn->query($sql);
                        header("location:../view/pages_cash_balance.php?pesan=berhasiltarik");
                        // Mengembalikkan true apabila berhasil withdraw
                        return true;
                    } else {
                        header("location:../view/pages_cash_balance.php?pesan=gagal");
                        // Mengembalikkan false apabila gagal withdraw
                        return false;
                    }
                }
            }
        }

        // Mengembalikkan nilai false dikarenakan pass atau username tidak valid
        header("location:../view/pages_cash_balance.php?pesan=gagal");
        return false;
    
    }

    // Fungsi untuk melakukan top up
    public function topUp(){
        session_start();
        include dirname(__FILE__).'/../etc/koneksi.php';
    
        $conn = new mysqli($host,$user,$password,$database);
        $user = $_SESSION['username'];
        $tot = $_SESSION['tot'];
    
        // Query untuk melakukan pengecekan apakah username terdaftar pada database
        $sql = mysqli_query($mysqli,"select * from user where username='$user'");
    
        $cek = mysqli_num_rows($sql);
    
        // Pengecekan apakah data ada di database dan total lebih besar dari 10000 dan lebih kecil dari 999999999
        if($cek > 0 and $tot != 0 and ($tot >= 10000 and $tot <= 999999999)){
            // Query untuk melakukan pengecekan apakah username terdaftar pada database
            $sql = "SELECT * FROM user WHERE username = '$user'";
            $result = $conn->query($sql);
        
            // Pengecekan apakah data valid
            if ($result->num_rows > 0) {
                    // output data of each row
                while($row = $result->fetch_assoc()) {
                    $saldo_upd = $row['saldo'] + $tot;
                    // Melakukan update pada saldo user jika valid
                    $sql = "UPDATE user SET saldo ='$saldo_upd' WHERE username = '$user'";
                    $conn->query($sql);
    
                    }
            }
            header("location:../view/pages_cash_balance.php?pesan=berhasiltop");
            // Mengembalikkan nilai true apabila berhasil melakukan top up
            return true;
        } 
        header("location:../view/pages_cash_balance.php?pesan=gagaltop");
        //  Mengembalikkan nilai false apabila gagal melakukan top up
        return false;
    }
}
?>