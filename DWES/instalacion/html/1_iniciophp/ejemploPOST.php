<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logueo</title>
</head>
<body>

<form method="post">
    <label for="user">User</label><br>
    <input type="text" name= "usuario" id="usuario" required><br><br>

    <label for="pass">Password</label><br>
    <input type="password" name="password" id="password"><br><br>
    
    <button type="submit">Entrar</button>

</form>

</body>
</html>

<?php

    $mensaje ="";
    if (isset($_POST['usuario']) && isset($_POST['password'])){
        $user = htmlspecialchars($_POST['usuario']);
        $pass = htmlspecialchars($_POST['password']);

        if ($user == 'admin' && $pass== '1234'){
            $mensaje= "Bienvenido de nuevo, ". $user . ". Has iniciado sesión correctamente.";
        }else{
            $mensaje="Usuario o contraseña incorrectos. Inténtelo de nuevo.";
        }



    }
    else{
        $mensaje = 'Introduce tus credenciales para acceder';
    }

    ?>

    <p><?php echo $mensaje; ?> </p>