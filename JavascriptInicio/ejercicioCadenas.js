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

// Hacer una función generarNombre2 que reciba como parámetros de entrada tres cadenas de texto. Si la longitud de alguna cadena cadena es menor que cinco, la función debe devolver el texto ‘error’. Si ninguna cadena tiene menos de 5 letras, devolver una nueva palabra utilizando la última letra de cada palabra.

// Hacer una función generarNombre3 que reciba como parámetros de entrada tres cadenas de texto. Si la longitud de alguna cadena cadena es menor que cinco, la función debe devolver el texto ‘error’. Si ninguna cadena tiene menos de 5 letras, devolver una nueva palabra utilizando las tres últimas letras de cada palabra.

