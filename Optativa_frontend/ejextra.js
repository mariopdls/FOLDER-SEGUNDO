// En una sola línea de código, utiliza la desestructuración para extraer el nombre , el email y
// el telefono . Como el teléfono no existe en el objeto original, asígnale el valor por defecto "No
// proporcionado" durante la propia desestructuración. Imprime las tres variables

const respuestaAPI = {
status: 200,
data: {
usuario: {
id: 105,
nombre: "Sara",
contacto: {
email: "sara@ejemplo.com"
}
}
}
};


const respuestaDesestructurada =  {...respuestaAPI, telefono: 'No proporcionado'}
                                  .filter(respuestaDesestructurada.nombre, respuestaDesestructurada.email, respuestaDesestructurada.telefono);

console.log(respuestaDesestructurada);