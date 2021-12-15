<?php
if(!empty($_GET['idprest_servicos'])){
    
    include_once('config.php');
    $id = $_GET['idprest_servicos'];
    $sqlSelect = "SELECT *FROM prest_servicos WHERE idprest_servicos = $id";
    $resulti = $conecxao->query($sqlSelect);

    if($resulti->num_rows > 0){
            $sqlDelete = "DELETE FROM prest_servicos WHERE idprest_servicos =$id";
            $resultDelete = $conecxao->query($sqlDelete);
        }
    header('Location:home.php');
};

if(!empty($_GET['idvisitantes'])){
    include_once('config.php');

    $id = $_GET['idvisitantes'];
    $sqlSelect = "SELECT *FROM visitantes WHERE idvisitantes = $id";
    $resulti = $conecxao->query($sqlSelect);

    if($resulti->num_rows >0){
        $sqlDelete = "DELETE FROM visitantes WHERE idvisitantes = $id";
        $resultDelete = $conecxao->query($sqlDelete);
    }
    header('Location:home.php');
};
if(!empty($_GET['idencomendas'])){
    include_once('config.php');

    $id = $_GET['idencomendas'];
    $sqlSelect = "SELECT *FROM encomendas WHERE idencomendas = $id";
    $resulti = $conecxao->query($sqlSelect);

    if($resulti->num_rows >0){
        $sqlDelete = "DELETE FROM encomendas WHERE idencomendas = $id";
        $resultDelete = $conecxao->query($sqlDelete);
    }
    header('Location:home.php');
};


?>