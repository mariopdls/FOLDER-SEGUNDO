


// TODO: leer frase, crear acrónimo, añadir un li a #results.

    let lista = document.getElementById('results');
    let botonGenerar = document.getElementById('submit');
    let botonReset = document.getElementById('reset');
   


    botonGenerar.addEventListener("click", function(){

    let li= document.createElement('li');
    let input= document.getElementById('phrase');
    let textoEscrito = document.getElementById('phrase').value;

// TODO: marcar las frases de más de 3 palabras con classList.add("larga").

    if (textoEscrito.split(" ").length>3){
        input.classList.add("larga")
    }

    let acronimoParrafo= textoEscrito.split(" ")
    .map(palabra => palabra[0])
    .join("")
    .toUpperCase();

    li.textContent=acronimoParrafo

    lista.appendChild(li);
    })

//  limpiar lista y campo de texto.

    botonReset.addEventListener("click", function(){
        lista.innerHTML='';
    })




