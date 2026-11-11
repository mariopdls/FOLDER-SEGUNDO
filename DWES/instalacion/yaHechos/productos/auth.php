<?php
require_once 'config.php';

// Iniciamos la sesión si no está iniciada
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

function requireAuth(PDO $pdo) {
    
    // PASO A: Comprobar si hay sesión
    if (!isset($_SESSION['userId'])) {
        header('Location: login.php');
        exit;
    }

    // PASO B: Consultar al usuario en la BD en tiempo real
    $query = "SELECT id, username, full_name, email, role FROM users WHERE id = :id";
    $sentence = $pdo->prepare($query);
    $sentence->bindParam(':id', $_SESSION['userId']);
    $sentence->execute();
    
    $currentUser = $sentence->fetch();

    // PASO C: Si el usuario ya no existe en la BD
    if (!$currentUser) {
        $_SESSION = array();
        session_destroy();

        header('Location: login.php');
        exit;
    }

    // Actualizamos el rol en la sesión
    $_SESSION['role'] = $currentUser['role'];

    return $currentUser;
}

// Comprobar si el usuario es administrador
function isAdmin($currentUser) {
    return isset($currentUser['role']) && $currentUser['role'] === 'admin';
}
?>