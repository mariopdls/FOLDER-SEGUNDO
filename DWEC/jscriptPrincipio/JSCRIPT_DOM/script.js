//ejercicio1

let nuevoDiv = document.createElement("div");

let textoNuevo = document.createTextNode("Nuevo elemento de lista");

nuevoDiv.appendChild(textoNuevo);

let lipsum=  document.getElementById('lipsum');

lipsum.appendChild(nuevoDiv);


let nuevoParrafo= document.createElement('p');
let negrita = document.createElement('strong');
negrita.textContent="añadido";

contenidoParrafo=document.createTextNode("Nuevo parrafo ")
contenidoParrafo2=document.createTextNode(" por javascript.")

nuevoParrafo.appendChild(contenidoParrafo);
nuevoParrafo.appendChild(negrita);
nuevoParrafo.appendChild(contenidoParrafo2);

lipsum.appendChild(nuevoParrafo);

let label = document.createElement("label");
let input = document.createElement("input");
let espacio = document.createElement('br');
let espacio2 = document.createElement('br');

label.textContent="Dato 1 bis: ";
label.setAttribute('for', 'dato1bis')
input.setAttribute('type','text');
input.setAttribute('name','dato1bis');
input.setAttribute('id','dato1bis');

let formulario = document.getElementsByTagName('form')[0];

formulario.insertBefore(label, formulario.children[1]);
formulario.insertBefore(input, formulario.children[1]);
formulario.children[1].after(espacio)
formulario.children[1].after(espacio2)


//ejercicio2

let pdeLipsum = document.querySelector('#lipsum p');

let primerParrafo = document.createElement('p');

let nuevoParrafo2= document.createTextNode('Este es el nuevo segundo párrafo');
let espacio3 = document.createElement('br');

primerParrafo.appendChild(nuevoParrafo2);

pdeLipsum.before(primerParrafo)

//ejercicio 3

let primerElemento = document.querySelector('li');

let nuevoLi = document.createElement('li');
let textoLi =  document.createTextNode('Nuevo elemento de lista');

let nuevoElemento = nuevoLi.appendChild(textoLi);

primerElemento.replaceWith(nuevoElemento)
nuevoElemento.remove();

//ej4

let elementoID = document.querySelector('div');

elementoID.setAttribute("data-nuevo", "123");

elementoID.removeAttribute("data-nuevo");

let bodyB = document.getElementById('dato2');

bodyB.style.backgroundColor="red";

//ejercicio5

let elemento = document.querySelector('body');

elemento.className+="destacado";

elemento.classList.add("nuevo-estilo");

elemento.classList.remove("destacado");


