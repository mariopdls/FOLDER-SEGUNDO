<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="?opcion=1">Ver media <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ejercicio20.php?opcion=2">Ver nota mayor</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="ejercicio20.php?opcion=3">Ver listado de mayores</a>
      </li>
  </div>
</nav>
hola

<?php
$selectedIntereses = [];
if (isset($_POST["intereses"])) {
    $selectedIntereses = $_POST["intereses"];
}


?>



<form method ="POST"> 
<p>Intereses (selecciona los que apliquen):</p>
<label><input type="checkbox" name="intereses[]" value="tecnologia" <? if (in_array("tecnologia", $selectedIntereses)){echo "checked";}?>> Tecnología</label>
<br>
<label><input type="checkbox" name="intereses[]" value="deporte" > Deporte</label>
<br>
<label><input type="checkbox" name="intereses[]" value="lectura"> Lectura</label>
<br>
<label><input type="checkbox" name="intereses[]" value="viajes"> Viajes</label>
<br><br>


<p>Género:</p>
<label><input type="radio" name="genero" value="hombre"> Hombre</label><br>
<label><input type="radio" name="genero" value="mujer"> Mujer</label><br>
<label><input type="radio" name="genero" value="otro"> Otro</label><br><br>

<p>Curso:</p>
<label><input type="radio" name="curso" value="primero"> 1º Daw</label><br>
<label><input type="radio" name="curso" value="segundo"> 2º Daw</label><br>
<label><input type="radio" name="curso" value="otro"> Otro</label><br><br>

<label>
País:
<?php
  $selectedCountry = isset($_POST["pais"]) ? $_POST["pais"]: "";
?>
<select name="pais">

  <option value="es" <?php if ($selectedCountry== "es") echo "selected";?> >España</option>
  <option value="mx" <?php if ($selectedCountry== "mx") echo "selected";?> >México</option>
  <option value="ar" <?php if ($selectedCountry== "ar") echo "selected";?> >Argentina</option>
</select>
</label><br><br>

<input type="submit">


</form>