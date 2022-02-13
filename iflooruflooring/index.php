<!--
*********************
I Floor U Flooring
version 1.0
tecwebcod developers
15/01/2021
*********************
-->

<?php

if(isset($_get['zipcode'])){
      


    header('Location: ./questionario12/perg1.php');
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
</head>

<body>
    <div class="container1">
        <header>
            <div class="logo">
                <a href="index.html">
                    <img style="width: 150px;height: 50px;" src="./img/logotipo.png" alt="logo">
                </a>
                <div style="margin-left: 1rem;" class="text1">
                    <h2 style="font-size: 1.2rem;">We find & connect you with local pros.</h2>
                </div>
            </div>
            <div class="contacthelp">
                <img src="https://img.icons8.com/ios/50/ffffff/phonelink-ring--v1.png" alt="contacthelp">
                <h2 style="font-size: 1.1rem;">Need help? Call us: (732) 986-1912</h2>
            </div>
        </header>
        <div class="mainbox">
            <div class="title1">
                <h1>Find Local Flooring Pros In Just Two Easy Steps!</h1>
                <h2>Also see ratings, reviews, job pictures and more!</h2>
            </div>
            <div class="boxzipcode">
                <h2 style="font-size:17px;margin-top:-20px;">Enter your zip code to start.</h2><br><br>
                <form id="zipcode_1" method="get" action="" target="_blank">
                    
                    <div class="inputs_requerid">
                         <input  type="text" name="zipcode_country" id="zipcode" value="" required autocomplete="off">
                         <label><img style="width:25px;" src="https://img.icons8.com/material-sharp/48/4a90e2/region-code.png"/>Zip code</label>
                            <input type="submit"name="zipcode" id="zipcode" value="Search">
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
        </div>
        <div class="containerbtns">
            <div class="boxbtn1">

                <a href="./questionario1/perg1.php">Refinish Hardwoord Flooring</a><br><br>
                <a href="./questionario3/perg1.php">Install or Replace Hardwoord Flooring</a><br><br>
                <a href="./questionario4/perg1.php">Repair Hardwoord Flooring</a>
            </div>
            <div class="boxbtn2">
                <a href="./questionario5/perg1.php">Install or Replace Laminate Flooring</a> <br><br>
                <a href="./questionario2/perg1.php">Install or Replace Carpet</a><br><br>
                <a href="./questionario6/perg1.php">Install or Replace Vinyl/Linoleum Flooring</a>
            </div>
        </div>
        <div class="title2">
            <h1>More Projects</h1>
        </div>
        <div class="containerbtns2">
            <div class="boxbtn3">
                <a href="./questionario7/perg1.php">Install or Replace Title Flooring</a><br><br>
                <a href="./questionario8/perg1.php">Reapair Carpet</a><br><br>
                <a href="./questionario9/perg1.php">Repair Vinyl/Linoleum Flooring</a>
            </div>
            <div class="boxbtn4">
                <a href="./questionario10/perg1.php">Reapair Laminate Flooring</a> <br><br>
                <a href="./questionario11/perg1.php">Repair Title Flooring</a><br><br>
                <a href="./questionario12/perg1.php">View All Projects</a>
            </div>
        </div>
    </div>
    <div class="container3">
        <div class="boxtext1">
            <div class="title3">
                <h1 style="font-size: 1.5rem;">Get Accuarate Quotes For your Flooring Project</h1>
            </div><br>
            <div class="titleparagrafo1">
                <h3>Compare bids from local flooring contractors.</h3><br>
                <p style="font-size: 0.9rem;">We'll find you up to 4 flooring pros who specialize in your project type -
                    in less than 24 hours. <br>
                    That means you can compare flooring estimates side by side without having to call multiple <br>
                    flooring pros yourself.</p>
            </div><br>
            <div class="titleparagrafo2">
                <h3>We don't charge a dime!</h3><br>
                <p style="font-size: 0.9rem;">Our flooring estimate service is 100% free.
                    We don't ask for ANY financial information and <br> you can use us as many times as you like.</p>
            </div><br>
            <div class="titleparagrafo3">
                <h3>You don't have any obligations.</h3><br>
                <p style="font-size: 0.9rem;">We find you qualified flooring pros that best meet the needs of your
                    project,
                    but if you are <br> not fully satisfied with the estimates provided, you are not obligated to move
                    forward.</p>
            </div>
        </div>
        <div class="boxtext2">
            <div class="title4">
                <h2 style="font-size: 1.3rem;font-weight: 500;">We work with hundreds of Flooring <br> companies to
                    provide rop service</h2>
            </div><br><br>
            <div class="titleparagrafo4">
                <p style="font-size: 0.9rem;">The flooring pros in our network specialize in all types of <br> flooring
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
                <p>Are you ready to start your project?</p>
                <a href="./questionario12/perg1.php">Talk To flooring Pros Today</a>
            </div>
        </div>
    </div>
    <script src="index.js"></script>
</body>

</html>