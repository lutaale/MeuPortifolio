<?php
if(isset($_POST['submittxt'])){
    header('Location: perg3.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iflooruflooring</title>
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
        .title{
            text-align:center;
        }
        .btn{
            display:flex;
            align-items:center;
            justify-content:space-around;
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
        .btn a{
            width:13rem;
            height:50px;
            color:#515151;
            background-color:#DADADA;
            border:none;
            border-radius:20px;
            font-size:20px;
            color:#333333;
            text-decoration:none;
            display:flex;
            align-items:center;
            justify-content:center;
            transition-duration:0.4s;
        }
        .btn a:hover{
            background-color:#A7A9AC;
        }
        textarea[placeholder]{
            font-size:20px;
            padding:5px;
        }
        textarea{
            border-color:grey;
        }
    </style>
</head>
<body>
    <header>
        <div class="title">
            <h2>Do you have any additional project details to add?</h2>
            <p>(Optional)</p>
        </div>
    </header>
    <form action="perg2.php" method="post">
        <div class="textarea">
            <textarea placeholder="Describe your project in more detail. This helps your pros provide you with more accurate quotes." 
            name="text" id="text" cols="55" rows="5"></textarea>
        </div>
        <div class="btn">
        <a href="perg1.php"><img style="width:30px; height:30px;" src="https://img.icons8.com/ios-filled/50/000000/less-than.png"/>Back</a>

            <button type="submit" name="submittxt" id="submittxt">Next <img src="https://img.icons8.com/ios-glyphs/30/ffffff/chevron-right.png"/></button>
        </div>
    </form>
</body>
</html>