const contenedorPost = document.getElementById("post");
const listaComentarios = document.getElementById("listaComentarios");
const formComentario = document.getElementById("formComentario");
const selectUsuario = document.getElementById("userId");
const textoComentario = document.getElementById("body");
const mensajeError = document.getElementById("mensajeError");

const parametros = new URLSearchParams(window.location.search);
const id = parametros.get("id");

let usuarios = [];
let comentariosPost = [];

/**
 * Pinta la publicación (título, autor y cuerpo).
 * @param {Object} post - La publicación (un objeto).
 * @returns {void}
 */
function mostrarPost(post) {
    const autorPost = usuarios.find(u => u.id === post.userId);

    const titulo = document.createElement("h2");
    titulo.textContent = post.title;

    const autor = document.createElement("p");
    autor.className = "text-muted";
    autor.textContent = "Por " + autorPost.name;

    const cuerpo = document.createElement("p");
    cuerpo.textContent = post.body;

    contenedorPost.replaceChildren();
    contenedorPost.appendChild(titulo);
    contenedorPost.appendChild(autor);
    contenedorPost.appendChild(cuerpo);
}

/**
 * Pinta la lista de comentarios guardada en comentariosPost.
 * @returns {void}
 */
function mostrarComentarios() {
    listaComentarios.replaceChildren();

    if (comentariosPost.length === 0) {
        const vacio = document.createElement("li");
        vacio.className = "list-group-item";
        vacio.textContent = "Todavía no hay comentarios.";
        listaComentarios.appendChild(vacio);
        return;
    }

    comentariosPost.forEach(comentario => {
        const autorComentario = usuarios.find(u => u.id === comentario.userId);

        const li = document.createElement("li");
        li.className = "list-group-item";
        li.textContent = autorComentario.name + ": " + comentario.body;

        listaComentarios.appendChild(li);
    });
}

/**
 * Rellena el desplegable del formulario con los usuarios.
 * @returns {void}
 */
function rellenarSelect() {
    selectUsuario.replaceChildren();

    usuarios.forEach(usuario => {
        const opcion = document.createElement("option");
        opcion.value = usuario.id;
        opcion.textContent = usuario.name;
        selectUsuario.appendChild(opcion);
    });
}

const xhrPost = new XMLHttpRequest();
xhrPost.open("GET", "http://localhost:3000/posts/" + id);

xhrPost.addEventListener("load", () => {
    if (xhrPost.status === 200) {
        const post = JSON.parse(xhrPost.responseText);

        const xhrComentarios = new XMLHttpRequest();
        xhrComentarios.open("GET", "http://localhost:3000/comments?postId=" + id);

        xhrComentarios.addEventListener("load", () => {
            if (xhrComentarios.status === 200) {
                comentariosPost = JSON.parse(xhrComentarios.responseText);

                const xhrUsers = new XMLHttpRequest();
                xhrUsers.open("GET", "http://localhost:3000/users");

                xhrUsers.addEventListener("load", () => {
                    if (xhrUsers.status === 200) {
                        usuarios = JSON.parse(xhrUsers.responseText);

                        mostrarPost(post);
                        mostrarComentarios();
                        rellenarSelect();
                    }
                });

                xhrUsers.send();
            }
        });

        xhrComentarios.send();
    } else {
        mensajeError.textContent = "No se pudo cargar la publicación (error " + xhrPost.status + ").";
    }
});

xhrPost.addEventListener("error", () => {
    mensajeError.textContent = "No se pudo conectar con el servidor.";
});

xhrPost.send();

formComentario.addEventListener("submit", (e) => {
    e.preventDefault();
    mensajeError.textContent = "";

    const nuevoComentario = {
        postId: id,
        userId: selectUsuario.value,
        body: textoComentario.value.trim()
    };

    if (nuevoComentario.body === "") return;

    const xhr = new XMLHttpRequest();
    xhr.open("POST", "http://localhost:3000/comments");
    xhr.setRequestHeader("Content-Type", "application/json");

    xhr.addEventListener("load", () => {
        if (xhr.status === 201) {
            const creado = JSON.parse(xhr.responseText);

            comentariosPost.push(creado);
            mostrarComentarios();
            formComentario.reset();
        } else {
            mensajeError.textContent = "No se pudo guardar el comentario (error " + xhr.status + ").";
        }
    });

    xhr.addEventListener("error", () => {
        mensajeError.textContent = "No se pudo conectar con el servidor.";
    });

    xhr.send(JSON.stringify(nuevoComentario));
});