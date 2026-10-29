// Ejercicio 3: Mostrar/Ocultar Información
// Objetivo: Crear un componente que permita mostrar y ocultar una sección de información al hacer clic en un botón.

import { useState } from "react";

// Crea un componente MostrarOcultar.
// Usa useState para crear un estado booleano mostrar que controle la visibilidad del contenido.
// Agrega un botón que alterne el valor de mostrar entre true y false.
// Muestra un texto como "Información secreta" solo si mostrar es true.
// Extra: Cambia el texto del botón para que diga "Mostrar" u "Ocultar" según corresponda.


function mostrarOcultar() {

    const [mostrar, setMostrar] = useState(true);

    function noMostrar(){
        setMostrar(false)
        
    }

    function mostrar(){
        setMostrar(true)
    }

    return (
        <div>
            <button onClick={noMostrar}></button>

            <button onClick={mostrar}></button>

        </div>
    )
}