<?php
  $dbHost = '127.0.0.1';
  $dbUsername = 'root';
  $dbPassword = '';
  $dbName = 'testeiflooring';
  
  $conecxao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

  // if($conecxao -> connect_errno){
  //   echo"erro";
  // }else{
  //   echo"conectado";
  // };

?>