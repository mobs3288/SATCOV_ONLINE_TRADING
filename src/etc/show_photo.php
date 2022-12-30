<?php
// Include the database configuration file
require_once dirname(__FILE__).'/../model/User.php';

$photo= new User();

$photo->showPhoto();
?>