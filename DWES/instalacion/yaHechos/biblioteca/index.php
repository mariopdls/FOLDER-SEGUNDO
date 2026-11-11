<?php 
include_once __DIR__ . '/config.php';
include_once __DIR__ . '/auth.php';

$currentUser=requireAuth($pdo);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <nav class="navbar navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="index.php">Biblioteca</a>
            <div class="d-flex gap-2">
               <a href="listBooks.php">Listado de libros</a>
                <?php 
                
                if (isAdmin($currentUser)){
                    echo '<a href="?link=admin">Para administradores</a>';
                }
                
                ?>
                <form action="logout.php" method="post"> <button type="submit" name="logout">Cerrar sesión</button> </form>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="p-5 bg-white rounded shadow-sm">
            <h1 class="display-6 fw-bold">Bienvenido, <?php echo ''.$currentUser['full_name'].'' ?></h1>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>