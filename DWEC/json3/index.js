function mostrarPosts(posts, users) {
    listaPosts.replaceChildren();
    posts.forEach(element => {
        const autor = users.find(u => u.id === element.userId);

        let a = document.createElement('a');
        a.href = "detalle.html?id=" + element.id;
        a.textContent = element.title + " - " + autor.name;
        a.className = "list-group-item list-group-item-action";
        listaPosts.appendChild(a);
    });
}

const xhr = new XMLHttpRequest();
xhr.open("GET", "http://localhost:3000/posts");

xhr.addEventListener("load", () => {
    if (xhr.status === 200) {
        const posts = JSON.parse(xhr.responseText);

        const xhrUsers = new XMLHttpRequest();
        xhrUsers.open("GET", "http://localhost:3000/users");

        xhrUsers.addEventListener("load", () => {
            if (xhrUsers.status === 200) {
                const users = JSON.parse(xhrUsers.responseText);
                mostrarPosts(posts, users);   // los dos a la vez
            }
        });

        xhrUsers.send();   // dentro del if del primero, fuera de su load
    } else {
        console.error("Error: " + xhr.status);
    }
});

xhr.send();

