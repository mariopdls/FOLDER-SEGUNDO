<?php
session_start();
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/userRepository.php';

$alert= '';
if (isset($_GET['alert']) && $_GET['alert'] == 'success'){
    $alert= " Sesión iniciada correctamente";
}else if (isset($_GET['alert']) && $_GET['alert'] == 'sessionYet'){
    $alert= " Ya existe una sesión";
}else if (isset($_GET['alert']) && $_GET['alert'] == 'modifySuccess'){
    $alert = "Modificado correctamente";
}else if (isset($_GET['alert']) && $_GET['alert'] == 'correctlyAdded'){
    $alert = "Añadido correctamente";
}else if (isset($_GET['alert']) && $_GET['alert'] == 'noPermission'){
    $alert = "No tienes permisos para acceder aquí.";
}else if (isset($_GET['alert']) && $_GET['alert'] == 'noUser'){
    $alert = "No tienes iniciada la sesión.";
}

$user="";

if (isset($_SESSION['userId']) && isset($_SESSION['role'])){
if ($_SESSION['userId']){
$user= authUser($pdo);
}
}

?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BiblioTech — Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-body-tertiary">

    <?php require_once __DIR__ . '/layout/menu.php'; ?>

    
    <?php 
    if ($alert!=''){?> <div class='alert alert-success'> <?php echo htmlspecialchars($alert); ?> </div> <?php }?>
        

    <main class="container py-5" style="max-width: 600px;">
        <h1 class="h3 fw-bold"><?php if (!$user || empty($user)){ echo 'Inicie sesión'; }else{ echo 'Bienvenido, '. $user['username'];} ?></h1>
        <?php if ($user) { ?> <p class="text-secondary">Usuario: <?php echo $user['username'] ?> · Rol: <?php echo $user['role'] ?> </p> <?php }?> 
    </main>

</body>
</html>
