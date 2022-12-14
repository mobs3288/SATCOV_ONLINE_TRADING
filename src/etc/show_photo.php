<?php
// Include the database configuration file
include 'koneksi.php';

$user = $_SESSION['username'];

// Get images from the database
$query = $mysqli ->query("SELECT * FROM images WHERE username = '".$user."'");

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL = '../../assets/uploads/'.$row["file_name"];

    }
} else {
    if ($_SESSION['level'] == 'admin'){
        $imageURL = '../../assets/img/admin.png';
    } else {
        $imageURL = '../../assets/img/user.png';
    }
}

$_SESSION['image'] = $imageURL;

?>