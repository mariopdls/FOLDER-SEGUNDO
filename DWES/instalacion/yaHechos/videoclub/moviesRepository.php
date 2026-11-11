<?php

function findPage ($pdo, $page, $size){
    $offset = ($page-1)*$size;
    $query = "SELECT * FROM movies LIMIT :size OFFSET :offset";
    $statement = $pdo->prepare($query);
    $statement->bindParam(':size', $size, PDO::PARAM_INT);
    $statement->bindParam(':offset', $offset, PDO::PARAM_INT);
    $statement->execute();
    return $statement->fetchAll();
}

function countAll($pdo) {
    $query = "SELECT COUNT(*) FROM movies";
    $statement = $pdo->prepare($query);
    $statement->execute();
    return $statement->fetchColumn();
}

function removeMovie($pdo, $id){
    $query = "DELETE FROM movies where id = :id";

    $statement = $pdo -> prepare($query);
    $statement -> bindParam(":id", $id);
    return $statement -> execute ();
}

function updateMovie ($pdo, $id,$title,$director,$genre,$year,$available) {

    $query = "UPDATE movies SET title=:title,director=:director,genre=:genre,year=:year,available=:available WHERE id=:id";

    $statement = $pdo -> prepare($query);
    $statement -> bindParam(":id",$id);
    $statement -> bindParam(":director",$director);
    $statement -> bindParam(":title",$title);
    $statement -> bindParam(":genre",$genre);
    $statement -> bindParam(":year",$year);
    $statement -> bindParam(":available",$available);
    $statement -> execute();

}

function getMovie($pdo, $id){

    $query = "SELECT title, director, genre, year, available FROM movies WHERE id=:id";
    $statement = $pdo -> prepare($query);
    $statement -> bindParam(":id", $id);
    $statement -> execute();
    return $statement -> fetch();

}

function addMovie($pdo,$title,$director,$genre,$year,$available){
    $query = "INSERT into movies (title,director,genre,year,available) VALUES (:title,:director,:genre,:year,:available)";
    $statement = $pdo -> prepare($query);
    $statement -> bindParam(":director",$director);
    $statement -> bindParam(":title",$title);
    $statement -> bindParam(":genre",$genre);
    $statement -> bindParam(":year",$year);
    $statement -> bindParam(":available",$available);
    $statement -> execute();
}