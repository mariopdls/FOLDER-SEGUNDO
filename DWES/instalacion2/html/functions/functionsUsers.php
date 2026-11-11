<?php

//Comprueba si existe un usuario con ese password. Si no existe devuelve null. Si existe devuelve el role
function getResult(){

} //también llamado AuthUser


function getWinnersOfTheDay($pdo, $fecha_sorteo) {
    $query = "SELECT * from boletos where fecha_sorteo=:fecha_sorteo";
    $statement = $pdo -> prepare($query);
    $statement -> bindParam(':fecha_sorteo', $fecha_sorteo);
    $statement -> execute();
    return $statement -> fetchAll();
}