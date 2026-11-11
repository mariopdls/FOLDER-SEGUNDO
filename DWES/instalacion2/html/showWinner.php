<?php 
session_start();
require_once("layout/header.php");
require_once("Database.php");
require_once ("functions/functionsUsers.php");


$users = getWinnersOfTheDay($pdo, $_POST['hiddenId']);
if (empty($users)){
    echo "<div alert alert-danger>No existen registros ganadores> </div>";
}
?>



<div div class="container mt-5">    <a href="./index.php" class="btn btn-primary"><span class="glyphicon glyphicon-th-list"></span>Volver</a></div>
<?php require_once("layout/footer.php");?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<h1 class="text-center">Resultados</h1>
<div class="container mt-5">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Usuario</th>
                <th>Números</th>
                <th>Estrella</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
                
                <?php 
                
                foreach ($users as $user) {
                    echo "
                <tr>
                    <td>{$user['username']}</td>
                    <td>{$user['numeros']}</td>
                    <td>{$user['estrellas']}</td>
                    <td>{$user['fecha_sorteo']} </td>
                                    
                </tr>
                ";
                }

                ?>
          
               


        </tbody>
    </table>

    <a href="index.php" class="btn btn-primary"><span class="glyphicon glyphicon-th-list"></span>Volver</a>
</div>


</body>
</html>