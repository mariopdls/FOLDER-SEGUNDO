<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    




    <form action="" method="get">

    <label for="nombre"></label>
    <input type="text" id= "nombre" name="nombre">

    <label for="mayorEdad"></label>
    <input type="text" id= "mayorEdad" name="mayorEdad">


    <br>
    <br>

    <label for="multiplicar"></label>
    <input type="text" id= "multiplicar" name="multiplicar">

    <button type="submit"> Añadir </button>


    </form>

        <?php
    $test = $_GET["nombre"];
    $edad = $_GET["mayorEdad"];
    $multiplo = $_GET["multiplicar"];
    ?>

    <?php 

        if (isset ($_GET["nombre"])) {
            $test = $_GET["nombre"];
        } else{
            $test="";
        }

        if ($edad<18) {
            echo "No eres mayor, $test" . "<br>";
        }else{
            echo "Bienvenido, $test" . "<br>";

        }


        for ($i=0; $i < 11 ; $i++) { 
            
            echo "$multiplo*$i = " . $multiplo*$i ."<br>"; 
            
        }

        

    ?>

</body>
</html>
