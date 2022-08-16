
<?php
  
  include_once('dbconfig.php');
  $sql = "SELECT *FROM clientes ORDER BY id DESC";
   $resulti = $conecxao->query($sql);
?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/COMM FUNDO.png" type="image/x-icon">
    <title>Painel AbramConsórcios</title>
</head>
<body>
        <style>
        *{
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            font-family: 'poppins',sans-serif;
        }
        body{
            width: 100%;
        }
        section{
            width: 100%;
            min-height: 100vh;
            display: flex;
        }
        #navbar{
            width:250px;
            height: 100vh;
            background-color: #1b1b11;
            display: none;
            position: absolute;
            animation: show 1s ease;
        }
        @keyframes show{
            0%{
                width: 0px;
            }
            100%{
                width: 250px;
            }
        }
        @keyframes show2{
            0%{
                height: 0vh;
            }
            100%{
                height: 11vh;
            }
        }
        #navbar.activebar{
            display: grid;
        }
        .btnarea{
            width: 35px;
            height: 35px;
            border-top: 2px solid grey;
            margin: 2rem;
            transition: 0.3s ease;
            z-index: 5;
        }
        .btnarea::before{
            content: '';
    display: block;
    width: 35px;
    height: 2px;
    background-color: grey;
    position: absolute;
    top: 44px;    
    pointer-events: none;
    transition: 0.3s ease-in;
    }
        .btnarea::after{
            content: '';
    display: block;
    width: 35px;
    height: 2px;
    background-color: grey;
    position: absolute;
    top: 55px;    
    pointer-events: none;
    transition: 0.3s ease-in;
  
  }

        #menubtn{
            width: 35px;
            height: 35px;
            border: none;
            background-color: transparent;
            outline: none;
            cursor: pointer;
        }
        .btnarea.animationbtn{
            border-top: transparent;

        }
        .btnarea.animationbtn::before{
            transform: rotate(45deg);
        }
        .btnarea.animationbtn::after{
            transform: rotate(-45deg);
            top: 44px;
        }
        .optionslist{
            margin-top: 7rem;
            width: 100%;
            display: flex;
            flex-direction: column;
        }
        .btns{
            height: 60px;
            background-color: transparent;
            border: none;
            outline: none;
            cursor: pointer;
            font-size: 18px;
            color: white;
            padding:10px;
            transition: 0.3s ease;
        }
        .btns:hover{
            background-color: rgba(255, 255, 255, 0.63);
            border-radius: 5px;
        }
        .img{
            width: 100px;
            height: 100px;
            background: linear-gradient(#000 41%, white 88% );
            border-radius: 50%;
            transform: rotate(-0.33turn);
        }
        .img::before{
            content: '';
    display: block;
    width: 29px;
    height: 48px;
    background-color: white;
    position: absolute;
    margin-left: 43px;
    margin-top: 53px;
    transform: rotate(-44deg);
}
 .img::after{
    content: '';
    display: block;
    width: 54px;
    height: 37px;
    background-color: white;
    position: absolute;
    left: -3px;
    top: 50px
}
.logo{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}
.title h1{
    font-family: fangsong;
    font-size: 35px;
    font-weight: 300;
    margin-top: 0.5rem;
}
main{
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}
.pedidos{
    width: 70%;
    height: auto;
    background-color: rgba(255, 255, 255, 0.747);
    border: 1px solid grey;
    position: absolute;
    padding: 10rem;
    display:none ;
    flex-direction:column;
    transition: 0.3s ease;
}
.pedidos.activepedidos{
    display: flex;
}
.container{
    width:100%;
    height:60px;
    display:flex;
    background-color:#1b1b1b;
    color:white;
    padding:10px;
    border-radius:5px;
    display:flex;
    justify-content:center;
    align-items:center;
    margin-top:1rem;

}
#pedidos{
    display:flex;
    width:100%;    
}
.dados{
    width: max-content;
    margin-right: 10px
}




@media(max-width:800px){
    #navbar{
        width: 100%;
        height: 20vh;
        animation: show2 1s ease-in;
    }
    main{
        position: absolute;
        height: -webkit-fill-available;
        z-index: -3;
    }
    .pedidos{
        padding:0;
        width:100%;
    }
    
}
</style>
</head>
<body >
    <section>
        <div class="btnarea">
            <button id="menubtn"></button>
        </div>
        <nav id="navbar">
             <div class="optionslist">
                 <button class="btns" onclick="showpedidos()">Pedidos</button>
             </div>
        </nav>
        <main>
            <div class="pedidos">
                <tbody>
                <?php
                 while($user_data = mysqli_fetch_assoc($resulti)){
                     echo "<div class='container'>";
                     echo "<div id='pedidos'>";
                     echo "<div class='dados'>".$user_data['nome']."</div>";
                     echo "<div class='dados'>".$user_data['email']."</div>";
                     echo "<div class='dados'>".$user_data['telefone']."</div>";
                     echo "<div class='dados'>".$user_data ['observacao']."</div>";
                     echo "</div>";
                     echo "<a href='delete.php?id=$user_data[id]'>"."<img src='https://img.icons8.com/external-tanah-basah-detailed-outline-tanah-basah/48/ffffff/external-trash-user-interface-tanah-basah-detailed-outline-tanah-basah.png'/>"."</a>";
                     echo "</div>";
                 };
                ?>

                </tbody>

            </div>

        </main>
    
    </section>
    <script>
        function showpedidos(){
            document.querySelector('.pedidos').classList.toggle('activepedidos')
        }
   document.getElementById('menubtn').addEventListener('click',mostrarmenu)

   function mostrarmenu(){
    document.querySelector('.btnarea').classList.toggle('animationbtn')
    document.getElementById('navbar').classList.toggle('activebar')
   }
        </script>

</body>
</html>