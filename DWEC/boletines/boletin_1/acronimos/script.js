const phrases = [{phrase:'Hyper Text Markup Language'},{phrase:'Cascading Style Sheets'},{phrase:'Object Oriented Programming'}];
// TODO: generar acrónimos con map y filtrar frases largas.

let acronym = phrases.map(t => t.phrase);
let arrayAcronimos=[];
let acronimoPalabra="";
acronym.forEach(element => {
    let spliteado = element.split( " ")
    
    spliteado.forEach(element2 => {
        acronimoPalabra+=element2[0];
    });
    arrayAcronimos.push(acronimoPalabra);
    acronimoPalabra="";
});

console.log(arrayAcronimos);

