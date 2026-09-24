//EJERCICIO 1

/**
 * Constante que define una URL de una API
 * @type {string}
 */

const API_URL = "https://api.example.com";
/**
 * Variable que maneja el contador.
 * @type {number};
 */
let contador = 0;
/**
 * Constante que define si un usuario está activo (true/false)
 * @type {boolean}
 */
const usuarioActivo = true;

//EJERCICIO2

/**
 * 
 * @param {string} texto - Indica el texto que debes poner para que pueda ser pasado a mayúsculas.
 * @returns {string} - Indica el resultado final.
 */

function convertirEnMayusculas(texto) {
return texto.toUpperCase();
}

//ejercicio3

/**
 * 
 * @param {string} nombre  - Debe ser introducido el nombre de la persona.
 * @param {string} apellido - Debe ser introducido el apellido de una persona.
 * @returns {string} - Devuelve el nombre junto al apellido, con una cadena de espacio entre medio.
 */

function generarNombreCompleto(nombre, apellido) {
return nombre + " " + apellido;
}

//ejercicio4

/**
 * 
 * @param {number} edad - Debe introducirse la edad de la persona
 * @returns {boolean} - Devuelve true si es mayor de 18 años.
 */

function esMayorDeEdad(edad) {
return edad >= 18;
}


//ejercicio5 

/**
 * Se define el objeto "coche" 
 * @type {Object}
 * @property {string} - Define el nombre de la marca.
 * @property {string} - Define el modelo de coche de la marca.
 * @property {number} - Define el año de fabricación del coche.
 */

const coche = {
marca: "Toyota",
modelo: "Corolla",
año: 2020
};

//ej7

/**
 * 
 * @param {Object} coche - Define el parámetro coche como argumento
 * @param {string} coche.marca - La marca del coche (ej. "Toyota").
 * @param {string} coche.modelo - El modelo del coche (ej. "Corolla").
 * @param {number} coche.año - El año de fabricación del coche.
 * @returns {string} Un texto que combina la marca, el modelo y el año del coche.
 */

function mostrarCoche(coche) {
return `${coche.marca} ${coche.modelo} (${coche.año})`;