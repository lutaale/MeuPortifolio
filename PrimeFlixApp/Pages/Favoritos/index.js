import { useEffect, useState } from 'react';
import './favoritos.css';
import { Link } from 'react-router-dom'
import {toast} from 'react-toastify'

function Favoritos() {
    const [filmes, setFilmes] = useState([])

    useEffect(() => {

        const minhaLista = localStorage.getItem("@primeflix");
        setFilmes(JSON.parse(minhaLista) || [])

    }, [])


    function excluir(id) {
        let filtro = filmes.filter((item) => {
            return(item.id !== id)
        })
        setFilmes(filtro)
        localStorage.setItem("@primeflix", JSON.stringify(filtro))
        toast.success('Filme excluido com sucesso!')
    }


    return (
        <div className="meus-filmes">
            <div className='title'>
                <h1>Meus filmes</h1>
            </div>

            <ul>
            
                {filmes.map((item) => {
                    return (
                        
                        <li className='item' key={item.id}>
                            <div className='box-info'>
                                <img className='imgposter2' src={`https://image.tmdb.org/t/p/original/${item.poster_path}`} alt={item.title} />
                                <span>{item.title}</span>
                            </div>
                            <div className='btn-area2'>
                                <Link to={`/filme/${item.id}`}>Ver detalhes</Link>
                                <button onClick={()=> excluir(item.id)} >Excluir</button>
                            </div>
                        </li>
                           
                    )
                })}
            </ul>
        </div>
    )
}

export default Favoritos;