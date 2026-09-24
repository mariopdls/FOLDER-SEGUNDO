//     EJERCICIO: Haz una función a la que se le pasa un DNI (ej. 12345678w o 87654321T) 
// y devolverá si es correcto o no. La letra que debe corresponder a un DNI correcto se obtiene 
// -dividiendo la parte numérica entre 23 y
// - cogiendo de la cadena ‘TRWAGMYFPDXBNJZSQVHLCKE’ la letra correspondiente al resto de la divisón.
//  Por ejemplo, si el resto es 0 la letra será la T y si es 4 será la G. Prueba la función en la consola con tu DNI


// function esDniValido(dni){
//     let dniEnLetras = String(dni);
//     let dniLetra = dniEnLetras.substring(8,9);
//     let dniEnLetras2 = dniEnLetras.substring(0,8);
//     let division = (parseInt(dniEnLetras2)/23)%23;
//     let bandera=false;

//     const cadenaDni = "TRWAGMYFPDXBNJZSQVHLCKE";
//     const cadenaSplit = cadenaDni.split("");
    
//     for (let i = 0; i < cadenaSplit.length; i++) {

//         if (cadenaSplit[i].match(dniLetra)){
            
//             if (cadenaSplit.indexOf(i) == division){
//             bandera=true;
//             }

//         }
//     }
//     if (bandera){
//         console.log ("Es válido")
//     }
//     return bandera;
    
// }

// esDniValido("28986934B");


// Escribe una función llamada longitud que reciba como parámetro de entrada una cadena de texto y devuelva el número de letras que tiene.

function longitud(cadena){

    let cadenaLetra= String(cadena);

    return console.log(cadenaLetra.length);
}
longitud("Ana");

// Escribe una función llamada devuelvePrimeraLetra que reciba como parámetro de entrada una cadena de texto y devuelva la primera letra.

function devuelvePrimeraLetra(cadena){
    let cadenaLetra= String(cadena);
    
    return console.log(cadenaLetra.substring(0,1)); 
}

devuelvePrimeraLetra("hamburguesa");

// Escribe una función llamada devuelveUltimaLetra que reciba como parámetro de entrada una cadena de texto y devuelva la última letra.


function devuelveUltimaLetra(cadena){
    let cadenaLetra= String(cadena);
    
    return console.log(cadenaLetra.substring(cadenaLetra.length-1,cadenaLetra.length)); 
}

devuelveUltimaLetra("hamburguesas");


// Escribe una función llamada devuelveEnesimaLetra que reciba como parámetro de entrada una cadena de texto y 
// un número y devuelva la letra que ocupe la posición indicada por el número.


function devuelveEnesimaLetra(cadena, posicion){
    let cadenaLetra= String(cadena);
    
    let positionFinal = cadenaLetra.substring(0, posicion);
    
    if (positionFinal.
        length<posicion){
        console.log("No se puede")
    }
    else{
        return (console.log(positionFinal));
    }
}

devuelveEnesimaLetra("papa",8);
devuelveEnesimaLetra("espermatozoide",8);


// Utilizando el método substring imprimir las letras que van desde la posición 3 a la 7 de la cadena «wonderful day», es decir “derf”.

function imprimirPos (cadena){

    let cadenaLetra= String(cadena);

    return console.log(cadenaLetra.substring(3, 7));
   
}

imprimirPos("wonderful day")


// Hacer una función devuelveMasLarga que reciba como parámetro de entrada dos cadenas de texto y devuelva la mayor. 
// En caso de que ambas cadenas sean iguales, devolveremos la correspondiente al primer parámetro de la función.

function devuelveMasLarga(cadena1, cadena2){
    let cadenaLetra= String(cadena1);
    let cadenaLetra2= String(cadena2);

    if (cadenaLetra.length>cadenaLetra2.length){
        console.log("La cadena mayor es ".concat(cadenaLetra));
    }
    else if (cadenaLetra.length<cadenaLetra2.length){
        console.log("La cadena mayor es ".concat(cadenaLetra2));
    }
    else{
        console.log("me veo obligado a devolver".concat(cadenaLetra));
    }

}

devuelveMasLarga("a", "a");


// Hacer una función devuelveMasLarga2 que reciba como parámetro de entrada tres cadenas de texto y devuelva la mayor. 
// En caso de que al menos dos cadenas tengan igual longitud, devolveremos el texto Hay al menos dos cadenas iguales.

function devuelveMasLarga(cadena1, cadena2, cadena3){

    let longitud1= String(cadena1).length;
    let longitud2= String(cadena2).length;
    let longitud3= String(cadena3).length;
    let bandera = false;

    if (longitud1 == longitud2){
        "Hay al menos dos cadenas iguales"
        bandera=true;
    }
    else if (longitud2 == longitud3){
        "Hay al menos dos cadenas iguales"
        bandera=true;

    }
    else if (longitud1 == longitud3){
        "Hay al menos dos cadenas iguales"
        bandera=true;

    }

    let arrayCadenas = [longitud1,longitud2,longitud3];

    if (!bandera){
        
        let mayorLength = longitud1;

        for (let i = 0; i < arrayCadenas.length; i++) {
            
            if (arrayCadenas[i]>=mayorLength){
                mayorLength=arrayCadenas[i];
            }
        }

        return console.log(mayorLength);
    }

}

devuelveMasLarga("papsas", "Hola", "Patatas con alioli")



// Hacer una función generarNombre que reciba como parámetros de entrada tres cadenas de texto. 
// Si la longitud de alguna cadena cadena es menor que cinco, la función debe devolver el texto ‘error’.
//  Si ninguna cadena tiene menos de 5 letras, devolver una nueva palabra utilizando las tres primeras letras de cada palabra.

function generarNombre(cadena1, cadena2, cadena3){

    let arrayCadenas = [cadena1,cadena2,cadena3];
    let nuevaPalabra="";
    let bandera = false;

    for (let i = 0; i < arrayCadenas.length; i++) {
        
        if (arrayCadenas[i].length <5){
            bandera=true;
        }

        if (bandera){

            nuevaPalabra += arrayCadenas[i].substring(0,1);


        }
        
    }

    if (bandera){
        console.log(nuevaPalabra);
    }

}

generarNombre("Ping", "Holaaaa", "hamburguesa")

// Hacer una función generarNombre2 que reciba como parámetros de entrada tres cadenas de texto.
// Si la longitud de alguna cadena cadena es menor que cinco, la función debe devolver el texto ‘error’. 
// Si ninguna cadena tiene menos de 5 letras, devolver una nueva palabra utilizando la última letra de cada palabra.

function generarNombre2(cadena1, cadena2, cadena3){

    let arrayCadenas = [cadena1,cadena2,cadena3];
    let nuevaPalabra="";
    let bandera = false;

    for (let i = 0; i < arrayCadenas.length; i++) {
        
        if (arrayCadenas[i].length <5){
            bandera=true;
            console.error("Bro no es correcto")
        }

        if (!bandera){

            nuevaPalabra += arrayCadenas[i].substring(arrayCadenas[i].length-1,arrayCadenas[i].length);
        }
        
    }

    if (!bandera){
        console.log(nuevaPalabra);
    }

}

generarNombre2("p", "Holaaaa", "hamburguesa");


// Hacer una función generarNombre3 que reciba como parámetros de entrada tres cadenas de texto. 
// Si la longitud de alguna cadena cadena es menor que cinco, la función debe devolver el texto ‘error’
// . Si ninguna cadena tiene menos de 5 letras, devolver una nueva palabra utilizando las tres últimas letras de cada palabra.

function generarNombre3(cadena1, cadena2, cadena3){

    let arrayCadenas = [cadena1,cadena2,cadena3];
    let nuevaPalabra="";
    let bandera = false;

    for (let i = 0; i < arrayCadenas.length; i++) {
        
        if (arrayCadenas[i].length <5){
            bandera=true;
            console.error("Bro no es correcto")
        }

        if (!bandera){

            nuevaPalabra += arrayCadenas[i].substring(arrayCadenas[i].length-3,arrayCadenas[i].length);
        }
        
    }

    if (!bandera){
        console.log(nuevaPalabra);
    }

}

generarNombre3("pringadete", "makumba", "payet");




/*Hacer una función tieneLetra que reciba como parámetro de entrada una cadena de texto y una letra 
y devuelva true si la letra esta presente en la palabra y false si no lo esta.
 Utilizar para ello el método indexOf.*/

 function tieneLetra(cadena, letra){

    let bandera= true;
    if ((String(cadena).indexOf(String(letra).toLocaleLowerCase)) == -1){
        bandera=false;
    }

    return console.log(bandera);
}
tieneLetra("hola","x")

 /*

 Realizar la evaluación del ejercicio anterior sin tener en cuenta si la letra pasada como parámetro esta en mayúsculas o minúsculas


 */
 function tieneLetra2(cadena, letra){

    let bandera= true;
    if ((String(cadena).indexOf(String(letra))) == -1 && String(letra).toLocaleUpperCase().match((String(cadena).indexOf(String(letra))).toLocaleUpperCase)){
        bandera=true;
    }

    return console.log(bandera);
}
tieneLetra2("hola","x");

 /*

 Hacer una función crearPalabra que reciba como parámetro de entrada una letra y un número 
 y genere una nueva palabra que tenga la letra introducida repetida tantas veces como indique el número.
 */

function crearPalabra(letra,numero){

    let nuevaPalabra= "";
    for (let i = 0; i < numero; i++) {
        nuevaPalabra+=letra;
        
    }
    console.log(nuevaPalabra);
}
crearPalabra("a", 5);


 /*
Completar el ejercicio anterior haciendo que en la nueva palabra generada las letras esten en mayúsculas.
*/

function crearPalabra2(letra,numero){

    let nuevaPalabra= "";
    for (let i = 0; i < numero; i++) {
        nuevaPalabra+=letra.toLocaleUpperCase();
        
    }
    console.log(nuevaPalabra);
}
crearPalabra2("a", 5);


/*
Hacer una función addGuiones que reciba como parámetro de entrada una cadena texto y devuelva una nueva cadena 
que tendrá un guion medio detrás de cada letra. Utilizar para ello un bucle for.*/


function addGuiones(cadena){

    let nuevaPalabra="";
    for (let i = 0; i < cadena.length; i++) {
        
        nuevaPalabra+=cadena[i].concat("-");
        
        
    }
    console.log(nuevaPalabra);
}
addGuiones("Hamburguesa")

/*

 Hacer una función contadorDeLetras que reciba como parámetro de entrada una cadena de texto y una letra
  y devuelva el número de veces que esa letra esta presente en la palabra. Utilizar para ello un bucle for.

 */

  function contadorDeLetras(cadena,letra){

    let cadenaSpliteada = String(cadena).split("");
    let contador = 0;
    for (let i = 0; i < cadenaSpliteada.length; i++) {

        if (cadenaSpliteada[i]===String(letra)){
            contador+=1;
        }

    }

    console.log("Aparece ".concat(contador).concat(" veces"));
  }

  contadorDeLetras("miarma sevilla de mis amores","a");

 /*
 Realizar la evolución del ejercicio anterior sin tener en cuenta si la letra pasada como parámetro esta en mayúsculas o minúsculas */

  function contadorDeLetrasUp(cadena,letra){

    let cadenaSpliteada = String(cadena).split("");
    let contador = 0;
    for (let i = 0; i < cadenaSpliteada.length; i++) {

        if (cadenaSpliteada[i]===String(letra) || cadenaSpliteada[i].toUpperCase()===String(letra).toUpperCase()){
            contador+=1;
        }

    }

    console.log("Aparece ".concat(contador).concat(" veces"));
  }

  contadorDeLetrasUp("miarma sevilla de mis amores","A");

 /*

/*
 Hacer una función contadorDeLetras2 que reciba como parámetro de entrada dos cadenas de texto y una letra y devuelva la cadena de texto en la que dicha letra esta más presente.
  Utilizar para ello un bucle for. No tener en cuenta si la letra pasada como parámetro esta en mayúsculas o minúsculas.

 */ 

 function contadorDeLetras2 (cadena1, cadena2, letra){

    let cadenaSpliteada1 = String(cadena1).split("");
    let cadenaSpliteada2 = String(cadena2).split("");

    let contador = 0;
    let contador2=0;

    for (let i = 0; i < cadenaSpliteada1.length; i++) {

        if (cadenaSpliteada1[i]===String(letra) || cadenaSpliteada1[i].toUpperCase()===String(letra).toUpperCase()){
            contador+=1;
        }

    }

    for (let e = 0; e < cadenaSpliteada2.length; e++) {

        if (cadenaSpliteada2[e]===String(letra) || cadenaSpliteada2[e].toUpperCase()===String(letra).toUpperCase()){
            contador2+=1;
        }

    }

    if (contador>contador2){
        console.log("Aparece más en ".concat(cadena1))
    }
    else if (contador<contador2){
        console.log("Aparece más en ".concat(cadena2))
    }
    else{
        console.log("Aparece el mismo número de veces")
    }

 }

 contadorDeLetras2("a", "MANZANAS", "a")
 
 // Escribe una función llamada toCase que reciba como parámetro de entrada una cadena de texto y devuelva esa misma cadena de texto en minúsculas, 
 // un guión medio y de nuevo esa misma cadena de texto en mayúsculas.

function toCase (cadena) {
    return console.log(String(cadena).toLowerCase().concat("-").concat(String(cadena).toUpperCase()));
}
toCase("pablo")

 // Escribe una función llamada shortcut que tome dos cadenas de texto y devuelva la inicial de cada una de las dos cadenas.

 function shortcut(cadena, cadena2){
    
    let primeraLetra1= String(cadena).substring(0,1);
    let primeraLetra2= String(cadena2).substring(0,1);

    return console.log(primeraLetra1.concat(primeraLetra2))

 }
 shortcut('Amnesty', 'International');


 //20. Escribe una función llamada firstChar, 
 // que devuelva la primera letra que no sea un espacio cuando una cadena de texto es pasada.

 function firstChar (cadena){
    let cadenaLetra = String(cadena).trim.substring(0,1)

    return console.log(cadenaLetra);
 }

 //21 . Escribe una función llamada indexOfIgnoreCase que reciba dos cadenas de texto 
 // y devuelva la posición de la primera ocurrencia de la segunda cadena de texto en la primera.
  // La función no debería tener en cuenta mayúsculas y minúsculas.
 function indexOfIgnoreCase (cadena1, cadena2){
    let nuevaCadena = "";
    for (let i = 0; i < cadena1.length; i++) {
        for (let e = 0; e < cadena2.length; e++) {
            
            if (String(cadena1[i]).match(String(cadena2[e])) && String(cadena1[i]).toUpperCase==String(cadena2[e]).toUpperCase){
                nuevaCadena+=cadena2[e];
            }

        }
    }
    return console.log(nuevaCadena);
 }
 indexOfIgnoreCase("limon", "agumon");

 //22. Escribe una función llamada firstWord que reciba como parámetro de entrada una cadena de texto 
 // y devuelva la primera palabra de esa cadena. 
 // La primera palaba de la cadena serán todos los caracteres que hay hasta el primer espacio.

 function firstWord(cadena){
    let cadenaSaneada= String(cadena).split(" ");
    
    return console.log(cadenaSaneada[0]);
 }

 firstWord("Hola buenos dias");

//Crea una función llamada saludoPersonalizado que tome un nombre y una edad como argumentos 
// y utilice un template literal para devolver un saludo personalizado que incluya el nombre y la edad.

function saludoPersonalizado(nombre,edad){

    return console.log(`Hola, ${nombre}, tu edad es ${edad};`);
}

saludoPersonalizado("Enrique", 20);

//Utiliza un template literal para crear una cadena que muestre una lista de compras con varios elementos.
//  Luego, muestra esa cadena en la consola.

let arrayFrutas = ['manzana', 'pera', 'platano'];

function listaElementos (lista){
    
    return console.log(`${arrayFrutas}` );
}

listaElementos(arrayFrutas);

//Escribe una función llamada informacionProducto que tome un objeto con información de un producto
//  (nombre, precio, categoría, etc.) y utilice un template literal para generar una descripción del producto. 
// Luego, muestra esa descripción en la consola.
let movil = { Marca: "Apple", Modelo: "256GB", Cancerígeno: "si"};


function informacionProducto(obj){

    return console.log(`Móvil - Marca: ${obj.Marca}, Modelo: ${obj.Modelo}, ¿Cancerígeno?: ${obj.Cancerígeno}`);


}

informacionProducto(movil);