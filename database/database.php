<?php
require  __DIR__ . '/../configuration.php';

use Illuminate\Database\Capsule\Manager as Capsule;
$capsule = new Capsule();

$capsule->addConnection([
    'driver'=> 'mysql',
    'host' => DB_SERVER_NAME,
    'username' =>DB_USER_NAME,
    'password'=>DB_PASSWORD,
    'database'=>DB_NAME,
    'prefix'=> ''

]);
$capsule->setAsGlobal();
$capsule->bootEloquent();
