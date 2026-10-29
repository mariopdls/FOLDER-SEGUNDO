<?php
// index.php
require_once 'config.php';
require_once 'auth.php';
require_once 'menu.php';

// AQUÍ SE CREA LA VARIABLE $currentUser:
$currentUser = requireAuth($pdo);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>AulaTech - Inicio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100 bg-light">

  <!-- Llamas a la función del menú que acabamos de hacer -->
  <?php obtenerMenu($currentUser); ?>

  <main class="container my-auto py-5">
    <div class="card shadow-sm p-4 text-center bg-white">
      <h1 class="display-5 text-primary mb-3">
        ¡Bienvenido/a, <?php echo htmlspecialchars($currentUser['full_name']); ?>!
      </h1>
      <p class="lead">
        Has accedido como <strong><?php echo htmlspecialchars($currentUser['username']); ?></strong> 
        (Rol: <span class="badge bg-secondary"><?= htmlspecialchars($currentUser['role']); ?></span>)
      </p>
    </div>
  </main>

</body>
</html>