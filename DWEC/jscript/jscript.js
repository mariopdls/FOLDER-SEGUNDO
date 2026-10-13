// 2.1. Utiliza document.querySelector() para obtener el primer párrafo 
// dentro del div con id "lipsum" en tu página web de ejemplo. 
// Imprime el nodo en la consola.

let primerParrafo = document.querySelector('#lipsum p');

console.log(primerParrafo);

// 2.2. Emplea el método nextElementSibling para obtener el siguiente hermano del párrafo obtenido en el ejercicio 2.1. Imprime el nodo en la consola.

let segundoParrafo = primerParrafo.nextElementSibling;
console.log(segundoParrafo);

// 2.3. Utiliza el método parentElement para obtener el elemento padre del párrafo obtenido en el ejercicio 2.2. Imprime el nodo en la consola.

let padre = segundoParrafo.parentElement;
console.log(padre.textContent);

// 2.4. Obtén por consola, al menos de 2 formas diferentes:

// El primér párrafo que hay dentro del div ‘lipsum’

let primerIpsum = document.querySelector("#lipsum p");

// El segundo párrafo de ‘lipsum’

let segundoImpsum = primerIpsum.nextElementSibling;

// El último item de la lista

let ultimoElemento = document.querySelector("li.important:last-child");
console.log(ultimoElemento);

// La label de ‘Escoge sexo’

let sexo = document.getElementsByName("sexo");
console.log(sexo);

// Ejercicio 3: Propiedades de Nodos
// 3.1. Utiliza document.querySelector() para obtener el primer párrafo dentro del div con id "lipsum" en tu página web de ejemplo. Almacena este nodo en una variable.

let parrafo = document.querySelector("#lipsum p");

// 3.2. Utiliza la propiedad innerHTML para obtener el contenido HTML completo del párrafo obtenido en el ejercicio 3.1. Imprime el contenido en la consola.

// 3.3. Emplea la propiedad textContent para obtener el contenido de texto del párrafo obtenido en el ejercicio 3.1. Imprime el contenido en la consola.

// 3.4. Utiliza document.querySelector() para obtener el primer input de tipo "text" en tu página web de ejemplo. Almacena este nodo en una variable.

// 3.5. Usa la propiedad value para obtener el valor del input obtenido en el ejercicio

// 3.6. Imprime el valor en la consola, al menos de 2 formas:

// El innerHTML de la etiqueta de ‘Escoge sexo’

// El textContent de esa etiqueta

// El valor del primer input de sexo

// El valor del sexo que esté seleccionado (difícil, búscalo por Internet)