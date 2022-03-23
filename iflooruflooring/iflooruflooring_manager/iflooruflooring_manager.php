<?php

include_once('../Database_config.php');
$sql = "SELECT *FROM formfinal ORDER BY id DESC";
   $resulti = $conecxao->query($sql);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manager Iflooruflooring</title>
    <link rel="stylesheet" href="manager.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <header>
        <div class="logo">
            <img src="../img/logotipo.png" alt="logo">
        </div>
    </header>
    <nav>
        <div class="btns">
            <button class="showbox">Orçamentos solicitados</button>
        </div>
    </nav>

    <!-- =================== main box ==================== -->

     <div class="mainbox">
         <div class="litapedidos">
           <table class="table text-black table-bg">
             <thead>
                <tr style="color:darkblue;">
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Details of User</th>
                    <th scope="col">Answer 2</th>
                    <th scope="col">Answer 3</th>
                    <th scope="col">Answer 4</th>
                    <th scope="col">Answer 5</th>
                    <th scope="col">Street</th>
                    <th scope="col">Zipcode</th>
                    <th scope="col">City</th>
                    <th scope="col">State</th>
                </tr>
              </thead>
             <tbody>
                <?php
                  while($user_data = mysqli_fetch_assoc($resulti)){
                      echo "<tr>";
                      echo "<td>".$user_data['id']."</td>";
                      echo "<td>".$user_data['nome']."</td>";
                      echo "<td>".$user_data['telefone']."</td>";
                      echo "<td>".$user_data['email']."</td>";
                      echo "<td>".$user_data['pergunta1']."</td>";
                      echo "<td>".$user_data['pergunta2']."</td>";
                      echo "<td>".$user_data['pergunta3']."</td>";
                      echo "<td>".$user_data['pergunta4']."</td>";
                      echo "<td>".$user_data['pergunta5']."</td>";
                      echo "<td>".$user_data['zipcode']."</td>";
                      echo "<td>".$user_data['rua']."</td>";
                      echo "<td>".$user_data['cidade']."</td>";
                      echo "<td>".$user_data['estado']."</td>";
                      echo "<td>
                      <a href='../delete.php?id=$user_data[id]'>
                      <img src='https://img.icons8.com/nolan/64/delete-forever.png'/>
                      </a>
                      </td>";
                      echo "</tr>";
                    }
                ?>
            </tbody>
         </div>
     </div>
     <script src="showbox.js"></script>
</body>
</html>