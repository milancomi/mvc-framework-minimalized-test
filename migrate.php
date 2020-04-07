<?php
require_once 'vendor/autoload.php';
require_once 'configuration.php';
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
u_position INT(6),
u_role INT(6)
)";

$create_table2 = "CREATE TABLE IF NOT EXISTS `teh_stacks` 
(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
teh_name VARCHAR(30)
)";


$create_table3 = "CREATE TABLE IF NOT EXISTS `user_teh_stacks` 
(
u_id INT(6) UNSIGNED,
u_teh_stack_id int(30)
)";

$create_tbl = $conn->query($create_table);
$create_tbl2 = $conn->query($create_table2);
$create_tbl3 = $conn->query($create_table3);

if ($create_table)
{
    echo "\nTable Created !" . PHP_EOL;
}


$faker = Faker\Factory::create();
for ($i=0; $i <= 30; $i++) {
    $sql = "insert into users (u_name,u_email,u_password,u_position,u_role) values('".$faker->firstName."', '".$faker->email."', '".$faker->password."', '".$faker->numberBetween($min = 1, $max = 3)."','".$faker->numberBetween($min = 1, $max = 1)."')";

    mysqli_query($conn, $sql);
}
$result = mysqli_query($conn,"SELECT * FROM teh_stacks");
$rows = mysqli_num_rows($result);
if($rows){
    echo "Records exist \n ";

return;
}else{
$sql ="INSERT INTO
teh_stacks (teh_name)
VALUES
('JavaScript'),('React'),('Vue'),('Angular'),('Java'),('PHP'),('Laravel'),('Simfony'),('Express.js'),('.net'),('C++'),('Python')";

$test = $conn->query($sql);
var_dump($test);
echo "stacks added \n ";
}



echo "30 Dummies Added ! \n \n";
echo "Have a nice day !!! \n";
