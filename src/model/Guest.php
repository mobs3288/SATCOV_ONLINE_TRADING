<?php
class Guest{
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
            // Mengembalikkan nilai false apabila gagal
            return false;;
        }

        // Pengecekan apabila password, password confirmation, email bernilai null
        if($user['password'] == null || $user['password_confirmation'] == null || $user['email'] == null){
            $_SESSION['error'] = 'Gaboleh kosong yah mas!';
            header("Location:../view/pages_register.php?pesan=gagal");
            // Mengembalikkan nilai false apabila gagal
            return false;
        }

        //check apakah user dengan username tersebut ada di table users
        $query = "select * from user where username = '".$user['username']."' or email = '".$user['email']."' limit 1";
        $result = $mysqli->query($query);

        //jika username sudah ada, maka return kembali ke halaman register.
        if($result->num_rows > 0 or (!filter_var($user['email'], FILTER_VALIDATE_EMAIL))){
            $_SESSION['error'] = 'Username: '.$user['username'].' yang anda masukkan sudah ada di database.';
            $_SESSION['nama_lengkap'] = $_POST['nama_lengkap'];
            $_SESSION['password'] = $_POST['password'];
            $_SESSION['password_confirmation'] = $_POST['password_confirmation'];
            header("Location:../view/pages_register.php?pesan=gagal");
            // Mengembalikkan nilai false apabila gagal
            return false;

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
            // Mengembalikkan nilai true apabila berhasil memasukkan data kedalam database
            return true;
        }
    }

}
?>