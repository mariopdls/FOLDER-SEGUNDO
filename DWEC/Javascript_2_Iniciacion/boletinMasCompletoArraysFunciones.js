

//ej 1 

let productos = [
  { id: 1, nombre: 'Teclado', precio: 25.5, stock: 10 },
  { id: 2, nombre: 'Ratón', precio: 15.0, stock: 0 },
  { id: 3, nombre: 'Monitor', precio: 150.0, stock: 5 },
  { id: 4, nombre: 'USB', precio: 8.0, stock: 25 }
]


let mayoresCero = productos.filter(p => p.stock>0);

console.log(mayoresCero);

let arrayNombres = productos.map(t => t.nombre);

console.log(arrayNombres);

let totalStock = 0;
let valorStock = productos.reduce((acumulador, precioAct ) => {
    totalStock = precioAct.precio*precioAct.stock;
    return totalStock;
});

console.log(totalStock);

let ordenado = productos.sort((a,b) => a.precio-b.precio);
console.log(ordenado);

function buscarProducto(nombreProd){

    let productoEncontrado = productos.filter(t => {
        if (t.nombre.includes(nombreProd)){
            return console.log(t)
        }
        else{
            return null;
        };
    })
}

buscarProducto("patata");

const {nombre,precio} = productos.find(t => t.id===3)
console.log(nombre);
console.log(precio);

let setNuevo = new Set(productos);
console.log (setNuevo);

let arrayNuevo= [...setNuevo]; //uso de SPREAD

//ej2
let notas = [5.2, 3.9, 6, 9.75, 7.5, 3, 6.5, 9.75];

let aprobados = notas.filter(t => t>=5);
console.log(aprobados);

let notamedia = notas.reduce((acumulador,nota)=>{
    
    return acumulador+nota;
    
},0);
let mediatotal = notamedia/notas.length;
console.log(mediatotal);

console.log(Math.max(...notas));

let setNuevo2 = new Set(notas);
console.log(setNuevo2);

let notasFormato = notas.map(t => "Nota: ".concat(t));
console.log(notasFormato);

let algunSus = notas.some(t => t<5);
console.log(algunSus);

let sonTodosMayor3 = notas.every(t => t>=3);
console.log(sonTodosMayor3);

//ej3

let palabras = ['hola','adios','bien','mal','javascript','JS','array','map'];

let mayus = palabras.map(t => t.toUpperCase());
console.log(mayus);

let mastresletras= palabras.filter(t => t.length>3);
console.log(mastresletras);

let unirCadena=  palabras.join("-");
console.log(unirCadena);

let arraydeNuevo = unirCadena.split("-");
console.log(arraydeNuevo);

let totalLetras = palabras.reduce((acumulador, letras) => {
    return acumulador+letras.length;
},0)

console.log(totalLetras);

//ej4

let alumnos = [
  {nombre:'Ana', nota:7.5, curso:'DAW'},
  {nombre:'Luis', nota:4.5, curso:'DAW'},
  {nombre:'María', nota:9.0, curso:'DAW'},
  {nombre:'Pedro', nota:6.0, curso:'DAM'},
  {nombre:'Lucía', nota:8.5, curso:'DAM'}
]

let soloDaw = alumnos.filter(t => t.curso==="DAW");
console.log(soloDaw);

let nombreAprobados = alumnos.filter(t => t.nota>=5).map(t => t.nombre);
console.log(nombreAprobados);

let mediasDAM = alumnos.reduce((acumulador,notas)=> {
    return notas.curso=="DAM" ? acumulador+notas.nota : null
    
},0)

let alumnosDam= alumnos.filter(t => t.curso=="DAM");
let mediaDamFinal = mediasDAM/alumnosDam.length;
console.log(mediaDamFinal);

let maria = alumnos.find(t => t.nombre=="María")
console.log(maria);

let primerSuspenso = alumnos.findIndex(t => t.nota<5);
console.log(primerSuspenso);

let ordenadoDesc = alumnos.sort((a, b) => b.nota-a.nota);
console.log(ordenadoDesc);



function devolverAprobados(al) {
    let contadorApr=0;
    let contadorSus=0;
    
    al.forEach(element => {
        if (element.nota>=5){
            contadorApr++;
        }
        else{
            contadorSus++;
        }
    });

    let objAprSus = {'aprobados':contadorApr, 'suspensos':contadorSus}

    return objAprSus;
}

console.log(devolverAprobados(alumnos));

//ej5
let valoresArray =[34,5,1,54,85,1,4,5,6] 

function media(...valores){
    
    let nuevoArray = [...valores];

    let totalNums= nuevoArray.reduce((acum,numero) =>{
        return acum+numero;
    },0);

    return totalNums/nuevoArray.length;
}

console.log(media(...valoresArray));


let copiaArray = [...valoresArray];

Math.max(copiaArray);
Math.min(copiaArray)

let alumnos2 = 
  {nombre:'Jose', nota:7.5, curso:'DAW'};

let copiaAlumnos2 = {...alumnos2, curso: 'DAM'};
console.log(copiaAlumnos2);

<<<<<<< HEAD

function mostrarAlumno({ nombre, nota }) {
  console.log(`Alumno: ${nombre} - Nota: ${nota}`);
}

const alumno = { nombre: "Ana", nota: 9.5 };
mostrarAlumno(alumno); 

=======
//ej6

let ventas = [
  {producto:'Libro', unidades:3, precio:12.5},
  {producto:'Bolígrafo', unidades:10, precio:1.2},
  {producto:'Carpeta', unidades:2, precio:5.0}
];

function arrayUnidades (array) {

    let arrayFinal = [];
    array.forEach(producto => {
       arrayFinal.push(producto.precio*producto.unidades);
    });

    console.log(arrayFinal);

}
arrayUnidades(ventas);

function ventasTotales(array){
    let sumatotaluds = 0;

        array.forEach(element => {
            sumatotaluds += element.unidades;
        });


    array.reduce((acumulador, producto)=> {
        acumulador + producto.precio;
        let preciototal = sumatotaluds * acumulador;

        return console.log(preciototal);
    },0);



    
}
ventasTotales(ventas);
>>>>>>> e0daa1ca30bea9032009d0ec2d0783f551907e3a
