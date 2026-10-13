// . Mostrar un icono para elementos incompletos con ? :
// Usa el operador condicional (cond ? a : b) para mostrar una ❌ si isPacked no es true .
function Item({ name, isPacked }) {

   return (<h1>{isPacked ? name + "✔" : name+"x"}</h1>);
    

}
export default function PackingList() {
return (
<section>
<h1>Sally Ride’s Packing List</h1>
<ul>
<Item isPacked={true} name="Space suit" />
<Item isPacked={true} name="Helmet with golden visor" />
<Item isPacked={false} name="Photo of Tam" />
</ul>
</section>
);
}