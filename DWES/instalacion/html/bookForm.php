<?php
session_start();
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/bookRepository.php';
$genres = ['Novela', 'Ciencia Ficción', 'Fantasía', 'Terror', 'Histórico',
           'Romance', 'Thriller', 'Ensayo', 'Poesía', 'Infantil / Juvenil'];

$errors = [];

$book="";
if (isset($_GET['id'])){
    $book = searchBookById($pdo, $_GET['id']);

}


    if ((isset($_POST['btnAddModify'])) &&
        (isset($_POST['title']) && !empty($_POST['title'])) &&
        (isset($_POST['author']) && !empty($_POST['author'])) &&
        (isset($_POST['genre']) && !empty($_POST['genre'])) &&
        (isset($_POST['year']) && !empty($_POST['year'])) &&
        (isset($_POST['price']) && !empty($_POST['price'])) &&
        (isset($_POST['stock']))
    ){

        if (!$book){ //añadir

        addBook($pdo, $_POST['title'], $_POST['author'], $_POST['genre'], $_POST['year'], $_POST['price'], $_POST['stock'] );
        echo "<script> window.location.href = 'index.php?alert=correctlyAdded'</script>";

        }else{ //actualizar
            updateBook($pdo, $_POST['idOculto'], $_POST['title'], $_POST['author'], $_POST['genre'], $_POST['year'], $_POST['price'], $_POST['stock']);
            echo "<script>window.location.href = 'index.php?alert=modifySuccess'; </script>";
        }


    }else {
        if (isset($_POST['btnAddModify'])){
            $errors[] = "Introduce todos los datos necesarios.";
        }
    }
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BiblioTech — Añadir libro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-body-tertiary">

    <?php require_once __DIR__ . '/layout/menu.php'; ?>

    <main class="container py-4" style="max-width: 600px;">
        <h1 class="h3 fw-bold mb-4"><?php echo $book ? "Modificar libro" : "Añadir libro"?></h1>

        <?php if (!empty($errors)) { ?>
            <div class="alert alert-danger">
                <ul class="mb-0">
                    <?php foreach ($errors as $e) { ?>
                        <li><?= htmlspecialchars($e) ?></li>
                    <?php } ?>
                </ul>
            </div>
        <?php } ?>

        <div class="card border-0 shadow-sm">
            <div class="card-body p-4">
                <form method="POST" action="">

                    <input type="hidden" name="idOculto" value="<?php echo (!empty($book)) ? $book['id'] : "" ?>" >

                    <div class="mb-3">
                        <label for="title" class="form-label fw-semibold">Título</label>
                        <input type="text" class="form-control" id="title" name="title"  value="<?php echo (!empty($book)) ? $book['title'] : "" ?>" maxlength="150" required  >
                    </div>

                    <div class="mb-3">
                        <label for="author" class="form-label fw-semibold">Autor *</label>
                        <input type="text" class="form-control" id="author"  value="<?php echo (!empty($book)) ? $book['author'] : "" ?>" name="author" maxlength="120" required>
                    </div>

                    <div class="mb-3">
                        <label for="genre" class="form-label fw-semibold">Género *</label>
                        <select class="form-select" id="genre" name="genre" required>
                            <option value="" disabled <?= empty($book['genre']) ? 'selected' : '' ?>>— Selecciona un género —</option>
                            <?php foreach ($genres as $g): ?>
                                <option value="<?= htmlspecialchars($g) ?>" <?= (!empty($book['genre']) && $book['genre'] == $g) ? 'selected' : '' ?>>
                                    <?= htmlspecialchars($g) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="year" class="form-label fw-semibold">Año *</label>
                            <input type="number" class="form-control" id="year" name="year"
                                   min="1000" max="<?= date('Y') ?>"  value="<?php echo (!empty($book)) ? $book['year'] : "" ?>"  required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="price" class="form-label fw-semibold">Precio (€)</label>
                            <input type="number" class="form-control" id="price" name="price" min="0" step="0.01" value="<?php echo (!empty($book)) ? $book['price'] : "" ?>" >
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="stock" class="form-label fw-semibold">Stock</label>
                            <input type="number" class="form-control" id="stock" name="stock" min="0" value="<?php echo (!empty($book)) ? $book['stock'] : "" ?>" >
                        </div>
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" name= 'btnAddModify' class="btn btn-primary"><?php echo (!empty($book)) ? "Modificar libro" : "Añadir libro" ?></button>
                        <a href="books.php" class="btn btn-outline-secondary">Cancelar</a>
                    </div>

                </form>
            </div>
        </div>
    </main>
</body>
</html>
