<?php
session_start();
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/bookRepository.php';
require_once __DIR__ . '/userRepository.php';

$cartItems = [];
$total = 0;
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BiblioTech — Carrito</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-body-tertiary">

    <?php require_once __DIR__ . '/layout/menu.php'; ?>

    <main class="container py-4" style="max-width: 800px;">

        <h1 class="h3 fw-bold mb-4">Mi carrito</h1>

        <form method="POST">
            <div class="card border-0 shadow-sm mb-3">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-dark">
                                <tr>
                                    <th>Libro</th>
                                    <th class="text-end">Precio</th>
                                    <th class="text-center">Cantidad</th>
                                    <th class="text-end">Subtotal</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>El nombre del viento</td>
                                    <td class="text-end">12.50 €</td>
                                    <td class="text-center">
                                        <input type="number" name="qty[1]" value="2" min="1" max="10" class="form-control form-control-sm" style="width:70px; margin:auto;">
                                    </td>
                                    <td class="text-end">25.00 €</td>
                                    <td class="text-center">
                                        <button type="submit" name="remove" value="1" class="btn btn-outline-danger btn-sm">✕</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-between align-items-center">
                <strong>Total: 25.00 €</strong>
                <div class="d-flex gap-2">
                    <button type="submit" name="update" class="btn btn-outline-secondary">Actualizar</button>
                    <button type="submit" name="clear" class="btn btn-outline-danger">Vaciar</button>
                    <button type="submit" name="confirm" class="btn btn-success">Confirmar compra</button>
                </div>
            </div>
        </form>

    </main>
</body>
</html>