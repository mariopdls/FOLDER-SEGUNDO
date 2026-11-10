<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/auth.php';
require_once __DIR__ . '/userRepository.php';

$currentUser = requireAuth($pdo);

if (!isAdmin($currentUser)){
    header("Location:index.php");
    exit;
}

$users = findAllUsers($pdo);


if (isset($_GET['btnEdit'])){

}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <nav class="navbar navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="index.php">Biblioteca</a>
        </div>
    </nav>

    <div class="container">
        <h2 class="mb-4">Gestión de usuarios</h2>

        <a href="userForm.php" class="btn btn-primary mb-3">Añadir usuario</a>

        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Usuario</th>
                    <th>Nombre completo</th>
                    <th>Email</th>
                    <th>Rol</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
               <?php 
            // $botonToggle = isset($_GET['id']) ? 'Modificar' : 'Editar';
              foreach ($users as $datos) {
            
            // $edicionName = !isset($_GET['id']) ?  $datos['username'] : '<input type="text" name="nameEdit" value="'.$datos['username'].'">';
            // $edicionFullname = !isset($_GET['id']) ?  $datos['full_name'] : '<input type="text" name="fullnameEdit" value="'.$datos['full_name'].'">';
            // $edicionEmail = !isset($_GET['id']) ?  $datos['email'] : '<input type="text" name="emailEdit" value="'.$datos['email'].'">';
            // $edicionRole = !isset($_GET['id']) ?  $datos['role'] : '<input type="text" name="roleEdit" value="'.$datos['role'].'">';

               echo '
                
                <tr>
                    <td>' . $datos['id']. '</td>
                    <td>' . $datos['username']  . '</td>
                    <td>' . $datos['full_name'] . '</td>
                    <td>' . $datos['email'] . '</td>
                    <td>' . $datos['role'] . '</td>
                    <td>
                   <a href="userForm.php?id='.$datos['id'].'">Editar</a>
                    <form action="" method="post">
                    <input type="hidden" name="hiddenParam" value="'.$datos['id'].'">
                    <button name="btnEliminar">Eliminar</button>
                    </form>

                    </td>
                </tr>
                
                
                ';
               }

               ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>