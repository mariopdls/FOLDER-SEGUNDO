<?php
$host = 'db'; //host db
$db= 'videoclub'; //nombre bbdd SIEMPRE DB
$port = '3306';                       // Puerto 3306
$username='root'; //user y pass
$password='root';

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];


$dsn="mysql:host=$host;port=$port;dbname=$db;charset=utf8mb4"; //hacemos dsn con host, db, port, y charset utf8mb4 . es DBNAME No db.

try {
    $pdo = new PDO ($dsn,$username,$password, $options); //hacemos PDO con dsn, el username y pass
} catch (\Throwable $th) {
    die("Error: BBDD no disponible.");  //error por si no cacha la bbdd
}