<?php
require './model/dbconnt.php';
$conn = $dbobj->dbconnt();
// var_dump($conn);

if (file_exists('./vendor/autoload.php')) {
    require './vendor/autoload.php';
}
require 'controller/application.php';

$app = new Application($conn);
