<?php 

function getCountOfAllBooks($pdo){

    $query = "SELECT count(*) from books";
    $statement = $pdo -> prepare($query);
    $statement ->execute();
    return $statement -> fetchColumn();

}

function listAllBooks($pdo, $size, $offset){ //función para obtener todos los libros
    $query = "SELECT id, title, author, genre, year, price, stock  from books LIMIT :size OFFSET :offset";
    $statement = $pdo -> prepare($query);
    $statement -> bindParam(":size", $size,  PDO::PARAM_INT);
    $statement -> bindParam(":offset", $offset,  PDO::PARAM_INT);
    $statement -> execute();
    return $statement -> fetchAll();
}

function searchBookById($pdo, $id){
    $query = "SELECT id, title, author, genre, year, price, stock  from books where id=:id";
    $statement = $pdo -> prepare($query);
    $statement -> bindParam(":id", $id);
    $statement -> execute();
    return $statement -> fetch();
}

function updateBook ($pdo, $id, $title, $author, $genre, $year, $price, $stock){
    $query= "UPDATE books SET title=:title, author=:author,genre=:genre,year=:year,price=:price,stock=:stock where id=:id";
    $statement = $pdo -> prepare($query);
    $statement -> bindParam(":id", $id, PDO::PARAM_INT);
    $statement -> bindParam(":title", $title);
    $statement -> bindParam(":author", $author);
    $statement -> bindParam(":genre", $genre);
    $statement -> bindParam(":year", $year, PDO::PARAM_INT);
    $statement -> bindParam(":price", $price);
    $statement -> bindParam(":stock", $stock, PDO::PARAM_INT);
    $statement -> execute();

}

function addBook ($pdo, $title, $author, $genre, $year, $price, $stock){
    $query = "INSERT into books (title, author, genre, year, price, stock) values (:title, :author, :genre, :year, :price, :stock)";
    $statement = $pdo -> prepare($query);
    $statement -> bindParam(":title", $title);
    $statement -> bindParam(":author", $author);
    $statement -> bindParam(":genre", $genre);
    $statement -> bindParam(":year", $year);
    $statement -> bindParam(":price", $price);
    $statement -> bindParam(":stock", $stock);
    $statement -> execute();
}
