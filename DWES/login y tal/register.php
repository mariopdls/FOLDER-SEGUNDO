<?php 

if (isset($_GET['link']) && $_GET['link']=="login"){
  header("Location: login.php");
}

if (isset($_GET['link']) && $_GET['link'] == "inicio"){
  header("Location: index.php");

}

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mi Sitio - Iniciar Sesión</title>
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

  <main class="container my-auto py-5" style="max-width: 400px;">
    <div class="card p-4 shadow-sm">
      <h3 class="mb-4 text-center">Registro</h3>
      <form>
        <div class="mb-3">
          <label for="email" class="form-label">Correo electrónico</label>
          <input type="email" class="form-control" id="email" placeholder="nombre@ejemplo.com" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Contraseña</label>
          <input type="password" class="form-control" id="password" placeholder="••••••••" required>
        </div>
        <div class="form-check mb-3">
          <input type="checkbox" class="form-check-input" id="remember">
          <label class="form-check-label" for="remember">Recordarme</label>
        </div>
        <button type="submit" class="btn btn-primary w-100">Entrar</button>
      </form>
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