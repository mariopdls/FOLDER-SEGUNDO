<?php
$host = 'db'; // El nombre del servicio en tu docker-compose.yml
$port = '3306';                       // Puerto interno del contenedor
$db   = 'aulatech'; // Lo que ves en phpMyAdmin
$user = 'root';
$pass = 'root';                       // En Docker/MySQL suele ser 'root' o lo que definieras en variables de entorno
$charset = 'utf8mb4';

// 1. El DSN (Data Source Name)
// Es la cadena de conexión que le dice a PDO dónde ir
$dsn = "mysql:host=$host;port=$port;dbname=$db;charset=$charset";

// 2. Opciones de configuración
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Activa errores graves
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // Devuelve arrays asociativos
    PDO::ATTR_EMULATE_PREPARES   => false,                  // Seguridad real contra Inyección SQL
];

try {
    // 3. Crear la conexión (Instanciar el objeto PDO)
    $pdo = new PDO($dsn, $user, $pass, $options);

} catch (PDOException $e) {
    // Si algo falla, capturamos el error
    die("Error");
}