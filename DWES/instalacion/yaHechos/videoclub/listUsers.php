<?php 
require_once __DIR__ . '/auth.php';
require_once __DIR__ . '/userRepository.php';
$allUsers = getAllUsers($pdo);
$user = requireAuth($pdo);


if (isset($_POST['remove']) && !empty($_POST['hiddenId'])){
    removePerson($pdo, $_POST['hiddenId']);
    header("Location:listUsers.php");
    exit;
}

?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Videoclub Retro — Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
                <nav>
        <a href="listMovies.php">Ver películas</a>
        <a href="myData.php">Ver mis datos</a>
        <a href="logout.php">Cerrar sesión</a>
        <?php if (isAdmin($user)){
            echo "<a href='movieForm.php'>Añadir películas</a>
                  <a href='listUsers.php'>Gestionar usuarios</a>";
        } ?>

        <h2>Gestión de usuarios</h2>
        <a href="userForm.php" class="btn btn-primary mb-3">Añadir usuario</a>
        <table class="table table-striped">
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

                if (isset($allUsers)){
                    foreach ($allUsers as $user) {
                        echo "
                        <tr>

                            <td>{$user['id']}</td>
                            <td>{$user['username']}</td>
                            <td>{$user['full_name']}</td>
                            <td>{$user['email']}</td>
                            <td>{$user['role']}</td>
                            <td>";

                            if ($user['role']!='admin'){
                                echo "<a href='userForm.php?id={$user['id']}'> <button> Cambiar rol </button></a>
                                      <form method='post' action=''> 
                                       <input type='hidden' name='hiddenId' value='{$user['id']}'>
                                       <button type='submit' name='remove'>Eliminar</button>
                                      </form>
                                ";
                            }

                            echo "</td>
                        
                        
                        </tr>
                        ";
                    }
                }else{
                    echo "<div alert alert-danger> No se encontraron usuarios </div>";
                }

                ?>
            </tbody>
        </table>
    </div>
</body>
</html>