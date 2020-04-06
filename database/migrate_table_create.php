<?php
require  __DIR__ . '/../vendor/autoload.php';
require  __DIR__ . '/../configuration.php';

$dbServername = DB_SERVER_NAME;
$dbUsername = DB_USER_NAME;
$dbPassword = DB_PASSWORD;
$dbName = DB_NAME;

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);


if (mysqli_connect_error()) {
die("Database connection failed: " . 
mysqli_connect_error());
}

$create_table = "CREATE TABLE IF NOT EXISTS `users` 
(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
u_email VARCHAR(30),
u_name VARCHAR(30),
u_password VARCHAR(30),
u_type INT(6),
u_sub_type INT(6)
)";

$create_tbl = $conn->query($create_table);
if ($create_table)
{
    echo "\nTable Created !" . PHP_EOL;
}


$faker = Faker\Factory::create();
for ($i=0; $i <= 30; $i++) {
    $sql = "insert into users (u_name,u_email,u_password,u_type,u_sub_type) values('".$faker->firstName."', '".$faker->email."', '".$faker->password."', '".$faker->numberBetween($min = 1, $max = 2)."','".$faker->numberBetween($min = 1, $max = 8)."')";
    
    mysqli_query($conn, $sql);
}
echo "30 Dummies Added ! \n \n";
echo "Have a nice day !!! \n";
