<?php 

function getUser($pdo, $username){

    $query= "SELECT id, username, password,full_name,email,role from users where username=:username";
    $statement = $pdo -> prepare($query);
    $statement -> bindParam(":username", $username);
    $statement -> execute();
    $user = $statement->fetch(); 

    return $user;
}

function authUser($pdo){
    $query = "SELECT username, full_name, email, role from users where id=:id";
    $statement = $pdo -> prepare($query);
    $statement -> bindParam(":id", $_SESSION['userId']);
    $statement -> execute();
    return $statement -> fetch();
}

function getAllUsers($pdo){
    $query = "SELECT * from users";
    $statement = $pdo -> prepare($query);
    $statement -> execute();
    return $statement -> fetchAll();
}

function removeUser($pdo, $id){
    $query = "DELETE FROM users where id=:id";
    $statement = $pdo -> prepare($query);
    $statement -> bindParam(":id", $id);
    $statement -> execute();
}


function getUserById($pdo, $id){

    $query= "SELECT id, username, password,full_name,email,role from users where id=:id";
    $statement = $pdo -> prepare($query);
    $statement -> bindParam(":id", $id);
    $statement -> execute();
    $user = $statement->fetch(); 

    return $user;
}

function modifyUser($pdo, $id, $username, $full_name, $email, $role, $password){
    $query= "UPDATE users SET username=:username, full_name=:full_name, email=:email, role=:role, password=:password where id=:id";
    $statement = $pdo -> prepare($query);
    $statement -> bindParam(":id", $id);
    $statement -> bindParam(":username", $username);
    $statement -> bindParam(":full_name", $full_name);
    $statement -> bindParam(":email", $email);
    $statement -> bindParam(":role", $role);
    $statement -> bindParam(":password", $password);

    $statement -> execute();

}