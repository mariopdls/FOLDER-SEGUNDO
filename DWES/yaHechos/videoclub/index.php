<?php
require_once __DIR__ . '/auth.php';
require_once __DIR__ . '/userRepository.php';

$user = requireAuth($pdo);

?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Videoclub Retro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <nav>
        <a href="listMovies.php">Ver películas</a>
        <a href="myData.php">Ver mis datos</a>
        <a href="logout.php">Cerrar sesión</a>
        <?php if (isAdmin($user)){
            echo "<a href='movieForm.php'>Añadir películas</a>
                  <a href='listUsers.php'>Gestionar usuarios</a>";
        } ?>

    </nav>
    <div class="container mt-4">
        <h1 class="h3">Bienvenido, <?php echo $user ? $user['username'] : "Inicia sesión para poder acceder";?> </h1>
    </div>
</body>
</html>