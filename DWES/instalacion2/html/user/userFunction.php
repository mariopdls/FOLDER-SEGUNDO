<?php
function getRole($pdo, $username, $password){
        $stmt = $pdo -> prepare('SELECT password, role FROM usuarios WHERE username = :username');
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($user && password_verify($password, $user['password'])) {
            session_regenerate_id();
            return $user['role'];
        } else {
            return null;
        }
   
    }

function getWinnersOfTheDay($pdo, $fecha_sorteo) {
    $query = "SELECT * from boletos where fecha_sorteo=:fecha_sorteo";
    $statement = $pdo -> prepare($query);
    $statement -> bindParam(':fecha_sorteo', $fecha_sorteo);
    $statement -> execute();
    return $statement -> fetchAll();
}

function authUser($pdo, $username){

$query = "SELECT username,password,direccion,idPoblacion,role from usuarios where username=:username";
$statement = $pdo -> prepare($query);
$statement -> bindParam(":username", $username);
$statement -> execute();
    return $statement -> fetch();

}

function getPoblation ($pdo){
    $query= "SELECT id, poblacion FROM poblaciones ORDER BY poblacion ASC";
    $statement = $pdo -> prepare($query);
    $statement-> execute();
    return $statement -> fetchAll();
}

function getUsers($pdo){
    $query = "SELECT * from usuarios";
    $statement = $pdo -> prepare($query);
    $statement -> execute();
    return $statement->fetchAll();
}

function getUser($pdo, $username) { 
    $query= "SELECT username, idPoblacion FROM usuarios where username=:username";
    $statement = $pdo -> prepare($query);
    $statement -> bindParam(":username",$username);
    $statement -> execute();
    return $statement -> fetch();
}

function getPoblacion($pdo, $id){
    $query = "SELECT poblacion from poblaciones where id=:id";
    $statement = $pdo -> prepare($query);
    $statement -> bindParam(":id", $id);
    $statement -> execute();
    return $statement -> fetch();
}

function getAddress($pdo, $username){

    $query = "SELECT direccion from usuarios where username=:username";
    $statement = $pdo -> prepare($query);
    $statement -> bindParam(":username", $username);
    $statement -> execute();
    return $statement -> fetch();
}

function getRoleUserList($pdo, $username){

    $query = "SELECT role from usuarios where username=:username";
    $statement = $pdo -> prepare($query);
    $statement -> bindParam(":username", $username);
    $statement -> execute();
    return $statement -> fetch();
}




function saveUser($pdo, $username, $direccion, $idPoblacion, $role){
    $query = "UPDATE usuarios SET username=:username,direccion=:direccion,idPoblacion=:idPoblacion,role=:role WHERE username=:username";
    $statement = $pdo -> prepare($query);
    $statement -> bindParam(":username", $username);
    $statement -> bindParam(":direccion", $direccion);
    $statement -> bindParam(":idPoblacion", $idPoblacion);
    $statement -> bindParam(":role", $role);
    $statement -> execute();
}

function getIdPoblation($pdo, $poblacion){
    $query = "SELECT id from poblaciones where poblacion=:poblacion";
    $statement = $pdo -> prepare($query);
    $statement -> bindParam(":poblacion", $poblacion);
    $statement -> execute();
    return $statement -> fetch();
}