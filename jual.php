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
        $sql = "SELECT * FROM history WHERE username = '$user' AND kode_saham = '$kode' AND status = 'Buy' LIMIT 1";
        $result = $conn->query($sql);
    
        if ($result->num_rows == 1) {
                // output data of each row
            while($row = $result->fetch_assoc()) {
                    $cek_lot = $row['lot'] - $jml_lot;
                    if ($cek_lot == 0){

                        $sql1 = "select * from user where username='$user'";
                        $result1 = $conn->query($sql1);

                        if ($result1->num_rows > 0){
                            while($row1 = $result1->fetch_assoc()){
                                $harga = ($jml_lot * 100) * $_SESSION['harga_saham'];
                                $harga_update = $row1['saldo'] + $harga;

                                $sql = "UPDATE user SET saldo ='$harga_update' WHERE username = '$user'";
                                $conn->query($sql);

                                $sql2 = "INSERT INTO history (id_transaction, kode_saham, lot, harga,  username, status) VALUES (NULL,'$kode', '$jml_lot', '$harga','$user', 'Sell')";
                                mysqli_query($conn, $sql2);
                                
                                $sql2 = "DELETE FROM history WHERE kode_saham = '$kode' AND username = '$user' AND status = 'Buy' limit 1";
                                mysqli_query($conn, $sql2);
                            }
                        }
                    } else if ($cek_lot > 0) {
                        $harga = ($cek_lot) * ($row['harga'] / $row['lot']);
                        $sql = "UPDATE history SET lot ='$cek_lot'WHERE kode_saham = '$kode' AND username = '$user' AND status = 'Buy' limit 1";
                        $conn->query($sql);

                        $sql = "UPDATE history SET harga ='$harga'WHERE kode_saham = '$kode' AND username = '$user' AND status = 'Buy' limit 1";
                        $conn->query($sql);

                        $sql = "select * from user where username='$user'";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                                $harga = ($jml_lot * 100) * $_SESSION['harga_saham'];
                                $harga_update = $row['saldo'] + $harga;

                                $sql = "UPDATE user SET saldo ='$harga_update' WHERE username = '$user'";
                                $conn->query($sql);

                                $sql2 = "INSERT INTO history (id_transaction, kode_saham, lot, harga,  username, status) VALUES (NULL,'$kode', '$jml_lot', '$harga','$user', 'Sell')";
                                mysqli_query($conn, $sql2);
                            }
                        }
                    }
                }
        }


    }
?>

