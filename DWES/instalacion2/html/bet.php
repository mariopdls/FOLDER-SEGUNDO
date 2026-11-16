<?php 
 session_start();
 require_once("Database.php");
 require_once("functions/functionsBonoloto.php");

  if (!isset($_SESSION['user'])){
    header("Location:user/login.php?alert=noSession");
    exit;
}
 require_once("layout/header.php");

 if (isset($_POST["btnSubmit"])){

    if ((isset($_POST['numeros']) || isset($_POST['estrellas']) || isset($_POST['fecha']))) {

    $fechaHoy = '2026-11-23';
    $fechaProv= date($_POST['fecha']);

        if (
            (($fechaProv > $fechaHoy)) &&

            ((!$_POST['numeros'][0]<1 || !$_POST['numeros'][0]>50) || 
            (!$_POST['numeros'][1]<1 || !$_POST['numeros'][1]>50) || 
            (!$_POST['numeros'][2]<1 || !$_POST['numeros'][2]>50) || 
            (!$_POST['numeros'][3]<1 || !$_POST['numeros'][3]>50) || 
            (!$_POST['numeros'][4]<1 || !$_POST['numeros'][4]>50)) &&

            ((!$_POST['estrellas'][0]<1 || !$_POST['estrellas'][0]>10) ||
            (!$_POST['estrellas'][1]<1 || !$_POST['estrellas'][1]>10))) { 
            
            if (($_POST['numeros'][0]<$_POST['numeros'][1]) && ($_POST['numeros'][1]<$_POST['numeros'][2]) 
             && ($_POST['numeros'][2]<$_POST['numeros'][3]) && ($_POST['numeros'][3]<$_POST['numeros'][4])){
                $numbersImplode = implode(",", $_POST['numeros']);
                $starsImplode = implode(",", $_POST['estrellas']);

                insertIntoBoletos($pdo, $_SESSION['user'], $numbersImplode, $starsImplode, $fechaProv);

            }else{
            echo "<div class = 'alert alert-danger'> Los datos introducidos son erróneos: La secuencia es errónea. Los números deben ser introducidos en orden </div>";
            }

        }else{
            echo "<div class = 'alert alert-danger'> Los datos introducidos son erróneos: La fecha es incorrectat o los números son más grandes o más pequeños. </div>";
        }
    }else{
            echo "<div class = 'alert alert-danger'> Los datos introducidos son erróneos: No están todos los datos establecidos. </div>";

    }
 }



?>
   <div class="container mt-5">
        <h1 class="text-center mb-4">Ingresar Boleto de Euromillones Jacarandeño</h1>
        <div class="row justify-content-center">
            <div class="col-md-3">
                <form method="post" action="">
                    <!-- Fecha -->
                    <div class="mb-3">
                        <label for="fecha" class="form-label">Fecha del boleto</label>
                        <input type="date" id="fecha" name="fecha" class="form-control">
                    </div>

                    <!-- Números principales -->
                    <div class="mb-3">
                        <label class="form-label">Números (del 1 al 50)</label>
                        <div class="row g-2">
                            <?php for ($i = 1; $i <= 5; $i++): ?>
                            <div class="col-8">
                                <input type="number" name="numeros[]" value="<?php $i?>" class="form-control" placeholder="N° <?= $i ?>">
                            </div>
                            <?php endfor; ?>
                        </div>
                    </div>

                    <!-- Estrellas -->
                    <div class="mb-3">
                        <label class="form-label">Estrellas (del 1 al 10)</label>
                        <div class="row g-2">
                            <?php for ($i = 1; $i <= 2; $i++): ?>
                            <div class="col-8">
                                <input type="number"  name="estrellas[]" value="<?php $i?>"  class="form-control" placeholder="Estrella <?= $i ?>">
                            </div>
                            <?php endfor; ?>
                        </div>
                    </div>

                    <!-- Botón enviar -->
                    <div class="text-center">
                        <button type="submit" name="btnSubmit" class="btn btn-primary btn-lg">Enviar boleto</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div div class="container mt-5">    <a href="./index.php" class="btn btn-primary"><span class="glyphicon glyphicon-th-list"></span>Volver</a></div>
<?php require_once("layout/footer.php");?>