<?php
    session_start();
    include "koneksi.php";

	$conn = new mysqli($host,$user,$password,$database);
    $pass = $_POST['password'];
    $user = $_SESSION['username'];
    $tot = $_SESSION['tot'];

	$sql = mysqli_query($mysqli,"select * from user where username='$user' and password = '$pass'");

    $cek = mysqli_num_rows($sql);

    if($cek > 0){
        $sql = "SELECT * FROM user WHERE username = '$user'";
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
                // output data of each row
            while($row = $result->fetch_assoc()) {
                $saldo_upd = $row['saldo'] - $tot;
                $sql = "UPDATE user SET saldo ='$saldo_upd' WHERE username = '$user'";
                $conn->query($sql);

                }
        }
        header("location:cash_balance.php?pesan=berhasiltarik");
    } else {
        header("location:cash_balance.php?pesan=gagaltarik");
    }
?>

