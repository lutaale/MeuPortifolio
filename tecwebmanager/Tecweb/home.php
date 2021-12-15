<?php
session_start();
include_once('config.php');
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){

    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: index.php');
};

$logado = $_SESSION['email'];
 
$sql = "SELECT *FROM prest_servicos ORDER BY idprest_servicos DESC";

$resulti = $conecxao->query($sql);
//print_r($resulti);

if(isset($_POST['sair'])){
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: index.php');
};
?>


<!DOCTYPE html>
<html lang="pt-br">
<link rel="stylesheet" href="home.css">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page adimin</title>
</head>

<body>
    <div class="header">
                <a href="index.php">
            <h1><strong>TecWeb</strong> Manager</h1>
        </a>
        <form action="home.php" method="post">
            <input type="submit" id="sair" name="sair" value="Sair">
        </form>
    </div>
    <div class="btns">
        <button class="lista_prestadores">Prestadores de serviço</button>
        <button class="lista_visitantes">Visitantes cadastrados</button>
        <button class="encomendas">Encomendas</button>
    </div>

    <div class="box_listaprestadores">
        <div  class="box1">
            <table class="table text-white table-bg">
            <thead>
                <tr style="color:white;">
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Rg</th>
                    <th scope="col">Empresa</th>
                    <th scope="col">Tipo de servico</th>
                    <th scope="col">Data do servico</th>
                </tr>
            </thead>
            <tbody>
                <?php
                 while($user_data = mysqli_fetch_assoc($resulti)) {
                 echo "<tr>";
                 echo "<td>".$user_data['idprest_servicos']."</td>";
                 echo "<td>".$user_data['nome']."</td>";
                 echo "<td>".$user_data['rg']."</td>";
                 echo "<td>".$user_data['empresa']."</td>";
                 echo "<td>".$user_data['tipo_servico']."</td>";
                 echo "<td>".$user_data['data_servico']."</td>";
                 echo "<td>
                 <a href='delete.php?idprest_servicos=$user_data[idprest_servicos]'>
                 <img src='https://img.icons8.com/nolan/64/delete-forever.png'/>
                 </a>
                 </td>";
                 echo "</tr>";
                 }
                ?>
            </tbody>
            </table>
        </div>
    </div>

    <div class="boxlistavisitantes">
     <div  class="box2">
            <table class="table text-white table-bg">
            <thead>
                <tr style="color:white;">
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Rg</th>
                    <th scope="col">Data da visita</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT *FROM visitantes ORDER BY idvisitantes DESC";
                $resulti = $conecxao->query($sql);
                
               while($dados_visitante = mysqli_fetch_assoc($resulti)) {
                 echo "<tr>";
                 echo "<td>".$dados_visitante['idvisitantes']."</td>";
                 echo "<td>".$dados_visitante['nome']."</td>";
                 echo "<td>".$dados_visitante['rg']."</td>";
                 echo "<td>".$dados_visitante['data_visita']."</td>";
                 echo "<td>
                 <a href='delete.php?idvisitantes=$dados_visitante[idvisitantes]'>
                 <img src='https://img.icons8.com/nolan/64/delete-forever.png'/>
                 </a>
                 </td>";
                 echo "</tr>";

                }
                ?>
            </tbody>
            </table>
        </div>
    </div>
    <div class="boxencomendas">
    <div  class="box3">
            <table class="table text-white table-bg">
            <thead>
                <tr style="color:white;">
                    <th scope="col">ID</th>
                    <th scope="col">Empresa</th>
                    <th scope="col">Nome destinatario</th>
                    <th scope="col">Data da entrega</th>
                </tr>
            </thead>    
            <tbody>
                <?php
                $sql = "SELECT *FROM encomendas ORDER BY idencomendas DESC";
                $resulti = $conecxao->query($sql);
               while($dados_encomenda = mysqli_fetch_assoc($resulti)) {
                 echo "<tr>";
                 echo "<td>".$dados_encomenda['idencomendas']."</td>";
                 echo "<td>".$dados_encomenda['nome']."</td>";
                 echo "<td>".$dados_encomenda['nome_destinatario']."</td>";
                 echo "<td>".$dados_encomenda['data_entrega']."</td>";
                 echo "<td>
                 <a href='delete.php?idencomendas=$dados_encomenda[idencomendas]'>
                 <img src='https://img.icons8.com/nolan/64/delete-forever.png'/>
                 </a>
                 </td>";
                 echo "</tr>";
                 }
                ?>
            </tbody>
            </table>
        </div>

    </div>
    <div style="background: #6d88f3; margin-top:5rem;padding:0px 5px 15px;border-radius:3px;">
    <a style="text-decoration: none;
    color: #fff;
    font-size: 20px;
    margin-left: 10px;">
                <h1><strong style="color: #42307d;">TecWeb</strong> Manager</h1>
            </a>
</div>

    <script src=".home.js"></script>
</body>
</html>