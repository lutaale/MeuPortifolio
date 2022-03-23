<?php


  include_once('./configdb/config.php');
   
  $id = $_GET['id'];
  $sqlselect = "SELECT * FROM  orcamentos WHERE id = $id";
  $resulti = $conecxao->query($sqlselect);
  
  if($resulti->num_rows > 0){
    $sqlDelete = "DELETE FROM  orcamentos WHERE id =$id";
    $resultDelete = $conecxao->query($sqlDelete);
  }
  header('Location: ./paineldecontrole/painel_de_controle.php');
?>