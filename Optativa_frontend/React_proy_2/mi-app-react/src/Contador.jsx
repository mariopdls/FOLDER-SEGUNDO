import React, { useState } from 'react';

function Contador() {
  const [contador, setContador] = useState(0);

  function incrementar() {
    setContador(contador + 1);
  }

  function decrementar(){
      setContador(contador - 1);

  }

  return (
    <div>
      <button onClick={decrementar}>Decrementar</button>
      <p>Contador: {contador}</p>
      <button onClick={incrementar}>Incrementar</button>
    </div>
  );
}

export default Contador; // Su propio export default
