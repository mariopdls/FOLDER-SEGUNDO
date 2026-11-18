<?php 
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../userRepository.php';
$user= "";
if (isset($_SESSION['userId']) && isset($_SESSION['role'])){
$user = authUser($pdo);
}

?>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand fw-bold" href="index.php">📚 BiblioTech</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="nav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="books.php">Catálogo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="myData.php?user">Mis datos</a>
                </li>
                
                <?php 
                if ((!empty($user)) && ($user['role'] =='admin')){
                
                    echo '
                    
                        <li class="nav-item">
                            <a class="nav-link" href="bookForm.php">Modificar libros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="users.php">Editar usuarios</a>
                        </li>
                        
                    
                    
                    ';

                
                }
            
                ?>

            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href=<?php echo !empty($user) ? 'logout.php' : 'login.php'  ?>><?php echo !empty($user) ? 'Cerrar sesión' : 'Logueate'  ?></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
