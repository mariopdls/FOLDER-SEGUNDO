<?php
session_start();
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/userRepository.php';

$user = authUser($pdo);

if (!$user || $user['role']!='admin'){
    echo "<script>window.location.href='index.php?alert=noPermission'</script>"; 
}else{
    $allUsers= getAllUsers($pdo);
}


if (isset($_POST['btnRemoveUser']) && $user){
    removeUser($pdo, $_POST['hiddenId']);
    header("Location: users.php");
    exit;
}

    ?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BiblioTech — Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-body-tertiary">

    <?php require_once __DIR__ . '/layout/menu.php'; ?>

    <main class="container py-4">

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="h3 fw-bold mb-0">Gestión de usuarios</h1>
            <a href="userForm.php" class="btn btn-primary btn-sm">+ Añadir usuario</a>
        </div>

        <div class="card border-0 shadow-sm">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-dark">
                            <tr>
                                <th>#</th>
                                <th>Usuario</th>
                                <th>Nombre completo</th>
                                <th>Correo</th>
                                <th>Rol</th>
                                <th class="text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                        <?php foreach ($allUsers as $user) {?>
                            <tr>
                                <td><?php echo htmlspecialchars( $user['id'])?></td>
                                <td><?php echo htmlspecialchars( $user['username'])?></td>
                                <td><?php echo  htmlspecialchars( $user['full_name'])?></td>
                                <td><?php echo htmlspecialchars ($user['email'])?></td>
                                <td><?php echo htmlspecialchars($user['role'])?></td> 
                                <td class="text-center">
                                    <a href="userForm.php?id=<?php echo htmlspecialchars($user['id'])?>" class="btn btn-outline-primary btn-sm">Modificar</a>
                                    <form action="" method="post">
                                    <input type="hidden" name="hiddenId" value="<?php echo $user['id'] ?>">
                                    <button type="submit" class="btn btn-outline-danger btn-sm" name="btnRemoveUser" <?php echo ($user['role']=='admin') ? "disabled" : "enabled" ?>>Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        <?php } ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
