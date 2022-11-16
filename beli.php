<?php
    session_start();
    include "koneksi.php";

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

        $sql1 = mysqli_query($mysqli,"select * from history where username='$user'");

        $cek = mysqli_num_rows($sql1);



        $sql = "SELECT * FROM user WHERE username = '$user'";
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
                // output data of each row
            while($row = $result->fetch_assoc()) {
                    $harga_update = $row['saldo'] - $harga;
                    if ($harga_update > 0){
                        if($cek >= 0){
                            $sql2 = "INSERT INTO history (id_transaction, kode_saham, lot, harga,  username, status) VALUES (NULL,'$kode', '$jml_lot', '$harga','$user', 'Buy')";
                            mysqli_query($conn, $sql2);
                
                        } else {
                            echo "UDIN";
                        }
                        $sql_update = "UPDATE user SET saldo = '$harga_update' WHERE username = '$user'";
                        mysqli_query($conn, $sql_update);
                    } else {
                        echo "Ngga cukup Saldo ngab";
                    }
                    
                }
        }


    }
?>

