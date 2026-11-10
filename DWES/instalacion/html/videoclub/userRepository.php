<?php 

function getUser($pdo, $data){

    $query= "SELECT id, username, full_name, email, role from users where id=:id";

    $statement = $pdo -> prepare($query);
    $statement -> execute($data);

    $user = $statement -> fetch();

    return $user;
}

function getAllUsers($pdo){
    $query = "SELECT * FROM users";
    $statement = $pdo -> prepare($query);
    $statement -> execute();
    return $statement -> fetchAll();
}