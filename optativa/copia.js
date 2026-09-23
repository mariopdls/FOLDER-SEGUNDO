// const alumno = {edad:18,nombre:"Manu"};

// const nuevoAlumno = {...alumno, nombre: "Paco"};

// console.log(nuevoAlumno); 

// const product = {name:'pc'};
// const {name} = product;


// function nameAndColor({name,specs: { color }}){
//     console.log("Product name: ", name, "Color: ", color)
// }

// nameAndColor(product);

// const sum = (a,b) =>  a+b;
// const sum2 = (a,b) =>  {return a+b};
// console.log(sum(2,3));

// const precios = [10,20,30];

// const resultado = precios
//                  .filter(precio => precio>15)
//                  .map(precio =>"Precio final: " `${precio}€`);


const products =  [{id : 1, task:  "Comprar bolis", status: "done"}, 
                   {id : 2, task:  "Comprar folios", status: "done"},
                   {id : 3, task:  "Comprar gomas", status: "pending"}
];

const pendingTasks=products.filter(products => products.status === 'pending');
const completed=products.filter(products => products.status ='done');

console.log(products);
console.log(pendingTasks);
console.log(completed);