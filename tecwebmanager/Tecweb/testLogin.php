<?php
session_start();
if(isset($_POST['login']) && !empty($_POST['email']) && !empty($_POST['senha'])){

    include_once('config.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    /*print_r('email: '. $email);
    print_r('<br>');
    print_r('senha: '. $senha);*/
    
    $sql = "SELECT *FROM Funcionarios WHERE email = '$email' and senha = '$senha'";
    $result = $conecxao->query($sql);

    //print_r($result);
    if(mysqli_num_rows($result)<1){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: index.php');
    }else{
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: home.php');
    }
}
else
{
    header('Location: index.php');
}
?>


