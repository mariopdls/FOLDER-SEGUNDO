<?php 
require_once __DIR__ . '/userRepository.php';

if (isset($_GET['id'])){
    $id = (int)$_GET['id'];
    $user = findUserById($pdo, $id);
}



?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestionar usuario</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <h2>
        
        <?php echo !empty($id) ? "Editar" : "Añadir" ;?>


    </h2>

    <form action="" method="post">
        <input type="hidden" name="idOculto" value="<?php echo $id ?? ''; ?>">

        <div class="mb-3">
            <label class="form-label">Nombre de acceso</label>
            <input type="text" name="username" class="form-control" value="<?php echo !empty($id) ? $user['username'] : ""; ?> ">
        </div>

        <div class="mb-3">
            <label class="form-label">Nombre completo</label>
            <input type="text" name="full_name" class="form-control" value="<?php echo !empty($id) ? $user['full_name'] : ""; ?> ">
        </div>

        <div class="mb-3">
            <label class="form-label">Correo</label>
            <input type="text" name="email" class="form-control" value="<?php echo !empty($id) ? $user['email'] : ""; ?> ">
        </div>

        <div class="mb-3">
            <label class="form-label">Contraseña</label>
            <input type="password" name="password" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Rol</label>
            <select name="role" class="form-select">
                <option value="user">user</option>
                <option value="admin">admin</option>
            </select>
        </div>

        <button type="submit" name="btnGuardar" class="btn btn-primary"><?php echo !empty($id) ? "Editar" : "Añadir" ;?></button>
        <a href="listUsers.php" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
</body>
</html>