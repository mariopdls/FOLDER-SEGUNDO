
import { products } from './script.js'

//ejercicio 1

function ShowProducts({prod}){
  
let productos = prod.map(t => 
  t.stock===0 ? (<p style={{backgroundColor:'red'}}>Agotado</p>) 
  : t.stock>0 && t.stock<=3 ? (<p style={{backgroundColor:'orange'}}>¡Últimas unidades!</p>)
  : t.isOnSale ? (<p style={{textDecoration: 'line-through'}}><span>{t.price}</span>{t.price - t.discountPrice} </p>)
  : <p>{t.price}</p>
 );

return productos;
}



function App() {
  return (
    <div>
      <ShowProducts prod={products}/>
      
    </div>
  )
}


export default App;