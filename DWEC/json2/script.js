const btnCargar = document.getElementById("btnCargar");
const listaProductos = document.getElementById("listaProductos");

const listaUsuarios = document.getElementById("listaUsuarios");
const btnUsuarios = document.getElementById("btnUsuarios");
btnCargar.addEventListener("click", cargarProductos); //meter el archivo productos json
btnUsuarios.addEventListener("click",cargarUsuarios);
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
            console.log("Error HTTP: " + xhr.status)
        }

    })

        xhr.send();

}

function cargarUsuarios() {
    const xhr = new XMLHttpRequest();
    xhr.open("GET", "http://localhost:3000/users", true); //he envuelto los usuarios en un array para hacerlo

    xhr.addEventListener("load", function(){
        if (xhr.status ===200){
            const usuarios = JSON.parse(xhr.responseText);
            mostrarUsuarios(usuarios)
        }    else {
        console.log("Error HTTP: " + xhr.status);
    }
    })

    xhr.send();
    
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

function mostrarUsuarios (usuarios) {
    
    listaUsuarios.replaceChildren();

    
    usuarios.forEach(function (usuarios) {

        const li = document.createElement("li");

        const texto = document.createTextNode(
            usuarios.name + " - " + usuarios.email
        );

        li.appendChild(texto);

        listaUsuarios.appendChild(li);

    });

}