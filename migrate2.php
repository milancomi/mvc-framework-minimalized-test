<?php
require_once 'vendor/autoload.php';
require_once 'configuration.php';
$dbServername = DB_SERVER_NAME;
$dbUsername = DB_USER_NAME;
$dbPassword = DB_PASSWORD;
$dbName = DB_NAME;

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

