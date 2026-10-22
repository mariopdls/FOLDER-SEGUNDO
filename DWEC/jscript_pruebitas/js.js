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
//2.2 Prueba el escuchador de eventos con diferentes teclas para verificar que muestra correctamente el nombre y el código de la tecla pulsada.
document.body.addEventListener("keypress", (e) => {
     
    alert("Se ha pulsado la tecla" + " " + e.key + ". Código: " + e.code)

})

//3

//3.1. Crea una lista desordenada (<ul>) con varios elementos de lista (<li>) dentro. Agrega un escuchador de eventos al elemento <ul>
//  para que cuando se haga clic en cualquier elemento de la lista, se muestre un mensaje en la consola indicando el texto del elemento clickeado.

let lista= document.getElementById('lista');

lista.addEventListener("click", (e) => {
      if (e.target && e.target.nodeName === 'LI') { //si es el target y el target coincide con el nombre de nodo "li"
      console.log('Seleccionaste:', e.target.textContent, " que está en nivel ", e.target.childElementCount );} //se imprime el textcontent del target
})


//4.1. Crea un formulario HTML con campos de entrada para el nombre y el correo electrónico.
//  Agrega un botón "Enviar" al formulario. Cuando se haga clic en el botón, 
// valida que los campos de entrada no estén vacíos y muestra un mensaje de éxito o error en la página en función de la validación.



//4.2. Agrega una función que dispare un evento personalizado "formularioEnviado"
//  cuando se envíe el formulario con éxito. Escucha este evento y muestra un mensaje personalizado en la consola cuando se dispare.


function formularioEnviado (){
    console.log("Se ha enviado con éxito el formulario")
}

let form = document.getElementById('formulario');

let formNombre = document.getElementById('name');

let formEmail = document.getElementById('mail');

form.addEventListener('submit', (e) => {
    e.preventDefault();
    if (formNombre.value==""){
        alert("El nombre debe existir");
    } else if (formEmail.value==""){
        alert("El email no puede estar vacio");
    }
    else{
        alert("Enviado con éxito");
        formularioEnviado();    
        }
        })
// })

// //5

// 5.1. Crea un nuevo evento personalizado llamado "miEvento" utilizando new CustomEvent().

const miEvento = new CustomEvent("miEvento");

// 5.2. Agrega un escuchador de eventos a un elemento HTML (puedes usar un botón) para escuchar el evento "miEvento" y mostrar un mensaje de alerta cuando ocurra.

let botonEj5= document.getElementById("botonEvento");

botonEj5.addEventListener("miEvento", () => {
  alert("¡El evento personalizado ha funcionado!");
});


// 5.3. Dispara manualmente el evento "miEvento" en el elemento y verifica que se muestra el mensaje de alerta;
botonEj5.dispatchEvent(miEvento);
