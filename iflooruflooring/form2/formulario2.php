<?php

if(isset($_POST['submit'])){
    include_once('../Database_config.php');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $textarea = $_POST['text'];
    $pergunta2 = $_POST['perg2'];
    $pergunta4 = $_POST['perg4'];
    $pergunta5 = $_POST['perg5'];
    $rua = $_POST['rua'];
    $zipcode = $_POST['zipcode'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

    $resultado = mysqli_query($conecxao, "INSERT INTO formfinal(nome,email,telefone,pergunta1,pergunta2,pergunta4,pergunta5,rua,zipcode,cidade,estado) VALUES
    ('$name', '$email','$tel','$textarea','$pergunta2','$pergunta4','$pergunta5','$rua','$zipcode','$cidade','$estado')");
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="formulario2.css">
</head>
<body>
<section>
     <div class="logo">
        <img src="./img/logotipo.png" alt="">
    </div>
    <div class="container">
        <form action="formulario2.php" method="post">
         <div class="box box-1 active">
                <h2>Have you already purchased the carpet for this project?</h2>
                <div class="form-grup">
                    <div class="border">
                        <input type="radio" name="perg1" id="no" value="no" require>
                        <label for="no">No</label>
                    </div>
                </div>
                <div class="form-grup">
                    <div class="border">
                        <input type="radio" name="perg1" id="yes" value="yes" require>
                        <label for="yes">Yes</label>
                    </div>
                </div>
                <div class="btns">
                    <button type="button" class="next-btn">Next</button>
                </div>
         </div>
            
              <div class="box box-2">
                  <h1>Do you have any additional project details to add?</h1>
                  <div class="form-group">
                      <label for="text">(Optional)</label><br>
                      <textarea name="text" id="text" cols="35" rows="7"></textarea>
                 </div>
                 <div class="btns">
            <button type="button" class="previous-btn">Prev</button>
            <button type="button" class="next-btn">Next</button>
        </div>
              </div>

              <div class="box box-3">
                     <h2>What kind of location is this?</h2>
                       <div class="form-group">
                          <div class="border">
                              <input type="radio" name="perg2" id="homeresidence" value="home/Residence" required>
                              <label for="perg2">Home/Residence</label>
                         </div>
                     </div>
                  <div class="form-group">
                       <div class="border">
                          <input type="radio" name="perg2" id="business" value="Business"required>
                          <label for="perg2">Business</label>   
                      </div>
                      <div class="btns">
            <button type="button" class="previous-btn">Prev</button>
            <button type="button" class="next-btn">Next</button>
        </div>
                 </div>
              </div>
              <div class="box box-4">
                  <h2>What is your timeframe?</h2>
                  <div class="form-grup">
                       <div class="border">
                         <input type="radio" name="perg4" id="option1" value="timing is flexible">
                         <label for="option1">Timing is flexible</label>
                     </div>
                 </div>
                  <div class="form-grup">
                       <div class="border">
                         <input type="radio" name="perg4" id="option2" value="within 1 week">
                         <label for="option2">Within 1 week</label>
                     </div>
                  </div>
                  <div class="form-grup">
                       <div class="border">
                          <input type="radio" name="perg4" id="option3" value="1 - 2 weeks">
                          <label for="option3">1 - 2 weeks</label>
                     </div>
                 </div>
                  <div class="form-grup">
                       <div class="border">
                          <input type="radio" name="perg4" id="option4" value="more than 2 weeks">
                          <label for="option4">More than 2 weeks</label>
                     </div>
                 </div>
                 <div class="btns">
            <button type="button" class="previous-btn">Prev</button>
            <button type="button" class="next-btn">Next</button>
        </div>
             </div>
                  <div class="box box-5">
                       <h2>Are you the owner or authorized to make property changes?</h2>
                       <div class="form-grup">
                           <div class="border">
                             <input type="radio" name="perg5" id="yes" value="yes">
                             <label for="yes">Yes</label>
                           </div>
                      <div class="form-grup">
                         <div class="border">
                             <input type="radio" name="perg5" id="no" value="no">
                             <label for="no">No</label>
                          </div>
                     </div>
                      <div class="form-grup">
                          <div class="border">
                              <input type="radio" name="perg5" id="option2" value="no, but authorized to make changes">
                              <label for="option2">No, but authorized to make changes</label>
                         </div>
                        </div>
                     </div>
                     <div class="btns">
            <button type="button" class="previous-btn">Prev</button>
            <button type="button" class="next-btn">Next</button>
        </div>
                  </div>
                  <div class="box box-6">
                      <h2>What's the project address?</h2>
                      <div class="form-grup">
                         <input placeholder="Street" type="text" name="rua" id="rua" required><br>
                         <input  placeholder="Zipcode" type="text" name="zipcode" id="zipcode"><br>
                         <input  placeholder="City"type="text" name="cidade" id="cidade"><br>    
                         <input   placeholder="Estade"type="text" name="estado" id="estado">
                     </div>
                     <div class="btns">
            <button type="button" class="previous-btn">Prev</button>
            <button type="button" class="next-btn">Next</button>
        </div>
                  </div>
                  <div class="box box-7">
                  <h2>Enter your address</h2>
           <div class="form-grup">
           <img style="width:30px;height:30px;" src="https://img.icons8.com/ios-filled/50/4a90e2/user.png"/>
           <input placeholder="First and last name" type="text" name="name" id="name">
           </div>
           <div class="form-grup">
           <img style="width:30px;height:30px;" src="https://img.icons8.com/external-kiranshastry-solid-kiranshastry/64/4a90e2/external-email-interface-kiranshastry-solid-kiranshastry.png"/>
           <input placeholder="Email address" type="email" name="email" id="email">
           </div>
           <div class="form-grup">
           <img style="width:30px;height:30px;" src="https://img.icons8.com/ios-filled/50/4a90e2/phonelink-ring--v1.png"/>
           <input placeholder="Phone" type="tel" name="tel" id="tel">
           </div>
           <button type="submit" name="submit" id="submit" class="submit-btn">Submit</button>
           </div>
        </form>
    </div>
</section>
    <script src="formulario2.js"></script>
</body>
</html>