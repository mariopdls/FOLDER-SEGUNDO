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
