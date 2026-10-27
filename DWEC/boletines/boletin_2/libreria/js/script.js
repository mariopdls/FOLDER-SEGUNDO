const bookStore = {books:
    [{title:'1984',author:'George Orwell',price:15,category:'Fiction'},
        {title:'Sapiens',author:'Yuval Noah Harari',price:20,category:'Non-fiction'}]};


// Crea un método addBook(title, author, price, category) que añada un nuevo libro al array books.

function addBook(title,author,price,category){

    bookStore.books.push({"title":title,"author":author,"price":price,"category":category}) 

    return bookStore;
}

// Crea un método getBooksByCategory(category) que devuelva un array con todos los libros de esa categoría.

function getBooksByCategory(category) {
    let libros= bookStore.books.filter(t => t.category==category);

    return libros
}


// Utiliza reduce() para calcular el precio total de todos los libros.

function precioTotal () {
    
   let precio= bookStore.books.reduce((acum, libro) =>{
        acum+=libro.price;
        return acum
    },0)

    return precio;
}

// Utiliza filter() para devolver solo los libros cuyo precio sea mayor de 18.

function libroMayor18(){
    let mayores = bookStore.books.filter(t => t.price>18);

    return mayores;
}


// Utiliza sort() para ordenar los libros por precio, de mayor a menor.

function librosOrdenadosPrecio () {
    let ordenados = bookStore.books.sort((a,b) => b.price-a.price);

    return ordenados;
}

function librosOrdenadosPrecio2(){
    let ordenados2 = bookStore.books.sort((a,b) => a.price-b.price);

    return ordenados2;
}


// TODO: representar tabla, añadir, eliminar, filtrar y ordenar.
    let titulo = document.getElementById('title');
    let precio = document.getElementById('price');
    let autor = document.getElementById('author');
    let categoria = document.getElementById('category');
    let acciones = document.getElementById('actions')
    let filtroCategoria = document.getElementById('categoryFilter');

    let bodyTabla = document.getElementById('books');
    let form = document.getElementById('addBook');

function pintarTabla(){
    bookStore.books.forEach(book => {
        let tr = document.createElement("tr");
        let tdTitulo = document.createElement("td");
        let tdPrecio =  document.createElement("td");
        let tdAutor =  document.createElement("td");
        let tdCategoria =  document.createElement("td");
        let tdAcciones =  document.createElement("td");

        tdTitulo.textContent=book.title;
        tdPrecio.textContent=book.price;
        tdAutor.textContent=book.author;
        tdCategoria.textContent=book.category;
        tdAcciones.innerHTML = `<button id="delete">Eliminar</button>`

        tr.appendChild(tdTitulo);
        tr.appendChild(tdAutor);
        tr.appendChild(tdPrecio);
        tr.appendChild(tdCategoria);
        tr.appendChild(tdAcciones);

        bodyTabla.appendChild(tr);
        
    })
}
   form.addEventListener("submit", (e) => {

        e.preventDefault();
        addBook(titulo.value, autor.value, precio.value, categoria.value)
        bodyTabla.innerHTML=``;
        pintarTabla();

    })


    let botonAsc = document.getElementById('asc');
    let botonDesc= document.getElementById('desc');
    botonAsc.addEventListener("click",(e)=> {
        e.preventDefault();
        bodyTabla.innerHTML=``;

       librosOrdenadosPrecio();
       pintarTabla();

    })

    botonDesc.addEventListener("click", (e) => {
        e.preventDefault();
        bodyTabla.innerHTML=``;

        librosOrdenadosPrecio2();
        pintarTabla();
    })

pintarTabla();
// TODO: actualizar opciones del selector si aparecen nuevas categorías.



