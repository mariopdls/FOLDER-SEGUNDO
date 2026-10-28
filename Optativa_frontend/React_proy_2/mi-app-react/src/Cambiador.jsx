// Ejercicio 2: Cambiador de Texto
// Objetivo: Crear un componente que muestre un texto y lo cambie al hacer clic en un botón.

import { useState } from "react";

// Crea un componente CambiadorTexto.
// Usa useState para definir un estado texto con el valor inicial "Texto Original".
// Agrega un botón que, al hacer clic, cambie el texto a "Texto Modificado".

function Cambiador() {
    
    let textoOriginal = "Texto 1";
    let textoModificado = "Texto 2";

    const [cambiador, setCambiador] = useState(textoOriginal);

    function volverOriginal() {
        setCambiador(textoOriginal);
    }

    function modificar() {
        setCambiador(textoModificado);
    }
    
      return (
    <div>
      <button onClick={modificar}>Modificar</button>
      <p>Cambiador: {cambiador}</p>
      <button onClick={volverOriginal}>Volver al original</button>
    </div>
  );


}

export default Cambiador;