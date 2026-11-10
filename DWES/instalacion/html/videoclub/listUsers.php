<?php 
require_once __DIR__ . '/auth.php';
require_once __DIR__ . '/userRepository.php';

$allUsers = getAllUsers($pdo);
echo "";
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Videoclub Retro — Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <!-- menú aquí -->
        <h2>Gestión de usuarios</h2>
        <a href="userForm.php" class="btn btn-primary mb-3">Añadir usuario</a>
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Usuario</th>
                    <th>Nombre completo</th>
                    <th>Email</th>
                    <th>Rol</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <!-- foreach aquí -->
            </tbody>
        </table>
    </div>
</body>
</html>