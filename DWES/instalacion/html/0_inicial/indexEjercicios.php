<? 
//ej1
$nombre = 'Mario';
echo $nombre;
?>
<br><br>

<?
//ej2

$a = 5;
$b = 10;

$suma = $a + $b;
echo $suma;
?>
<br><br>

<?
//ej 3
$nombre = 'Mario';

function saludar ($nombreSaludar){
    echo 'Hola, ' . $nombreSaludar; 
}

saludar($nombre);

?>
<br><br>

<?
//ej4
$numero3 = 8;
$numero4=-9;
$numero5= 0;
function esPositivo($numerito){
    $num = 10;
    if ($numerito>0) {
        echo 'Es positivo';
    }
    else if ($numerito<0){
        echo 'Es negativo';
    }
    else{
        echo 'Es cero';
    }
}

esPositivo($numero3);
esPositivo($numero4);
esPositivo($numero5);
?>


<br><br>
<?
//ej5

$diaDelMes = 'Martes';
switch ($diaDelMes) {
    case 'Lunes':
        echo 'Lunes';
        break;
    case 'Martes':
        echo 'Martes';
        break;
    case 'Miercoles':
        echo 'Miercoles';
        break;
    case 'Jueves':
        echo 'Jueves';
        break;
    case 'Viernes':
        echo 'Viernes';
        break;
    case 'Sábado':
        echo 'Sábado';
        break;
    case 'Domingo':
        echo 'Domingo';
        break;
    default:
        echo 'Es lunes';
        break;
}



?>

<br><br>
<?
//ejercicio6
for ($i=0; $i < 11; $i++) { 
    echo $i; ?> <br><?
}?>

<br><br>
<?

//ej7
$a= 2;
while ($a<=20) {

    if($a%2==0){
        echo $a; ?> <br> <?
    }
    
    $a++;
}

?>
<br><br>
<?
//ej8

$alumnos = ['Juan','Jose','Pedro','Inma','Reyes'];

for ($i=0; $i < count($alumnos); $i++) { 
    echo $alumnos[$i];?> <br><?
}
?>

<br><br>

<? //ej9

function esPar($tipoNum){
    if ($tipoNum%2==0){
        echo 'Es par';?> <br><?
    }
    else {
        echo 'Es impar';?> <br><?
    }
}
esPar(5);
esPar(2);
?>
<br><br>
<? //ej10 

$edad = 17;

function esMayor($ed){
    if ($ed<18){
        echo 'Es menor'?> <br> <?
    }
    else {
        echo 'Es mayor'?> <br> <?
    }
}

esMayor($edad);
esMayor(18);
?>
<br><br>

<?
//ej11
$estacion= 'Primavera';
switch ($estacion) {
    case 'Primavera':
        echo 'Es primavera'; ?> <br> <?
        break;
    case 'Verano':
        echo 'Es verano'; ?> <br> <?
        break;
    case 'Otoño':
        echo 'Es otoño'; ?> <br> <?
        break;
    case 'Invierno':
        echo 'Es invierno'; ?> <br> <?
        break;
}

?>

<br><br>

<?
//ej12

function esMayor2($num1, $num2){ 
    if($num1>$num2){
        echo 'El mayor es '.$num1; ?> <br> <?
    }
    else if($num1<$num2){
        echo 'El mayor es '.$num2; ?> <br> <?
    }
    else{
        echo 'Son iguales' ; ?> <br> <?
    }
}
esMayor2(2,6);
esMayor2(10,4);
esMayor2(5,5);
?>

<br><br>

<?
//ej13
$variableSumada=0;
for ($i=0; $i <= 100; $i++) { 
    $variableSumada+=$i;
}
echo $variableSumada;

?>

<br><br>

<? 
//ej14

$arrayAlumno= ["nombre"=> "Samuel","apellido" => "Perez", "email" => "samuelperez@gmail.com"];
echo $arrayAlumno["nombre"];?> <br> <?
echo $arrayAlumno["apellido"];?> <br> <? 
echo $arrayAlumno["email"];?> <br> <?

?>

<? 

//ej15

$arrayNums = [1,5,6,2,4,8,5];
function hacerPromedio($arrayn){
        $formula = array_sum($arrayn) / count($arrayn);
        echo $formula; ?> <br> <?
}
hacerPromedio($arrayNums);
?>
<br><br>
<?
//ej16 (he tenido que pedir ayuda)
$cadena = "Anuel";
$arrayDeCadena = str_split($cadena);
foreach ($arrayDeCadena as $letra) {
    echo $letra. "<br>";
}

?>

<?php
//ej17

    function factorial($num){
        
        for ($i=0; $i <= $num; $i++) { 
            $variable *= i;
    }
    echo factorial (5);

?>
<br><br>

<? //ej18 

function calcularFarenheits($grados){
    $formula = ($grados * 1.8) + 32;
    echo 'En farenheits, '.$grados.' son '.$formula.' grados';
}
calcularFarenheits(0);
?>
<br><br>
<?
//ej19


function imprimirSalida($aOp,$bOp,$operador){
    $resultado;
    $resultadoParaModulo;
    $resultadoFinalMod=0;
    if ($operador=== '*'){
        $resultado= $aOp*$bOp;
        echo $resultado;

    }
    else if ($operador=== '/'){
        $resultado= $aOp/$bOp;
        if ($bOp=='0'){
            echo 'Error';
        }
        else{
        echo $resultado;
        }
    }
    else if ($operador=== '%'){
        $resultado=(int)($aOp / $bOp); 
        $resultadoParaModulo= $resultado*$bOp;
        $resultadoFinalMod= $aOp-$resultadoParaModulo;
        echo $resultadoFinalMod;

    }

    else if ($operador=== '+'){
        $resultado= $aOp+$bOp;
        echo $resultado;

    }

    else if ($operador=== '-'){
        $resultado= $aOp-$bOp;
        echo $resultado;

    }
    
}

imprimirSalida(250,24,'%');

?>