<?php
use function PHPUnit\Framework\once;
class Transaction{
    public function showAllTransaction(){
        include dirname(__FILE__).'/../etc/koneksi.php';

        session_start();

        $conn = new mysqli($host,$user,$password,$database);

        //WHERE username = '".$_SESSION['username']."'

        $user = $_SESSION['username'];

        $sql = "SELECT * FROM history WHERE username = '".$_SESSION['username']."'";
        $result = $conn->query($sql);
        $count = 1;
        $temp = 0;

        if ($result->num_rows > 0) {
                // output data of each row
            while($row = $result->fetch_assoc()) {
                $harga = $row['harga_trans'] * ($row['lot'] * 100);
                $rupiah = "Rp " . number_format($harga,2,',','.');
                ?>
                    <tr>
                        <td><?php echo $count;?>
                        </td>
                        <td><?php echo $row['kode_saham'];?> </td>
                        <td><?php echo $row['lot'] ;?> </td>
                        <td><?php echo $rupiah;?> </td>
                        <td><?php 
                            if ($row['status'] == "Buy"){
                            ?>
                                <div class = "buy">
                                    <?php echo "Buy";?>
                                </div>
                            <?php
                            } else{?>
                                <div class = "sell">
                                    <?php echo "Sell"; ?>
                                </div>
                                <?php
                            }
                        ?> </td>
                    </tr>
                <?php
                $count = $count + 1;
            }
            $conn->close();
            return true;
        } else {
            $conn->close();
            return false;
        }
    }

}
?>