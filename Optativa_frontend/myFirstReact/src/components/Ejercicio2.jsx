// Cada Item recibe una propiedad numérica importance .
// Usa && para mostrar “(Importance: X)” en cursiva, pero solo si importance es distinto de
// cero.

function Item({ name, importance }) {

    return (
    <li className="item">
    {name} {importance && 'X'}
    </li>
    );

}
export default function PackingList() {
return (
<section>
<h1>Sally Ride’s Packing List</h1>
<ul>
<Item importance={9} name="Space suit" />
<Item importance={0} name="Helmet with golden visor" />
<Item importance={6} name="Photo of Tam" />
</ul>
</section>
);
}