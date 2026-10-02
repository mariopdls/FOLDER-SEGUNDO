
// Escribe una función llamada capitalizarPalabras que tome una cadena de texto y devuelva la misma cadena con la primera letra de cada palabra en mayúscula. Por ejemplo, si la entrada es "hola mundo", la función debería devolver "Hola Mundo".

function capitalizarPalabras(cadena){
    // let cadenaNueva = String(cadena).split(" ");
    // let frase = "";
    
    // for (let i = 0; i < cadenaNueva.length; i++) {
    //     cadenaNueva[i]= cadenaNueva[i].charAt(0).toUpperCase()+cadenaNueva[i].slice(1);
    //     frase+=cadenaNueva[i] + " ";
    // }

    // return frase;

    let cadenamayus = cadena.split(" ");
    let nuevaP = "";

    let nuevaCadenaMayus=  cadenamayus.map(t => String(t).replace(String(t[0]), String(t[0]).toUpperCase()));
    return nuevaCadenaMayus.join(" ");
}
console.log(capitalizarPalabras('hola mundo'));

// Crea una función llamada invertirCadena que tome una cadena y la invierta. Por ejemplo, si la entrada es "JavaScript", la función debería devolver "tpircSavaJ".

function invertirCadena(cadena){
    // let invertida="";
    // for (let i = String(cadena).length -1 ; i >=0 ; i--) {
    //    invertida+=String(cadena)[i];
    // }
    // console.log(invertida);
    // return invertida;

    let cadenaStringSplit= String(cadena).split("");

    return cadenaStringSplit.map(t => t).reverse().join("");


}

console.log(invertirCadena("hola"));


// Implementa una función llamada contarVocales que tome una cadena y devuelva el número de vocales que contiene. Considera tanto vocales mayúsculas como minúsculas.

    let palabra= "Universidad"
    function cuentaVocales(cadena){
        // let contador= 0;
        // for (let i = 0; i < cadena.length; i++) {
        //     if (cadena[i].toLowerCase()=== "a".toLowerCase() || cadena[i].toLowerCase()=== "e".toLowerCase() || cadena[i].toLowerCase()=== "i".toLowerCase() || cadena[i].toLowerCase()=== "o".toLowerCase() || cadena[i].toLowerCase()==="u".toLowerCase())
        //     contador+=1;
        // }

        // console.log("hay ".concat(contador).concat(" vocales"))
        // return contador;

        let cadenaSplit = String(cadena).split("");
        let count =0;
        
        cadenaSplit.filter(t => {
            if (t.toUpperCase()=="a".toUpperCase() || t.toUpperCase()=="e".toUpperCase() || t.toUpperCase()=="i".toUpperCase() || t.toUpperCase()=="o".toUpperCase() || t.toUpperCase()=="u".toUpperCase() ) {
                count++;
            }
        })
        
        return "Hay ".concat(count).concat(" vocales");

    }

    
cuentaVocales(palabra);


// Escribe una función llamada eliminarDuplicados que tome una cadena y elimine cualquier carácter duplicado, 
// dejando solo una aparición de cada carácter en la cadena resultante. 
// Por ejemplo, si la entrada es "programming", la función debería devolver "progamin".

let cadenota = "programming";

function eliminarDuplicados(cadena){
        
    let cadenaSplit = cadenota.split("");

    let set = new Set (cadenaSplit);

    return [...set].join("");
}

console.log(eliminarDuplicados(cadenota));

//Crea una función llamada validarEmail que tome una cadena y determine si es una dirección de correo electrónico válida. 
// Debe verificar si la cadena tiene el formato adecuado de una dirección de correo electrónico.

function validarEmail(email) {
    let bandera=false;
    String(email).split("").forEach(letra => {
        if (letra==="@" && letra==="."){
            bandera=true;
        }
    });

    return bandera;
    

}

console.log(validarEmail("antonio@gmail.com"));

// Implementa una función llamada esTelefono que tome una cadena y determine si representa un número de teléfono válido. 
// Debe tener en cuenta diferentes formatos de números de teléfono, como "(123) 456-7890" o "1234567890".

function esTelefono (cadena){

    let cadenaSplit= cadena.split(" ");
    let bandera=false;

        if ((cadenaSplit[0][0] === "(" && cadenaSplit[0][4] === ")") && ((cadenaSplit[0].length==5 && cadenaSplit[1].length==8))) {

                if (cadenaSplit[1][3]=="-"){
                    bandera=true;
                }

        }
        else if (cadenaSplit[0].length==9 && /^\d+$/.test(cadenaSplit[0])){
            bandera=true;
        }
    
    return bandera;

}
console.log(esTelefono("616698649"))


//Escribe una función llamada codificarBase64 que tome una cadena y la codifique en Base64. Luego, crea otra función llamada decodificarBase64 que tome una cadena en Base64 y la decodifique de vuelta a su forma original.

function codificarenBase64(cadena){

    return btoa(cadena);
}

function decodificarBase64(cadena) {
    return atob(cadena);
}


console.log(codificarenBase64("hola"));
console.log(decodificarBase64("aG9sYQ=="))

//Crea una función llamada esPalindromoFrase que tome una cadena de texto y determine si es un palíndromo de frase. Debe ignorar espacios, 
// puntuación y diferenciar mayúsculas de minúsculas. Por ejemplo, "Anita lava la tina" debería considerarse un palíndromo de frase.


    // let bandera= false;
    // let invertida = "";
    // let signos = [".",",",";","!","¡"]

    // for (let i = String(cadena).length -1 ; i >=0 ; i--) {
    //     if (String(cadena)[i] != " " || String(cadena)[i].match(signos)){
    //     invertida+=String(cadena)[i];
    //     }
    // }
    // let cadenasinespacios = "";
    // for (let e = 0; e < cadena.length; e++) {
    //     if (String(cadena)[e] != " " || String(cadena)[e].includes(signos)){
    //     cadenasinespacios+=String(cadena)[e];
    //     }
    // }

    // if (cadenasinespacios.toLowerCase().normalize("NFD").replace(/[^\w\s]/gi, '')===invertida.toLowerCase().normalize("NFD").replace(/[^\w\s]/gi, '')){
    //     bandera =true;
    // }
    
    // return bandera;
    
function esPalindromo(cadena) {

let bandera = false;
let cadenaSpliteada = String(cadena).split("");
let cadenaOriginalsinEsp = cadena.replaceAll(" ", "");

let cadenaInversa = cadenaSpliteada.reverse().join("");

let cadenafin = cadenaInversa.replaceAll(" ", "");

if (String(cadenafin) == String(cadenaOriginalsinEsp)) {
  bandera = true;
}

return bandera;
}

console.log(esPalindromo("anita lava la tina")); 

function encontrarPalindromo (frase){

    let fraseString = String(frase).split(" ");
    let fraseAlReves =  String(frase).split("").reverse().join("");
    let bandera= false;
    let fraseAlRevesSpliteada = fraseAlReves.split(" ") 

    fraseString.forEach(element => {
        if (fraseAlRevesSpliteada.includes(element)){
            bandera=true;
        }
    });

    return bandera ;

     
}

encontrarPalindromo("reconocer somos nivel hola")