<!--
*********************
I Floor U Flooring
version 1.0
tecwebcod developers
15/01/2021
*********************
-->

<?php

if(isset($_POST['zipcode'])){
      
    header('Location:form1/formulario.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home|I Floor U Flooring</title>
    <link rel="stylesheet" href="./css-index/index.css">
    <link rel="shortcut icon" href="./img/logotipo.png" type="image/x-icon">
</head>

<body>
    <div class="container1">
        <header>
            <div class="logo">
                <a href="index.html">
                    <img src="./img/logotipo.png" alt="logo">
                </a>
                <div style="margin-left: 1rem;" class="text1">
                    <h2>We find & connect you with local pros.</h2>
                </div>
            </div>
            <div class="contacthelp">
                <img src="https://img.icons8.com/ios/50/ffffff/phonelink-ring--v1.png" alt="contacthelp">
                <h2>Need help? Call us: (732) 986-1912</h2>
            </div>
        </header>
        <div class="mainbox">
            <div class="title1">
                <h1>Find Local Flooring Pros In Just Two Easy Steps!</h1>
                <h2>Also see ratings, reviews, job pictures and more!</h2>
            </div>
            <div class="boxzipcode">
                <h2 style="font-size:17px;margin-top:-20px;">Enter your zip code to start.</h2><br><br>
                <form id="zipcode_1" method="POST" action="index.php">
                    
                    <div class="inputs_requerid">
                        <div>
                            <label><img style="width:25px;" src="https://img.icons8.com/material-sharp/48/4a90e2/region-code.png"/>Zip code</label><br>
                             <input  type="text" name="zipcode_country" id="zipcode" value="" required autocomplete="off">
                             <input type="submit"name="zipcode" id="zipcode" value="Search">
                        </div>
                        </div><br>
                        <p style="color:darkred;">This is required. Please enter a valid U.S. zip.</p>
                </form>
            </div>
        </div>
    </div>
    </div>
    <div class="container2">
        <div class="title">
            <h1>Select From Our Most Popular Projects</h1>
        </div><br>
        <div class="containerbtns">
            <div class="boxbtn1">

                <a href="form1/formulario.php">Refinish Hardwoord Flooring</a><br><br>
                <a href="form3/formulario3.php">Install or Replace Hardwoord Flooring</a><br><br>
                <a href="form4/formulario4.php">Repair Hardwoord Flooring</a>
            </div><br><br>
            <div class="boxbtn2">
                <a href="form5/formulario5.php">Install or Replace Laminate Flooring</a> <br><br>
                <a href="form2/formulario2.php">Install or Replace Carpet</a><br><br>
                <a href="form6/formulario6.php">Install or Replace Vinyl/Linoleum Flooring</a>
            </div>
        </div><br><br><br>
        <div class="title2">
            <h1>More Projects</h1>
        </div><br><br>
        <div class="containerbtns2">
            <div class="boxbtn3">
                <a href="form7/formulario7.php">Install or Replace Title Flooring</a><br><br>
                <a href="form8/formulario8.php">Reapair Carpet</a><br><br>
                <a href="form9/formulario9.php">Repair Vinyl/Linoleum Flooring</a>
            </div><br><br>
            <div class="boxbtn4">
                <a href="form10/formulario10.php">Reapair Laminate Flooring</a> <br><br>
                <a href="form11/formulario11.php">Repair Title Flooring</a><br><br>
                <a href="form12/formulario12.php">View All Projects</a>
            </div>
        </div>  
    </div>
    <div class="container3">
        <div class="boxtext1">
            <div class="title3">
                <h1>Get Accuarate Quotes For your Flooring Project</h1>
            </div><br>
            <div class="titleparagrafo1">
                <h3>Compare bids from local flooring contractors.</h3><br>
                <p>We'll find you up to 4 flooring pros who specialize in your project type -
                    in less than 24 hours. <br>
                    That means you can compare flooring estimates side by side without having to call multiple <br>
                    flooring pros yourself.</p>
            </div><br>
            <div class="titleparagrafo2">
                <h3>We don't charge a dime!</h3><br>
                <p>Our flooring estimate service is 100% free.
                    We don't ask for ANY financial information and <br> you can use us as many times as you like.</p>
            </div><br>
            <div class="titleparagrafo3">
                <h3>You don't have any obligations.</h3><br>
                <p>We find you qualified flooring pros that best meet the needs of your
                    project,
                    but if you are <br> not fully satisfied with the estimates provided, you are not obligated to move
                    forward.</p>
            </div>
        </div><br><br><br>
        <div class="boxtext2">
            <div class="title4">
                <h2>We work with hundreds of Flooring <br> companies to
                    provide rop service</h2>
            </div><br><br>
            <div class="titleparagrafo4">
                <p>The flooring pros in our network specialize in all types of <br> flooring
                    projects such as hardwood,
                    laminate, carpet, tile, <br> and many other home renovation and home improvement <br> projects.
                    <br><br>
                    In many cases we can get you multiple flooring estimates to <br> help you find the best deal and
                    save. <br><br>
                    No project is too big or too small for our network of flooring <br> specialists.
                    We'll help make the process easy by finding just <br> the right professional for your project.
                    Search your zip code <br> to get started.
                </p>
            </div>
            <div class="formulario">
                <p><strong>Are you ready to start your project?</strong></p>
                <a href="form12/formulario12.php">Talk To flooring Pros Today</a>
            </div>
        </div>
    </div>
    <script src="index.js"></script>
</body>

</html>