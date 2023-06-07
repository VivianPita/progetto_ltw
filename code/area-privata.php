<?php

session_start();
if(!isset($_SESSION['loggato']) || $_SESSION['loggato'] !== true){
    // Verifica se la sessione non è stata avviata o se 'loggato' non è impostato a true
    // In tal caso, reindirizza l'utente alla pagina di accesso e termina l'esecuzione dello script
    header("location: log.php");
    exit;

}

?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="UFT-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <title>Area Privata</title>
    <link rel="icon" href="ico.png" type="image/png">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="shop.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="area-privata.css">
</head>
<body>

    <header>
        <input type="checkbox" name="" id="toggler">

        <label for="toggler" class="fas fa-bars"></label>

        <img class ="img" src="logo.png" alt="Pet World">
        
        <a href="#" class="logo">Pet World</a>

        <nav class="navbar">
          <a href="home.html">Home</a>
          <a href="about.html">About Us</a>
          <a href="services.html">Servizi</a>
          <a href="shop.html">Shop</a>
          <a href="log.php">Login</a>
      </nav>

        <div class="icons">
        <!--<a href="log.php" class="fas fa-user"></a>-->
        <a href="cart.html" class="fas fa-shopping-cart"></a>
            <div class="cart">
            
            <div id="cartAmount" class="cartAmount">0</div>
            </div>
        </a>
    </div>

    </header>
    <i class="fa fa-chevron-up"></i>

    <section class="area-privata">
        <form action="php\logout.php">
            <h1>Area Privata</h1>
            <div></div>
            <div class = "saluti">
                <?php
                    echo "Ciao " . $_SESSION["nome"] . " " . $_SESSION["cognome"];
                ?>
            </div>
            <div></div>
            <input type="submit" value="Disconnetti" class="submit-btn">
        </form>
    </section>

    <section class="footer">

        <div class="box-container">
            <div class="box">
                <h3>quick links</h3>
                <a href="home.html">home</a>
                <a href="about.html">about us</a>
                <a href="shop.html">shop</a>
                <a href="services.html">services</a>
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="cart.html">carrello</a>
                <a href="log.php">log-in</a>
            </div>


            <div class="box">
                <h3>dove ci troviamo</h3>
                <a href="https://www.google.com/maps/place/Via+Plinio,+00193+Roma+RM/@41.9073062,12.4628181,17z/data=!4m6!3m5!1s0x132f605ed8b4150b:0x19b609d7a9e2a0b3!8m2!3d41.9073022!4d12.465393!16s%2Fg%2F1tfn6d5v">Roma</a>
                <a href="https://www.google.com/maps/place/Via+Plinio,+Milano+MI/@45.4770584,9.2139953,17z/data=!3m1!4b1!4m6!3m5!1s0x4786c6eb9ef1e1e9:0x48d4a047e936ed2!8m2!3d45.4770547!4d9.2165702!16s%2Fg%2F12hq3t3zg">Milano</a>
            </div>

            <div class="box">
                <h3>contattaci</h3>
                <a href="#">+123-456-7890</a>
                <a href="#">example@gmail.com</a>
                <a href="#">Italy,Rome</a>
                <a href="#">example@gmail.com</a>
                <!--<img src="payment.png" alt="">-->
            </div>

        </div>

        <div class="credit">created by <span> Pita&Proietti_Dev. Designer</span> all rights reserved</div>
    </section>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script>
    $(document).ready(function(){
      $(window).scroll(function(){
        if($(window).scrollTop()>300){
          $('i').css({
            "opacity":"1","pointer-events":"auto"
          });
        }else{
          $('i').css({
            "opacity":0,"pointer-events":"none"
          });
        }
    });
     $('i').click(function(){
      $('html').animate({scrollTop:0},500);
     });
    });
  </script>
  <script src="Data.js"></script>
  <script src="cart.js"></script>
</html>
