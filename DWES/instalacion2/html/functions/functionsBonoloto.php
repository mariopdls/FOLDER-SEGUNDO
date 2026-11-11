<?php

//Comprueba si existe un usuario con ese password. Si no existe devuelve null. Si existe devuelve el role

function getLotteryList($pdo){
    $query = "SELECT id, username, numeros, estrellas, fecha_sorteo FROM boletos ORDER BY fecha_sorteo";
    $statement = $pdo -> prepare($query);
    $statement -> execute();
    return $statement -> fetchAll();
}