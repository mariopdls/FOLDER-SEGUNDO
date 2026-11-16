<?php
session_start();
require_once("../Database.php");
require_once("./userFunction.php");

if (isset($_GET['id'])){
$poblaciones = getPoblation($pdo);
$userExists= getUser($pdo, $_GET['id']);
if (!$userExists){
    header("Location:../index.php?alert=dontExist");
}
$userAddress = getAddress($pdo, $_GET['id']);
$userRole = getRoleUserList($pdo, $_GET['id']);
$poblacionUser= getPoblacion($pdo, $userExists["idPoblacion"]);
}

if (isset($_POST['btnSubmit'])){
    if ((isset($_POST['username']) || !empty($_POST['username'])) && 
        (isset($_POST['direccion']) || !empty($_POST['direccion'])) &&
        (isset($_POST['idPoblacion']) || !empty($_POST['idPoblacion'])) &&
        (isset($_POST['role']) || !empty($_POST['role']))){

        $idPobl = getIdPoblation($pdo, $_POST['idPoblacion']); 
        saveUser($pdo, $_POST['username'],$_POST['direccion'], $idPobl['id'], $_POST['role']);
    }
}

require_once("../layout/header.php");

?>


<div class="container mt-5">
    <h1 class="text-center mt-5"> <?php echo (isset($userExists) && !empty($userExists)) ? "Modificar Usuario" : "Añadir Usuario" ?></h1>
    <form action="../index.php" method="POST" >
        <!-- Username -->
        <div class="mb-3">
            <label for="username" class="form-label">Nombre de Usuario</label>
            <input type="text" id="username" name="username" class="form-control" value= "<?php echo (isset($userExists) && !empty($userExists)) ? "{$userExists['username']}" : "" ?>" >
        </div>

        <!-- Contraseña -->
        <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" id="password" name="password" class="form-control" <?php echo (isset($userExists) && !empty($userExists)) ? "disabled" : "" ?>>
        </div>

        <!-- Dirección -->
        <div class="mb-3">
            <label for="direccion" class="form-label">Dirección</label>
            <input type="text" name="direccion" class="form-control" value="<?php echo (isset($userExists) && !empty($userExists)) ? "{$userAddress['direccion']}" : "" ?>">
        </div>

        <!-- Población -->
        <div class="mb-3">
            <label for="idPoblacion" class="form-label">Población</label>
            <select id="idPoblacion" name="idPoblacion" class="form-select">
               
            <?php
            foreach ($poblaciones as $poblacionFor) {
                // 1. Comprobamos si esta opción debe ir seleccionada
                $selected = (isset($userExists) && !empty($userExists) && $poblacionUser['poblacion'] == $poblacionFor['poblacion']) 
                    ? 'selected' 
                    : '';

                // 2. Imprimimos la etiqueta <option> limpia y bien cerrada
                echo '<option value="' . $poblacionFor['poblacion'] . '" ' . $selected . '>' . $poblacionFor['poblacion'] . '</option>';
            }
            ?>

                
            </select>
        </div>

        <!-- Rol -->
        <div class="mb-3">
            <label for="role" class="form-label">Rol</label>
            <input type="text" id="role" name="role" class="form-control" value= "<?php echo (isset($userExists) && !empty($userExists)) ? "{$userRole['role']}" : "" ?>">
        </div>

        <!-- Botón enviar -->
        <div class="text-center">
            <button type="submit" name="btnSubmit" class="btn btn-primary btn-lg"> <?php echo (isset($userExists) && !empty($userExists)) ? "Guardar Usuario" : "Añadir Usuario" ?></button>
        </div>
    </form>
</div>


<div div class="container mt-5">
    <a href="../index.php" class="btn btn-primary"><span class="glyphicon glyphicon-th-list"></span>Volver</a>
</div>
<?php require_once("../layout/footer.php"); ?>