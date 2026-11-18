<?php
session_start();
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/userRepository.php';
$roles  = ['user', 'admin'];
$errors = [];

if (isset($_GET['id']) && !empty($_GET['id'])){
    $userModify = getUserById($pdo, $_GET['id']);
}

if (isset($_POST['btnModifyUser'])){
    if (

    (isset($_POST['username']) && !empty($_POST['username'])) &&
    (isset($_POST['idOculto']) && !empty($_POST['idOculto'])) &&
    (isset($_POST['full_name']) && !empty($_POST['full_name'])) &&
    (isset($_POST['email']) && !empty($_POST['email'])) &&
    (isset($_POST['role']) && !empty($_POST['role'])) &&
    (isset($_POST['password']) && !empty($_POST['password']))

    ){

        modifyUser($pdo, $_POST['idOculto'], $_POST['username'],$_POST['full_name'], $_POST['email'], $_POST['role'], $_POST['password']);
        echo "<script> window.location.href = 'users.php'</script>";
    }
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BiblioTech — Añadir usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-body-tertiary">

    <?php require_once __DIR__ . '/layout/menu.php'; ?>

    <main class="container py-4" style="max-width: 540px;">
        <h1 class="h3 fw-bold mb-4">Añadir usuario</h1>

        <?php if (!empty($errors)) { ?>
            <div class="alert alert-danger">
                <ul class="mb-0">
                    <?php foreach ($errors as $e) { ?>
                        <li><?= htmlspecialchars($e) ?></li>
                    <?php } ?>
                </ul>
            </div>
        <?php } ?>

        <div class="card border-0 shadow-sm">
            <div class="card-body p-4">
                <form action='' method="POST">

                    <input type="hidden" name="idOculto" value="<?php echo $userModify ?  $userModify['id'] : "" ?>">

                    <div class="mb-3">
                        <label for="username" class="form-label fw-semibold">Nombre de usuario *</label>
                        <input type="text" class="form-control" id="username" value= "<?php echo $userModify ?  $userModify['username'] : "" ?>" name="username" maxlength="30" required>
                    </div>

                    <div class="mb-3">
                        <label for="full_name" class="form-label fw-semibold">Nombre completo *</label>
                        <input type="text" class="form-control" value="<?php echo $userModify ?  $userModify['full_name'] : "" ?>" id="full_name" name="full_name" maxlength="100" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label fw-semibold">Correo electrónico *</label>
                        <input type="email" class="form-control" value="<?php echo $userModify ?  $userModify['email'] : "" ?>" id="email" name="email" maxlength="150" required>
                    </div>

                    <div class="mb-3">
                        <label for="role" class="form-label fw-semibold">Rol *</label>
                        <select class="form-select" id="role" name="role" required>
                            <?php foreach ($roles as $r) { ?>
                                <option value="<?= $r ?>" <?php echo ($r === $userModify['role']) ? $userModify['role'] :  "" ?> ><?= ucfirst($r) ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="password" class="form-label fw-semibold">Contraseña *</label>
                        <input type="password" class="form-control" id="password"  name="password" value="<?php echo $userModify ? $userModify['password']: "required" ?>">
                        <div class="form-text">Entre 8 y 64 caracteres.</div>
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" name="btnModifyUser" class="btn btn-primary"><?php echo $userModify ?  "Modificar Usuario": "Añadir usuario" ?></button>
                        <a href="users.php" class="btn btn-outline-secondary">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>
