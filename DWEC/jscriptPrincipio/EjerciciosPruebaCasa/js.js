let frutas = ['manzana', 'pera', 'kiwi', 'plátano', 'naranja'];

let frutaPorMayus = frutas.map(t => t.charAt([0]).toUpperCase().concat(t.substring(1,t.length)));

let nuevoLi;

let lista = document.getElementById('lista');

let frutasLista = frutaPorMayus.forEach(element => {
    nuevoLi = document.createElement('li'); 
    nuevoLi.textContent = element;
    lista.appendChild(nuevoLi);
});

lista.removeChild(lista.firstElementChild);

let liFinal = document.createElement('li');

let textoLiFinal1= document.createTextNode('Total: ');


liFinal.appendChild(textoLiFinal1);

let textoLiFinal2= document.createTextNode(frutas.length);

liFinal.appendChild(textoLiFinal2);

let textoLiFinal3= document.createTextNode(' frutas.');
liFinal.appendChild(textoLiFinal3);

lista.appendChild(liFinal);


let frutasMasCuatro = frutas.filter(t => t.length>4).join(", ");


let liKiwi = Array.from(lista.children).find(li => li.textContent === 'Kiwi');
liKiwi.remove();