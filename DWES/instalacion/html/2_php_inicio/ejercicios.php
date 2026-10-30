<?php

$empleados1 = [
    ["nombre" => "Lucía",  "departamento" => "Ventas",     "salario" => 1800, "antiguedad" => 3],
    ["nombre" => "Pablo",  "departamento" => "Sistemas",   "salario" => 2400, "antiguedad" => 5],
    ["nombre" => "Marta",  "departamento" => "Ventas",     "salario" => 2000, "antiguedad" => 7],
    ["nombre" => "Javier", "departamento" => "RRHH",       "salario" => 1900, "antiguedad" => 2],
    ["nombre" => "Elena",  "departamento" => "Sistemas",   "salario" => 2700, "antiguedad" => 8],
    ["nombre" => "Raúl",   "departamento" => "Sistemas",   "salario" => 2200, "antiguedad" => 1],
    ["nombre" => "Sara",   "departamento" => "RRHH",       "salario" => 2100, "antiguedad" => 4]
];

function calcularEmpleadosYSalario ($empleados){
    $arrayDepto = [];
    $cantidad = 0;
    $total = 0;

    foreach ($empleados as $empleado) {
        if (!in_array($empleado['departamento'],$arrayDepto)){
        $arrayDepto [] = $empleado['departamento'];}
        

        foreach ($empleados as $empleado) {
            if (in_array($empleado['departamento'], $arrayDepto)){
                $cantidad+=1;
                $total+=1;
            }
        }
    }

    $resultado = [];


}

calcularEmpleadosYSalario($empleados1);