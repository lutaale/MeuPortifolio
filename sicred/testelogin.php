<?php
   session_start();
       include_once('config.php');
$SQL = "SELECT email,senha FROM usuarios";
   $resulti = $conecxao->query($SQL);
while($user_data = mysqli_fetch_assoc($resulti)){

    $email = $user_data['email'];
    $senha = $user_data['senha'];

       $emailuser = $_POST['email'];
       $senhauser = $_POST['senha'];

     if(isset($_POST['entrar'])){
        if($emailuser == "" && $emailuser == ""){
            header('Location: login.php');
        }
        if($emailuser == $email  && $senhauser == $senha ){

            header('Location: paginadecontrole.php');
        }else{
            header('Location: login.php');
        }
     };

}

?>