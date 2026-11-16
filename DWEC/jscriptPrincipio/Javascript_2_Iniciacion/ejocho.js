
//ej ocho

let numeros = prompt("Dame numeros");

numerosArray = numeros.split(",");

let listaNumeros = numerosArray.map(t => Number(t));

console.log(listaNumeros);

function operacionesNums(array) {
    let esPar=0;
let suma = listaNumeros.reduce((acumulador, numero)=>{
    return acumulador+=numero;
},0)

console.log (suma)
console.log (suma/array.length)
console.log(Math.max(...listaNumeros))
console.log(Math.min(...listaNumeros))

array.forEach(element => {
    if (element%2==0){
        esPar+=element;
    }
});

console.log(esPar);
let multiplicados = array.map(t => t*2);
console.log(multiplicados);

let esMayor100= array.some(t => t>100);
console.log(esMayor100);

let sonPositivos= array.every(t => t>0);

console.log(sonPositivos);
}


operacionesNums(listaNumeros);

