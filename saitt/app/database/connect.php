<?php
$driver ='mysql';
$host = 'localhost';
$dbname = 'saitt';
$user = 'root';
$pass = 'mysql';
$charset = 'utf8';
$options =[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_DEFAULT_FETCH_MODE =>PDO::FETCH_ASSOC];
try{
    $pdo = new PDO(
        "$driver:host=$host;dbname=$dbname;charset=$charset", $user, $pass, $options
    );
}catch (PDOException $i){
    die('Error connection in DB');
}

