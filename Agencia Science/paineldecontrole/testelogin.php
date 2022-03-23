<?php
   session_start();
   $email = 'agenciascience@gmail.com';
   $senha = '1234';
    
   $emailuser = $_POST['user'];
   $senhauser = $_POST['senha'];

     if(isset($_POST['submit'])){
        if($emailuser == "" && $emailuser == ""){
            header('Location: login.php');
        }
        if($emailuser == $email  && $senhauser == $senha){

            header('Location: painel_de_controle.php');
        }else{
            header('Location: login.php');
        }
     };

?>