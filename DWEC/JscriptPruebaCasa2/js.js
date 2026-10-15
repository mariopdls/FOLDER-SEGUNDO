let usuarios = [
  { nombre: 'ana garcía', email: 'ANA@mail.com', edad: 17 },
  { nombre: 'luis pérez', email: 'luis@correo.es', edad: 25 },
  { nombre: 'marta díaz', email: 'Marta@mail.com', edad: 31 },
  { nombre: 'pedro ruiz', email: 'pedro@correo.es', edad: 19 }
]

let nombres = usuarios.map(t => t.nombre)
nuevoarray=[];
nombres.forEach(element => {
    let elementoSpliteado = element.split(" ");
    elementoSpliteado[0] = elementoSpliteado[0].substring(0,1).toUpperCase().concat(elementoSpliteado[0].substring(1,elementoSpliteado[0].length))
    elementoSpliteado[1] = elementoSpliteado[1].substring(0,1).toUpperCase().concat(elementoSpliteado[1].substring(1,elementoSpliteado[1].length))

    nuevoarray.push(elementoSpliteado.join(" "));
});


let emailsMail = usuarios.filter(t => t.email.includes('mail')).map(t => t.email.substring(t.email.length-9,t.email.length).toLowerCase());
let emailsCorreo=usuarios.filter(t =>t.email.includes("correo")).map(t => t.email.substring(t.email.length-10,t.email.length).toLowerCase());
let emailsSinRepetir = new Set([...emailsMail, ...emailsCorreo]);

console.log(emailsSinRepetir);