<?php
require_once "User.php";
class Admin extends User{
    // Fungsi untuk menambahkan saham pada database.
    public function add_saham(){
        session_start();

        include dirname(__FILE__).'/../etc/koneksi.php';
        $saham = [
            'kode_saham' => strtoupper($_POST['kode_saham']),
            'nama_saham' => $_POST['nama_saham'],
            'harga_saham' => $_POST['harga_saham'],
        ];
        
        // Query untuk mengecek apakah saham sudah ada di database
        $query = "SELECT * from saham where kode_saham = '".$saham['kode_saham']."' OR nama_saham = '".$saham['nama_saham']."' limit 1";
        $result = $mysqli->query($query);
        
        // Menngecek apakah inputan yang diterima bernilai null atau tidak
        if($saham['kode_saham'] == null or $saham['nama_saham'] == null or $saham['harga_saham'] == null){
            $_SESSION['error'] = 'Gaboleh kosong yah mas!';
            header("Location:../view/pages_data_saham.php?pesan=failed");
            // Mengembalikan false dikarenakan kode saham, nama saham, harga saham tidak boleh sama dengan null
            return false;
        }
        
        // Mengecek kondisi - kondisi yang harus terpenuhi
        if ($result->num_rows > 0 or (strlen($saham['kode_saham']) > 4 and !is_int($saham['harga_saham']) and $saham['harga_saham'] < 50 
        and $saham['harga_saham'] > 40000 and !is_int($saham['kode_saham']) and !is_int($saham['nama_saham']))) {
            header("Location:../view/pages_data_saham.php?pesan=failed");
            // Apabila kondisi terpenuhi maka sistem mengembalikan false
            return false;
        } else{
            //Apabila seluruh kondisi diatas salah, maka kode saham, harga saham, nama saham valid. Lalu melakukan query untuk memasukkan data kedalam database
            $query = "insert into saham (kode_saham, nama_saham, harga_saham) values  (?,?,?)";
            $stmt = $mysqli->stmt_init();
            $stmt->prepare($query);
            $stmt->bind_param('sss', $saham['kode_saham'],$saham['nama_saham'],$saham['harga_saham']);
            $stmt->execute();
            $result = $stmt->get_result();
            var_dump($result);
        
            header("location:../view/pages_data_saham.php?pesan=register");
            // Mengembalikan nilai true
            return true;
        }
        
    }
}
?>