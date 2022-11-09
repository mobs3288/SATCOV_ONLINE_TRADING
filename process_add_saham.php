<?php
session_start();

include "koneksi.php";

//dapatkan data user dari form register
$saham = [
	'kode_saham' => $_POST['kode_saham'],
	'nama_saham' => $_POST['nama_saham'],
	'harga' => $_POST['harga'],
];

//check apakah user dengan username tersebut ada di table users
$query = "select * from saham where kode_saham = ? limit 1";
$stmt = $mysqli->stmt_init();
$stmt->prepare($query);
$stmt->bind_param('s', $saham['kode_saham']);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_array(MYSQLI_ASSOC);

if($saham['kode_saham'] == null or $saham['nama_saham'] == null or $saham['harga'] == null ){
	$_SESSION['error'] = 'Gaboleh kosong yah mas!';
	header("Location:data_saham.php?pesan=failed");
	return;
}

//jika username sudah ada, maka return kembali ke halaman register.
if($row != null){
	$_SESSION['error'] = 'Saham: '.$saham['kode_saham'].' yang anda masukkan sudah ada di database.';
	$_SESSION['kode_saham'] = $_POST['kode_saham'];
	$_SESSION['nama_saham'] = $_POST['nama_saham'];
	$_SESSION['harga'] = $_POST['harga'];
	header("Location:data_saham.php?pesan=failed");
	return;

}else{
	//username unik. simpan di database.
	$query = "insert into saham (kode_saham, nama_saham, harga) values  (?,?,?)";
	$stmt = $mysqli->stmt_init();
	$stmt->prepare($query);
	$stmt->bind_param('sss', $saham['kode_saham'],$saham['nama_saham'],$saham['harga']);
	$stmt->execute();
	$result = $stmt->get_result();
	var_dump($result);

	header("location:data_saham.php?pesan=register");
}

?>
