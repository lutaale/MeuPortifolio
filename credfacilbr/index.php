<?php
if(isset($_POST['submit'])){
    include_once('config.php');
    
     $nome = $_POST['nome'];
     $cpf = $_POST['cpf'];
     $email = $_POST['email'];
     $telefone = $_POST['telefone'];
     $valordesejado = $_POST['valor'];
     $parceladesejada = $_POST['parecelas'];
     $result =  mysqli_query($conecxao,"INSERT INTO solicitacoes(nome,cpf,email,telefone,valordesejado,parcelas)
      VALUES ('$nome','$cpf ','$email','$telefone','$valordesejado','$parceladesejada')");
}
?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Emprestimo com a melhor taxa do mercado você encontra aqui na CredfacilBR!">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="responsive.css">
    <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon">
    <title>CredfacilBR</title>
</head>

<body>
    <section class='box1'>
        <header>
            <div class="logo">
                <div class="img"></div>
                <div class="title">
                    <h1>CREDFACILBR</h1>
                </div>
            </div>
            <button class='btn-menu' onclick="mostrarmenu()"></button>
        </header>
        <div class='btn-area'>
            <div class='btns'>
                <button onclick="sobrenos()">Sobre nós</button>
                <button onclick="contatos()">Contatos</button>
                <button onclick="activeformbox()">Solicitar crédito</button>
            </div>
        </div>
        <div class='content1'>
            <div id='formbox'>
                <div class='titleform'>
                    <h2>Formulário para contato</h2>
                    <button onclick="closeform()">X</button>
                </div>
                <form action="index.php" method="POST">
                    <div class="formgrup">
                        <div class="inputsarea">
                            <div class="input">
                                <input type="text" name="nome" id="nome" required>
                                <span>Nome completo</span>
                            </div>
                            <div class="input">
                                <input type="text" name="cpf" id="cpf" required>
                                <span>CPF</span>
                            </div>
                            <div class="input">
                                <input type="text" name="email" id="email" required>
                                <span>Email</span>
                            </div>
                            <div class="input">
                                <input type="text" name="telefone" id="telefone" required>
                                <span>Telefone</span>
                            </div>
                        </div>
                        <div class="inputsarea2">
                            <div class="msgerror">
                                <span>Digite um valor entre 5mil a 500mil</span>
                            </div>
                            <div class="input" id="valordesejado">
                                <input type="number" name="valor" id="valor" required>
                                <span>Digite o valor desejado</span>
                            </div>
                            <div class="msgerror2">
                                <span>Digite o numero de parcelas entre 12x a 180x</span>
                            </div>
                            <div class="parecelas">
                                <label for="listaparcelas">Selecione o número de parcelas</label>
                                <select name="parecelas" id="parecelas">
                                    <option value="12">12x</option>
                                    <option value="24">24x</option>
                                    <option value="36">36x</option>
                                    <option value="48">48x</option>
                                    <option value="60">60x</option>
                                    <option value="72">72x</option>
                                    <option value="84">84x</option>
                                    <option value="96">96x</option>
                                    <option value="108">108x</option>
                                    <option value="120">120x</option>
                                </select>

                            </div>
                            <div class="btnsubmit"><button type="submit" name="submit" id="submit">Enviar</button></div>
                        </div>

                    </div>
                </form>

            </div>
            <div class='text'>
                <h1>Dinheiro rápido e fácil</h1>
                <h2>Linha de Emprestimos</h2>
                <h3>Melhores taxas de juros do mercado!</h3>
                <div class='Solicitarbtn'><button onclick="activeformbox()">Solicitar Crédito!<img
                            src="https://img.icons8.com/ios-glyphs/35/ffffff/long-arrow-right.png" /></button></div>
                <div class='btnwhatsapp'><a href="https://contate.me/credfacilbr">
                        <button><img
                                src="https://img.icons8.com/material-outlined/45/ffffff/whatsapp--v1.png" /></button>
                </div></a>

            </div>
        </div>
    </section>

    <div id="slide">
        <div class="item" id="i1"></div>
        <div class="item" id="i2"></div>
        <div class="item" id="i3"></div>
    </div>

    <section class='box2'>
        <div class='text-simulacao'>
            <h2>Faça uma simulação agora!</h2>
            <p>O crédito que voçê precisa com as melhores condições do mercado.</p>
            <button onclick="boxsimulacao()">Iniciar simulação</button>
        </div>

        <div id="box-simulador">
            <div class="closesimulador"><button onclick="closesimulador()">X</button></div>
            <div class="calculo">
                <span>Qual o valor desejado?</span><br><br>
                <div class="erro"><span>Escolha um valor entre 5mil a 500mil</span></div>
                <span id="resultvalor">R$5000</span>
                <input type="range" name="valorselecionado" id="valorselecionado" min="0" max="500000"
                    value="0"><br><br>
                <p>Se preferir, digite o valor que deseja</p>
                <input type="number" name="numero" id="numero" placeholder="Digite o valor"><br><br>
                <label for="listaparcelas">Selecione o número de parcelas</label>
                <select name="listaparcelas" id="listaparcelas">
                    <option value="12">12x</option>
                    <option value="24">24x</option>
                    <option value="36">36x</option>
                    <option value="48">48x</option>
                    <option value="60">60x</option>
                    <option value="72">72x</option>
                    <option value="84">84x</option>
                    <option value="96">96x</option>
                    <option value="108">108x</option>
                    <option value="120">120x</option>
                </select>
                <button onclick="calcular()">Calcular</button>
            </div>
            <div class="resultado">
                <span id="textvalor"></span>
                <span id="quant-parcelas"> </span>
                <span id="taxajuros"></span>
                <span id="valorparcelas"></span>
                <strong id="total"></strong>
            </div>
        </div>

        <div class='ilustracao2'><img src="./img/ilustracao2.png"></img></div>
    </section>
    <section class='box3'>
        <div class='vantagens-text'>
            <p>Vantagens</p>
            <h2>Melhore sua vida <strong>financeira</strong> com rapidez e tecnologia</h2>
        </div>
        <div class='icons-text'>
            <div class='icons'>
                <img src="https://img.icons8.com/nolan/150/security-checked.png" />
                <span><strong>Segurança</strong></span>
            </div>
            <div class='icons'>
                <img src="https://img.icons8.com/nolan/150/iphone-x.png" />
                <span><strong>100% Digital</strong></span>
            </div>
            <div class='icons'>
                <img src="https://img.icons8.com/nolan/150/hardworking--v2.png" />
                <span><strong>Atendimento Humano</strong></span>
            </div>
            <div class='icons'>
                <img src="https://img.icons8.com/nolan/150/money-box.png" />
                <span><strong>Melhores juros do mercado</strong></span>
            </div>
        </div>
    </section>
    <section class='box4'>
        <div class='title-sobrenos'><strong>Sobre nós</strong></div>
        <div class='text-sobrenos'>
            <p>Nosso objetivo é oferecer soluções financeiras para quem precisa. É por isso que oferecemos crédito com a
                melhor taxa de juros do mercado,
                com rapidez e tecnologia na palma da sua mão!.</p>
        </div>
        <div class='valores'>
            <strong>Nossos valores</strong>
            <ul>
                <li>Transparencia</li>
                <li>Excelência</li>
                <li>Desenvolver Pessoas</li>
            </ul>
        </div>
    </section>
    <footer>
        <div class="logo2">
            <div class="logo">
                <div class="img"></div>
                <div class="title">
                    <h1>CREDFACILBR</h1>
                </div>
            </div>

            <span>Emprestimo simples é aqui na <strong>CredfacilBR</strong></span>
            <div class="redes-sociais">
                <img src="https://img.icons8.com/material-outlined/40/ffffff/instagram-new--v1.png" />
                <img src="https://img.icons8.com/ios-glyphs/40/ffffff/facebook.png" />
                <img src="https://img.icons8.com/ios-glyphs/40/ffffff/linkedin.png" />
            </div>
            <div class="contato">
                <span><a href="https://contate.me/credfacilbr"><img
                            src="https://img.icons8.com/material-outlined/40/ffffff/whatsapp--v1.png" />(11)992701-1672</a></span>
            </div>
        </div>
        <div class="copywhiter">
            <p>copywriting - 2022 todos direitos reservados CredfacilBR.</p>
        </div>



    </footer>
    <script src="main.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="scrollreval.js"></script>
    <script src="simulador.js"></script>
    <script src="slide.js"></script>
</body>

</html>