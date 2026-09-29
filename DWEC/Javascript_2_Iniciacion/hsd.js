
// Ejercicio 1: Crear y Manipular Arrays

// Crea un array llamado listaCompra con los siguientes elementos: 'Peras', 'Manzanas', 'Kiwis', 'Plátanos', y 'Mandarinas'.

// Usa el método splice para eliminar las 'Manzanas' de la lista de compra.

// Usa el método splice para añadir 'Naranjas' y 'Sandía' después de 'Plátanos' en la lista de compra.

// Usa el método splice para reemplazar 'Kiwis' con 'Cerezas' y 'Nísperos' en la lista de compra.

// Imprime la lista de compra final por la consola.


let arrayFrutas = ["pera", "manzana", "kiwi", "platano","mandarina"];

arrayFrutas.pop("manzana");

console.log(arrayFrutas);

arrayFrutas.splice(3, 0, "sandia");

console.log(arrayFrutas);

arrayFrutas.splice(2, 1, "cerezas", "nisperos");

console.log(arrayFrutas);




// Ejercicio 2: Copiar un Array

// Crea un array llamado original con algunos elementos.

let original = ["miarma", "sevilla",23,5];



// Crea un nuevo array llamado copia que sea una copia de original utilizando el método slice.
let copia = original.slice(0,original.length);

// Modifica un elemento en copia y verifica si también se modifica en original.

copia.pop();

console.log(copia);
console.log(original);

// Ejercicio 3: Ordenar Notas

// Crea un array llamado notas con las siguientes calificaciones: [4, 8, 3, 10, 5].

let notas = [4, 8, 3, 10, 5];
console.log(notas.sort((a,b)=> a-b));


// Escribe una función que tome el array de notas y lo ordene de menor a mayor. Utiliza el método sort.

console.log(notas.sort((a,b)=> b-a));


// Ejercicio 4: Ordenar un Array de Objetos

// Crea un array de objetos llamado alumnos donde cada objeto tiene las propiedades nombre y edad. Agrega al menos 5 objetos a este array.


 const alumnos = [{nombre:'Jesus', edad:18},{nombre:'Carlos', edad:29},{nombre:'Ozuna', edad:15}]

    alumnos.push({nombre:"Benito", edad:25},{nombre:"Manuga", edad:233},{nombre:"Payo", edad:16} )

    console.log(alumnos)



// Escribe una función que tome el array de alumnos y lo ordene por edad de menor a mayor utilizando el método sort.

function ordenarMenosMayor(array){
    array.sort((a,b) => a.edad-b.edad);
    return console.log(array);
}

ordenarMenosMayor(alumnos);

// Ejercicio 5: Otros Métodos de Array

// Crea dos arrays, array1 y array2, con algunos elementos.

let array1= ["manuga", "payo","platanos", "samuel eto", "rafa nadal", "goku"];
let array2= ["adrian","cabeza","buzon"];


// Utiliza el método concat para concatenar los dos arrays en uno nuevo llamado concatenado.
const nuevoArray = array1.concat(array2);

console.log(nuevoArray);
// Utiliza el método reverse para invertir el orden de los elementos en concatenado.

nuevoArray.reverse();
console.log(nuevoArray);

// Utiliza el método indexOf para encontrar la posición del elemento 'Plátanos' en concatenado.

console.log(nuevoArray.indexOf("platanos"));

// Utiliza el método lastIndexOf para encontrar la última posición del elemento 'Plátanos' en concatenado.
console.log(nuevoArray.lastIndexOf("platanos"));
