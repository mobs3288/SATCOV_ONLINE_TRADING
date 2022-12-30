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

        $sql1 = "SELECT * FROM history WHERE username = '".$user."' AND lot_sell_check IS NULL";
        $result1 = $conn->query($sql1);

        if ($result->num_rows > 0) {
                // output data of each row
            while($row = $result->fetch_assoc()) {
                $harga = $row['harga'];

                if ($result1->num_rows > 0) {
                    // output data of each row
                    while ($row1 = $result1->fetch_assoc()) {
                        
                        if ($row['kode_saham'] == $row1['kode_saham']){
                            if ($row['lot_sell_check'] != NULL || $row['lot_sell_check'] != 0){
                                $harga = $harga + $row1['harga'];
                                //$harga = $row['lot_sell_check'];
                                break;
                            }
                        }
                    }
                }
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