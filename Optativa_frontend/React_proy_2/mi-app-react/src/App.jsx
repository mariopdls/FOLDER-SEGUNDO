function Mascota({ nombre, animal }) {
  return <p>{nombre} es un {animal}</p>;
}

function Libro ({titulo, autor, paginas}) {
    return <h3> {titulo}, de {autor} ({paginas} páginas)</h3>
}

function Tarea ({texto, hecha}) {

  return <p>{hecha ? "✅" : "⬜"}{texto}</p>

}
function App() {
  return (
    <div>
      <Tarea texto="chambear" hecha={false}/>
      <Tarea texto="chambear" hecha={true}/>

    </div>

  );
}
export default App;