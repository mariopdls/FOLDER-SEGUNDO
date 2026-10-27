// // Ejercicio 1: Agenda dinámica


// // 1.1. Crea un párrafo con el texto “Nota urgente”, con la palabra 
// // “urgente” en negrita, y añádelo como último hijo del div #notas.

// let creacionParrafo = document.createElement('p');
// let negrita = document.createElement('strong');
// let parrafoTexto= document.createTextNode('urgente');
// let divNotas = document.getElementById('notas');
// let parrafoTexto2= document.createTextNode('Nota ');


// creacionParrafo.appendChild(parrafoTexto2)
// negrita.appendChild(parrafoTexto);
// creacionParrafo.appendChild(negrita);
// divNotas.appendChild(creacionParrafo);

// // 1.2. Crea un párrafo con el texto “Nota entre medias” e 
// // insértalo entre la primera y la segunda nota usando insertBefore.

// let parrafoNota = document.createElement('p');
// let parrafoTextoNota = document.createTextNode('Nota entre medias');
// let segundoP = document.getElementById('segunda-nota'); //he añadido u id al segundo p de notas
// parrafoNota.appendChild(parrafoTextoNota);

// divNotas.insertBefore(parrafoNota, segundoP);


// // 1.3. Reemplaza la tercera nota original por un párrafo nuevo con el texto
// //  “Tercera nota (editada)”, usando replaceWith.

// let tercera = document.getElementById('tercera-nota');
// let parrafoNuevo = document.createElement('p');
// let nuevoTextoEd = document.createTextNode('Tercera nota... Editada...');

// parrafoNuevo.appendChild(nuevoTextoEd);

// tercera.replaceWith(parrafoNuevo);




// // 1.4. Añade un <li> con el texto “Pagar la luz” al principio de 
// // #tareas y otro con “Hacer ejercicio” al final.
// let li = document.createElement('li');
// let liLuz = document.createTextNode('Pagar la luz');

// let li2 = document.createElement('li');
// let liEj = document.createTextNode('Hacer ejercicio');


// li.appendChild(liLuz);
// li2.appendChild(liEj);

// //creé id en p y li

// tareas.appendChild(li);

// tareas.insertBefore(li2, tareas.children[0])


// // 1.5. Elimina de la página el <li> “Estudiar JavaScript” sin añadirle 
// // ningún id ni clase.

// //no sé hacerlo


//INVENTADOS


let lista = document.getElementById("listaProductos");
let info =document.getElementById("info");

lista.addEventListener("click", (e) => {
    if (e.target.tagName == "LI"){

     let valor = e.target.getAttribute("data-id");
     info.textContent= "ID seleccionado: ".concat(valor)
     e.target.classList.add("elegido")
    }
})