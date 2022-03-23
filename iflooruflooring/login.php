

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    
</head>
<body>
    
        <form action="testelogin.php" method="post">
            <div class="login">
                <div class="logo"><img src="./img/logotipo.png" alt=""></div>
                <div class="campos">
                    <h1>Login</h1>
                    <div class="input1">
                        <label class="label" for="email">Email</label><br>
                        <input type="email" name="email" id="email" autocomplete="off">
                    </div><br><br>
                    <div class="input1">
                        <label class="label" for="senha">Password</label><br>
                        <input type="password" name="senha" id="senha" autocomplete="off">
                    </div>
                    <div class="btn">
                        <button type="submit" name="entrar" id="entrar">Entrar</button>
                    </div>
                </div>
            </div>
        </form>
    
</body>
</html>