<?php

session_start();
if(!isset($_SESSION['loggato']) || $_SESSION['loggato'] !== true){

    header("location: controllo-log.php");
    exit;

}

?>

<!DOCTYPE html>
<head>
    <meta charset="UFT-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <title>checkout</title>
    <link rel="stylesheet" href="card.css">

</head>
<body>

<div class="container">

    <form action="cart.html">

        <div class="row">

            <div class="col">

                <h3 class="title">Dati Spedizione</h3>

                <div class="inputBox">
                    <span>Nome Cognome :</span>
                    <input type="text" placeholder="" required>
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="" required>
                </div>
                <div class="inputBox">
                    <span>indirizzo :</span>
                    <input type="text" placeholder="" required>
                </div>
                

                <div class="flex">
                    <div class="inputBox">
                        <span>citt&agrave; :</span>
                        <input type="text" placeholder="" required>
                    </div>
                    <div class="inputBox">
                        <span>CAP :</span>
                        <input type="text" placeholder="" required>
                    </div>
                </div>

            </div>

            <div class="col">

                <h3 class="title">Pagamento</h3>

                <div class="inputBox">
                    <span>carte accettate :</span>
                    <img src="immagini/card_img.png" alt="">
                </div>
                <div class="inputBox">
                    <span>nome del proprietario :</span>
                    <input type="text" placeholder="" required>
                </div>
                <div class="inputBox">
                    <span>numero della carta :</span>
                    <input type="number" placeholder="" required>
                </div>
                

                <div class="flex">
                    <div class="inputBox">
                        <span>data di scadenza :</span>
                        <input type="text" placeholder="" required>
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" placeholder="" required>
                    </div>
                </div>

            </div>
    
        </div>

        <input type="submit" value="procedi all'acquisto" class="submit-btn">
        
    </form>

</div>    
    
</body>
</html>