<!--
    Desenvolvido por TecWeb-code.
    version - 1.0
-->

<?php
        if(isset($_POST['submit'])){
         /* print_r($_POST['nome_colaborador']);
          print_r('<br>');
          print_r($_POST['rg_colaborador']);
          print_r('<br>');
          print_r($_POST['data_nascimento']);
          print_r('<br>');
          print_r($_POST['sexo']);
          print_r('<br>');
          print_r($_POST['email']);
          print_r('<br>');
          print_r($_POST['senha']);*/

          include_once('config.php');
        $nome = $_POST['nome_colaborador'];
        $rg_colaborador = $_POST['rg_colaborador'];
        $data_nascimento = $_POST['data_nascimento'];
        $sexo = $_POST['sexo'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        
        $resultado = mysqli_query($conecxao, "INSERT INTO Funcionarios(nome,RG,data_nasci,sexo,email,senha)
        VALUES ('$nome','$rg_colaborador','$data_nascimento','$sexo','$email','$senha')");
        };
       
        if(isset($_POST['submit_prest'])){
            /*print_r($_POST['nome_prestador']);
            print_r('<br>');
            print_r($_POST['rg_prestador']);
            print_r('<br>');
            print_r($_POST['empresa_prestador']);
            print_r('<br>');
            print_r($_POST['tipo_servico']);
            print_r('<br>');
            print_r($_POST['data']);*/

            include_once('config.php');
            $nome = $_POST['nome_prestador'];
            $rg_colaborador = $_POST['rg_prestador'];
            $empresa = $_POST['empresa_prestador'];
            $tipo_servico = $_POST['tipo_servico'];
            $data = $_POST['data'];

            $resultado2 = mysqli_query($conecxao, "INSERT INTO prest_servicos(nome,rg,empresa,tipo_servico,data_servico)
            VALUES ('$nome','$rg_colaborador','$empresa','$tipo_servico','$data')");
        };

        if(isset($_POST['submit_visitantes'])){
            include_once('config.php');

            $nome = $_POST['nome_visitante'];
            $rg_visitante = $_POST['rg_visitante'];
            $data = $_POST['data_visita'];

            $resultado3 = mysqli_query($conecxao, "INSERT INTO visitantes(nome,rg,data_visita)
            VALUES ('$nome','$rg_visitante','$data')");
        };

        if(isset($_POST['submit_encomendas'])){
            include_once('config.php');

            $nome_desti = $_POST['nome_destinatario'];
            $nome_empresa = $_POST['empresa_entregadora'];
            $data = $_POST['data_entrega'];

            $resultado3 = mysqli_query($conecxao, "INSERT INTO encomendas(nome,nome_destinatario,data_entrega)
            VALUES ('$nome_empresa','$nome_desti','$data')");
        }
?>

<!DOCTYPE html>
<html lang="pt-br">
<link rel="stylesheet" href="main.css">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador</title>
</head>

<body>
    <!--CABEÇALHO DO SITE-->
    <div class="header">
        <a href="#">
            <h1><strong>TecWeb</strong> Manager</h1>
        </a>
        <div class="btnopicoes">
            <button class="btnprestadores">Cadastrar Prestadores</button>
            <button class="btnvisitantes">Cadastrar Visitantes</button>
            <button class="btnencomendas">Cadastrar Encomendas</button>
            <button class="login_colaboradores"><strong>Login</strong></button>
        </div>
    </div>

    <!--CONTEINERS DOS FORMULARIOS-->
    <div class="main_box">
        <div class="container_login">
            <div class="title">
                <h2>Login funcionarios</h2>
            </div>
            <div class="campo_login">
                <form action="testLogin.php" method="post">
                    <label for="email">Email</label><br>
                    <input type="email" name="email" id="email"><br>
                    <label for="senha">Senha</label><br>
                    <input type="password" name="senha" id="senha"><br>
                    <input type="submit" name="login" id="login" value="Login">
                </form>
                <button class="cadastrar_colaborador">Fazer cadastro</button>
            </div>
        </div>

        <div class="box_cad_colaborador">
            <div class="form_box_cad_colaborador">
                <form action="index.php" method="post">
                    <label for="nome_colaborador">Nome</label><br>
                    <input type="text" name="nome_colaborador" id="nome_colaborador" required><br>
                    <label for="rg_colaborador">Rg</label><br>
                    <input type="text" name="rg_colaborador" id="rg_colaborador" required><br>
                    <label for="data_nascimento">Data de nascimento</label><br>
                    <input type="date" name="data_nascimento" id="data_nascimento" required><br><br>
                    <label for="sexo">sexo</label><br>
                    <label for="masculino">Masculino</label>
                    <input type="radio" name="sexo" id="masculino" value="masculino" required>
                    <label for="feminino">Feminino</label>
                    <input type="radio" name="sexo" id="feminino" value="feminino" required><br>
                    <label for="email">Email</label><br>
                    <input type="email" name="email" id="email" required><br>
                    <label for="senha">Senha</label><br>
                    <input type="password" name="senha" id="senha" required><br><br>

                    <input type="submit" name="submit" id="submit" value="Finalizar">
                </form>
            </div>
        </div>
        <!--PRESTADORES DE SERVIÇOS-->
        <div class="box_prestadores">
            <header style="height:50px;text-align:center; display:flex; align-items:center; justify-content:center;">
                <h3>Cadastro de Prestadores de serviços</h3>
            </header>
            <div class="form_prestadores"
                style="height: 100%;display: flex;justify-content: center;align-items: center;">
                <form action="index.php" method="post">
                    <label for="nome_prestador">Nome</label><br>
                    <input type="text" name="nome_prestador" id="nome_prestador"><br>
                    <label for="rg_prestador">Rg</label><br>
                    <input type="text" name="rg_prestador" id="rg_prestador"><br>
                    <label for="empresa_prestador">Empresa</label><br>
                    <input type="text" name="empresa_prestador" id="empresa_prestador"><br>
                    <label for="tipo_serviço">Serviço</label><br>
                    <input type="text" name="tipo_servico" id="tipo_servico"><br>
                    <label for="data">Data do serviço</label><br>
                    <input type="date" name="data" id="data"><br>

                    <input type="submit" name="submit_prest" id="submit_prest" value="Cadastrar" style=" width: 175px;
                    height: 30px;
                    border: none;
                    cursor: pointer;
                    border-radius: 5px;
                    background: dodgerblue;
                    color: white;
                ">
                </form>
            </div>
        </div>
        <!--VISITANTES-->
        <div class="box_visitantes">
            <header style="
            height:50px;text-align:center; display:flex; align-items:center; justify-content:center;">
                <h3>Cadastro de Visitantes</h3>
            </header>
            <div class="form_visitantes"
                style="height: 100%;display: flex;justify-content: center;align-items: center;">
                <form action="index.php" method="post">
                    <label for="nome-visitante">Nome</label><br>
                    <input type="text" name="nome_visitante" id="nome_visitante"><br>
                    <label for="rg_visitante">Rg</label><br>
                    <input type="text" name="rg_visitante" id="rg_visitante"><br>
                    <label for="data">Data</label><br>
                    <input type="date" name="data_visita" id="data_visita"><br>
                    <input type="submit" name="submit_visitantes" id="submit_visitantes" value="Cadastrar">
                </form>
            </div>
        </div>
        <!--ENCOMENDAS-->
        <div class="box_encomendas">
            <header
                style="   
            margin-top: 15px;;height:30px;text-align:center; display:flex; align-items:center; justify-content:center;">
                <h3>Encomendas</h3>
            </header>
            <div class="form_encomendas"
                style="height: 100%;display: flex;justify-content: center;align-items: center;">
                <form action="index.php" method="post">
                    <label for="empresa_entregadora">Empresa</label><br>
                    <input type="text" name="empresa_entregadora" id="empresa_entregadora"><br>
                    <label for="nome_destinatario">Nome destinatário</label><br>
                    <input type="text" name="nome_destinatario" id="nome_destinatario"><br>
                    <label for="data_entrega">Data</label><br>
                    <input type="date" name="data_entrega" id="data_entrega"><br>
                    <input type="submit" name="submit_encomendas" id="submit_encomendas" value="Cadastrar">
                </form>
            </div>
        </div>
    </div>

   <!--div style="background: #6d88f3; margin-bottom:14rem;padding:0px 5px 15px;border-radius:3px; width:260px;
   height:120px">
      <a style="text-decoration: none;
          color: #fff;
          font-size: 15px;
          margin-left: 10px;" href="index.php">
                <h1><strong style="color: #42307d;">TecWeb</strong> Manager</h1>
      </a>
  </div>-->

    <div style="display: flex; justify-content: space-around;" class="informacoes">
        <div class="contato">
            <fieldset>
                <legend><b>Contatos</b></legend>
                <li style="list-style: none;color: white;" id="vinicius">Vinicius Barbosa <br>(11) 9 8895-5198</li>
                <li style="list-style: none;color: white;" id="gabriel">Gabriel Milhomem <br>(11) 9 5361-3600</li>
                <li style="list-style: none;color: white;" id="alexandre">Alexandre oliveira <br>(11) 9 9440-7328</li>
            </fieldset>
        </div>
        <div class="suporte">
            <fieldset>
                <legend><b>Suporte</b></legend>
                <li style="list-style: none;color: white;">Email tecwebcode@gmail.com</li>
            </fieldset>
        </div>
        <div class="redessociais">
            <fieldset style="text-align: center;">
                <legend><b>Redes sociais</b></legend>
                <li style="list-style: none;"><a style="text-decoration: none;color: white;" href="">Instagran</a></li>
                <li style="list-style: none;"><a style="text-decoration: none;color: white;" href="">Linkedin</a></li>
                <li style="list-style: none;"><a style="text-decoration: none;color: white;" href="">Facebook</a></li>
            </fieldset>
        </div>
    </div>
</body>
<script src="main.js"></script>

</html>