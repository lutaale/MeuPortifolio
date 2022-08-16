<?php
  include_once('dbconfig.php');
   
  $id = $_GET['id'];
  $sqlselect = "SELECT * FROM  clientes WHERE id = $id";
  $resulti = $conecxao->query($sqlselect);
  
  if($resulti->num_rows > 0){
    $sqlDelete = "DELETE FROM  clientes WHERE id =$id";
    $resultDelete = $conecxao->query($sqlDelete);
  }
  header('Location: painel.php');
?>