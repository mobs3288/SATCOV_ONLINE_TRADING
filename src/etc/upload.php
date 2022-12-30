<?php
require_once dirname(__FILE__).'/../model/User.php';

$upload= new User();

$upload->uploadPhoto();
?>