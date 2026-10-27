<?php 

if (isset($_GET['link']) && $_GET['link']=="login"){
  header("Location: login.php");
}

if (isset($_GET['link']) && $_GET['link'] == "registro"){
  header("Location: register.php");

}

?>



<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mi Sitio - Inicio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100 bg-light">

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Mi Sitio</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link active" href="?link=inicio">Inicio</a></li>
          <li class="nav-item"><a class="nav-link" href="?link=registro">Registro</a></li>
          <li class="nav-item"><a class="nav-link" href="?link=login">Login</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <main class="container my-auto py-5 text-center">
    <div class="p-5 bg-white rounded-3 shadow-sm">
      <h1 class="display-4 fw-bold">Bienvenido a Mi Sitio</h1>
      <p class="lead mt-3 text-muted">Una plataforma sencilla y rápida construida con Bootstrap.</p>
      <a class="btn btn-primary btn-lg mt-3" href="#" role="button">Comenzar</a>
    </div>
  </main>

  <footer class="bg-dark text-white text-center py-3 mt-auto">
    <div class="container">
      <small>&copy; 2026 Mi Sitio. Todos los derechos reservados.</small>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>