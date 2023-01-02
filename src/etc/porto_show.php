<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../../assets/css/porto_show_style.css">
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
                        <th>Profit</th>
                    </tr>
            <?php
            require_once dirname(__FILE__) . '/../model/Portfolio.php';

            $porto = new Portfolio();

            $porto->showPortofolio();
        ?>  
            </table>
    </div>
    <table>
        <tr>
            <th>Total Value</th>
            <td>
                <?php
                    echo $_SESSION['rupiah'];
                ?>
            </td>
        </tr>  
    </table>
</body>
</html>