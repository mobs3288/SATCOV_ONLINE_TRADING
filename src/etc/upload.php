<?php
// Include the database configuration file
include 'koneksi.php';
session_start();
$statusMsg = '';

function compressImage($source, $destination, $quality) { 
    // Get image info 
    $imgInfo = getimagesize($source); 
    $mime = $imgInfo['mime']; 
     
    // Create a new image from file 
    switch($mime){ 
        case 'image/jpeg': 
            $image = imagecreatefromjpeg($source); 
            break; 
        case 'image/png': 
            $image = imagecreatefrompng($source); 
            break; 
        case 'image/gif': 
            $image = imagecreatefromgif($source); 
            break; 
        default: 
            $image = imagecreatefromjpeg($source); 
    } 
     
    // Save image 
    imagejpeg($image, $destination, $quality); 
     
    // Return compressed image 
    return $destination; 
}

// File upload path
$targetDir = "../../assets/uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
$user = $_SESSION['username'];

$sql = "SELECT * FROM images WHERE username = '".$user."'";
$result = $mysqli->query($sql);
    
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $sql = "SELECT * FROM images WHERE file_name = '".$row['file_name']."'";
        $result2 = $mysqli->query($sql);
            
        if ($result2->num_rows == 1) {
            unlink('../../assets/uploads/'.$row['file_name']);
        }

        $sql = "DELETE FROM images where username = '".$user."'";
        $mysqli->query($sql);
    }
}

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        $compress = compressImage($_FILES["file"]["tmp_name"], $targetFilePath, 30);
        // Upload file to server
            // Insert image file name into database
        echo $fileName;
        $insert = $mysqli->query("INSERT into images (file_name, username, uploaded_on) VALUES ('".$fileName."', '".$user."', NOW())");
        if($insert){
            $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            } else {
                $statusMsg = "File upload failed, please try again.";
            } 
        } else{
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
        }
    }else{
        $statusMsg = 'Please select a file to upload.';
    }

//Display status message
echo $statusMsg;
header("location:../view/pages_account.php")
?>