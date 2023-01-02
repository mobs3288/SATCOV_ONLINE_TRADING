<?php
class Portfolio{
    public function showPortofolio(){
        include dirname(__FILE__).'/../etc/koneksi.php';

        session_start();

        $conn = new mysqli($host,$user,$password,$database);

        //WHERE username = '".$_SESSION['username']."'

        $user = $_SESSION['username'];

        // Query untuk mencari saham yang dimiliki oleh user dengan lot sell check > 0 dan not null
        $sql = "SELECT * FROM history INNER JOIN saham on (saham.kode_saham = history.kode_saham) WHERE history.username = '".$_SESSION['username']."' AND status = 'Buy' AND lot_sell_check > 0 AND lot_sell_check IS NOT NULL";
        $result = $conn->query($sql);
        $total_harga = 0;
        $rupiah = 0;

        if ($result->num_rows > 0) {
                // output data of each row
            while($row = $result->fetch_assoc()) {
                $harga = $row["harga"];
                $rupiah = "Rp " . number_format($harga,2,',','.');
                $lot = $row['lot_sell_check'];
                $avr_price = $harga / ($lot * 100) ;
                $total_harga += $row['harga'];

                // Fungsi untuk menampilkan di halaman web
                ?>
                    <tr>
                        <td><?php echo("<a href = ../view/pages_saham.php?id={$row['kode_saham']}> ".$row['kode_saham']." </a>");?></td>
                        <td><?php echo $lot;?> </td>
                        <td><?php echo round($avr_price) ;?> </td>
                        <td><?php echo $rupiah;?> </td>
                        <td>
                            <?php 
                            // Fungsi untuk mencari kode saham yang dicari
                                $query_saham = "SELECT * FROM saham WHERE kode_saham = '".$row['kode_saham']."'";
                                $p = $conn->query($query_saham);

                                if ($p->num_rows > 0) {
                                    // output data of each row
                                    while($row1 = $p->fetch_assoc()){
                                        $harga_now = ($lot * 100) * $row1['harga_saham'];
                                        $surplus = ($harga_now - $harga);
                                        //echo number_format((float)$surplus, 2, '.', '');
                                        // Menampilkan di halaman web
                                        if ($surplus >= 0){
                                            ?>
                                            <div class = "profit">
                                                <?php echo "Profit";?>
                                            </div>
                                            <?php
                                        } else{?>
                                            <div class = "loss">
                                                <?php echo "Loss"; ?>
                                            </div>
                                            <?php
                                        }
                                        //harga sekarang / average price * 100%
                                    }
                                }
                            ?> 
                        </td>
                    </tr>
                <?php
            }
            $rupiah = "Rp " . number_format($total_harga,2,',','.');
            $_SESSION['rupiah'] = $rupiah;
    
            // Mengembalikan nilai true apabila berhasil menampilkan
            return true;
        } else {
            $_SESSION['rupiah'] = $rupiah;
            // Mengembalikan nilai false apabila gagal menampilkan
            return false;
        }


    }
}

?>