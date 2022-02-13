<?php


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IflooruFlooring</title>
    <style>
               *{
            font-family: 'poppins',sans-serif;
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            display:flex;
            flex-direction:column;
            align-items:center;
            justify-content:center;
        }
        .input1{
            border:1px solid grey;
            display:flex;
            align-items:center;
            margin-bottom:10px;
        }
        .input1 input{
            border:none;
            outline:none;
            width:20rem;
            height:50px;  
        }
        .btn{
            display:flex;
            align-items:center;
            justify-content:center;
        }
        .btn button{
            width:20rem;
            height:50px;
            display:flex;
            align-items:center;
            justify-content:center;
            border-radius:20px;
            border:none;
            cursor: pointer;
            background-color:#D9D9D9;
            font-size:20px;
            color:white;
            font-weight:600;
        }
        /* ------------------------------- */
        footer{
            margin-top:1rem;
            background-color:#EEEEEE;
            width:100%;
            height:300px;
            display:flex;
            flex-direction:column;
            align-items:center;
        }
    </style>
</head>
<body>
    <header>
        <div style="text-align:center;" class="title">
            <h2>Alright! Let's get you a quote.</h2>
            <p style="font-size:20px;">Our service is <strong>free</strong> with <strong>no obligation</strong> to hire.</p>
        </div>  
    </header>
    <div class="form">
        <form action="finshform.php" method="post">
            <div class="input1">
            <img style="width:30px;height:30px;" src="https://img.icons8.com/ios-filled/50/4a90e2/user.png"/>
                <input placeholder="First and last name" type="text" name="name" id="name">
            </div>
            <div class="input1">
            <img style="width:30px;height:30px;" src="https://img.icons8.com/external-kiranshastry-solid-kiranshastry/64/4a90e2/external-email-interface-kiranshastry-solid-kiranshastry.png"/>
            <input placeholder="Email address" type="email" name="email" id="email">

            </div>
            <div class="input1">
            <img style="width:30px;height:30px;" src="https://img.icons8.com/ios-filled/50/4a90e2/phonelink-ring--v1.png"/>
            <input placeholder="Phone" type="tel" name="tel" id="tel">
            </div>
             <div class="btn">
                 <button type="submit"name="finishsubmit"id="finishsubmit">See Your Matches<img src="https://img.icons8.com/ios-glyphs/30/ffffff/chevron-right.png"/></button>
             </div>
        </form><br>
    </div>
    <div style="font-size:18px;text-align:center;" class="text">
        Estimates are <strong>free</strong>with <strong>no obligation</strong>to hire pro. <br><br><br>
        <img style="width:30px;height:30px;" src="https://img.icons8.com/ios-filled/50/4a90e2/phone.png"/>Prefer the phone? Call our project team now! <strong>(833) 906-1482</strong>
    </div>
    <footer>
        <div style="margin-top:1rem;" class="title">
            <h4><img src="https://img.icons8.com/metro/26/4a90e2/lock-2.png"/>We care about your privacy.</h4>
        </div>
        <div style="width:33rem;text-align:center;" class="text">
        By clicking See Your Matches, you acknowledge localflooringquotes's <a href="https://vault.pactsafe.io/s/66ea6b27-8a6d-4119-ba9e-50ed6b6674d8/legal.html?g=29777#craftjack-terms-and-conditions">Terms</a> and authorize localflooringquotes.com, its partners, its affiliates, and their networks of Service Professionals to use automated technology to call, text or email the number or email address you provided.
         Your privacy is important to us, and you are not required to make a purchase.
        </div>
    </footer>
</body>
</html>