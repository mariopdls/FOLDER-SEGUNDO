<?php

$host="db";
$dbname="biblioteca";
$user="root";
$pass="root";
$dsn="mysql:host=$host;dbname=$dbname;charset=utf8mb4";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn,$user,$pass,$options);
} catch (\Throwable $th) {
    die("Error: BBDD no encontrada");
}
