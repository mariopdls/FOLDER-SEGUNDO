<?php
require_once 'config.php';
require_once 'auth.php';

function obtenerMenu($currentUser) {
    // 1. Pintamos la parte principal del menú
    echo '
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
      <div class="container">
        <a class="navbar-brand" href="index.php">AulaTech</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav me-auto">
            <li class="nav-item"><a class="nav-link" href="articles.php">Ver artículos</a></li>
            <li class="nav-item"><a class="nav-link" href="myProfile.php">Ver mis datos</a></li>';

    // 2. Si es admin, hacemos otro echo con sus dos opciones exclusivas
    if (isAdmin($currentUser)) {
        echo '
            <li class="nav-item"><a class="nav-link text-success" href="articleForm.php">Añadir artículo</a></li>
            <li class="nav-item"><a class="nav-link text-info" href="users.php">Gestionar usuarios</a></li>';
    }

    // 3. Cerramos el menú y el botón de cerrar sesión
    echo '
          </ul>
          <form class="d-flex" action="logout.php" method="POST">
            <button type="submit" class="btn btn-outline-danger btn-sm">Cerrar sesión</button>
          </form>
        </div>
      </div>
    </nav>';
}
?>