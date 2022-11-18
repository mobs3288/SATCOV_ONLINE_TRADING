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
                                    
                                    $lot_upd = $jml_lot + $row['lot'];

                                    $harga_upd = $row['harga'] + $harga;

                                    $sql = "UPDATE history SET harga ='$harga_upd' WHERE username = '$user' AND kode_saham = '$kode' AND status = 'Buy' LIMIT 1";
                                    $conn->query($sql);

                                    $lot_upd = $jml_lot + $row['lot'];

                                    $sql = "UPDATE history SET lot_sell_check ='$lot_upd' WHERE username = '$user' AND kode_saham = '$kode' AND status = 'Buy' LIMIT 1";
                                    $conn->query($sql);
                                }
                            }
                        }
                        $sql_update = "UPDATE user SET saldo = '$harga_update' WHERE username = '$user'";
                        mysqli_query($conn, $sql_update);
                        header("location:saham.php?pesan=beli");
                    } else {
                        header("location:saham.php?pesan=gagalbeli");
                    }
                    
                }
        }


    }
?>

