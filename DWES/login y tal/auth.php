<?php
require_once 'config.php';

<<<<<<< HEAD
// Iniciamos la sesión si no está iniciada
=======
>>>>>>> 75887798545ae03fdb6af827e93f45b79adc5281
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

function requireAuth(PDO $pdo) {
    
<<<<<<< HEAD
    // PASO A: Comprobar si hay sesión
=======
    // PASO A: Comprobar si hay sesión iniciada
>>>>>>> 75887798545ae03fdb6af827e93f45b79adc5281
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

<<<<<<< HEAD
    // PASO C: Si el usuario ya no existe en la BD
=======
    // PASO C: Si la cuenta fue eliminada o no existe
>>>>>>> 75887798545ae03fdb6af827e93f45b79adc5281
    if (!$currentUser) {
        $_SESSION = array();
        session_destroy();

        header('Location: login.php');
        exit;
    }

<<<<<<< HEAD
    // Actualizamos el rol en la sesión
=======
    // Actualizamos el rol en la sesión por si cambió
>>>>>>> 75887798545ae03fdb6af827e93f45b79adc5281
    $_SESSION['role'] = $currentUser['role'];

    return $currentUser;
}

<<<<<<< HEAD
// Comprobar si el usuario es administrador
=======
>>>>>>> 75887798545ae03fdb6af827e93f45b79adc5281
function isAdmin($currentUser) {
    return isset($currentUser['role']) && $currentUser['role'] === 'admin';
}
?>