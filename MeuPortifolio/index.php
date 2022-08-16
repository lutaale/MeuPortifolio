<?php 

if (isset($_POST["submit"])){ 

   $nome=$_POST["nome"]; 
   $email=$_POST["email"]; 
   $telefone=$_POST["telefone"]; 
   $mensagem2 = $_POST["mensagem"];
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
    '<h1 style="color:white">' .'Chegou uma Solicitação de um Cliente!'.'</h1>'.
    '<h2 style="color:white">'.'<img src="https://img.icons8.com/ios/60/FFFFFF/insurance-agent.png" />' . $nome . '</h2>' . 
    '<h2 style="color:white">'.'<img src="https://img.icons8.com/ios-glyphs/60/FFFFFF/phone-office--v2.png"/>' . $telefone . '</h2>'  .
    '<h2 style="color:white; text-decoration:none">'.'<img src="https://img.icons8.com/ios-filled/60/FFFFFF/circled-envelope.png"/>' . $email . '</h2>' . 
    '<h2 style="color:white">'.'<img src="https://img.icons8.com/dotty/60/FFFFFF/identity-theft.png"/>' . $mensagem2 . '</h2>' . 
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

     $mail->setFrom('lutai9life@iflooryouflooring.site', 'Contato de cliente ou empresa');  //DEVE SER O MESMO EMAIL DO USERNAME
     $mail->addAddress('lutai9life@gmail.com');     // QUAL EMAIL RECEBERÁ A MENSAGEM!

    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Voce tem um novo contato de cliente!'; //ASSUNTO
    $mail->Body    = $mensagem;  //CORPO DA MENSAGEM
    $mail->AltBody = $mensagem;  //CORPO DA MENSAGEM EM FORMA ALT

    if(!$mail->Send()) {
        echo "<script>alert('Erro ao enviar o E-Mail'); window.location.assign('index.php');</script>";
     }else{
        echo "<script>alert('E-Mail enviado com sucesso!'); window.location.assign('index.php');</script>";
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
    <meta name="description" content="Olá meu nome é Alexandre Desenvolvedor Web!">
    <title>Meu Portifolio</title>
    <link rel="shortcut icon" href="./img/Captura_de_Tela__11_-removebg.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel=" stylesheet " href=" https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css ">
    <link rel="stylesheet" href="responsive.css">
</head>

<body onload="slide1()">
    <div id="indexloading">
        <div id="logo">
            <div class="logo">
                <span>Alexandre</span>
                <p>Desenvolvedor Web</p>
            </div>
        </div>
    </div>
    <section id="box1">
        <header>
            <div id="logo">
                <a href="index.html">
                    <div class="logo"><span>Alexandre</span>
                        <p>Desenvolvedor Web</p>
                    </div>
                </a>
            </div>
            <div class="btnarea">
                <button id="btnhome">Home</button>
                <button id="btnprojetos">Projétos</button>
                <button id="btncontatos">Contatos</button>
                <button id="btnskills">Skills</button>
            </div>
            <button id="menubtn"></button>
        </header>
        <div id="text">
            <span>Portifólio</span>
            <h1>Alexandre</h1>
            <p>Desenvolvedor Web</p><br>
            <button id="saibamaisbtn">Saiba mais!</button>
        </div>
    </section>
    <section id="box2">
        <div id="sobremim">
            <div id="minha-foto"><img src="./img/minhafoto.jpg" alt=""></div>
            <div class="txtsobremin">
                <h3>sobre</h3><br><br>
                <h1>Olá, sou o Alexandre,<br>Desenvolvedor web <br></h1><br>
                <p>Atuo como desenvolvedor web desde janeiro de 2022,<br> oferecendo soluções na Web.</p>
                <a href="cv.pdf">
                    <button class="downloadcv">Ver Cv</button>
                </a>
            </div>
        </div>

        <div id="skillsgrup">
            <h2>Skills</h2>
            <div>
                <img id="img1" src="https://img.icons8.com/color/144/000000/javascript--v1.png" alt="JAVA-SCRIPT" />
                <img src="https://img.icons8.com/plasticine/144/000000/react.png" />
                <img id="img2" src="https://img.icons8.com/color/144/000000/html-5--v1.png" alt="html" />
                <img id="img3" src="https://img.icons8.com/color/144/000000/css3.png" alt="css" />
                <img id="img4" src="https://img.icons8.com/officel/144/000000/php-logo.png" alt="php" />
                <img id="img5" src="https://img.icons8.com/color/144/000000/git.png" alt="git" />
                <img id="img6" src="https://img.icons8.com/ios-glyphs/144/000000/github.png" alt="github" />
            </div>
        </div>
    </section>
    <section id="box3">
        <div class="title">
            <h2>Projétos</h2>
        </div>
        <div id="boxprojetos">
            <div id="projetosimg1" class="projetos">
                <a href="https://abramconsorcio.netlify.app/">
                    <img src="./img/abram.png" alt="">
                </a>
            </div>
            <div id="projetosimg2" class="projetos">
                <a href="https://sicred.netlify.app/">
                    <img src="./img/sicred.png" alt="">
                </a>
            </div>
            <div id="projetosimg3" class="projetos">
                <a href="https://credfacil.netlify.app/">
                    <img src="./img/cred.png" alt="">
                </a>
            </div>
            <div id="projetosimg4" class="projetos">
                <a href="https://iflooryouflooring.netlify.app/">
                    <img src="./img/Captura de Tela (14).png" alt="">
                </a>
            </div>
            <div id="projetosimg5" class="projetos">
                <a href="https://agenciascience.netlify.app/">
                    <img src="./img/Captura de Tela (12).png" alt="">
                </a>
            </div>
            <div id="projetosimg6" class="projetos">
                <a href="https://testevagadevfrontend.netlify.app/">
                    <img src="./img/qridea.png" alt="">
                </a>
            </div>
        </div>
    </section>
    <form id="formulario" action="index.php" method="post">
        <div class="containerform">
            <h2>Entre em contato!</h2><br><br>
            <div class="inputs">
                <input class="input" name="email" id="email" type="text" required autocomplete="off">
                <span class="span">Digite seu email</span>
            </div>
            <div class="inputs" id="inputs2">
                <input class="input" type="text" name="tel" id="tel" required>
                <span class="span">Digite seu Whatsapp</span>
            </div>
            <div id="msg" class="inputs">
                <input class="input" type="text" name="mensagem" id="mensagem" maxlength="100">
                <span class="span">Digite uma mensagem (Opcional)</span>
            </div>
            <button type="submit" id="submit" name="submit">Enviar</button>
        </div><br><br>
        <div id="Contatos">
            <h2>Contatos</h2>
            <div>
                <div class="elementoscontato"><span>Email</span><br>
                    <p>alexandre.devfrontend@gmail.com</p>
                </div><br>
                <div class="elementoscontato"><span>Whatsapp</span><br>
                    <p>(11)99440-7328</p>
                </div><br>
                <div class="elementoscontato"><span>Localização</span><br>
                    <p>São Paulo - sp</p>
                </div>
            </div>
        </div>
    </form>
    <footer id="footer">
        <div id="iconscontact">
            <a href="https://www.instagram.com/dev.alexandreoliveira/"><img
                    src="https://img.icons8.com/ios/50/ffffff/instagram-new--v1.png" /></a>
            <a href="https://www.linkedin.com/in/alexandre-de-oliveira-luta-0b91aa172"><img
                    src="https://img.icons8.com/ios-filled/50/ffffff/linkedin-circled--v1.png" /></a>
            <a href="https://github.com/lutaale/MeuPortifolio"><img
                    src="https://img.icons8.com/ios-glyphs/50/ffffff/github.png" />
            </a>
            <a href="https://wa.me/5511994407328"><img
                    src="https://img.icons8.com/material-outlined/50/ffffff/whatsapp--v1.png" /></a>
        </div>
        <p>copywriting - 2022 - Desenvolvido por Alexandre</p>
    </footer>
    <script src="./js/scrollreveal.js"></script>
    <script src="./js/main.js"></script>
    <script src="./js/buttonsprojeto.js"></script>
    <script src="./js/validacoes.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="./js/slide.js"></script>
</body>

</html>