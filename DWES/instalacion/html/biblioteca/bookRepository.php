<?php 
function countAll($pdo){
    $query = "SELECT count(*) FROM books ";

    $statement = $pdo -> prepare($query);
    $statement -> execute();

    $books = $statement -> fetchColumn();

    return $books;
}

function findPage($pdo, $page, $size){
    $offset = ($page - 1) * $size;

    $query = "SELECT * FROM books LIMIT :size OFFSET :offset";

    $statement = $pdo -> prepare($query);

    $statement -> bindParam(":size", $size);
    $statement -> bindParam(":offset", $offset);

    $statement -> execute();

    $result = $statement -> fetchAll();

    return $result;
}

function removeBook($pdo, $id){
    $query = "DELETE from books WHERE id = :id";
    $statement = $pdo -> prepare($query);
    $statement -> bindParam(":id", $id);
    $statement -> execute();
}

function findById($pdo, $id){
    $query= "SELECT * from books where id = :id";
    $stmnt = $pdo -> prepare($query);
    $stmnt -> bindParam(":id", $id);
    $stmnt -> execute();
    $finded = $stmnt -> fetch();
    return $finded;
}

function insertBook($pdo, $data){

    $query = "INSERT INTO books (title, author, genre, year) 
              VALUES (:title, :author, :genre, :year)";

    $statement = $pdo -> prepare($query);
    $statement -> execute($data);

    return $statement;
}

function updateBook($pdo, $id, $data){
    $query = "UPDATE books SET title=:title, author=:author, genre=:genre, year=:year where id=:id";
    $statement = $pdo -> prepare($query);
    $statement->bindParam(':title', $data['title']);
    $statement->bindParam(':author', $data['author']);
    $statement->bindParam(':genre', $data['genre']);
    $statement->bindParam(':year', $data['year']);
    $statement->bindParam(':id', $id, PDO::PARAM_INT);
    $statement->execute();

}
