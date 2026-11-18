<?php
session_start();
include_once __DIR__ . '/config.php';
include_once __DIR__ . '/userRepository.php';
$error='';


if (!empty($_SESSION['userId']) || !empty($_SESSION['role'])){
    header("Location:index.php?alert=sessionYet");
}

if ((isset($_POST['username']) && !empty($_POST['username'])) && 
    (isset($_POST['password']) && !empty($_POST['password'] )) && 
    (isset($_POST['btnSubmit']))){

    $user = getUser($pdo, $_POST['username']);
    if (!$user){
        $error= 'Error: Usuario o contraseña inválidos';
    }else{
        $verify = password_verify($_POST['password'], $user['password']);

        if (!$verify){
        $error='Contraseña incorrecta.';
        }else{
        session_regenerate_id();
        $_SESSION['userId']=$user['id'];
        $_SESSION['role'] = $user['role'];
        header("Location:index.php?alert=success");
        exit;
        }

    }   

    if (isset($_GET['alert']) && $_GET['alert'] == 'successLogout'){
    $alert= "Sesión cerrada correctamente";
    }
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BiblioTech — Iniciar sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-body-tertiary">
    <main class="container py-5" style="max-width: 420px;">
        <h1 class="h3 fw-bold text-center mb-4">📚 BiblioTech</h1>

        <?php if ($error !== '') { ?>
            <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
        <?php } ?>

        <div class="card border-0 shadow-sm">
            <div class="card-body p-4">
                <form method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label fw-semibold">Usuario</label>
                        <input type="text" class="form-control" id="username" name="username" autofocus required>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label fw-semibold">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" name='btnSubmit' class="btn btn-primary w-100">Entrar</button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>
