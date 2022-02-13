<?php

if(isset($_POST['submitperg6'])){
    header('Location: ../finshform.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iflooruIflooring</title>
    <style>
       *{
            font-family: 'poppins',sans-serif;
            transition:all 0.5s ease;
        }

        body{
            display:flex;
            flex-direction:column;
            align-items:center;
            justify-content:center;
            transition:all 0.5s ease;

        }
        .zipcode{
            border:1px solid grey;
            display:flex;
            align-items:center;
       
        }
        .zipcode input{
            border:none;
            outline:none;
            padding:1rem;
            width:20rem;
        }
        .zipcode input[placeholder]{
            font-size:20px;
            color:#000;
        }
        .btn{
            display:flex;
            align-items:center;
            justify-content:center;
            margin-top:2rem;
        }
        .btn button{
            width:13rem;
            height:50px;
            color:white;
            background-color:#13AE50;
            border:none;
            border-radius:20px;
            font-size:20px;
            cursor: pointer;
            font-weight:700;
            transition-duration:0.4s;
            display:flex;
            align-items:center;
            justify-content:center;
        }
        .btn button:hover{
            background-color:#02A606;
        }
    </style>
</head>
<body>
    <header>
        <div class="title">
            <h2>What's the project address?</h2>
        </div>
    </header>
    <form action="perg8.php" method="post">
        <div class="zipcode">
        <img src="https://img.icons8.com/material-sharp/48/4a90e2/region-code.png"/>  
         <input placeholder="Street address" type="text" name="zipcode" id="zipcode">
        </div>
        <div class="btn">
            <button type="submit" name="submitperg6" id="submitperg6">Next <img src="https://img.icons8.com/ios-glyphs/30/ffffff/chevron-right.png"/></button>
            </div>
    </form>

</body> 
</html>