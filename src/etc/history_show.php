<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../../assets/css/hist_show_style.css">
</head>
<body>
    <div class = "grid-container">
        <?php
            include "koneksi.php";?>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Code</th>
                        <th>Lot</th>
                        <th>Price</th>
                        <th>Status</th>
                    </tr>
            <?php
            require_once dirname(__FILE__).'/../model/Transaction.php';

            $hist = new Transaction();

            $hist->showAllTransaction();
        ?>  
            </table>
    </div>
</body>
</html>