<?php 
require_once __DIR__ . 'config.php';
require_once __DIR__ . 'auth.php';

$currentUser = requireAuth($pdo);


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis datos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <nav class="navbar navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="index.php">Biblioteca</a>
        </div>
    </nav>

    <div class="container" style="max-width: 500px;">
        <div class="card shadow-sm">
            <div class="card-body p-4">
                <h2 class="card-title mb-4">Mis datos</h2>

                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Usuario:</strong> <?php $currentUser['username'] ?> </li>
                    <li class="list-group-item"><strong>Nombre completo:</strong>  <?php $currentUser['full_name'] ?> </li>
                    <li class="list-group-item"><strong>Correo:</strong>  <?php $currentUser['email'] ?></li>
                    <li class="list-group-item"><strong>Rol:</strong>  <?php $currentUser['role'] ?></li>
                </ul>

                <a href="index.php" class="btn btn-outline-secondary mt-4">Volver</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>