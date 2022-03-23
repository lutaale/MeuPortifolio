<?php

    include_once('Database_config.php');
     
    $id = $_GET['id'];
    $sqlselect = "SELECT * FROM  formfinal WHERE id = $id";
    $resulti = $conecxao->query($sqlselect);
    
    if($resulti->num_rows > 0){
      $sqlDelete = "DELETE FROM  formfinal WHERE id =$id";
      $resultDelete = $conecxao->query($sqlDelete);
    }
    header('Location: ./iflooruflooring_manager/iflooruflooring_manager.php ')

?>