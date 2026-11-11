<?php
require_once("../layout/header.php");
require_once("../Database.php");
require_once("./userFunction.php");



?>


<div class="container mt-5">
    <h1 class="text-center mt-5">Añadir Usuario</h1>
    <form action="guardar_usuario.php" method="POST" >
        <!-- Username -->
        <div class="mb-3">
            <label for="username" class="form-label">Nombre de Usuario</label>
            <input type="text" id="username" name="username" class="form-control" >
        </div>

        <!-- Contraseña -->
        <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" id="password" name="password" class="form-control">
        </div>

        <!-- Dirección -->
        <div class="mb-3">
            <label for="direccion" class="form-label">Dirección</label>
            <input type="text" class="form-control">
        </div>

        <!-- Población -->
        <div class="mb-3">
            <label for="idPoblacion" class="form-label">Población</label>
            <select id="idPoblacion" name="idPoblacion" class="form-select">
                
            </select>
        </div>

        <!-- Rol -->
        <div class="mb-3">
            <label for="role" class="form-label">Rol</label>
            <input type="text" id="role" name="role" class="form-control">
        </div>

        <!-- Botón enviar -->
        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-lg">Guardar Usuario</button>
        </div>
    </form>
</div>


<div div class="container mt-5">
    <a href="../index.php" class="btn btn-primary"><span class="glyphicon glyphicon-th-list"></span>Volver</a>
</div>
<?php require_once("../layout/footer.php"); ?>