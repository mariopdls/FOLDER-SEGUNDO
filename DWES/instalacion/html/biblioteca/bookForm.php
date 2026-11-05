<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/auth.php';
require_once __DIR__ . '/bookRepository.php';


$book = null;
$id = null;

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    $book = findById($pdo, $id);
}


$currentUser = requireAuth($pdo);

if (!isAdmin($currentUser)) {
    header("Location: listBooks.php");
    exit;
}

if (isset($_POST['btnPost'])) {
    $data = [
    'title' => $_POST['title'],
    'author' => $_POST['author'],
    'genre' => $_POST['genre'],
    'year' => $_POST['year'],
    ];
    if (!empty($_POST['idOculto'])){
        updateBook($pdo, (int)$_POST['idOculto'], $data);
    }else{
        insertBook($pdo, $data);
    }
    header("Location: listBooks.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add or edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <nav class="navbar navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="index.php">Biblioteca</a>
        </div>
    </nav>

    <div class="container" style="max-width: 600px;">
        <div class="card shadow-sm">
            <div class="card-body p-4">
                <h2 class="card-title mb-4"><!-- Añadir / Editar libro --></h2>

                

                <form method="POST">
                    <input type="hidden" name="idOculto" value="<?php echo $book ? $book['id'] : '' ?>">

                    <div class="mb-3">
                        <label for="title" class="form-label">Título</label>
                        <input type="text" name="title" id="title" class="form-control" value="<?php echo isset($_GET['id']) ? $book['title'] : "" ?>">
                    </div>
                    <div class="mb-3">
                        <label for="author" class="form-label">Autor</label>
                        <input type="text" name="author" id="author" class="form-control" value="<?php echo isset($_GET['id']) ? $book['author'] : "" ?>">
                    </div>
                    <div class="mb-3">
                        <label for="genre" class="form-label">Género</label>
                        <input type="text" name="genre" id="genre" class="form-control" value="<?php echo isset($_GET['id']) ? $book['genre'] : "" ?>">
                    </div>
                    <div class="mb-3">
                        <label for="year" class="form-label">Año</label>
                        <input type="number" name="year" id="year" class="form-control" value="<?php echo isset($_GET['id']) ? $book['year'] : "" ?>">
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" name="btnPost" class="btn btn-primary"><?php echo isset($_GET['id']) ? "Editar" : "Añadir" ?></button>
                        <a href="listBooks.php" class="btn btn-outline-secondary">Cancelar</a>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>