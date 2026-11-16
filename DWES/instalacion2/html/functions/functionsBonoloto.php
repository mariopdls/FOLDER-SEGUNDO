<?php

//Comprueba si existe un usuario con ese password. Si no existe devuelve null. Si existe devuelve el role

function getLotteryList($pdo){
    $query = "SELECT id, username, numeros, estrellas, fecha_sorteo FROM boletos ORDER BY fecha_sorteo";
    $statement = $pdo -> prepare($query);
    $statement -> execute();
    return $statement -> fetchAll();
}

function insertIntoBoletos ($pdo,$username, $numeros, $estrellas, $fecha_sorteo){
    $query= "INSERT into boletos (username, numeros, estrellas, fecha_sorteo) VALUES (:username, :numeros, :estrellas, :fecha_sorteo)";
    $statement = $pdo -> prepare($query);
    $statement -> bindParam(":username", $username);
    $statement -> bindParam(":numeros", $numeros);
    $statement -> bindParam(":estrellas", $estrellas);
    $statement -> bindParam(":fecha_sorteo", $fecha_sorteo);
    $statement -> execute();

}