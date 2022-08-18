import './erro.css'
import { Link } from 'react-router-dom'

function Erro() {
    return (
        <div className='container2'>
            <h1>404</h1>
            <span>Pagina não encotrada!</span>
            <Link to="/">Voltar a página home</Link>
        </div>
    )
}

export default Erro;