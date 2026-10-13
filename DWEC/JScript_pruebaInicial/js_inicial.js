//ej1 

const products = [
  { id: 1, name: "Camisa", price: 25 },
  { id: 2, name: "Pantalón", price: 40 },
  { id: 3, name: "Zapatos", price: 60 },
  { id: 4, name: "Bufanda", price: 15 },
  { id: 5, name: "Gorra", price: 10 },
];

function expensiveProducts(array){
    let moreExpensive = array.filter(t => t.price>30);

    return moreExpensive;
}

console.log(expensiveProducts(products));

function productsName(array){
    let nameProducts = array.map(t => t.name);

    return nameProducts;
}

console.log(productsName(products));

//ej2

function calculateTotal(array){
    let total= products.reduce((acumulador, producto)=> {
        acumulador +=producto.price;
        return acumulador;
    },0);
    return total;
}

console.log(calculateTotal(products));

//ej3

const students = [
  { id: 1, name: "Carlos", age: 22 },
  { id: 2, name: "Ana", age: 20 },
  { id: 3, name: "Luis", age: 25 },
  { id: 4, name: "Elena", age: 18 },
  { id: 5, name: "María", age: 21 },
];

function findStudents(id) {
    
    let estudianteEncontrado;
    
    students.forEach(element => {
        if (element.id === id){
            estudianteEncontrado = element;
        }
    })

    return estudianteEncontrado;
}

console.log(findStudents(1));

function increaseAge (array) {

    let arrayCopia = [...array]

    arrayCopia.forEach(element => {
        element.age = element.age+1;
    });

    return arrayCopia;
}

console.log(increaseAge(students));

//ej4

const transactions = [
  { type: "ingreso", amount: 1000 },
  { type: "egreso", amount: 500 },
  { type: "ingreso", amount: 200 },
  { type: "ingreso", amount: 300 },
  { type: "egreso", amount: 150 },
];

function operaciones (array){

    //map para todas las transacciones pero negativos en caso de egreso
    let arrayMontos= array.map(t => {
        if (t.type==="egreso"){
            return -t.amount 
        }
        else if (t.type === "ingreso"){
            return t.amount;
        }
    })

    //filtrado para obtener las transacciones tipo ingreso
    let filtradoIngreso = array.filter(t => t.type==="ingreso" )


    //reduce para calcular saldo restante

    let arrayConIngresosYEgresos = [...arrayMontos]; //copio el array del ejercicio donde usamos el map para calcular egresos en  negativo

    let calcularSaldo = arrayConIngresosYEgresos.reduce((acum, saldo) => {
        acum+=saldo;
        return acum
    })

    //return con el mapeo, el filtrado y el reduce final.

    return arrayMontos, filtradoIngreso, calcularSaldo;

}

console.log(operaciones(transactions));


//EJERCICIO 5 

const persons = [ 
  { name: "Juan", age: 25 },
  { name: "Ana", age: 30 },
  { name: "Luis", age: 25 },
  { name: "María", age: 35 },
  { name: "Luis", age: 25 },
];

function removeDuplicates(array) {

    let nuevoSet = new Set([{array}]);

    return nuevoSet; //hay que poner corchete y llaves y se ve el resultado
}

console.log(removeDuplicates(persons));

//Ejercicio 6

const fullNames = [
  "John Smith",
  "Alice Johnson",
  "Michael Brown",
  "Emily Davis",
  "David Johnson",
];


function getInitials(array){

    let cadenaFinal= "";
   
    let iniciales= array.forEach(element => {
        
        let splitElemento = element.split(" ");

        cadenaFinal += splitElemento.map(t => t[0].toUpperCase()).join(".").concat(". ").concat("\n")

    });

    return cadenaFinal;
}

console.log(getInitials(fullNames));

function getLongestName (array) {

    let namesWithoutSpaces= array.map(t => t.replace(" ", ""));
    let nombreFinal;

    let longest=namesWithoutSpaces[0].length;
    namesWithoutSpaces.forEach(element => {
        if (element.length > longest){
            longest= element;
        }
    });

    array.forEach(element => {
        if (element.replace(" ","")==longest){
            nombreFinal = element;
        }
    });
    
    
    return nombreFinal; //lo hice quitandole los espacios para que asi se aprecie el nombre y los espacios no cuenten
}

console.log(getLongestName(fullNames));

function findNameStartingWith (array, letra){
    let arrayFin = [];
    let starts = array.forEach(element => {
        if (element.startsWith(letra)){
            arrayFin.push(element)
        }
    });
    return arrayFin;
}

console.log(findNameStartingWith (fullNames, "A"));
console.log(findNameStartingWith (fullNames, "E"));
console.log(findNameStartingWith (fullNames, "D"));
