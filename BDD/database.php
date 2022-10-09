<?php 

$server = 'mysql-gerardss.alwaysdata.net';
$username ='gerardss';
$password ='973540040Gs';
$database = 'gerardss_php_login_database';


try{
    $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch(PDOException $e) {

  die('Connected failed: ' .$e->getMessage());

}

?>