<?php 

if (isset($_POST["submit"])){ 

   $nome=$_POST["nome"]; 
   $email=$_POST["email"]; 
   $telefone=$_POST["telefone"]; 
   $cpf=$_POST["cpf"]; 
   $parcelas=$_POST["parcelas"]; 

   /*echo '<h1>Ola voce tem um novo conato de cliente!</h1>';
   echo '<h2>'.$nome.'</h2>';
   echo '<h2>'.$telefone.'</h2>';
   echo '<h2>'.$email.'</h2>';
   echo '<h2>'.$cpf.'</h2>';
   echo '<h2>'.$parcelas.'</h2>';*/

    $mensagem = 
    '<div 
    style = "background-color:green;
    color:white;
    width:100%;
    padding-left:10rem;
    border-radius:10px";>' . 
    '<h1 style="color:white">' .'Sicred'.'</h1>'. 
    '<h1 style="color:white">' .'Chegou uma Solicitação de um Cliente!'.'</h1>'.
    '<h2 style="color:white">'.'<img src="https://img.icons8.com/ios/60/FFFFFF/insurance-agent.png" />' . $nome . '</h2>' . 
    '<h2 style="color:white">'.'<img src="https://img.icons8.com/ios-glyphs/60/FFFFFF/phone-office--v2.png"/>' . $telefone . '</h2>'  .
    '<h2 style="color:white; text-decoration:none">'.'<img src="https://img.icons8.com/ios-filled/60/FFFFFF/circled-envelope.png"/>' . $email . '</h2>' . 
    '<h2 style="color:white">'.'<img src="https://img.icons8.com/dotty/60/FFFFFF/identity-theft.png"/>' . $cpf . '</h2>' . 
    '<h2 style="color:white">Parcelas:' . $parcelas . '</h2>'. 
    '</div>';


    require("phpmailer/src/PHPMailer.php");
    require("phpmailer/src/SMTP.php");
    require ("phpmailer/src/Exception.php");

    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->isSMTP(); // Não modifique
    $mail->Host       = 'smtp.hostinger.com';  // SEU HOST (HOSPEDAGEM)
    $mail->SMTPAuth   = true;                        // Manter em true
    $mail->Username   = 'lutai9life@iflooryouflooring.site';   //SEU USUÁRIO DE EMAIL
    $mail->Password   = '27486877Ab#';                   //SUA SENHA DO EMAIL SMTP password
    $mail->SMTPSecure = 'ssl';    //TLS OU SSL-VERIFICAR COM A HOSPEDAGEM
    $mail->Port       = 465;     //TCP PORT, VERIFICAR COM A HOSPEDAGEM
    $mail->CharSet = 'UTF-8';    //DEFINE O CHARSET UTILIZADO

     $mail->setFrom('liberacaoecred@sicred.net', 'Sicred');  //DEVE SER O MESMO EMAIL DO USERNAME
     $mail->addAddress('liberacaoecred@gmail.com');     // QUAL EMAIL RECEBERÁ A MENSAGEM!

    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Voce tem um novo contato de cliente!'; //ASSUNTO
    $mail->Body    = $mensagem;  //CORPO DA MENSAGEM
    $mail->AltBody = $mensagem;  //CORPO DA MENSAGEM EM FORMA ALT
    
    if(!$mail->Send()) {
        echo "<script>alert('Erro ao enviar o E-Mail'); window.location.assign('index.php');</script>";
    }else{
        $mail2 = new PHPMailer\PHPMailer\PHPMailer();
        $mail2->isSMTP(); // Não modifique
        $mail2->Host       = 'smtp.hostinger.com';  // SEU HOST (HOSPEDAGEM)
        $mail2->SMTPAuth   = true;                        // Manter em true
        $mail2->Username   = 'lutai9life@iflooryouflooring.site';   //SEU USUÁRIO DE EMAIL
        $mail2->Password   = '27486877Ab#';                   //SUA SENHA DO EMAIL SMTP password
        $mail2->SMTPSecure = 'ssl';    //TLS OU SSL-VERIFICAR COM A HOSPEDAGEM
        $mail2->Port       = 465;     //TCP PORT, VERIFICAR COM A HOSPEDAGEM
        $mail2->CharSet = 'UTF-8';    //DEFINE O CHARSET UTILIZADO
        $mail2->setFrom('lutai9life@iflooryouflooring.site', 'Sicred');  //DEVE SER O MESMO EMAIL DO USERNAME
        $mail2->addAddress($email);     // QUAL EMAIL RECEBERÁ A MENSAGEM!
        
         $mensagem2 = '<div style="width:100%; height:200px; border-radius:10px;background-color:#1b1b1b; color:white;">'.
         '<span>'.'Olá ' . $nome .  ' recebemos sua solicitação em breve retornaremos Aguarde!' .'</span>'.'<br>'.
         '<span>'. 'Att:'.'<strong>'. 'Sicred'.'</strong>' .
         '<img src="./img/logo.jpeg" alt="Sicred">'.'</div>';
        
         $mail2->isHTML(true);                                  // Set email format to HTML
         $mail2->Subject = 'Sicred'; //ASSUNTO
         $mail2->Body    = $mensagem2;  //CORPO DA MENSAGEM
         $mail2->AltBody = $mensagem2;  //CORPO DA MENSAGEM EM FORMA ALT
         if(!$mail2 ->Send()){
            echo "<script>alert('Erro ao enviar o E-Mail2'); window.location.assign('index.php');</script>";
         }else{
             echo "<script>alert('E-Mail enviado com sucesso!'); window.location.assign('index.php');</script>";
         }
    }
     die;
};
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Emprestimo com a melhor taxa do mercado você encontra aqui na Sicred!">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="responsive.css">
    <link rel="shortcut icon" href="./img/logo.jpeg" type="image/x-icon">
    <title>Sicred</title>
</head>

<body onload="slide1()">
    <section class='box1'>
        <header>
            <div class="logo">
                <a href="https://sicred.net">
                    <img src="./img/logosemfundo.png" alt="Sicred">
                </a>
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
             <div id="slide">
                <img id="img1" src="./img/img1.jpg" alt="">
                <img id="img2" src="./img/img2.jpg" alt="sicred">
            </div>
            <form action="index.php" method="post">

                <div class="boxform active" id="box1">
                    <div class="btnclose"><a onclick="closebox()">X</a></div>
                    <p class='msgerro'>Digite seu nome completo!</p>
                    <input type="text" name="nome" id="nome" placeholder="Nome completo">
                    <button type="button" id="btn1" class="proximo">Próximo</button>
                    <span>1/5</span>
                </div>
                <div class="boxform" id="box2">
                    <div class="btnclose"><a onclick="closebox()">X</a></div>
                    <p class='msgerro2'>Digite seu email!</p>
                    <input type="text" name="email" id="email" placeholder="Email">
                    <div class="btngrup">
                        <button type="button" id="btnvoltar2" class="voltar"><img
                                src="https://img.icons8.com/sf-black/50/FFFFFF/left.png" /></button>
                        <button type="button" id="btn2" class="proximo">Próximo</button>
                    </div>
                    <span>2/5</span>
                </div>
                <div class="boxform" id="box3">
                    <div class="btnclose"><a onclick="closebox()">X</a></div>
                    <p class='msgerro3'>Digite seu telefone!</p>
                    <input type="tel" name="telefone" id="telefone" placeholder="Telefone">
                    <div class="btngrup">
                        <button type="button" id="btnvoltar3" class="voltar"><img
                                src="https://img.icons8.com/sf-black/50/FFFFFF/left.png" /></button>
                        <button type="button" id="btn3" class="proximo">Próximo</button>
                    </div>
                    <span>3/5</span>
                </div>
                <div class="boxform" id="box4">
                    <div class="btnclose"><a onclick="closebox()">X</a></div>
                    <p class='msgerro4'>Digite seu cpf!</p>
                    <input type="number" name="cpf" id="cpf" placeholder="CPF">
                    <div class="btngrup">
                        <button type="button" id="btnvoltar4" class="voltar"><img
                                src="https://img.icons8.com/sf-black/50/FFFFFF/left.png" /></button>
                        <button type="button" id="btn4" class="proximo">Próximo</button>
                    </div>
                    <span>4/5</span>

                </div>
                <div class="boxform" id="box5">
                    <div class="btnclose"><a onclick="closebox()">X</a></div>
                    <label for="listaparcelas">Selecione o número de parcelas</label>
                    <select name="parcelas" id="parcelas">
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
                    <div class="btngrup">
                        <button type="button" id="btnvoltar5" class="voltar"><img
                                src="https://img.icons8.com/sf-black/50/FFFFFF/left.png" /></button>
                        <button type="submit" id="submit" name="submit">Enviar</button>
                    </div>
                </div>
            </form>

            <div class='text'>
                <h1>Dinheiro rápido e fácil</h1>
                <h2>Linha de Emprestimos</h2>
                <h3>Melhores taxas de juros do mercado!</h3>
                <div class='Solicitarbtn'><button onclick="activeformbox()">Solicitar Crédito!<img
                            src="https://img.icons8.com/ios-glyphs/35/ffffff/long-arrow-right.png" /></button></div>
                <div class='btnwhatsapp'><a href="https://api.whatsapp.com/send?phone=5511947697228">
                        <button><img
                                src="https://img.icons8.com/material-outlined/45/ffffff/whatsapp--v1.png" /></button>
                </div></a>
            </div>
            <div id="ilustracao">
                <div id="styleimg">
                    <img src="./img/ilustracao-removebg-preview.png" alt="Sicred">
                </div>
            </div>
        </div>
        <div id="diretiva">
            <span>Usamos cookies pra oferecer a melhor experiência e analisar o uso de nosso site, direcionar conteúdos
                e anúncios personalizados e facilitar a navegação de forma segura. Para mais informações,
                consulte nossa <a href=""><strong>Diretiva de Privacidade</strong></a>.</span>
            <button onclick="closediretiva()">Fechar</button>
        </div>
    </section>


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
                <img src="https://img.icons8.com/ffffff/150/security-checked.png" />
                <span><strong>Segurança</strong></span>
            </div>
            <div class='icons'>
                <img src="https://img.icons8.com/ffffff/150/iphone-x.png" />
                <span><strong>100% Digital</strong></span>
            </div>
            <div class='icons'>
                <img src="https://img.icons8.com/ios/150/FFFFFF/insurance-agent.png" />
                <span><strong>Atendimento Humano</strong></span>
            </div>
            <div class='icons'>
                <img src="https://img.icons8.com/ffffff/150/money-box.png" />
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
        <div class="imglogo"><img src="./img/logo.jpeg" alt="Sicred"></div>
        <div class="logo2">
            <div class="logo">
                <div class="img"></div>
                <div class="title">
                    <h1>Sicred</h1>
                </div>
            </div>

            <span>Emprestimo simples é aqui na <strong>Sicred</strong></span>
            <div class="redes-sociais">
                <img src="https://img.icons8.com/material-outlined/40/ffffff/instagram-new--v1.png" />
                <img src="https://img.icons8.com/ios-glyphs/40/ffffff/facebook.png" />
            </div>
            <div class="contato">
                <span><a href="https://api.whatsapp.com/send?phone=5511947697228"><img
                            src="https://img.icons8.com/material-outlined/40/ffffff/whatsapp--v1.png" />(11)93361-4133</a></span>
            </div>
        </div>
        <div class="copywhiter">
            <p>copywriting - 2022 todos direitos reservados Sicred.</p>
        </div>
    </footer>
    <script src="main.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="scrollreval.js"></script>
    <script src="simulador.js"></script>
    <script src="slide.js"></script>
</body>

</html>