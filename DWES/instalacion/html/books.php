<?php
session_start();
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/bookRepository.php';
require_once __DIR__ . '/userRepository.php';

$size  = 20;
$numberAllBooks = getCountOfAllBooks($pdo);
$pages = ceil($numberAllBooks / $size);   // total de páginas

// página actual — sin el +1, eso está mal
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
if ($page < 1) $page = 1;

$offset = ($page - 1) * $size;   // <-- usa $page, no $pages

$allBooks = listAllBooks($pdo, $size, $offset);
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BiblioTech — Catálogo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-body-tertiary">

    <?php require_once __DIR__ . '/layout/menu.php'; ?>

    <main class="container py-4">

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="h3 fw-bold mb-0">Catálogo de libros</h1>
        </div>

        <div class="card border-0 shadow-sm">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-dark">
                            <tr>
                                <th>#</th>
                                <th>Título</th>
                                <th>Autor</th>
                                <th>Género</th>
                                <th>Año</th>
                                <th class="text-end">Precio</th>
                                <th class="text-end">Stock</th>
                                <th class="text-end"> Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                        
                        foreach ($allBooks as $book) {
                        
                            echo '

                            <tr>
                                <td>'.$book['id'].'</td>
                                <td><a href="bookDetail.php?id='.$book['id'].'">'.$book['title'].'</a></td>
                                <td>'.$book['author'].'</td>
                                <td>'.$book['genre'].'</td>
                                <td>'.$book['year'].'</td>
                                <td class="text-end">'.$book['price'].' €</td>
                                <td class="text-end">'.$book['stock'].'</td>
                                <td class="text-end">
                                
                                <a  href="bookForm.php?id='. $book['id'] .'"><button> Modificar </button></a>
                                <form action="" method="post">
                                <button type="submit" name="btnRemove">Eliminar</button>
                                </form>
                                </td>
                            </tr>
       
                            ';

                        }
                        
                        ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <nav class="mt-3">
            <ul class="pagination justify-content-center">
                <li class="page-item <?php if ($page <= 1) { ?><?php } ?>">
                    <a class="page-link" href="?page=<?= $page - 1 ?>">← Anterior</a>
                </li>

                <li class="page-item disabled">
                    <span class="page-link">Página <?= $page ?> de <?= $pages ?></span>
                </li>

                <li class="page-item <?php if ($page >= $pages) { ?><?php } ?>">
                    <a class="page-link" href="?page=<?= $page + 1 ?>">Siguiente →</a>
                </li>
            </ul>
        </nav>

    </main>
</body>
</html>
