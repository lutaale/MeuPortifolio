import { useEffect, useState } from 'react';
import { useParams } from 'react-router-dom'
import './filme.css'
import api from '../../services/api';
import {toast} from 'react-toastify'

function Filme() {
    const { id } = useParams();
    const [filme, setFilme] = useState({});
    const [loading, setLoading] = useState(true);

    useEffect(() => {
        async function loadFilme() {
            await api.get(`/movie/${id}`, {
                params: {
                    api_key: "28fc232cc001c31e8a031f419d0a14ca",
                    language: "pt-BR",
                }
            })
                .then((response) => {
                    setFilme(response.data);
                    setLoading(false);
                })
                .catch(() => {
                    console.log("FILME NAO ENCONTRADO")
                })
        }

        loadFilme();


        return () => {
            console.log("COMPONENTE FOI DESMONTADO")
        }
    }, [])

    if (loading) {
        return (
            <div className="filme-info">
                <h1>Carregando detalhes...</h1>
            </div>
        )
    }

    function salvarFilme() {
        const minhaLista = localStorage.getItem("@primeflix");

        let filmesSalvos = JSON.parse(minhaLista) || [];

        const hasFilme = filmesSalvos.some((filmesSalvo) => filmesSalvo.id === filme.id)

        if (hasFilme) {
            toast.error('Esse filme ja está na lista')
            return;
        }

        filmesSalvos.push(filme);
        localStorage.setItem("@primeflix", JSON.stringify(filmesSalvos));
        toast.success('Filme salvo com sucesso!')

    }


    return (
        <div className="filme-info">
            <img className='background' src={`https://image.tmdb.org/t/p/original/${filme.backdrop_path}`} alt={filme.title} />

            <h1>{filme.title}</h1>
            <img className='poster' src={`https://image.tmdb.org/t/p/original/${filme.backdrop_path}`} alt={filme.title} />

            <h3>Sinopse</h3>
            <span>{filme.overview}</span>

            <strong>Avalição: {filme.vote_average} / 10</strong><br></br>
            <div className='btn-area'>
                <button className='Salvar' onClick={salvarFilme}>Salvar</button>
                <a target="blank" rel='external' href={`https://youtube.com/results?search_query=${filme.title} filme trailer`} className='trailer'>Trailer</a>
            </div>

        </div>
    )
}

export default Filme;