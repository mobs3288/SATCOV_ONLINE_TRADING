<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style_admin_home.css">
</head>
<body>
    <div class = "grid-container">
        <?php
            include "koneksi.php";?>
                <table>
            <?php
            require_once dirname(__FILE__).'/../model/Stock.php';

            $stock = new Stock();

            $stock->showStock();
        ?>  
        </table>
    </div>
</body>
</html>