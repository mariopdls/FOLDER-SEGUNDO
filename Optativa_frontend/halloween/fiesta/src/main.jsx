import { StrictMode } from 'react'
import { createRoot } from 'react-dom/client'
import './index.css'
import App from './App.jsx'
import Fiesta from './Fiesta.jsx'

createRoot(document.getElementById('root')).render(
  <StrictMode>
    <Fiesta />
  </StrictMode>,
)
