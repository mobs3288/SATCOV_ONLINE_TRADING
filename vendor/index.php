<?php

require_once("autoload.php");

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$s3_bucket = $_ENV['PASS'];

echo $s3_bucket;