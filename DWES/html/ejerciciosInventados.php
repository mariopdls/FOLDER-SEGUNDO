
<?php 

    $colorFondo = "white";

    if ($_GET["tema"]){
        if ($_GET["tema"]=="claro"){
            $colorFondo= "orange";
        }
        else if ($_GET["tema"]=="naturaleza"){
            $colorFondo= "green";
        }
        else if  ($_GET["tema"]=="oscuro"){
            $colorFondo= "black";
        }
    }
    else{
        echo "No hay nada";
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body style="background-color: <?php echo $colorFondo; ?>; ">
    <a href="http://localhost/2_php_inicio/ejerciciosInventados.php?tema=claro">Modo claro</a>
    <a href="http://localhost/2_php_inicio/ejerciciosInventados.php?tema=naturaleza">Modo naturaleza</a>
    <a href="http://localhost/2_php_inicio/ejerciciosInventados.php?tema=oscuro">Modo oscuro</a>
    
</body>
</html>
