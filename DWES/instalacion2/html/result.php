<?php
session_start();
require_once("layout/header.php");
require_once("Database.php");
require_once("functions/functionsBonoloto.php");


$bonolotoNums = getLotteryList($pdo);


if (empty($bonolotoNums)){
    echo "<div alert alert-danger>La lista de números no está disponible </div>";
}

?>
<h1 class="text-center">Resultados</h1>
<div class="container mt-5">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Fecha</th>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>Estrella 1</th>
                <th>Estrella 2</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
                
                <?php 
                
                foreach ($bonolotoNums as $key => $value) {
                    $number = $bonolotoNums[$key]['numeros'];
                    $numbers= explode(",", $number);

                    $stars = $bonolotoNums[$key]['estrellas'];
                    $separatedStars = explode(",", $stars);
                    echo "
                <tr>
                    <td>{$value['fecha_sorteo']}</td>
                    <td>{$numbers[0]}</td>
                    <td>{$numbers[1]}</td>
                    <td>{$numbers[2]}</td>
                    <td>{$numbers[3]}</td>
                    <td>{$numbers[4]}</td>
                    <td>{$separatedStars[0]} </td>
                    <td>{$separatedStars[1]} </td>
                    <td>

                <form action='showWinner.php' method='POST' class='row g-2 align-items-center'>
                    <div class='col-auto'>
                        <input type='hidden' name='hiddenId' value='{$value['fecha_sorteo']}'>
                        <button type='submit' name='postBtn' class='btn btn-primary'>Ver ganadores</button>
                    </div>
                </form>
                    
                    
                </td>
                </tr>
                ";
                }

                ?>
          
               


        </tbody>
    </table>

    <a href="index.php" class="btn btn-primary"><span class="glyphicon glyphicon-th-list"></span>Volver</a>
</div>
<?php
require_once("layout/footer.php");
?>