<?php
  
  include_once('../configdb/config.php');
  $sql = "SELECT *FROM orcamentos ORDER BY id DESC";
   $resulti = $conecxao->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Controle</title>
    <link rel="shortcut icon" href="../img/Tamanho Site-1.png" type="image/x-icon">
    <link rel="stylesheet" href="painel.css">
    <link rel="stylesheet" href="responsive.css">
</head>
<body>
    <div class="imglogo">
        <img src="../img/Tamanho Site-1.png" alt="">
    </div>
    <section>
        <div class="boxorcamentos">
            <header>
                <span>Id</span>
                <span>Emal</span>
                <span>Nome</span>
                <span>Telefone</span>
            </header>
            <tbody>
                <?php
                 while($user_data = mysqli_fetch_assoc($resulti)){
                     echo "<div class='container'>";
                     echo "<div id='pedidos'>";
                     echo "<div class='dados'>".$user_data['id']."</div>";
                     echo "<div class='dados'>".$user_data['email']."</div>";
                     echo "<div class='dados'>".$user_data['nome']."</div>";
                     echo "<div class='dados'>".$user_data['telefone']."</div>";
                     echo "</div>";
                     echo "<a href='../delete.php?id=$user_data[id]'>"."<img src='https://img.icons8.com/external-tanah-basah-detailed-outline-tanah-basah/48/000000/external-trash-user-interface-tanah-basah-detailed-outline-tanah-basah.png'/>"."</a>";
                     echo "</div>";
                 };
                ?>
         </tbody>
        </div>
    </section>
    <script src="painel.js"></script>
</body>
</html>