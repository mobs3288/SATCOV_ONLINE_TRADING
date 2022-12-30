<?php
require_once "User.php";
class Admin extends User{
    public function add_saham(){
        session_start();

        include dirname(__FILE__).'/../etc/koneksi.php';
        $saham = [
            'kode_saham' => strtoupper($_POST['kode_saham']),
            'nama_saham' => $_POST['nama_saham'],
            'harga_saham' => $_POST['harga_saham'],
        ];
        
        //check apakah user dengan username tersebut ada di table users
        $query = "SELECT * from saham where kode_saham = '".$saham['kode_saham']."' OR nama_saham = '".$saham['nama_saham']."' limit 1";
        $result = $mysqli->query($query);
        
        if($saham['kode_saham'] == null or $saham['nama_saham'] == null or $saham['harga_saham'] == null){
            $_SESSION['error'] = 'Gaboleh kosong yah mas!';
            header("Location:../view/pages_data_saham.php?pesan=failed");
            return false;
        }
        
        //jika username sudah ada, maka return kembali ke halaman register.
        if ($result->num_rows > 0 or (strlen($saham['kode_saham']) > 4 and !is_int($saham['harga_saham']) and $saham['harga_saham'] < 50 
        and $saham['harga_saham'] > 40000 and !is_int($saham['kode_saham']) and !is_int($saham['nama_saham']))) {
            header("Location:../view/pages_data_saham.php?pesan=failed");
            return false;
        } else{
            //username unik. simpan di database.
            $query = "insert into saham (kode_saham, nama_saham, harga_saham) values  (?,?,?)";
            $stmt = $mysqli->stmt_init();
            $stmt->prepare($query);
            $stmt->bind_param('sss', $saham['kode_saham'],$saham['nama_saham'],$saham['harga_saham']);
            $stmt->execute();
            $result = $stmt->get_result();
            var_dump($result);
        
            header("location:../view/pages_data_saham.php?pesan=register");
            return true;
        }
        
    }
}
?>