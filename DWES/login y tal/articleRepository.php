<?php
require_once 'config.php';


// 1. Cuenta el número total de artículos en la base de datos
function countAll($connection) {
    $query = "SELECT COUNT(*) FROM articles";
    $statement = $connection->prepare($query);
    $statement->execute();

    return (int) $statement->fetchColumn();
}

// 2. Obtiene los artículos correspondientes a una página concreta
function findArticlePage($connection, $pageNumber, $pageSize) {
    // Calculamos el desplazamiento (OFFSET)
    $nextRecord = ($pageNumber - 1) * $pageSize;

    $query = "SELECT id, name, description 
              FROM articles 
              ORDER BY id ASC 
              LIMIT :pageSize OFFSET :nextRecord";

    $statement = $connection->prepare($query);

    // Vinculamos estrictamente como enteros
    $statement->bindValue(':pageSize', (int)$pageSize);
    $statement->bindValue(':nextRecord', (int)$nextRecord);

    $statement->execute();

    return $statement->fetchAll();
}
?>