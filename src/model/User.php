<?php
class User{
    public function validate(){
        session_start();
 
        // menghubungkan php dengan koneksi database
        include dirname(__FILE__).'/../etc/koneksi.php';
        
        // menangkap data yang dikirim dari form login
        $username = $_POST['username'];
        $password = sha1($_POST['password']);
        
        
        // menyeleksi data user dengan username dan password yang sesuai
        $login = mysqli_query($mysqli,"select * from user where username='$username' and password='$password'");
        // menghitung jumlah data yang ditemukan
        $cek = mysqli_num_rows($login);
        
        // cek apakah username dan password di temukan pada database
        if($cek > 0){
        
            $data = mysqli_fetch_assoc($login);
        
            // cek jika user login sebagai admin
            if($data['level']=="admin"){
        
                // buat session login dan username
                $_SESSION['username'] = $username;
                $_SESSION['level'] = "admin";
                // alihkan ke halaman dashboard admin
                header("location:../view/pages_admin.php");
        
            // cek jika user login sebagai user
            }else if($data['level']=="investor"){
                // buat session login dan username
                $_SESSION['username'] = $username;
                $_SESSION['level'] = "user";
                // alihkan ke halaman dashboard pegawai
                header("location:../view/pages_user.php");
        
        
            }else{
        
                // alihkan ke halaman login kembali
                header("location:../../index.php?pesan=gagal");
            }	
        }else{
            header("location:../../index.php?pesan=gagal");
        }
    }

    public function Register(){
        session_start();

        include dirname(__FILE__).'/../etc/koneksi.php';

        //dapatkan data user dari form register
        $user = [
            'nama_lengkap' => $_POST['nama_lengkap'],
            'username' => $_POST['username'],
            'password' => $_POST['password'],
            'password_confirmation' => $_POST['password_confirmation'],
            'email' => $_POST['email'],
        ];

        //validasi jika password & password_confirmation sama

        if($user['password'] != $user['password_confirmation']){
            $_SESSION['error'] = 'Password yang anda masukkan tidak sama dengan password confirmation.';
            $_SESSION['nama_lengkap'] = $_POST['nama_lengkap'];
            $_SESSION['username'] = $_POST['username'];
            header("Location:../view/pages_register.php?pesan=gagal");
            return;
        }

        if($user['password'] == null || $user['password_confirmation'] == null){
            $_SESSION['error'] = 'Gaboleh kosong yah mas!';
            header("Location:../view/pages_register.php?pesan=gagal");
            return;
        }

        //check apakah user dengan username tersebut ada di table users
        $query = "select * from user where username = ? limit 1";
        $stmt = $mysqli->stmt_init();
        $stmt->prepare($query);
        $stmt->bind_param('s', $user['username']);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_array(MYSQLI_ASSOC);

        //jika username sudah ada, maka return kembali ke halaman register.
        if($row != null){
            $_SESSION['error'] = 'Username: '.$user['username'].' yang anda masukkan sudah ada di database.';
            $_SESSION['nama_lengkap'] = $_POST['nama_lengkap'];
            $_SESSION['password'] = $_POST['password'];
            $_SESSION['password_confirmation'] = $_POST['password_confirmation'];
            header("Location:../view/pages_register.php?pesan=gagal");
            return;

        }else{
            $password = sha1($user['password']);
            $level = 'investor';
            $saldo = 0;

            //username unik. simpan di database.
            $query = "insert into user (nama_lengkap, username, password, level, saldo, email) values  (?,?,?,?,?,?)";
            $stmt = $mysqli->stmt_init();
            $stmt->prepare($query);
            $stmt->bind_param('ssssss', $user['nama_lengkap'],$user['username'],$password, $level, $saldo, $user['email']);
            $stmt->execute();
            $result = $stmt->get_result();
            var_dump($result);

            header("location:../view/pages_login.php?pesan=register");
        }
    }

    public function showRole(){
        include dirname(__FILE__).'/../etc/koneksi.php';

        $conn = new mysqli($host,$user,$password,$database);

        $user = $_SESSION['username'];

        $sql = "SELECT * FROM user WHERE username = '".$user."'";
        $result = $conn->query($sql);
            
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo ucfirst($row['level']);
            }
        }
    }

    public function showUsername(){
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
            echo ("<b>".$data['username']."</b>"."<br><br>");
        }
    }

    public function showName(){
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
            echo ("<b><br><br>".$data['nama_lengkap']."</b>");
        }
    }

    public function changePassword(){
        session_start();
        include dirname(__FILE__).'/../etc/koneksi.php';
    
        $conn = new mysqli($host,$user,$password,$database);
    
        //dapatkan data user dari form register
        $user = [
            'username' => $_SESSION['username'],
            'new_password' => $_POST['new_password'],
            'old_password' => $_POST['old_password'],
            'password_confirmation' => $_POST['password_confirmation'],
        ];
    
        //validasi jika password & password_confirmation sama
    
        if($user['new_password'] != $user['password_confirmation']){
            $_SESSION['error'] = 'Password yang anda masukkan tidak sama dengan password confirmation.';
            $_SESSION['nama_lengkap'] = $_POST['nama_lengkap'];
            $_SESSION['username'] = $_POST['username'];
            header("Location:../view/pages_account.php");
            return;
        }
    
        if($user['new_password'] == null || $user['password_confirmation'] == null){
            $_SESSION['error'] = 'Gaboleh kosong yah mas!';
            header("Location:../view/pages_account.php");
            return;
        }
    
        //check apakah user dengan username tersebut ada di table users
        $sql = "SELECT * FROM user WHERE username = '".$user['username']."' AND password = '".sha1($user['old_password'])."'";
        $result = $conn->query($sql);
            
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $sql = "UPDATE user set  password = '".sha1($user['new_password'])."'where username = '".$user['username']."'";
                $conn->query($sql);
            }

            header("location:../view/pages_account.php?pesan=berhasilchange");
        } else {
            header("location:../view/pages_account.php?pesan=");
        }

    
    }

    public function deleteAccount(){
        session_start();
        include dirname(__FILE__).'/../etc/koneksi.php';
    
        $conn = new mysqli($host,$user,$password,$database);
    
        //dapatkan data user dari form register
        $user = [
            'username' => $_SESSION['username'],
            'password' => $_POST['password'],
            'password_confirmation' => $_POST['password_confirmation'],
        ];
    
        //validasi jika password & password_confirmation sama
    
        if($user['password'] != $user['password_confirmation']){
            $_SESSION['error'] = 'Password yang anda masukkan tidak sama dengan password confirmation.';
            $_SESSION['nama_lengkap'] = $_POST['nama_lengkap'];
            $_SESSION['username'] = $_POST['username'];
            header("Location:../view/pages_account.php");
            return;
        }
    
        if($user['password'] == null || $user['password_confirmation'] == null){
            $_SESSION['error'] = 'Gaboleh kosong yah mas!';
            header("Location:../view/pages_account.php");
            return;
        }
    
        //check apakah user dengan username tersebut ada di table users
        $sql = "SELECT * FROM user WHERE username = '".$user['username']."'";
        $result = $conn->query($sql);
            
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $sql = "DELETE FROM user where username = '".$user['username']."'";
                $conn->query($sql);
            }
        }
    
        header("location:../../index.php");
    }
}
?>