<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once __DIR__ .  '/config.php';

function getUser($username, PDO $pdo) {

    $query = "SELECT id, username, email, full_name, role FROM users WHERE username = :username";
    $statement = $pdo -> prepare($query);
    $statement -> bindParam(':username', $username);
    $statement -> execute();

    $user = $statement ->fetch();


    return $user;

}

function login(PDO $pdo) {
    if (isset($_POST['btnEnv'])) {

        $user = $_POST['username'];
        $pass = $_POST['password'];

        $usuarioBBDD = getUser($user, $pdo);

        if ($user && password_verify($pass, $usuarioBBDD['password'])){
            session_regenerate_id(true);
            $_SESSION['userId'] = $user;
            $_SESSION['role'] = $user['role'];


        }

        // 1. Capturar $_POST['username'] y $_POST['password']
        // 2. Llamar a getUser()
        // 3. Validar con password_verify()
        // 4. Si es correcto: session_regenerate_id(true), guardar $_SESSION['userId'] y $_SESSION['role'], header a index.php y exit
        // 5. Si falla: devolver mensaje de error
    }
    return "";
}

function imprimirError($mensaje) {
    if ($mensaje !== "") {
        echo '<div class="alert alert-danger" role="alert">' . htmlspecialchars($mensaje) . '</div>';
    }
}

$error = login($pdo);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center vh-100">

    <div class="container" style="max-width: 400px;">
        <div class="card shadow-sm">
            <div class="card-body p-4">
                <h3 class="card-title text-center mb-4">Iniciar Sesión</h3>

                <?php imprimirError($error); ?>

                <form action="login.php" method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label">Usuario:</label>
                        <input type="text" name="username" id="username" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña:</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>

                    <button type="submit" name="btnEnv" class="btn btn-primary w-100">Entrar</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>