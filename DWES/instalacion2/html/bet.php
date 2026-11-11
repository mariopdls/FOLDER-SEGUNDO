<?php 
 session_start();
 require_once("layout/header.php");
 require_once("Database.php");
 require_once("functions/functions.php");
//bet es apostar en inglés
?>
   <div class="container mt-5">
        <h1 class="text-center mb-4">Ingresar Boleto de Euromillones Jacarandeño</h1>
        <div class="row justify-content-center">
            <div class="col-md-3">
                <form>
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
                                <input type="number" class="form-control" placeholder="N° <?= $i ?>">
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
                                <input type="number"  class="form-control" placeholder="Estrella <?= $i ?>">
                            </div>
                            <?php endfor; ?>
                        </div>
                    </div>

                    <!-- Botón enviar -->
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-lg">Enviar boleto</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div div class="container mt-5">    <a href="./index.php" class="btn btn-primary"><span class="glyphicon glyphicon-th-list"></span>Volver</a></div>
<?php require_once("layout/footer.php");?>