<?php
session_start();
require_once  __DIR__ . '/config.php';
require_once __DIR__ . '/bookRepository.php';
require_once __DIR__ . '/userRepository.php';



$error="";
if (isset($_GET['id']) && !empty($_GET['id'])){

    $book = searchBookById($pdo, $_GET['id']);
    $user = authUser($pdo);

    if (!$book){
        $error = "Ese libro no consta en nuestra BBDD.";
        //no he redirigido pero he puesto el mensaje de que no consta en la bbdd. para redirigir seria un window.location.href = index.php?alert=noExists
    }

    if (!$user){
        $error = "Usuario inválido.";
    }
}

?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BiblioTech — Ficha del libro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-body-tertiary">

    <?php require_once __DIR__ . '/layout/menu.php'; ?>


    <main class="container py-4" style="max-width: 680px;">

        <div class="d-flex justify-content-between align-items-start mb-4">
            <h1 class="h3 fw-bold mb-0">El nombre del viento</h1>
            <a href="books.php" class="btn btn-outline-secondary btn-sm">← Volver</a>
        </div>

    <?php if (!empty($book)) { ?>
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <dl class="row mb-0">
                    <dt class="col-sm-3">Autor</dt>
                    <dd class="col-sm-9"><?php echo $book['title'] ?></dd>

                    <dt class="col-sm-3">Género</dt>
                    <dd class="col-sm-9"><?php echo $book['genre'] ?></dd>

                    <dt class="col-sm-3">Año</dt>
                    <dd class="col-sm-9"><?php echo $book['year'] ?></dd>

                    <dt class="col-sm-3">Precio</dt>
                    <dd class="col-sm-9"><?php echo $book['price'] ?> €</dd>

                    <dt class="col-sm-3">Stock</dt>
                    <dd class="col-sm-9"><?php echo ($book['stock']===0) ? "Sin existencias" : $book['stock'] ?></dd>
                </dl>
                <?php if ($user['role']=="admin"){ ?> <a href="bookForm.php?id=<?php echo $book['id']?>"><button> Modificar </button> </a> <?php }?> 

            </div>
        </div>
    <?php }else { ?> <div class='alert alert-danger'> <?php htmlspecialchars($error) ?></div><?php } ?>

    <?php if ($book['stock']>0){?>
    <form method="POST" action="addToCart.php">
    <input type="hidden" name="bookId" value="<?= $book['id'] ?>">
    <div class="d-flex gap-2 align-items-center mt-3">
        <input type="number" name="quantity" value="1" min="1" 
               max="<?= $book['stock'] ?>" class="form-control" style="width:90px">
        <button type="submit" name= "btnAddToCart"class="btn btn-primary">Añadir al carrito</button>
    </div>
    </form>
    <?php }?>
    <?php if ($book['stock']<1){ ?>

        <p class="text-danger fw-semibold mt-3">Agotado</p>
    <?php }?>
    </main>
</body>
</html>
