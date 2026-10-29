<?php
require_once 'config.php';
require_once 'auth.php';
function imprimirError($mensaje) {
    if (!empty($mensaje)) {
        echo '<div class="alert alert-danger" role="alert">' . htmlspecialchars($mensaje) . '</div>';
    }
}

// El portero comprueba que haya sesión válida
$currentUser = requireAuth($pdo);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel Principal - Gestión Escolar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container my-5">
        <div class="p-5 mb-4 bg-white rounded-3 shadow-sm">
            <h1 class="display-5 fw-bold">Bienvenido, <?php echo htmlspecialchars($currentUser['full_name']); ?></h1>
            <p class="col-md-8 fs-4">Has accedido correctamente al sistema de Gestión Escolar.</p>
            
            <hr class="my-4">
            
            <p><strong>Rol actual:</strong> <?php echo htmlspecialchars($currentUser['role']); ?></p>
            
            <?php if (!isAdmin($currentUser)) {
              imprimirError("El usuario no es admin");
            } ?>

    

            <div class="mt-4">
                <a href="listArticles.php" class="btn btn-primary">Ver Listado de Artículos</a>
                
                <form action="logout.php" method="POST" class="d-inline ms-2">
                    <button type="submit" class="btn btn-danger">Cerrar Sesión</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>