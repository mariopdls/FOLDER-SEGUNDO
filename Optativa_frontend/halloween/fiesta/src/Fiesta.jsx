import './Fiesta.css'
import './invitadosData.js'
function Fiesta(){
    return (
        <>

  <div className="party-app">
    <h1>🎃 Fiesta de Halloween: lista de invitados</h1>

    {/* <!-- ===== CONTADOR ===== --> */}
    <div className="guest-counter">🧟 Confirmados: <strong>2</strong> de <strong>5</strong></div>

    {/* <!-- ===== FORMULARIO DE ALTA ===== --> */}
    <form className="guest-form">
      <input className="spooky-input" type="text" placeholder="Nombre del invitado"></input>
      <input className="spooky-input" type="text" placeholder="Disfraz (opcional)"></input>
      <button type="submit" className="add-btn">Añadir invitado</button>
    </form>

    {/* <!-- ===== BUSCADOR ===== --> */}
    <div className="search-box">
      <input className="spooky-input" type="text" placeholder="🔍 Buscar invitado por nombre..."></input>
    </div>

    {/* <!-- 👉 Si ningún invitado coincide con la búsqueda, en lugar de la rejilla se muestra:
    <p className="empty-msg">🕷️ Ningún invitado coincide con la búsqueda</p>
    --> */}

    {/* <!-- ===== REJILLA DE INVITADOS ===== --> */}
    <section className="guests-grid">

      {/* <!-- Invitado CONFIRMADO: clase extra "confirmed", insignia verde y botón "cancel" --> */}
      <article className="guest-card confirmed">
        <h3>Lucía</h3>
        <p className="costume">🎭 Momia</p>
        <span className="badge badge-ok">✅ Confirmado</span>
        <button className="toggle-btn cancel">Cancelar asistencia</button>
      </article>

    </section>
  </div>

    </>
    )
}

export default Fiesta