<?php

if(isset($_POST['submit'])){
     include_once('./configdb/config.php');
     $nome = $_POST['nome'];
     $email = $_POST['email'];
     $telefone = $_POST['tel'];

     $result =  mysqli_query($conecxao,"INSERT INTO orcamentos(nome,email,telefone) VALUES ('$nome','$email','$telefone')");
 }

?>
  
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agência Science</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="slide.css">
    <link rel="stylesheet" href="formulario.css">
    <link rel="stylesheet" href="responsive.css">
    <link rel="shortcut icon" href="./img/Tamanho Site-1.png" type="image/x-icon">
</head>
<body>
    <div class="container">
        <header>
            <div class="logo">
                <img src="./img/Tamanho Site-1.png" alt="logo">
            </div>
            <div class="btns">
            <button class="home">Home</button> 
            <button class="servicosbtn">Serviços</button>
            <button>Blog</button>
            <button class="orcamento">Solicitar Orçamento</button>
            </div>

            <!-- formulario -->
            <section>
                <div class="formulario">
                    <header><button class="closeform">x</button></header>
                   <form action="agenciascience.php" method="post">
                       <div class="titleform"><h3>Preencha os campos para entrarmos em contato com você!</h3></div>
                        <div class="box box1 active">
                            <div class="form-grup">
                                <label for="nome">Nome<img src="https://img.icons8.com/ios/50/ffffff/user--v1.png"/></label>
                                <input type="text" name="nome" id="nome" required>
                            </div>
                             <div class="form-grup">
                                 <label for="tel">Telefone<img src="https://img.icons8.com/ios-glyphs/30/ffffff/whatsapp.png"/></label>
                                 <input type="tel" name="tel" id="tel" required>
                             </div>
                             <div class="form-grup">
                                 <label for="email">Email <img src="https://img.icons8.com/ios/50/ffffff/gmail--v1.png"/></label>
                                 <input type="email" name="email" id="email" required autocomplete="off">
                             </div>
                             <div class="btnsubmit"><button type="submit" name="submit" id="submit">Enviar!</button></div>
                        </div>
                    </form>
               </div>
            </section>
            <!-- --------------- -->
        </header>
        <div class="boxtext">
            <div class="img">
                <img src="./img/woman-ga8ad0f554_640.png">
            </div>
            <div class="containerboxtetxt">
                <span>Muito mais do que uma agência digital. Utilizamos a ciência de dados para trazer os melhores resultados para o seu negócio. 
                    CHEGA DE ACHISMO.</span><br>
                <p>Organizamos seus dados, com muita transparência focado no seu resultado 
                    Com números e dados corretos podemos trazer a solução para o seu negócio.</p>
            </div>
        </div>
    </div>
    <div class="container2">
        <div class="boxinfo">
            <div class="boxinfotext">
                <div class="title">
                    <h1>Nossos Serviços:</h1>
                    <span>Nós entendemos o momento de cada empresa, por isso oferecemos além do serviços de seo e web analytics, 
                        os  demais serviços de forma pontual para suprir a sua demanda.</span>
                </div>
                <div class="containerservicos">
                    <div class="categoria">
                       <h3>WEB ANALYTICS</h3>
                        <span>Criação de Dashboard</span>
                        <span>Análise preditiva de mercado</span>
                        <span>Auditoria de Google Analytics</span>
                        <span>Plano de tagueamento</span>
                        <span>Definição de Indicadores (KPI’S)</span>
                        <span>Estruturação de conta propriedades e vista</span>
                    </div>
                    <div class="categoria">
                        <h3>SEO</h3>
                        <span>Diagnóstico de presença online</span>
                        <span>Auditoria de site</span>
                        <span>Auditoria e monitoramento de palavra chave</span>
                        <span>Análise de concorrentes</span>
                        <span>Link building</span>
                    </div>
                    <div class="categoria">
                        <h3>DESENVOLVIMENTO WEB</h3>
                        <span>Desenvolvimento de Landing Pages</span>
                        <span>Manutenção - desenvolvimento</span>
                        <span>Manutenção - design</span>
                        <span>Desenvolvimento front-end</span>
                    </div>
                </div>
          </div>
        </div>
    </div>
    <div class="infoseo">
        <h2>Você sabia que segundo pesquisas, o 1% lugar ranqueado no google de maneira orgânica, 
            recebe em média 20% dos cliques? Ou seja, um SEO bem trabalhado, 
            é o que pode determinar o sucesso ou o fracasso do seu negócio.</h2>
    </div>
    <div class="container3">
        <div class="box1">
           <h1>Cliente e Projetos que cresceram através da Agência Science</h1>
           <div class="numeros">
               <div class="boxnumeros" id="num1">
                   <span>Clientes atendidos</span>
                   <p>+ 54</p>
               </div>
               <div class="boxnumeros" id="num2">
                   <span>Projetos Análisados</span>
                   <p>+ 67</p>
               </div>
               <div class="boxnumeros"id="num3">
                   <span>Implementações Realizadas</span>
                   <p>+ 100</p>
               </div>
           </div>
        </div>
        <div class="boxclientes">
            <h3>O que falam sobre a gente:</h3><br>
            <div class="comentarios">
                <p><strong>“Fiz serviço pontual com a agência science para criação de dashboard e entregaram antes do prazo, 
                    dashboard bem intuitivo e acertou bastante na tomada de decisão da minha equipe”- Henrique Pedrosa </strong></p>
            </div>
            <div class="comentarios">
                <p><strong>“ Já sou cliente deles há 1 ano, e meus resultados orgânicos são sempre satisfatórios” - Luciano Coimbra</strong></p>
            </div>
            <div class="comentarios">
                <p><strong>“ Meu google analytics não estava lendo meus dados direito, e eu estava deixando de aproveitar o máximo que a plataforma me proporcion, consequentemente perdendo dinheiro e informações relevantes, 
                    mas a science resolveu o meu problema e de quebra ainda me ajudou com GTM” - Ana Valério</strong></p>
            </div>
        </div>
        <div class="servicos3">
            <div class="title"><h2>Solicitar Orçamento</h2></div>
            <div class="btn">
                <button class="orcamento2">Click Aqui!</button>
            </div>
        </div>
    </div>
    <footer>
      <div class="box1">
          <h2><img src="" alt=""> Agência Science</h2>
          <a class="soliorcamento">Solicitar Orçamento</a>
      </div>
      <div class="box2">
          <h2>A Agência Science</h2>
          <a class="home2">Home</button> 
          <a class="servicos2">Serviços</a>
          <a class="blog">Blog</a>
      </div>
      <div class="box3">
          <a href=""><img src="https://img.icons8.com/ios-filled/50/ffffff/instagram-new--v1.png"/></a>
          <a href=""><img src="https://img.icons8.com/ios-filled/50/ffffff/facebook--v1.png"/></a>
          <a href=""><img src="https://img.icons8.com/ios-filled/50/ffffff/linkedin.png"/></a>
      </div>
    </footer>
    <script src="main.js"></script>
    <script src="slide.js"></script>
    <script src="formulario.js"></script>
</body>
</html>