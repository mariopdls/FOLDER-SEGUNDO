<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once __DIR__ . '/config.php';

function requireAuth($pdo){

    if(empty($_SESSION['userId'])){
        header("Location: login.php");
        exit;
    }

    

    $query = "SELECT id, username, full_name, role FROM users WHERE id = :id ";
    $statement = $pdo -> prepare($query);
    $statement -> bindParam(":id", $_SESSION['userId']);
    $statement -> execute();

    $user = $statement->fetch();

    if (!$user) {
    session_destroy();
    header("Location: login.php");
    exit;
}
return $user;

}