
// Ejercicio 1: Introducción a localStorage

// a) ¿Qué es localStorage y cuál es su propósito en el desarrollo web? b) Explica la diferencia clave entre localStorage y sessionStorage.

// localStorage es una propiedad de la API de almacenamiento web que permite guardar datos en formato de clave-valor dentro del navegador 
// del usuario de manera persistente, manteniendo la información guardada incluso después de cerrar y volver a abrir la ventana o el navegador. 
// Su propósito principal en el desarrollo web es retener configuraciones, estados o preferencias del usuario sin necesidad de realizar
//  constantes consultas al servidor. 


// la diferencia clave frente a sessionStorage es que este último es estrictamente temporal, borrando de forma automática todos sus registros en 
// cuanto la pestaña o ventana específica del navegador se cierra, mientras que localStorage no tiene fecha de expiración y 
// comparte sus datos entre todas las pestañas abiertas bajo el mismo dominio.


// Ejercicio 2: Almacenando Datos Primitivos

// a) Utilizando localStorage, almacena tu nombre en el navegador bajo la clave "nombre". 

localStorage.setItem("nombre", "Mario");

// b) Recupera el nombre almacenado en localStorage y muestra su valor en la consola.

console.log(localStorage.getItem("nombre"));


// Ejercicio 3: Eliminando Datos Primitivos

// a) Utilizando localStorage, almacena tu edad bajo la clave "edad". 

localStorage.setItem("edad", 24);

// b) Utiliza la función adecuada para eliminar la clave "edad" de localStorage. 

localStorage.removeItem("edad");

// c) Verifica si la clave "edad" aún existe en localStorage.

if (localStorage.getItem('edad') === null) {
  console.log('La clave no está')}
  else{
    console.log("Está");
  }

//   Ejercicio 4: Almacenando y Recuperando Objetos

// a) Crea un objeto JavaScript que represente una persona con propiedades como "nombre", "edad" y "ciudad".

const person = 
    {"name" : "Reyes", "age":4, "city": "Sevilla"};


//  b) Utiliza JSON.stringify para convertir este objeto en una cadena JSON. 

let jsonPers = JSON.stringify(person);

// c) Almacena la cadena JSON en localStorage bajo la clave "persona".

localStorage.setItem ("persona", jsonPers);

//  d) Recupera la cadena JSON de localStorage y utiliza JSON.parse para convertirla de nuevo en un objeto JavaScript.


let objetoAgain = JSON.parse(localStorage.getItem("persona"));

//  e) Muestra en la consola alguna propiedad del objeto recuperado.
console.log(objetoAgain.name
    
);

// Ejercicio 5: Eliminando Objetos

// a) Utilizando localStorage, almacena un objeto cualquiera bajo una clave de tu elección.

const hamburger = {"carne":"vacuno", "verdura":"lechuga"};

localStorage.setItem("comida", hamburger);

//  b) Utiliza la función adecuada para eliminar la clave que contiene el objeto.

localStorage.removeItem("comida")

//  c) Verifica si la clave que contiene el objeto aún existe en localStorage.

if (localStorage.getItem("comida")==null){
    console.log("No está");
    
}else{
    console.log("Está");
}

//Ejercicio 6: Lista de Usuarios con Opciones de Borrar y Editar

// A partir del  HTML

// a) Utiliza JavaScript para capturar los valores del formulario y 
// agregar un nuevo usuario a una lista visible en la página. Cada usuario en la lista debe incluir un botón "Borrar"
//  al lado de su nombre, dirección y dirección de correo electrónico.


// b) Cuando se haga clic en el botón "Borrar" junto a un usuario, debe eliminarse ese usuario de la lista.

//c) Utiliza localStorage para almacenar la lista de usuarios de manera persistente, 
// de modo que los usuarios agregados no se pierdan cuando se actualice la página o se cierre el navegador.

