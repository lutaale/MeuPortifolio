<?php
if(isset($_POST['salvar'])){
    include_once('config.php');
    
     $nome = $_POST['nome'];
     $email = $_POST['email'];
     $senha = $_POST['senha'];
     $result =  mysqli_query($conecxao,"INSERT INTO usuarios(nome,email,senha)
      VALUES ('$nome','$email','$senha')");
}
?>





<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        * {
            font-family: 'poppins', sans-serif;
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }

        body {
            width: 100%;
        }

        main {
            width: 100%;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url('./img/finance-g4ef7bb545_1920.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }

        section {
            width: 350px;
            height: 400px;
            border-radius: 5px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: white;
        }

        .input input {
            border: none;
            width: 100%;
            outline: none;
            background-color: transparent;
            height: 40px;

        }

        .input {
            width: 200px;
            height: 40px;
            border-bottom: 1px solid grey;
            position: relative;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            margin-bottom: 1rem;
        }

        .input span {
            position: absolute;
            left: 0px;
            transition: 0.3s ease;
            pointer-events: none;
            color: grey;
        }


        .input input:focus~span {
            transform: translateY(-25px);
            font-size: 13px;
        }

        .input input:valid~span {
            transform: translateY(-25px);
            font-size: 13px;
        }

        .inputarea {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .inputarea #entrar {
            width: 180px;
            height: 30px;
            border-radius: 5px;
            color: white;
            background-color: #1b1b1b;
            border: none;
            outline: none;
            cursor: pointer;
            transition: 0.3s ease;
        }

        .inputarea button:hover {
            background-color: #03252c;
        }

        .inputarea #criarusuario {
            border: none;
            background: none;
            color: #03252c;
            cursor: pointer;
        }

        .inputarea #criarusuario:hover {
            text-decoration: underline;
        }

        .caduser {
            width: 350px;
            height: 400px;
            border-radius: 5px;
            background-color: white;
            position: absolute;
            z-index: 10;
            display: none;
            animation: show 1s ease;
            overflow: hidden;
        }
        #cadbox{
            width:100%;
            display:flex;
            justify-content:center;
            align-items:center;
            flex-direction:column;
        }

        @keyframes show {
            0% {
                width: 0px;
            }

            100% {
                width: 350px;
            }
        }

        .inputsarea {
            width: 100%;
            height: 400px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background: linear-gradient(#6a6969a5, rgba(192, 192, 192, 0.599));

        }

        .inputsarea button {
            width: 150px;
            height: 30px;
            border: none;
            outline: none;
            cursor: pointer;
            background-color: #1b1b1b;
            color: white;
        }

        .btnclose {
            width: 100%;
            height: 20px;
            display: flex;
            justify-content: flex-end;
            position: absolute;
        }

        .btnclose button {
            margin-right: 1rem;
            margin-top: 1rem;
            font-size: 20px;
            background-color: transparent;
            border: none;
            outline: none;
            cursor: pointer;

        }

        .img {
            width: 70px;
            height: 70px;
            background: linear-gradient(#000 41%, white 88%);
            border-radius: 50%;
            transform: rotate(-0.33turn);
        }


        .img::before {
            content: '';
            display: block;
            width: 29px;
            height: 48px;
            background-color: white;
            position: absolute;
            margin-left: 26px;
            margin-top: 37px;
            transform: rotate(-44deg);
        }

        .img::after {
            content: '';
            display: block;
            width: 35px;
            height: 34px;
            background-color: white;
            position: absolute;
            left: -1px;
            top: 33px;
        }

        .logo {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .title h1 {
            font-family: fangsong;
            font-size: 25px;
            font-weight: 300;
            margin-top: 0.5rem;
            color: #1b1b1b;
        }
    </style>
</head>

<body>
    <main>
        <div class="caduser">
            <div class="btnclose">
                <button onclick="closecad()">X</button>

            </div>
            <form action="login.php" method="post" id="cadbox">
                <div class="input">
                    <input type="text" name="nome" id="nome" required>
                    <span>Nome</span>
                </div>
                <div class="input">
                    <input type="text" name="email" id="email" required>
                    <span>Email</span>
                </div>
                <div class="input">
                    <input type="password" name="senha" id="senha" required>
                    <span>Senha</span>
                </div>
                <button type="submit" id="salvar" name="salvar">Salvar</button>
            </form>
        </div>
        <section>
            <form action="testelogin.php" method="post">
                <div class="logo">
                    <div class="img"></div>
                    <div class="title">
                        <h1>CREDFACILBR</h1>
                    </div>
                </div><br>
                <div class="inputarea">
                    <div class="input">
                        <input type="text" name="email" id="email" required>
                        <span>Email</span>
                    </div>
                    <div class="input">
                        <input type="text" name="senha" id="senha" required>
                        <span>Senha</span>
                    </div>
                    <button type="submit" id="entrar" name="entrar">Entrar</button>
                    <button id="criarusuario" onclick="showcad()">Criar usuário</button>
                </div>
            </form>
        </section>
    </main>
    <script>
        function closecad() {
            document.querySelector('.caduser').setAttribute('style', 'display:none')
        }
        function showcad() {
            document.querySelector('.caduser').setAttribute('style', 'display:flex')

        }
    </script>
</body>

</html>