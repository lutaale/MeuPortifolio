<?php
  include_once('config.php');
   
  $id = $_GET['id'];
  $sqlselect = "SELECT * FROM  solicitacoes WHERE id = $id";
  $resulti = $conecxao->query($sqlselect);
  
  if($resulti->num_rows > 0){
    $sqlDelete = "DELETE FROM  solicitacoes WHERE id =$id";
    $resultDelete = $conecxao->query($sqlDelete);
  }
  header('Location: paginadecontrole.php');
?>