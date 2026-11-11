<?php 

function getAllUsers($pdo){
    $query = "SELECT * FROM users";
    $statement = $pdo -> prepare($query);
    $statement -> execute();
    return $statement -> fetchAll();
}

function getUser($pdo, $data){

    $query= "SELECT id, username, full_name, email, role from users where id=:id";

    $statement = $pdo -> prepare($query);
    $statement -> execute($data);

    $user = $statement -> fetch();

    return $user;
}

function getUserFromList($pdo, $id){
    $query = "SELECT id, username, full_name, email, password, role FROM users where id = :id";
    $statement = $pdo -> prepare($query);
    $statement -> bindParam(":id", $id );
    $statement -> execute();
    return $statement -> fetch();
}

function updatePerson($pdo,$id, $username, $full_name, $email, $password, $role) {
    $query = "UPDATE users SET username=:username, full_name=:full_name, email=:email, password=:password, role=:role WHERE id=:id";
    $statement = $pdo -> prepare($query);
    $statement -> bindParam(":id", $id);
    $statement -> bindParam(":username", $username);
    $statement -> bindParam(":full_name", $full_name);
    $statement -> bindParam(":email", $email);
    $statement -> bindParam(":password", $password);
    $statement -> bindParam(":role", $role);
    $statement -> execute();
}

function removePerson($pdo, $id) {
    $query = "DELETE from users WHERE id=:id";
    $statement = $pdo -> prepare($query);
    $statement -> bindParam(":id", $id);
    $statement -> execute();
}

function addPerson($pdo, $username, $full_name, $email, $password, $role) {
    $query= "INSERT INTO users (username, full_name, email, password, role) VALUES (:username, :full_name, :email, :password, :role)";
    $statement = $pdo -> prepare($query);
    $statement -> bindParam(":username", $username);
    $statement -> bindParam(":full_name", $full_name);
    $statement -> bindParam(":email", $email);
    $statement -> bindParam(":password", $password);
    $statement -> bindParam(":role", $role);
    $statement -> execute();
    
}