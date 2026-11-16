<?php 
session_start();
    require_once("layout/header.php");
    require_once("Database.php");

    $success ="";

    
 ?>
<div><h1 class="text-center"><Basefont>BONO LOTO JACARANDEÑO</Basefont></h1></div>
<main class="container my-5">
        <section id="funciones" class="text-center">
            <h2 class="mb-4">¿Qué puedes hacer aquí?</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <h5 class="card-title">Validar boletos</h5>
                            <p class="card-text">Introduce tus números y verifica si has ganado en algún sorteo.</p>
                            <a href="check.php" class="btn btn-primary">Validar</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <h5 class="card-title">Resultados recientes</h5>
                            <p class="card-text">Consulta los números ganadores de los sorteos más recientes.</p>
                            <a href="result.php" class="btn btn-primary">Ver resultados</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <h5 class="card-title">Compra tus boletos</h5>
                            <p class="card-text">Registráte y compra tus boletos. Podrás validarlos automáticamente en el futuro.</p>
                            <a href="bet.php" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
            

                <?php echo ((isset($_SESSION['user']) && isset($_SESSION['role']))) && ($_SESSION['role']=='admin') 
                ? 
                
                '                <div class="col-md-4">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <h5 class="card-title">Editar lista</h5>
                            <p class="card-text">Solo para admins.</p>
                            <a href="/user/listUsers.php" class="btn btn-primary">Editar</a>
                        </div>
                    </div>
                </div>
                </div>'
                
                : '';?>
        
    </section>

        <?php if (isset($_GET['alert']) && $_GET['alert']=='success'){
            $success = "<div class='alert alert-success'> Sesión iniciada correctamente </div>";
            echo $success;
        } ?>

        <section class="mt-5 text-center">
            <h2 class="mb-4">¡Haz tu registro!</h2>
            <p>Si eres nuevo, crea una cuenta para guardar y gestionar tus boletos fácilmente.</p>
            <a href="user/signup.php" class="btn btn-success btn-lg">Registrarme</a>
        </section>
    </main>

    <?php if (isset($_GET['alert']) && $_GET['alert'] == 'dontExist'){
        echo "<div class='alert alert-danger'> Ese usuario no existe. </div>";
    }
?>
  <?php  require_once("layout/footer.php");
?>

