<?php
$database = "tes";
$host = "localhost";
$user = "root"; // ganti dengan username database km
$password = hex2bin('6d6f627333323838'); // ganti dengan password database km

$mysqli = new mysqli($host,$user,$password,$database);

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}