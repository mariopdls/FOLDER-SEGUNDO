const boton = document.getElementById("hola");

boton.addEventListener("click", () => {
    console.log("hola");
})


const enlace = document.getElementById("link");

enlace.addEventListener("mouseenter", () => {
    enlace.style.backgroundColor = "red";
})


enlace.addEventListener("mouseleave", () => {
    enlace.style.backgroundColor = "";

})

//ej3: 
// document.body.addEventListener("mousemove", () => {
//     let liNuevo = document.createElement('li');
//     liNuevo.textContent="La mamá de la mamá";
//     document.body.appendChild(liNuevo);
// })


//2

//2.1 Agrega un escuchador de eventos al elemento document.body para que cuando se presione cualquier tecla, muestre un mensaje de alerta con el nombre de la tecla pulsada y su código.

document.body.addEventListener("keypress", (e) => {
     
    alert("Se ha pulsado la tecla" + " " + e.key)

})