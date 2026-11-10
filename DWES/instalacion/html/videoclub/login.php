<?php
session_start();
require_once __DIR__ . '/config.php';

function getUser($pdo, $username) {
    $query = "SELECT id, username, password, role FROM users WHERE username = :username";
    $statement = $pdo->prepare($query);
    $statement->bindParam(":username", $username);
    $statement->execute();
    return $statement->fetch();
}

$error = "";
if (isset($_POST['btnEnv'])) {
    $userBD = getUser($pdo, $_POST['username']);
    if ($userBD && password_verify($_POST['password'], $userBD['password'])) {
        session_regenerate_id(true);
        $_SESSION['userId'] = $userBD['id'];
        $_SESSION['userRole'] = $userBD['role'];
        header("Location: index.php");
        exit;
    }
    $error = "Usuario o contraseña incorrectos";
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Videoclub Retro — Acceso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-body-tertiary">
    <div class="container mt-5">
        <div class="card shadow-sm mx-auto" style="max-width:400px">
            <div class="card-body p-4">
                <h1 class="h4 mb-3">Videoclub Retro</h1>
                <?php if ($error !== "") { ?>
                    <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
                <?php } ?>

                <?php if (isset($_GET['link']) && $_GET['link']=='logout'){
                    echo "<div class='alert alert-success'>Sesion cerrada correctamente</div>";
                    }?>
                <form method="post">
                    <div class="mb-3">
                        <label class="form-label">Usuario</label>
                        <input type="text" name="username" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Contraseña</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <button name="btnEnv" class="btn btn-primary w-100">Entrar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>