<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruteria</title>
</head>
<body>
    <h1>Elige una fruta</h1>
    <a href="index.php?fruta=manzana"> Ver manzanas </a>
    <a href="index.php?fruta=naranja"> Ver naranjas </a>    
</body>
</html>

<?php 

    if (isset($_GET['fruta'])){
        $frutaNueva = htmlspecialchars($_GET['fruta']);

        if ($frutaNueva == 'manzana'){
            echo "<br>yummyyy manzanitas";
        }
        else if ($frutaNueva=='naranja'){
            echo "<br>Me gustan las naranja";
        }
    }
    else{
        echo "<br>"."No hay fruta aun";
    }




?>