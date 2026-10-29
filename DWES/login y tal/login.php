<?php
require_once 'config.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// 1. Función para buscar el usuario por su username
function getUser($username, PDO $pdo) {
    $query = "SELECT id, username, password, role FROM users WHERE username = :username";
    $sentence = $pdo->prepare($query);
    $sentence->bindParam(':username', $username);
    $sentence->execute();

    return $sentence->fetch();
}

// 2. Función para procesar el formulario de login
function login(PDO $pdo) {
    if (isset($_POST['btnEnv'])) {
        $userInput = $_POST['user'] ?? '';
        $passInput = $_POST['pass'] ?? '';

        $user = getUser($userInput, $pdo);

        if ($user && password_verify($passInput, $user['password'])) {
            
            // Regeneramos el ID de sesión por seguridad
            session_regenerate_id(true);
            
            $_SESSION['userId'] = $user['id'];
            $_SESSION['role']   = $user['role'];

            header("Location: index.php");
            exit;
        }

        return "Usuario o contraseña incorrectos.";
    }

    return "";
}

// Ejecutamos la función de login
$error = login($pdo);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión - Gestión Escolar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center vh-100">

    <div class="container" style="max-width: 400px;">
        <div class="card shadow">
            <div class="card-body p-4">
                <h3 class="card-title text-center mb-4">Iniciar Sesión</h3>

                <?php if (!empty($error)): ?>
                    <div class="alert alert-danger">
                        <?php echo $error; ?>
                    </div>
                <?php endif; ?>

                <form action="login.php" method="POST">
                    <div class="mb-3">
                        <label for="user" class="form-label">Usuario:</label>
                        <input type="text" name="user" id="user" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="pass" class="form-label">Contraseña:</label>
                        <input type="password" name="pass" id="pass" class="form-control" required>
                    </div>

                    <button type="submit" name="btnEnv" class="btn btn-primary w-100">Entrar</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>