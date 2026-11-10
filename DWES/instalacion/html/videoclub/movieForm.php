<?php
require_once __DIR__ . '/auth.php';
require_once __DIR__ . '/moviesRepository.php';

$user = requireAuth($pdo);

if (!isAdmin($user)){
    header("Location: index.php");
    exit;
}

if (isset($_GET['id'])){
$movie = getMovie($pdo, $_GET['id']);
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Videoclub Retro — Película</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <nav>
        <a href="listMovies.php">Ver películas</a>
        <a href="myData.php">Ver mis datos</a>
        <a href="logout.php">Cerrar sesión</a>
        <?php if (isAdmin($user)){
            echo "<a href='movieForm.php'>Añadir películas</a>
                  <a href='listUsers.php'>Gestionar usuarios</a>";
        } ?>

    </nav>
        <h2>
            <?php if (isset($_GET['id'])){
                echo "Modificar";
                

            }else{
                echo "Añadir";
            }
            ?></h2>

        <form method="post">
            <input type="hidden" name="idOculto" value="<?php if (isset($_GET['id'])){ echo $movie['id'];}?>">
            <div class="mb-3">
                <label class="form-label">Título</label>
                <input type="text" name="title" class="form-control" value="<?php echo isset($_GET['id']) ? $movie['title']: ""; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Director</label>
                <input type="text" name="director" class="form-control" value="<?php echo isset($_GET['id']) ? $movie['director']: ""; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Género</label>
                <select name="genre" class="form-select">
                    
                <option value="Acción"      <?= (isset($movie) && $movie['genre'] === 'Acción')           ? 'selected' : '' ?>>Acción</option>
                <option value="Comedia"     <?= (isset($movie) && $movie['genre'] === 'Comedia')          ? 'selected' : '' ?>>Comedia</option>
                <option value="Drama"       <?= (isset($movie) && $movie['genre'] === 'Drama')            ? 'selected' : '' ?>>Drama</option>
                <option value="Terror"      <?= (isset($movie) && $movie['genre'] === 'Terror')           ? 'selected' : '' ?>>Terror</option>
                <option value="Ciencia ficción" <?= (isset($movie) && $movie['genre'] === 'Ciencia ficción') ? 'selected' : '' ?>>Ciencia ficción</option>
                <option value="Animación"   <?= (isset($movie) && $movie['genre'] === 'Animación')        ? 'selected' : '' ?>>Animación</option>
               
            </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Año</label>
                <input type="number" name="year" class="form-control" value="<?php echo isset($_GET['id']) ? $movie['year']: ""; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Disponible</label>
                <select name="available" class="form-select">
                    <option value="1" >Sí</option>
                    <option value="0">No</option>
                </select>
            </div>
            <button name="btnPost" class="btn btn-primary"> <?php if (isset($_GET['id'])){
                echo "Modificar";
                

            }else{
                echo "Añadir";
            }
            ?></button>
            <a href="listMovies.php" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>