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


// Ejercicio 2: Bucles y Arrays
// Objetivo: Evaluar el uso de bucles y la manipulación de arrays.
// Enunciado:
// Crea una función llamada mostrarImpares que recorra un array de números y devuelva un
// nuevo array con solo los números impares. Luego, imprime el array resultante en la consola.

const arraydeimpares= [2,6,3,2,1,5,9,11];


function mostrarImpares(array) {
    let arrayImpares = [];
    for (let i = 0; i < array.length; i++) {
        
        if (array[i]%2!=0){
            arrayImpares+=array[i] + " ";
        }
        
    }
    console.log("[ " + arrayImpares + "]");
}

mostrarImpares(arraydeimpares);

// Ejercicio 3: Funciones y Recursividad
// Enunciado:
// Escribe una función llamada factorial que calcule el factorial de un número de forma
// recursiva. El factorial de un número entero positivo n se define como el producto de todos los
// números enteros desde 1 hasta n . Si n es 0, el factorial es 1.

function factorial(num){

    let nuevoNum=1;
    let i = 1;

    if (num==0){
        console.log(1);
    }
    else{

        let numeroInicial = num;

        for (let i = 1; i < num; i++) {
            resultadoPaso= numeroInicial*i
            numeroInicial=resultadoPaso;
        }

    }



    return console.log();

}

factorial(5);

// Ejercicio 4: Manejo de Cadenas (Strings)
// Objetivo: Evaluar el uso de métodos de manipulación de cadenas en JavaScript.
// Enunciado:
// Crea una función llamada invertirCadena que reciba una cadena como parámetro y devuelva
// la cadena invertida. No puedes usar métodos de arrays como reverse() .

function invertirCadena (cadena) {

    let cadenaInversa="";

    for (let i = cadena.length-1; i >= 0; i--) {
        cadenaInversa+=cadena[i];
    }
    return console.log(cadenaInversa);
}

    invertirCadena("hola")
