<?php 
require_once __DIR__ . '/auth.php';
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/bookRepository.php';

$currentUser = requireAuth($pdo);   
$size = 4;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

$total = countAll($pdo);

$numPags = ceil ($total / $size);

$books = findPage($pdo, $page, $size)
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de libros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <nav class="navbar navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="index.php">Biblioteca</a>
        </div>
    </nav>

    <div class="container">
        <h2 class="mb-4">Listado de libros</h2>

        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Género</th>
                    <th>Año</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                
                foreach ($books as $array => $book) {
                    echo "
                    <tr>
                        <td>{$book['id']}</td>
                        <td>{$book['title']}</td>
                        <td>{$book['author']}</td>
                        <td>{$book['genre']}</td>
                        <td>{$book['year']}</td>            
                    </tr>
                    ";
                }
                
                ?>
            </tbody>
        </table>

        <nav>
    <ul class="pagination justify-content-center">
        <li class="page-item <?= $page <= 1 ? 'disabled' : '' ?>">
            <a class="page-link" href="?page=<?= $page - 1 ?>">Anterior</a>
        </li>
        <li class="page-item <?= $page >= $numPags ? 'disabled' : '' ?>">
            <a class="page-link" href="?page=<?= $page + 1 ?>">Siguiente</a>
        </li>
    </ul>
</nav>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>