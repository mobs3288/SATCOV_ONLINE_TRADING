<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style_porto_show.css">
</head>
<body>
    <div class = "grid-container">
        <?php
            include "koneksi.php";?>
                <table>
                    <tr>
                        <th>Code</th>
                        <th>Lot</th>
                        <th>Average Price</th>
                        <th>Value</th>
                    </tr>
            <?php
            session_start();

            $conn = new mysqli($host,$user,$password,$database);

            //WHERE username = '".$_SESSION['username']."'

            $user = $_SESSION['username'];

            $sql = "SELECT * FROM portofolio INNER JOIN user on (portofolio.username = user.username) INNER JOIN saham on (saham.kode_saham = portofolio.kode_saham) WHERE portofolio.username = '".$_SESSION['username']."'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                    // output data of each row
                while($row = $result->fetch_assoc()) {
                    $harga = $row["lot"] * $row["harga"];
                    $rupiah = "Rp " . number_format($harga,2,',','.');
                    $_SESSION['kode_saham'] = $row['kode_saham'];

                    ?>
                        <tr>
                            <td><?php echo("<a href = saham.php?id={$_SESSION['kode_saham']}> ".$row['kode_saham']." </a>");?></td>
                            <td><?php echo $row["lot"];?> </td>
                            <td><?php echo $row["harga"];?> </td>
                            <td><?php echo $rupiah;?> </td>
                        </tr>
                    <?php
                    }
            }

            $conn->close();
        ?></table>
    </div>
</body>
</html>