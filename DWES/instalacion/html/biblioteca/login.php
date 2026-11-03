<?php 
session_start();
require_once __DIR__ . '/config.php';
function getUser($user, $pdo){

    $query = "SELECT id, username, password, role FROM users WHERE username = :username";
    $statement = $pdo -> prepare($query);
    $statement-> bindParam(":username", $user);
    $statement->execute();
    $user = $statement->fetch();
    return $user;
}

function login($pdo) {

    if (isset($_POST['btnEnv'])){

    $username = $_POST['username'];
    $pass = $_POST['password'];

    $userBD = getUser($username, $pdo);

    if ($userBD && password_verify($pass, $userBD['password'])){
        session_regenerate_id(true);
        $_SESSION['userId'] = $userBD['id'];
        $_SESSION['role'] = $userBD['role'];
        header("Location:index.php");
        exit;
    }
        return "Usuario o contraseña incorrectos";

    
    }
    return "";
}

$error = login($pdo);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center vh-100">

    <div class="container" style="max-width: 400px;">
        <div class="card shadow-sm">
            <div class="card-body p-4">
                <h3 class="card-title text-center mb-4">Biblioteca</h3>

                <?php 
                
                if (!empty($error)){

                echo '<div class="alert alert-danger">'. htmlspecialchars($error) . '</div>';

                }
                    
                    ?>

                <form action="" method="post">

                <label for="user"></label> Usuario <br><input type="text" name="username" id="username"><br><br>
                <label for="user"></label> Contraseña <br><input type="text" name="password" id="password"><br><br>
                <button type="submit" name="btnEnv">Enviar</button>

                </form>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>