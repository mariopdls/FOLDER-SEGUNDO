<?php

    $persona = [

        [
        "codigo" => 1,
        "nombre" => "Mario",
        "apellido" => "Porras",
        "edad" => "24"
    ],

    [
        "codigo" => 2,
        "nombre" => "Reyes",
        "apellido" => "Aguilar",
        "edad" => "26"
    ],

    [
        "codigo" => 3,
        "nombre" => "Carlos",
        "apellido" => "Morales",
        "edad" => "32"
    ]

    ];

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABLA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">

    <table class="table table-striped">
      <thead>
        <th scope="co1"> Codigo </th>
        <th scope="co1"> Codigo </th>
        <th scope="co1"> Apellido </th>
        <th scope="co1"> Edad </th>


      </thead>
      <tbody>
        
      <?php 
        // 1. Recorremos cada una de las 3 personas
        foreach ($persona as $propiedad => $lista_propiedades) {
            echo "<tr>";

            // 2. Metemos el segundo bucle DENTRO para pintar los datos de la persona actual
            foreach ($lista_propiedades as $clave => $value) {
                echo "<td>" . $value . "</td>";
            }
        }

            echo "</tr>";
      ?>


      </tbody>
    </table>

</body>
</html>