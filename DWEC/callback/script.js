const SERVER = "https://jsonplaceholder.typicode.com";

const formulario = document.getElementById("form-show");

const tbody = document.getElementById("tabla-posts");

const contador = document.getElementById("num-posts");

formulario.addEventListener("submit", function (event) {

    event.preventDefault();

    const idUsuario = document.getElementById("id-usuario").value;

    if (idUsuario === "" || Number(idUsuario) < 1) {
        alert("Debes introducir un identificador válido");
        return;
    }

    getPosts(idUsuario, mostrarPosts);

});

/**
 * Consulta las publicaciones de un usuario.
 * @param {string} idUsuario - Identificador del usuario.
 * @param {Function} callback - Función que procesará los datos.
 */
function getPosts(idUsuario, callback) {

    const xhr = new XMLHttpRequest();

    xhr.open(
        "GET",
        SERVER + "/posts?userId=" + encodeURIComponent(idUsuario)
    );

    xhr.addEventListener("load", function () {

        if (xhr.status === 200) {

            const publicaciones = JSON.parse(xhr.responseText);

            callback(publicaciones);

        } else {

            console.error("Error HTTP:", xhr.status);

            tbody.replaceChildren();
            contador.textContent = "0";

        }

    });

    xhr.addEventListener("error", function () {

        console.error("Error de conexión");

        tbody.replaceChildren();
        contador.textContent = "0";

    });

    xhr.send();
}

/**
 * Muestra las publicaciones en una tabla.
 * @param {Array} publicaciones - Array de publicaciones.
 */
function mostrarPosts(publicaciones) {

    tbody.replaceChildren();

    publicaciones.forEach(function (post) {

        const fila = document.createElement("tr");

        const valores = [
            post.userId,
            post.id,
            post.title,
            post.body
        ];

        valores.forEach(function (valor) {

            const celda = document.createElement("td");

            celda.textContent = valor;

            fila.appendChild(celda);

        });

        tbody.appendChild(fila);

    });

    contador.textContent = publicaciones.length;
}

// 1. crear funcion mostrartitulos(publicaicones) que muestre unicamente lso titulos de las publicaciones en una lista html
//2. añadir un segundo boton llamado mostrar solo titulos
//3 al pulsar el boton consultar las publicaciones del usuario introducido y usar mostartitulos como callback
//4 mantener el boton original para mostrar las  publicaciones en una tabla
//5 comprobar que ambos botones utilizan la misma funcion getPosts()
const ul = document.getElementById("lista-titulos");

function mostrarTitulos(publicaciones) {
    ul.replaceChildren();

    publicaciones.forEach(post => {
        let li = document.createElement("li");
        let content = document.createTextNode(post.title);
        li.appendChild(content);
        ul.appendChild(li);
    });
}