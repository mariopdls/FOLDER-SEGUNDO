
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
?>