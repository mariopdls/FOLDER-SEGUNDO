// Ejercicio 1: Condicionales y Operadores Lógicos
// Objetivo: Evaluar el uso de condicionales y operadores lógicos.
// Enunciado:
// Escribe una función llamada evaluarEdad que reciba un número como argumento
// (representando la edad de una persona). La función debe realizar lo siguiente:
// Si la persona es menor de 18 años, debe devolver "Eres menor de edad".
// Si tiene entre 18 y 65 años, debe devolver "Eres adulto".
// Si tiene más de 65 años, debe devolver "Eres adulto mayor".
// Si se ingresa un valor negativo o mayor que 120, debe devolver "Edad no válida".

function evaluarEdad(number) {

    if (number>=120 || number<0){
        respuesta.textContent= "Edad incorrecta"
    }
    else if (number>=18 && number<=65) {
        respuesta.textContent= "Eres adulto";
    }
    else if (number>65) {
        respuesta.textContent= "Eres adulto mayor"
    }

    else{
        respuesta.textContent= "Eres menor de edad"
    }
    
    return document.getElementById(respuesta).textContent;
}

document.getElementById(evaluarEdad(100)).textContent;

// Ejercicio 2: Bucles y Arrays
// Objetivo: Evaluar el uso de bucles y la manipulación de arrays.
// Enunciado:
// Crea una función llamada mostrarImpares que recorra un array de números y devuelva un
// nuevo array con solo los números impares. Luego, imprime el array resultante en la consola.