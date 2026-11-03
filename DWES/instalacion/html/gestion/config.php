<?php
$host   = 'db';
$dbname = 'gestion_escolar';
$user   = 'root';
$pass   = 'root';

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $pass, $options);
} catch (PDOException $e) {
    die("Error al cargar la BBDD" . $e->getMessage());
}
?>