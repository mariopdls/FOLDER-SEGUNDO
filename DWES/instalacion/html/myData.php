<?php
session_start();
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/userRepository.php';

if (isset($_GET['user'])){
    $user = authUser($pdo);

    if (!$user){
        echo "<script> window.location.href = 'index.php?alert=noUser'</script>";
    }

}

?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BiblioTech — Mis datos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-body-tertiary">

    <?php require_once __DIR__ . '/layout/menu.php'; ?>

    <main class="container py-4" style="max-width: 560px;">
        <h1 class="h3 fw-bold mb-4">Mis datos</h1>

        <?php if ($user) { ?>
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <dl class="row mb-0">
                    <dt class="col-sm-4">Usuario</dt>
                    <dd class="col-sm-8"><?php echo $user['username'] ?></dd>

                    <dt class="col-sm-4">Nombre completo</dt>
                    <dd class="col-sm-8"><?php echo $user['full_name'] ?></dd>

                    <dt class="col-sm-4">Correo</dt>
                    <dd class="col-sm-8"><?php echo $user['email'] ?></dd>

                    <dt class="col-sm-4">Rol</dt>
                    <dd class="col-sm-8"><?php echo $user['role'] ?></dd>
                </dl>
            </div>
        </div>

        <?php } ?>
        
        <?php if (!$user) {?>  <div class='alert alert-danger'> No disponible... </div>  <?php } ?>
    </main>
</body>
</html>
