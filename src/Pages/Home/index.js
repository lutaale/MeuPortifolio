import { useEffect } from 'react';
import { Link } from 'react-router-dom';
import React from 'react';
import './home.css';
import '../../App.css';

function Home() {
    //usando o hook useeffect para renderizar essa funcao de deixar o header transparente toda vez que o usuario entrar ou atualizar a pagina
    useEffect(() => {
        const header = document.getElementById('header')
        
        document.addEventListener('scroll', function () {
            //guardando a posicao da pagina no eixo y
            var posicaoy = window.pageYOffset;
            if (posicaoy !== 0) {
                header.setAttribute('style','background-color:#22937ea9')
            } else {
                header.setAttribute('style', 'background-color:#22937E')
            }
        })
    },[])    


    return (
        <div className='container'>
            <header className='header' id='header'>
                <div className='logo'><a><Link to={'/'}>FoodEasyApp</Link></a></div>
                <nav>
                    <button>Perguntas frequêntes</button>
                    <button>Preços</button>
                    <button>Entrar</button>
                    <button>Cadastre-se</button>
                </nav>
            </header>
            <section className='section1'>
                <div className='text1'>
                    <h1>Crie seu Próprio ambiente personalizavel para seu <strong>Delivery!</strong></h1>
                    <p>Sem concorrentes, taxas ou comissões!</p>
                    <a><Link to={'/Cadastro'}>Começar agora!</Link></a>
                </div>
                <div className='ilustracao'>
                    <img src={require('../../img/Delivery-Cristina-removebg-preview.png')}></img>
                </div>
            </section>
            <section className='section2'>
                <div className='ilustracao2'>
                    <img src={require('../../img/e-commerce-g5335cef70_640-removebg-preview.png')}></img>
                </div>
                <div className='text2'>
                    <h2>Gerancie seu <strong>Delivery</strong> em um só lugar!</h2>
                    <p>Tenha uma plataforma completa onde você administra items e preços do cardapio do seu restaurante,
                        sem precisar instalar programas!</p>
                </div>
            </section>
            <section className="section3">
                <header className='header2'>
                    <h2>Um perfeito aliado do seu negócio!</h2>
                    <p>Seu delivery com um aplicativo próprio, totalmente personalizado e sem instalaçōes para o seus clientes.</p>
                </header>
                <div className='box-ilustracoes'>
                    <div className='ilustracao3'>
                        <img src={require('../../img/4113.jpg')}></img>
                        <span>Sem necessidade de instalação</span>
                        <p>Você terá tudo online em qualquer lugar do mundo!</p>
                    </div>
                    <div className='ilustracao4'>
                        <img src={require('../../img/5978774.jpg')}></img>
                        <span>Sem taxas ou comissões</span>
                        <p>Torcemos para que seu negócio cresça cada vez mais!</p>
                    </div>
                </div>
            </section>
        </div>
    )
}
export default Home;