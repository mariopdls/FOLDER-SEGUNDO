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

    xhr.open("GET", "http://localhost:3000/productos", true); //abre


    xhr.addEventListener("readystatechange", () => { //hace el readyState para ver el estado
        console.log(xhr.readyState);
    })

    xhr.addEventListener("load", function() { //carga para ver el resultado
        if (xhr.status ===200){
            const productos= JSON.parse(xhr.responseText);

            mostrarProductos(productos)
        }

    })

    xhr.addEventListener("error", () => {
        let body = document.getElementById('pError');
        let p = document.createElement('p');
        p.textContent="";
        let textP = document.createTextNode('Error, no funciona');
        p.appendChild(textP);
        body.appendChild(p);            
        console.log("Error: " + xhr.status);


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


// 1. Añade un evento readystatechange que muestre el valor de readyState en la consola.



// 2. Mantén el evento load para mostrar los productos en el DOM.
// 3. Añade el evento error para mostrar un mensaje si falla la conexión.
// 4. Detén JSON Server y pulsa el botón Cargar productos. Comprueba qué sucede.
// 5. Vuelve a iniciar JSON Server y cambia la URL a /productos/999.
// Comprueba la diferencia entre una respuesta HTTP 404 y un fallo de conexión.