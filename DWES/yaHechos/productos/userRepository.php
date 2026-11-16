<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/auth.php';

$currentUser = requireAuth($pdo);

function findAllUsers($pdo) {
    $query = "SELECT id, username, full_name, email, role FROM users";
    $statement = $pdo -> prepare($query);
    $statement -> execute();
    $result = $statement -> fetchAll();

    return $result;
}


function updateUser($pdo, $id, $data) {

    $query = "UPDATE users  SET  username= :username, full_name=:full_name, email=:email, role=:role WHERE id=:id" ;

    $statement = $pdo -> prepare($query);
    $statement -> bindParam(":username", $data['username']);
    $statement -> bindParam(":full_name", $data['full_name']);
    $statement -> bindParam(":email", $data['email']);
    $statement -> bindParam(":role", $data['role']);
    $statement -> bindParam(":id", $id);

    $statement -> execute();

}

function findUserById($pdo, $id) {
    $query = "SELECT id, username, full_name, email, role FROM users WHERE id = :id";
    $statement = $pdo->prepare($query);
    $statement->bindParam(":id", $id, PDO::PARAM_INT);
    $statement->execute();
    return $statement->fetch();
}