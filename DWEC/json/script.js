const btnCargar = document.getElementById("btnCargar");
const listaProductos = document.getElementById("listaProductos");

btnCargar.addEventListener("click", cargarProductos); //meter el archivo productos json

/**
 * Solicita los productos al servidor y los muestra en el DOM.
 */
function cargarProductos() {
    const xhr = new XMLHttpRequest();

    xhr.open("GET", "http://localhost:3000/productos", true);

    xhr.addEventListener("load", function() {
        if (xhr.status ===200){
            const productos= JSON.parse(xhr.responseText);

            mostrarProductos(productos)
        }else{
            console.log("Error HTTP: " + hxr.status)
        }

        xhr.send();
    })


}

function mostrarProductos(productos) {

    // Limpiar la lista antes de mostrar los productos
    listaProductos.replaceChildren();

    productos.forEach(function (producto) {

        const li = document.createElement("li");

        const texto = document.createTextNode(
            producto.nombre + " - " + producto.precio + " €"
        );

        li.appendChild(texto);

        listaProductos.appendChild(li);

    });
}