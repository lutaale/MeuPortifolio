import { useEffect, useState } from 'react';
import api from '../../services/api';
import { Link } from 'react-router-dom';
import '../../App.css'
import { toast } from 'react-toastify'


// URL DA API: /movie/now_playing?api_key=28fc232cc001c31e8a031f419d0a14ca&language=pt-BR

function Home() {
    const [filmes, setFilmes] = useState([]);
    const [filmes2, setFilmes2] = useState([]);
    const [loading, setLoading] = useState(true)
    const [filme, setFilme] = useState({});

    useEffect(() => {

        async function loadFilmes() {
            const response = await api.get("movie/now_playing", {
                params: {
                    api_key: "28fc232cc001c31e8a031f419d0a14ca",
                    language: "pt-BR",
                    page: 1,
                }
            })

            //console.log(response.data.results.slice(0, 10));
            setFilmes(response.data.results.slice(0, 10))
            setFilmes2(response.data.results.slice(10, 20))
            setLoading(false)
            
            
            
        }

        loadFilmes();

    }, [])



    function scrolllright() {
        var right = document.querySelector('.lista-filmes')
        right.scrollBy(350, 0)
    }
    function scrollleft() {
        var left = document.querySelector('.lista-filmes')
        left.scrollBy(-350, 0)
    }
    function scrolllright2() {
        var right2 = document.querySelector('.lista-filmes2')
        right2.scrollBy(350, 0)
    }
    function scrollleft2() {
        var left2 = document.querySelector('.lista-filmes2')
        left2.scrollBy(-350, 0)
    }


    if (loading) {
        return (
            <div className='loading'>
                <h2>Carregando filmes...</h2><span></span>
            </div>
        )
    }

   





    return (
        <>

            <div className="container">
                <div className='btn-left'><button className='left' onClick={scrollleft}><img src="https://img.icons8.com/material-sharp/90/FFFFFF/chevron-left.png" /></button></div>
                <div className='btn-rigth'><button className='rigth' onClick={scrolllright}><img src="https://img.icons8.com/material-sharp/90/FFFFFF/chevron-right.png" /></button></div>
                <div className="lista-filmes">
                    {filmes.map((filme) => {
                        return (
                            <article key={filme.id}>
                                <img className='imgposter' src={`https://image.tmdb.org/t/p/original/${filme.poster_path}`} alt={filme.title} />
                                <strong className='title'>{filme.title}</strong>
                                <Link className='acessar' to={`/filme/${filme.id}`}>Acessar</Link>
                            </article>
                        )
                    })}

                </div>
            </div><br></br><br></br>

            <div className="container">
                <div className='btn-left'><button className='left' onClick={scrollleft2}><img src="https://img.icons8.com/material-sharp/90/FFFFFF/chevron-left.png" /></button></div>
                <div className='btn-rigth'><button className='rigth' onClick={scrolllright2}><img src="https://img.icons8.com/material-sharp/90/FFFFFF/chevron-right.png" /></button></div>
                <div className="lista-filmes2">
                    {filmes2.map((filme) => {
                        return (
                            <article key={filme.id}>
                                <img className='imgposter' src={`https://image.tmdb.org/t/p/original/${filme.poster_path}`} alt={filme.title} />
                                <strong className='title'>{filme.title}</strong>
                                <Link className='acessar' to={`/filme/${filme.id}`}>Acessar</Link>
                            </article>
                        )
                    })}
                </div>
            </div>
        </>
    )
}

export default Home;