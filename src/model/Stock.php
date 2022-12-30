<?php
class Stock{
    public function showStock(){
        include dirname(__FILE__).'/../etc/koneksi.php';
        session_start();
        error_reporting(E_ERROR | E_PARSE);
        $level = $_SESSION['level'];
        
        if ($level == NULL){
            $conn = new mysqli($host,$user,$password,$database);

            //WHERE username = '".$_SESSION['username']."'

            $sql = "SELECT * FROM saham ORDER BY RAND() DESC LIMIT 8 ";
            $result = $conn->query($sql);
            $total_harga = 0;

            if ($result->num_rows > 0) {
                    // output data of each row
                while($row = $result->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?php echo("<a href = /tes/src/view/pages_login.php> ".$row['kode_saham']." </a>");?></td>
                            <td><?php echo $row['nama_saham'];?> </td>
                            <td><?php echo $row['harga_saham'];?></td>
                        </tr>
                    <?php
                }
            }

            $conn->close();
            return true;
            
        } else if ($level == "admin"){

            $conn = new mysqli($host,$user,$password,$database);

            //WHERE username = '".$_SESSION['username']."'

            $user = $_SESSION['username'];

            $sql = "SELECT * FROM saham ORDER BY RAND() DESC LIMIT 4 ";
            $result = $conn->query($sql);
            //$rowcount = mysqli_num_rows( $result );
            $total_harga = 0;

            if ($result->num_rows > 0) {
                    // output data of each row
                while($row = $result->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?php echo("<a href = ../view/pages_saham.php?id={$row['kode_saham']}> ".$row['kode_saham']." </a>");?></td>
                            <td><?php echo $row['nama_saham'];?> </td>
                            <td><?php echo $row['harga_saham'];?></td>
                        </tr>
                    <?php
                    
                }
            }
            //echo $rowcount;
            $conn->close();
            return true;
            
        } else if ($level == "user"){

            $conn = new mysqli($host,$user,$password,$database);

            //WHERE username = '".$_SESSION['username']."'

            $sql = "SELECT * FROM saham ORDER BY RAND() DESC LIMIT 8 ";
            $result = $conn->query($sql);
            $total_harga = 0;

            if ($result->num_rows > 0) {
                    // output data of each row
                while($row = $result->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?php echo("<a href = ../view/pages_saham.php?id={$row['kode_saham']}> ".$row['kode_saham']." </a>");?></td>
                            <td><?php echo $row['nama_saham'];?> </td>
                            <td><?php echo $row['harga_saham'];?></td>
                        </tr>
                    <?php
                }
            }

            $conn->close();
            return true;
        }
    }

    public function Search(){
        include dirname(__FILE__).'/../etc/koneksi.php';

        $conn = new mysqli($host,$user,$password,$database);

        $sql = "SELECT * FROM saham ORDER BY id";
        $result = $conn->query($sql);

        if (date("G") < 17 and (date("G") > 8 and date("G") < 17)){
            if ($result->num_rows > 0) {
                    // output data of each row
                while($row = $result->fetch_assoc()) {
                    $data_saham = $row["kode_saham"];
                    $harga_update = rand(50, 40000);
                    $sql_update = "UPDATE saham SET harga_saham = '".$harga_update."' WHERE kode_saham = '".$data_saham."'";
                    mysqli_query($conn, $sql_update);
                    }
            }
        }

        $search = $_POST['search'];

        $sql = "SELECT * FROM saham WHERE kode_saham LIKE '%".$search."%' OR nama_saham LIKE '%".$search."%'" ;
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
                // output data of each row
            while($row = $result->fetch_assoc()) {
                $_SESSION['kode_saham'] = $row['kode_saham'];
                ?>
                
                <div class = "grid-item">
                    <div class = "kode_saham">
                        <?php echo("<a href = pages_saham.php?id={$_SESSION['kode_saham']}> ".$row['kode_saham']." </a>");?>
                        <div class = "nama_saham"> <?php
                            echo($row['nama_saham'] . "<br>");?> 
                        </div>
                    </div>
                    <div class = "harga"> <?php
                        echo($row['harga_saham'] . "<br>");?> 
                    </div>
                </div>
                <?php
                    if ($result->num_rows == 0){
                        echo("Gaada datanya mas bro");
                    }
                }
                $conn->close();
                return true;
        } 
        $conn->close();
        return false;
    }

}

?>