
// 1. cuentaVocales(texto)
// Devuelve el número de vocales (a, e, i, o, u) en la cadena (ignorar mayúsc/minúsc).
// Ejemplo: cuentaVocales("Universidad") → 5 .
// Pista: normaliza con .toLowerCase() y recorre con un for .
    let palabra= "Universidad"
    function cuentaVocales(cadena){
        let contador= 0;
        for (let i = 0; i < cadena.length; i++) {
            if (cadena[i].toLowerCase()=== "a".toLowerCase() || cadena[i].toLowerCase()=== "e".toLowerCase() || cadena[i].toLowerCase()=== "i".toLowerCase() || cadena[i].toLowerCase()=== "o".toLowerCase() || cadena[i].toLowerCase()==="u".toLowerCase())
            contador+=1;
        }

        return "hay ".concat(contador).concat(" vocales")
    }

    
console.log(cuentaVocales(palabra));

// 2. invertirCadena(texto)
// Devuelve la cadena invertida.
// Ejemplo: invertirCadena("hola") → "aloh" .
// Pista: recorre la cadena desde el final construyendo una nueva.


function invertirCadena(cadena){
    let invertida="";
    for (let i = String(cadena).length -1 ; i >=0 ; i--) {
       invertida+=String(cadena)[i];
    }
    console.log(invertida);
    return invertida;
}

invertirCadena("hola");


// 3. esPalindromo(texto)
// Devuelve true si la cadena es palíndromo ignorando espacios, signos y mayúsculas,
// false si no.

function esPalindromo (cadena) {
    let bandera= false;
    let invertida = "";
    let signos = [".",",",";","!","¡"]

    for (let i = String(cadena).length -1 ; i >=0 ; i--) {
        if (String(cadena)[i] != " " || String(cadena)[i].match(signos)){
        invertida+=String(cadena)[i];
        }
    }
    let cadenasinespacios = "";
    for (let e = 0; e < cadena.length; e++) {
        if (String(cadena)[e] != " " || String(cadena)[e].includes(signos)){
        cadenasinespacios+=String(cadena)[e];
        }
    }

    if (cadenasinespacios.toLowerCase().normalize("NFD").replace(/[^\w\s]/gi, '')===invertida.toLowerCase().normalize("NFD").replace(/[^\w\s]/gi, '')){
        bandera =true;
    }
    
    return bandera;


}

console.log(esPalindromo("Anita lava la tina!!!"));
console.log(esPalindromo("Dábale arroz a la zorra el abad"));


// Ejemplo: esPalindromo("Dábale arroz a la zorra el abad") → true .
// Pista: usa .replace() con una expresión regular para eliminar todo menos letras/dígitos, 
// luego compara con la invertida

// 4. rotarDerecha(texto, n)
// Rota la cadena n posiciones hacia la derecha (si n > longitud, usa módulo).
// Ej.: rotarDerecha("abcdef", 2) → "efabcd" .
// Pista: usa substring dos veces y concatena.




// 5. sustituirVocalesPorAsterisco(texto)
// Devuelve la misma cadena pero con todas las vocales sustituidas por * .
// Ej.: "Carrera" → "C*rr*r*" .
// Pista: puedes usar replace con regex global o un bucle carácter a carácter.

    function sustituirVocalesPorAsterisco() {

        

    }

// 6. comprimirRepeticiones(texto)
// Implementa un “run-length encoding” simple que convierta "aaabbc" en "a3b2c1" .
// Ej.: "wwwwaaadexxxxxx" → "w4a3d1e1x6" .
// Pista: recorre la cadena, lleva el carácter actual y un contador; cuando cambia, añade car
// + count .

// 7. primerasMayusculas(texto)
// Devuelve la misma frase pero con la primera letra de cada palabra en mayúscula. No
// usar split .
// Ej.: "hola mundo desde js" → "Hola Mundo Desde Js" .
// Pista: detecta el inicio de palabra cuando el carácter anterior es espacio (o inicio de
// cadena).

// 8. contadorDePalabras(texto)
// Devuelve cuántas palabras hay en la cadena (palabras separadas por uno o más
// espacios). No usar split .
// Ej.: " esto es una prueba " → 4 .
// Pista: recorre la cadena y cuenta transiciones de espacio→no-espacio.