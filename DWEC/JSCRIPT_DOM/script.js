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
