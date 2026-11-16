<?php
require_once __DIR__ . '/auth.php';
require_once __DIR__ . '/userRepository.php';

$user = requireAuth($pdo);

if (isset($_GET['id'])){
    $userSearched= getUserFromList($pdo,$_GET['id']);
}else{
    $userSearched=null;
}
$error="";
if (isset($_POST['btnGuardar'])){
    if (empty($_POST['idOculto'])){ //si existe, actualizar

        if (
            
            (!isset($_POST['username']) || $_POST['username'] == "") ||
            (!isset($_POST['full_name']) || $_POST['full_name'] == "") ||
            (!isset($_POST['email']) || $_POST['email'] == "") ||
            (!isset($_POST['username']) || $_POST['role'] == "")
            ){
                $error = "<div> Todos los campos excepto la contraseña deben ser rellenados</div>";
        
        }else{
            if (!empty($_POST['password'])){
               $_POST['password'] =  password_hash($_POST['password'], PASSWORD_DEFAULT);
            }
            updatePerson($pdo, $_POST['idOculto'], $_POST['username'],$_POST['full_name'], $_POST['email'], $_POST['password'], $_POST['role'] );
            header("Location: listUsers.php");
            exit;
        }

    }else{ //si no existe, se crea

            if (
            
                (!isset($_POST['username']) || $_POST['username'] == "") ||
                (!isset($_POST['full_name']) || $_POST['full_name'] == "") ||
                (!isset($_POST['email']) || $_POST['email'] == "") ||
                (!isset($_POST['username']) || $_POST['role'] == "")
                ){
                    $error = "<div> Todos los campos excepto la contraseña deben ser rellenados</div>";
        
        }else{
            empty($_POST['password']) ? $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT) : '';
            addPerson($pdo, $_POST['username'],$_POST['full_name'], $_POST['email'], $_POST['password'], $_POST['role']);
            header("Location: index.php");
            exit;

        }

    }
}





?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Videoclub Retro — Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h2></h2>
        <form method="post">
            <input type="hidden" name="idOculto" value=' <?php echo isset($userSearched) ? $userSearched['id'] : ''; ?> '>

            <div class="mb-3">
                <label class="form-label">Nombre de acceso</label>
                <input type="text" name="username" class="form-control" value="<?php echo isset($userSearched) ? $userSearched['username'] : '' ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Nombre completo</label>
                <input type="text" name="full_name" class="form-control" value="<?php echo isset($userSearched) ? $userSearched['full_name'] : '' ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo isset($userSearched) ? $userSearched['email'] : '' ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Contraseña</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Rol</label>
                <select name="role" class="form-select">
                    <option value="user" <?php echo isset($userSearched) && $userSearched['role']==='user' ? 'selected' : ''  ?> >user</option>
                    <option value="admin"  <?php echo isset($userSearched) &&  $userSearched['role']==='admin' ? 'selected' : ''  ?>>admin</option>
                </select>
            </div>

            <button name="btnGuardar" class="btn btn-primary"><?php echo isset($userSearched) ? "Modificar" : "Añadir"?></button>
            <a href="listUsers.php" class="btn btn-secondary">Cancelar</a>
        </form>

        <?php echo !empty($error) ? $error : '' ;?>
    </div>
</body>
</html>