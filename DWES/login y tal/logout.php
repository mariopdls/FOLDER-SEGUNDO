<?php
<<<<<<< HEAD
session_start();

// 1. Verificamos que la petición sea estrictamente mediante POST (por seguridad)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // 2. Vaciamos la variable global $_SESSION
    $_SESSION = [];

    // 3. Destruimos la sesión en el servidor
    session_destroy();
}

// 4. Redirigimos siempre al login
header('Location: login.php');
exit;
=======
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION = array();
    session_destroy();
}

header('Location: login.php');
exit;
?>
>>>>>>> 75887798545ae03fdb6af827e93f45b79adc5281
