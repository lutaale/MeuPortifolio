<?php

   session_start();

   $email = 'tecwebcode@gmail.com';
   $senha = '1234';

   $emailuser = $_POST['email'];
   $senhauser = $_POST['senha'];

   if(isset($_POST['entrar'])){
       if($emailuser == "" && $senhauser == ""){
           
           header('Location:login.php');
       }
       if($emailuser == $email && $senhauser == $senha ){
           header('Location: ./iflooruflooring_manager/iflooruflooring_manager.php');
      }else{
        header('Location:login.php');

      }
   };
?>