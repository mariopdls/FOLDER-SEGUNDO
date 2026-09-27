const estadoApp = {
usuario: "Admin",
carrito: [
{ id: 1, articulo: "Ratón", cantidad: 1 },
{ id: 2, articulo: "Teclado", cantidad: 1 }
],
total: 50
};

const nuevoEstadoApp = {... estadoApp, total:80};

nuevoEstadoApp.carrito
                .filter(carrito=>carrito.id===2)
                .map(carrito2 => carrito2.cantidad=2);

console.log(nuevoEstadoApp);

// ej2 

const peliculas = [
{ titulo: "Dune", año: 2021, valoracion: 8.0, vista: true },
{ titulo: "El Padrino", año: 1972, valoracion: 9.2, vista: false },
{ titulo: "Matrix", año: 1999, valoracion: 8.7, vista: true },
{ titulo: "Tenet", año: 2020, valoracion: 7.3, vista: false }
];

let peliculasJSX = peliculas.filter(peliculas => peliculas.vista===false).map(peliculas => peliculas.valoracion);

//ej3

const datosUsuario = {
id: 99,
nombre: "Elena",
preferencias: {
idioma: "es",
tema: "oscuro"
},
suscripcion: "Premium"
};


function saludarUsuario(obj){

    datosUsuario.filter(usuario => usuario.tema==="oscuro").map(usuario=>usuario.id);

    console.log( "Hola Elena, tu tema elegido es oscuro");
}

saludarUsuarui(datosUsuario);