<?php
use PhpParser\Node\Param;
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
                return true;
        
            // cek jika user login sebagai user
            }else if($data['level']=="investor"){
                // buat session login dan username
                $_SESSION['username'] = $username;
                $_SESSION['level'] = "user";
                // alihkan ke halaman dashboard pegawai
                header("location:../view/pages_user.php");
                return true;
        
            }
        }
        header("location:../../index.php?pesan=gagal");
        return false;
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
        } else {
            return false;
        }

        return true;
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
            return true;
        } else {
            return false;
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
            return true;
        } else {
            return false;
        }
    }

    public function changePassword(){
        session_start();
        include dirname(__FILE__).'/../etc/koneksi.php';
    
        $conn = new mysqli($host,$user,$password,$database);

        if ($_POST['new_password'] == NULL || $_POST['old_password'] == NULL){
            header("location:../view/pages_account.php?pesan=gagalchange");
            return false;
        }
    
        //dapatkan data user dari form register
        $user = [
            'username' => $_SESSION['username'],
            'new_password' => sha1($_POST['new_password']),
            'old_password' => sha1($_POST['old_password']),
            'password_confirmation' => sha1($_POST['password_confirmation']),
        ];
    
        //validasi jika password & password_confirmation sama
    
        if($user['new_password'] != $user['password_confirmation']){
            $_SESSION['error'] = 'Password yang anda masukkan tidak sama dengan password confirmation.';
            header("location:../view/pages_account.php?pesan=gagalchange");
            return false;
        }
    
        if($user['new_password'] == NULL || $user['password_confirmation'] == NULL || $user['old_password'] == NULL){
            $_SESSION['error'] = 'Gaboleh kosong yah mas!';
            header("location:../view/pages_account.php?pesan=gagalchange");
            return false;
        }
    
        //check apakah user dengan username tersebut ada di table users
        $sql = "SELECT * FROM user WHERE username = '".$user['username']."' AND password = '".$user['old_password']."'";
        $result = $conn->query($sql);
            
        if ($result->num_rows > 0 and ($user['new_password'] != NULL || $user['password_confirmation'] != NULL || $user['old_password'] != NULL)) {
            while ($row = $result->fetch_assoc()) {
                $sql = "UPDATE user set  password = '" . $user['new_password'] . "'where username = '" . $user['username'] . "'";
                $conn->query($sql);
            }
            header("location:../view/pages_account.php?pesan=berhasilchange");
            return true;
        }
        header("location:../view/pages_account.php?pesan=gagalchange");
        return false;
    
    }

    public function deleteAccount(){
        session_start();
        include dirname(__FILE__).'/../etc/koneksi.php';
    
        $conn = new mysqli($host,$user,$password,$database);
    
        //dapatkan data user dari form register
        $user = [
            'username' => $_SESSION['username'],
            'password' => sha1($_POST['password']),
            'password_confirmation' => sha1($_POST['password_confirmation']),
        ];
    
        //validasi jika password & password_confirmation sama
    
        if($user['password'] != $user['password_confirmation']){
            $_SESSION['error'] = 'Password yang anda masukkan tidak sama dengan password confirmation.';
            header("Location:../view/pages_account.php?pesan=gagalhapus");
            return false;
        }
    
        if($user['password'] == null || $user['password_confirmation'] == null){
            $_SESSION['error'] = 'Gaboleh kosong yah mas!';
            header("Location:../view/pages_account.php?pesan=gagalhapus");
            return false;
        }

        $sql = "SELECT * FROM history WHERE username = '".$user['username']."'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0){
            while($row = $result->fetch_assoc()) {
                $sql = "DELETE FROM history where username = '".$user['username']."'";
                $conn->query($sql);
            }
        } 

        $sql = "SELECT * FROM images WHERE username = '".$user['username']."'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0){
            while($row = $result->fetch_assoc()) {
                $sql = "DELETE FROM images where username = '".$user['username']."'";
                $conn->query($sql);
            }
        } 
    
        //check apakah user dengan username tersebut ada di table users
        $sql = "SELECT * FROM user WHERE username = '".$user['username']."' AND password = '".$user['password']."'";
        $result = $conn->query($sql);

        $sql1 = "SELECT * FROM history WHERE username = '".$user['username']."' AND status = 'Buy' AND lot_sell_check != 0";
        $resul1t = $conn->query($sql1);

        if ($resul1t->num_rows == 0){
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $sql = "DELETE FROM user where username = '".$user['username']."'";
                    $conn->query($sql);
                }
                header("location:../../index.php?pesan=berhasilhapus");
                return true;
            } else {
                header("Location:../view/pages_account.php?pesan=gagalhapus");
                return false;
            }
        } else {
            header("Location:../view/pages_account.php?pesan=gagalhapus");
            return false;
        }
            
    }

    public function forgotPassword(){
        session_start();
        include dirname(__FILE__).'/../etc/koneksi.php';
    
        $conn = new mysqli($host,$user,$password,$database);

        if ($_POST['new_password'] == NULL || $_POST['password_confirmation'] == NULL){
            header("Location:../view/pages_update_forgot_pw.php?pesan=gagal");
            return false;
        }
    
        //dapatkan data user dari form register
        $user = [
            'username' => $_SESSION['user_temp'],
            'new_password' => sha1($_POST['new_password']),
            'password_confirmation' => sha1($_POST['password_confirmation']),
        ];
    
        //validasi jika password & password_confirmation sama
    
        if($user['new_password'] != $user['password_confirmation']){
            $_SESSION['error'] = 'Password yang anda masukkan tidak sama dengan password confirmation.';
            $_SESSION['username'] = $_POST['username'];
            header("Location:../view/pages_update_forgot_pw.php?pesan=gagal");
            return false;
        }
    
        if($user['new_password'] == NULL || $user['password_confirmation'] == NULL){
            $_SESSION['error'] = 'Gaboleh kosong yah mas!';
            header("Location:../view/pages_update_forgot_pw.php?pesan=kosong");
            return false;
        }
    
        //check apakah user dengan username tersebut ada di table users
        $sql = "SELECT * FROM user WHERE username = '".$user['username']."'";
        $result = $conn->query($sql);
            
        if ($result->num_rows > 0 and $user['new_password'] != NULL || $user['password_confirmation'] != NULL) {
            while($row = $result->fetch_assoc()) {
                $sql = "UPDATE user set password = '".$user['new_password']."'where username = '".$user['username']."'";
                $conn->query($sql);
            }
            header("location:../view/pages_login.php?pesan=berhasilganti");
            return true;
        } else {
            header("location:../view/pages_login.php");
            return false;
        }
        
    }

    public function showPhoto(){
        include dirname(__FILE__).'/../etc/koneksi.php';

        $user = $_SESSION['username'];
        
        // Get images from the database
        $query = $mysqli ->query("SELECT * FROM images WHERE username = '".$user."'");
        $query2 = $mysqli ->query("SELECT * FROM user WHERE username = '".$user."'");
        
        if ($query2->num_rows > 0){
            if($query->num_rows > 0){
                while($row = $query->fetch_assoc()){
                    $imageURL = '../../assets/uploads/'.$row["file_name"];
                    
                }
            } else {
                if ($_SESSION['level'] == 'admin'){
                    $imageURL = '../../assets/img/admin.png';
                } else if ($_SESSION['level'] == 'user'){
                    $imageURL = '../../assets/img/user.png';
                } else {
                    return false;
                }
            }
        } else {
            return false;
        }

        
        $_SESSION['image'] = $imageURL;
        return true;
    }

    public function uploadPhoto(){
        include dirname(__FILE__).'/../etc/koneksi.php';
        session_start();
        $statusMsg = '';

        $targetDir = "../../assets/uploads/";
        $fileName = basename($_FILES["file"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
        $user = $_SESSION['username'];

        $sql = "SELECT * FROM images WHERE username = '".$user."'";
        $result = $mysqli->query($sql);
            
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $sql = "SELECT * FROM images WHERE file_name = '".$row['file_name']."'";
                $result2 = $mysqli->query($sql);
                    
                if ($result2->num_rows == 1) {
                    unlink('../../assets/uploads/'.$row['file_name']);
                }

                $sql = "DELETE FROM images where username = '".$user."'";
                $mysqli->query($sql);
            }
        }

        function compressImage($source, $destination, $quality) { 
            // Get image info 
            $imgInfo = getimagesize($source); 
            $mime = $imgInfo['mime']; 
             
            // Create a new image from file 
            switch($mime){ 
                case 'image/jpeg': 
                    $image = imagecreatefromjpeg($source); 
                    break; 
                case 'image/png': 
                    $image = imagecreatefrompng($source); 
                    break; 
                case 'image/gif': 
                    $image = imagecreatefromgif($source); 
                    break; 
                default: 
                    $image = imagecreatefromjpeg($source); 
            } 
             
            // Save image 
            imagejpeg($image, $destination, $quality); 
             
            // Return compressed image 
            return $destination; 
        }

        if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
            // Allow certain file formats
            $allowTypes = array('jpg','png','jpeg','gif');
            if(in_array($fileType, $allowTypes)){
                $compress = compressImage($_FILES["file"]["tmp_name"], $targetFilePath, 25);
                // Upload file to server
                    // Insert image file name into database
                echo $fileName;
                $insert = $mysqli->query("INSERT into images (file_name, username, uploaded_on) VALUES ('".$fileName."', '".$user."', NOW())");
                if($insert){
                    $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
                    } else {
                        $statusMsg = "File upload failed, please try again.";
                    } 
                } else{
                    $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
                }
            }else{
                $statusMsg = 'Please select a file to upload.';
            }

        //Display status message
        header("location:../view/pages_account.php?pesan=berhasil");
    }
}
?>