

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="resposive.css">
    <link rel="shortcut icon" href="../img/Tamanho Site-1.png" type="image/x-icon">

</head>
<body>
    <main>
        <div class="box1">
            <img src="../img/Tamanho Site-1.png" alt="">
           <div class="mensagem"></div>
        </div>
        <div class="box2">
            <div class="title"><span>Login</span></div>
            <form action="testelogin.php" method="post">
            <div class="formgrup">
                    <div class="input1">
                        <div class="label">
                            <label for="user">Usuário</label>
                        </div>
                        <div class="border">
                            <input type="text" name="user" id="user" required autocomplete="off">
                        </div>
                    </div><br>
                    <div class="input2">
                        <div class="label">
                            <label for="senha">Senha</label>
                        </div>
                        <div class="border">
                            <input type="password" name="senha" id="senha" require autocomplete = "off">
                        </div>
                    </div>
                    <div class="btnsubmit"><button type="submit" id="submit"name="submit">Entrar</button></div>
                </div>
            </form>
        </div>
    </main>
    <script src="login.js"></script>
</body>
</html>