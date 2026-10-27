const inventory = { items: [{name:'Laptop',quantity:5,price:1200},
    {name:'Mouse',quantity:25,price:20},
    {name:'Keyboard',quantity:15,price:50}], 
    totalItems:0 };

// Actualiza la propiedad totalItems automáticamente sumando las cantidades de cada artículo del array items.

let total= inventory.items.reduce((acum, items) => {
    acum+=items.quantity;
    return acum
},0)

inventory.totalItems = total;

console.log(inventory.totalItems);

// Crea un método addItem(itemName, quantity, price) que añada un nuevo artículo al inventario o actualice el quantity si el artículo ya existe.

function addItem(itemName,quantity,price){

    inventory.items.push({"name":itemName, "quantity":quantity,"price":price})

    return inventory.items;
}

console.log(addItem("PC", 5, 6));

// Crea un método removeItem(itemName) que elimine un artículo del inventario basado en su nombre.



// Imprime en consola el nombre de todos los artículos que cuestan más de 50.

let mas50 = inventory.items.filter(t =>t.price>50);

console.log(mas50);

// Obtén la cantidad total de artículos en stock cuyo nombre contenga la letra "o" (manipulación de cadenas).
let acumuladorArticulosConO=0;
let cantidadArticulos = inventory.items.forEach(element => {
    if (element.name.includes("o")){
        acumArt+=element.quantity;
    }
});

console.log(acumArt);