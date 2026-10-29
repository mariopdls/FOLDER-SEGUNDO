<?php
require_once 'config.php';
require_once  'articleRepository.php';
include 'index.php';

// --- FUNCIONES AUXILIARES DE VISTA ---


// 2. Imprime la tabla con el HTML integrado de forma directa
function imprimirTablaArticulos($articles) {
    if (!empty($articles)) {
        ?>
        <div class="card shadow-sm mb-4">
            <div class="card-body p-0">
                <table class="table table-striped table-hover mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($articles as $article) { ?>
                            <tr>
                                <td><?php echo htmlspecialchars($article['id']); ?></td>
                                <td><?php echo htmlspecialchars($article['name']); ?></td>
                                <td><?php echo htmlspecialchars($article['description']); ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <?php
    }
}

// 3. Imprime la paginación de forma limpia
function imprimirPaginador($pageNumber, $numPages) {
    if ($numPages > 1) {
        $disabledAnt = ($pageNumber <= 1) ? 'disabled' : '';
        $disabledSig = ($pageNumber >= $numPages) ? 'disabled' : '';
        $pagAnt = $pageNumber - 1;
        $pagSig = $pageNumber + 1;
        ?>
        <nav aria-label="Navegación de páginas">
            <ul class="pagination justify-content-center">
                
                <li class="page-item <?php echo $disabledAnt; ?>">
                    <a class="page-link" href="?page=<?php echo $pagAnt; ?>">Anterior</a>
                </li>


                <li class="page-item <?php echo $disabledSig; ?>">
                    <a class="page-link" href="?page=<?php echo $pagSig; ?>">Siguiente</a>
                </li>

            </ul>
        </nav>
        <?php
    }
}


// --- LÓGICA PRINCIPAL ---

$pageSize = 10;
$totalArticle = countAll($pdo);

if ($totalArticle % $pageSize == 0) {
    $numPages = (int)($totalArticle / $pageSize);
} else {
    $numPages = (int)($totalArticle / $pageSize) + 1;
}

$error = "";

if (isset($_GET["page"])) {
    $pageNumber = $_GET["page"];
    
    if (is_numeric($pageNumber)) {
        if ($pageNumber <= 0 || $pageNumber > $numPages) {
            $error = "El número de página solicitado no es un valor comprendido entre 1 y " . $numPages;
            $pageNumber = 1;
            $articles = findArticlePage($pdo, $pageNumber, $pageSize);
        } else {
            $articles = findArticlePage($pdo, $pageNumber, $pageSize);
        }
    } else {
        $error = "El número de página solicitado no es un valor numérico";
        $pageNumber = 1;
        $articles = findArticlePage($pdo, $pageNumber, $pageSize);
    }
} else {
    $pageNumber = 1;
    $articles = findArticlePage($pdo, $pageNumber, $pageSize);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Artículos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container my-5">
        <h2 class="mb-4">Listado de Artículos</h2>

        <?php 
            imprimirError($error); 
            imprimirTablaArticulos($articles);
            imprimirPaginador($pageNumber, $numPages);
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>