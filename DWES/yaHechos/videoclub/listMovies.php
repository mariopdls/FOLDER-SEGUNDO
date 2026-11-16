<?php
require_once __DIR__ . '/moviesRepository.php';
require_once __DIR__ . '/auth.php';

$user= requireAuth($pdo);

$size = 5;//cantidad de pelis por catalogo

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1; //qué página pide el user por URL, en caso de no haber empieza por la 1.

$total = countAll($pdo); //total de pelis que hay en la bbdd

$numPags = ceil($total/$size); //cantidad de paginas que hacen falta para articular

$movies = findPage($pdo, $page, $size); //trae las 5 primeras pelis

if (isset($_POST['btnRemove'])){
    removeMovie($pdo, $_POST['id']);
    header("Location: listMovies.php");

}


?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Videoclub Retro — Películas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        
    <nav>
        <a href="?listMovies.php">Ver películas</a>
        <a href="myData.php">Ver mis datos</a>
        <a href="logout.php">Cerrar sesión</a>
        <?php if (isAdmin($user)){
            echo "<a href='movieForm.php'>Añadir películas</a>
                  <a href='listUsers.php'>Gestionar usuarios</a>";
        } ?>

    </nav>
        <h2>Catálogo de películas</h2>
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Director</th>
                    <th>Género</th>
                    <th>Año</th>
                    <th>Disponible</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                
                foreach ($movies as $movie) {
                    echo "
                    <tr>
                    <td>{$movie['id']}</td>
                    <td>{$movie['title']}</td>
                    <td>{$movie['director']}</td>
                    <td>{$movie['genre']}</td>
                    <td>{$movie['year']}</td>
                    <td>{$movie['available']}</td>
                    ";
                    
                    if (isAdmin($user)){
                    echo "<td> 
                    
                    <a href='movieForm.php?id={$movie['id']}'> <button> Modificar</button></a>
                    <form action='' method='post'>
                    <label for='remove'></label>
                    <input type='hidden' name='id' value='{$movie['id']}'>
                    <button name='btnRemove'> Eliminar </button>
                    </form>
                    </td>
                    </tr>";
                    }
                }
                
                ?>
            </tbody>
        </table>
        <nav>
            <ul class="pagination">
                <li class="page-item <?= $page <= 1 ? 'disabled' : '' ?>">
                    <a class="page-link" href="?page=<?= $page - 1 ?>">Anterior</a>
                </li>
                <li class="page-item <?= $page >= $numPags ? 'disabled' : '' ?>">
                    <a class="page-link" href="?page=<?= $page + 1 ?>">Siguiente</a>
                </li>
            </ul>
        </nav>
    </div>
</body>
</html> 