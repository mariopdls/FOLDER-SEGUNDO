//eej1
// 
let main = document.getElementById("lipsum");

console.log(main);


//ej2

let elementoerror =  document.getElementsByClassName("important") ;

console.log(elementoerror);

//ej3

todosparrafos = document.getElementsByTagName("p");

console.log(todosparrafos);

//ej4

let primerImportant = document.querySelector("p.important");

console.log(primerImportant);

//ej5 

let todosParrafosImportant =document.querySelectorAll("p.important") ;

console.log(todosParrafosImportant);

//ej6

let input2 = document.getElementById("input2");
console.log(input2);

let coleccionParrafos = document.getElementsByTagName("p");
console.log(coleccionParrafos);

let parrafosLipsum = document.querySelector("p.lipsum");
console.log(parrafosLipsum);

let formulario = document.getElementById("myForm");
console.log(formulario);

let todosImputs = document.querySelectorAll("[id^='button']");
console.log(todosImputs);

let todosImputsSexo = document.getElementsByName("sexo");
console.log(todosImputsSexo);