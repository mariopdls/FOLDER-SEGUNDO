const bookStore = {books:
    [{title:'1984',author:'George Orwell',price:15,category:'Fiction'},
        {title:'Sapiens',author:'Yuval Noah Harari',price:20,category:'Non-fiction'}]};
// TODO: addBook, getBooksByCategory, reduce, filter, sort.


// Tareas:

// Crea un método addBook(title, author, price, category) que añada un nuevo libro al array books.

function addBook(title,author,price,category){

    bookStore.books.push({"title":title,"author":author,"price":price,"category":category}) 

    return bookStore;
}
console.log(addBook("Quijote","Pedro",65,"Novela"));

// Crea un método getBooksByCategory(category) que devuelva un array con todos los libros de esa categoría.

function getBooksByCategory(category) {
    let libros= bookStore.books.filter(t => t.category==category);

    return libros
}

console.log(getBooksByCategory("Fiction"))

// Utiliza reduce() para calcular el precio total de todos los libros.

function precioTotal () {
    
   let precio= bookStore.books.reduce((acum, libro) =>{
        acum+=libro.price;
        return acum
    },0)

    return precio;
}

console.log(precioTotal())

// Utiliza filter() para devolver solo los libros cuyo precio sea mayor de 18.

function libroMayor18(){
    let mayores = bookStore.books.filter(t => t.price>18);

    return mayores;
}

console.log(libroMayor18());

// Utiliza sort() para ordenar los libros por precio, de mayor a menor.

function librosOrdenadosPrecio () {
    let ordenados = bookStore.books.sort((a,b) => b.price-a.price);

    return ordenados;
}

console.log(librosOrdenadosPrecio());