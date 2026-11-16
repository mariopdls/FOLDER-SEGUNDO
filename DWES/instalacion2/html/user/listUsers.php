<?php
session_start();
require_once("../layout/header.php");
require_once ("../Database.php");
require_once ("userFunction.php");
$allUsers = getUsers($pdo);
?>

<h1 class="text-center">Resultados</h1>
<div class="container mt-5">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Usuario</th>
                <th>Contraseña</th>
                <th>Direccion</th>
                <th>Poblacion</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
                
                <?php 
                
                foreach ($allUsers as $user) {
                    $poblacion = getPoblacion($pdo, $user['idPoblacion']);
                    echo "
                    
                    <tr>

                    <td>{$user['username']}</td>
                    <td>{$user['password']}</td>
                    <td>{$user['direccion']}</td>
                    <td>"; echo $poblacion['poblacion']; echo "</td>
                    <td> <a href=user.php?id={$user['username']}> <button> Modificar </button></a> </td>

                    </tr>
                    
                    ";
                }

                
                ?>
          
               


        </tbody>
    </table>

    <a href="index.php" class="btn btn-primary"><span class="glyphicon glyphicon-th-list"></span>Volver</a>
</div>



<?php     require_once("../layout/footer.php");?>