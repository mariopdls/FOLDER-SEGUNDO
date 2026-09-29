// En una sola línea de código, utiliza la desestructuración para extraer el nombre , el email y
// el telefono . Como el teléfono no existe en el objeto original, asígnale el valor por defecto "No
// proporcionado" durante la propia desestructuración. Imprime las tres variables

const respuestaAPI = {
status: 200,
data: {
        usuario: {
            id: 105,
            nombre: "Sara",
            contacto: {
                email: "sara@ejemplo.com"
                }
            }
    }
};

const {data : {usuario : {nombre, contacto : {email, telefono= "No proporcionado" }}}} = respuestaAPI;

console.log(nombre, email, telefono);

//2

// Reto Extra 2: La pesadilla del estado anidado (Spread + Map)
// Este es el error número uno de los juniors en React: intentar actualizar un array de objetos
// dentro de un estado.

const estadoRestaurante = {
nombre: "El Buen Sabor",
abierto: true,
menu: [
    { id: 1, plato: "Pizza Margarita", disponible: true },
    { id: 2, plato: "Pasta Carbonara", disponible: false },
    { id: 3, plato: "Tiramisú", disponible: true }
]
};

// Tu tarea:
// Acaba de llegar suministro de pasta. Crea un nuevoEstadoRestaurante donde la
// disponibilidad de la "Pasta Carbonara" (id: 2) pase a ser true .
// Condiciones obligatorias:
// 1. No puedes mutar el objeto original.
// 2. Debes hacer spread ( ... ) del objeto principal.
// 3. Para actualizar el array menu , debes utilizar .map() y actualizar solo el objeto con id
// === 2 , dejando el resto de platos intactos

const nuevoEstadoRestaurante = {...estadoRestaurante};

estadoRestaurante.menu.map(m => {
    if (m.id===2){
        m.disponible=true;
    }
})

console.log(nuevoEstadoRestaurante);

// //La tienda necesita saber el total de dinero ingresado, pero solo de las ventas con estado
// "completado" .
// 1. Encadena un .filter() para aislar las ventas completadas.
// 2. Encadena un .reduce() a ese resultado para sumar todos los importes.
// 3. El resultado final debe guardarse en una variable llamada totalIngresos e imprimirse
// por consola (el resultado debería ser 170).

const ventas = [
{ id: 1, cliente: "Juan", importe: 150, estado: "completado" },
{ id: 2, cliente: "Ana", importe: 80, estado: "pendiente" },
{ id: 3, cliente: "Luis", importe: 20, estado: "completado" },
{ id: 4, cliente: "Marta", importe: 300, estado: "cancelado" }
];

const nuevasVentas = {...ventas};

const total = Object.values(nuevasVentas).filter(t => t.estado==="completado").reduce((acum, venta) => {
    return acum + venta.importe;
}, 0);

console.log(total);

//pffffffffffffffffff