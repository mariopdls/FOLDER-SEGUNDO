<?php
session_start();
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/bookRepository.php';

if (isset($_POST['btnAddToCart'])) {

    $bookId   = (int) $_POST['bookId'];
    $quantity = (int) $_POST['quantity'];

    $book = searchBookById($pdo, $bookId);

    if (!$book || $quantity <= 0) {
        echo "<script>window.location.href = 'books.php';</script>";
        exit;
    }

    if ($book['stock'] <= 0) {
        echo "<script>window.location.href = 'bookDetail.php?id=" . $bookId . "';</script>";
        exit;
    }

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    if (isset($_SESSION['cart'][$bookId])) {
        $current = $_SESSION['cart'][$bookId];
    } else {
        $current = 0;
    }

    $newQty = $current + $quantity;

    if ($newQty > $book['stock']) {
        echo "<script>window.location.href = 'bookDetail.php?id=" . $bookId . "';</script>";
        exit;
    }

    $_SESSION['cart'][$bookId] = $newQty;
    echo "<script>window.location.href = 'bookDetail.php?id=" . $bookId . "';</script>";
    exit;
}

echo "<script>window.location.href = 'books.php';</script>";
exit;
?>