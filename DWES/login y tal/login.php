<?php
session_start();
require_once 'config.php';

function getUser($username, $connection) {
  $query = "SELECT id, password, role FROM users WHERE username = :username;";
  $sentence = $connection->prepare($query);
  $sentence->bindParam(":username", $username);
  $sentence->execute();
  return $sentence->fetch();
}

function login() {
  global $pdo;

  if (isset($_POST['btnEnv'])) {
    $userInput = trim($_POST['user'] ?? '');
    $passInput = $_POST['pass'] ?? '';

    $user = getUser($userInput, $pdo);

    if ($user && password_verify($passInput, $user['password'])) {
      session_regenerate_id(true);
      $_SESSION['userId'] = $user['id'];
      $_SESSION['role']   = $user['role'];
      header("Location: index.php");
      exit;
    }

    return "Usuario o contraseña incorrectos.";
  }

  return "";
}

// Ejecutamos el procesamiento del formulario una sola vez arriba
$error = login();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AulaTech - Iniciar Sesión</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100 bg-light">

  <nav class="navbar navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">AulaTech</a>
    </div>
  </nav>

  <main class="container my-auto py-5" style="max-width: 400px;">
    <div class="card p-4 shadow-sm">
      <h3 class="mb-4 text-center">Iniciar Sesión</h3>

      <!-- IMPRIMIMOS EL MENSAJE DE ERROR SI EXISTE -->
      <?php if (!empty($error)): ?>
        <div class="alert alert-danger" role="alert">
          <?php echo $error; ?>
        </div>
      <?php endif; ?>

      <form method="post" action="">
        <div class="mb-3">
          <label for="user" class="form-label">Nombre de usuario</label>
          <input type="text" id="user" class="form-control" name="user" placeholder="Ej: admin01" required>
        </div>
        <div class="mb-3">
          <label for="pass" class="form-label">Contraseña</label>
          <input type="password" id="pass" class="form-control" name="pass" placeholder="••••••••" required>
        </div>
        <button name="btnEnv" type="submit" class="btn btn-primary w-100">Entrar</button>
      </form>
    </div>
  </main>

  <footer class="bg-dark text-white text-center py-3 mt-auto">
    <div class="container">
      <small>&copy; 2026 AulaTech. Todos los derechos reservados.</small>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>