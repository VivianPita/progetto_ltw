<?php

session_start();
if(!isset($_SESSION['loggato']) || $_SESSION['loggato'] !== true){
    // Verifica se la sessione non è stata avviata o se 'loggato' non è impostato a true
    // In tal caso, reindirizza l'utente alla pagina di accesso e termina l'esecuzione dello script
    header("location: controllo-log.php");
    exit;

}

?>

<!DOCTYPE html>
<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <meta charset="UFT-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <title>checkout</title>
    <link rel="stylesheet" href="card.css">
    <link rel="icon" href="ico.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
<div class="sopra">
<div class="container">

    <form action="php/check.php" class= "was-validated "method="POST">

        <div class="row">

            <div class="col">

                <h3 class="title">Dati Spedizione</h3>

                <div class="mb-3 mt-3">
                  <label for="uname" class="form-label">Nome Cognome:</label>
                  <input type="text" class="form-control" id="uname" placeholder="inserisci nome cognome" name="nome" required>
                  <div class="valid-feedback">Valido</div>
                  <div class="invalid-feedback">Riempi questo campo</div>
                </div>
                <div class="mb-3 mt-3">
                  <label for="uname" class="form-label">Email:</label>
                  <input type="email" class="form-control" id="uname" placeholder="inserisci email" name="email" required>
                  <div class="valid-feedback">Valido</div>
                  <div class="invalid-feedback">Riempi questo campo</div>
                </div>
                <div class="mb-3 mt-3">
                  <label for="uname" class="form-label">Indirizzo:</label>
                  <input type="text" class="form-control" id="uname" placeholder="inserisci indirizzo" name="indirizzo" required>
                  <div class="valid-feedback">Valido</div>
                  <div class="invalid-feedback">Riempi questo campo</div>
                </div>
                

                <div class="flex">
                    <div class="mb-3 mt-3">
                      <label for="uname" class="form-label">Citt&agrave;:</label>
                      <input type="text" class="form-control" id="uname" placeholder="inserisci città" name="citta" required>
                      <div class="valid-feedback">Valido</div>
                      <div class="invalid-feedback">Riempi questo campo</div>
                    </div>
                    <div class="mb-3 mt-3">
                      <label for="uname" class="form-label">CAP:</label>
                      <input type="text" class="form-control" id="uname" placeholder="00000" name="cap" required>
                      <div class="valid-feedback">Valido</div>
                      <div class="invalid-feedback">Riempi questo campo</div>
                    </div>
                </div>

            </div>

            <div class="col">

                <h3 class="title">Pagamento</h3>

                <div class="mb-3 mt-3">
                    <span>carte accettate :</span>
                    <img src="immagini/card_img.png" alt="">
                </div>
                <div class="mb-3 mt-3">
                  <label for="uname" class="form-label">Nome Proprietario:</label>
                  <input type="text" class="form-control" id="uname" placeholder="inserisci nome titolare" name="uname" required>
                  <div class="valid-feedback">Valido</div>
                  <div class="invalid-feedback">Riempi questo campo</div> 
                </div>
                <div class="mb-3 mt-3">
                 <label for="uname" class="form-label">Numero Carta:</label>
                   <input type="number" class="form-control" id="uname" placeholder="inserisci numero carta" name="uname" required>
                   <div class="valid-feedback">Valido</div>
                   <div class="invalid-feedback">Riempi questo campo</div> 
                </div>
                

                <div class="flex">
                    <div class="mb-3 mt-3">
                    <label for="uname" class="form-label">Data Scadenza:</label>
                    <input type="text" class="form-control" id="uname" placeholder="00/00/0000" name="uname" required>
                    <div class="valid-feedback">Valido</div>
                    <div class="invalid-feedback">Riempi questo campo</div>
                    </div>
                    <div class="mb-3 mt-3">
                    <label for="uname" class="form-label">CVV:</label>
                    <input type="text" class="form-control" id="uname" placeholder="000" name="uname" required>
                    <div class="valid-feedback">Valido</div>
                    <div class="invalid-feedback">Riempi questo campo</div>
                    </div>
                </div>

            </div>
    
        </div>

        
        <button type="submit" class="submit-btn" value="invia">invia</button>

        <script src="card.js"></script>
        <script>

            $('.submit-btn').click(() => {
                
                localStorage.clear()
            });
            

        </script>
        
    </form>

</div>    
</div>

</body>
</html>
