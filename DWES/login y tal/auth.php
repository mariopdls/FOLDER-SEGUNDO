<?php
require_once 'config.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

function requireAuth(PDO $pdo) {
    
    // PASO A: Comprobar si hay sesión iniciada
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

    // PASO C: Si la cuenta fue eliminada o no existe
    if (!$currentUser) {
        $_SESSION = array();
        session_destroy();

        header('Location: login.php');
        exit;
    }

    // Actualizamos el rol en la sesión por si cambió
    $_SESSION['role'] = $currentUser['role'];

    return $currentUser;
}

function isAdmin($currentUser) {
    return isset($currentUser['role']) && $currentUser['role'] === 'admin';
}
?>