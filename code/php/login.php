<?php

require_once("config.php");

$email = $connessione->real_escape_string($_POST["email"]);
$password = $connessione->real_escape_string($_POST["password"]);

if($_SERVER["REQUEST_METHOD"] === "POST"){

    $sql_select = "SELECT * FROM utenti WHERE email = '$email' ";

    // Seleziona tutti i record dalla tabella "utenti" che corrispondono all'email fornita

    if($result = $connessione->query($sql_select)){

        // Esegui la query e controlla se il risultato contiene un solo record

        if($result->num_rows == 1){
            $row = $result->fetch_array(MYSQLI_ASSOC);

            // Estrai il record dal risultato della query e memorizzalo nell'array associativo $row

            if(password_verify($password, $row['password'])){
                session_start();

                // Inizia la sessione e imposta le variabili di sessione per l'utente autenticato

                $_SESSION['loggato'] = true;
                $_SESSION['id'] = $row['id'];
                $_SESSION['nome'] = $row['nome'];
                $_SESSION['cognome'] = $row['cognome'];

                header("location: ../area-privata.php");
                // Reindirizza l'utente all'area privata dopo il login corretto
            }else{
                $_SESSION['errore'] = "La Password non è corretta";
                header("location: ../log.php");
                // Se la password non corrisponde, viene impostato un messaggio di errore e l'utente viene reindirizzato alla pagina di login
            }
        }else{
            $_SESSION['errore'] = "Non ci sono account registrati con questa mail";
            header("location: ../log.php");
            // Se non viene trovato alcun record corrispondente all'email, viene impostato un messaggio di errore e l'utente viene reindirizzato alla pagina di login
        }
    }else{
        $_SESSION['errore'] = "Errore in fase di login";
        header("location: ../log.php");
        // Se si verifica un errore durante l'esecuzione della query, viene impostato un messaggio di errore e l'utente viene reindirizzato alla pagina di login
    }
    $connessione->close();
    // Chiudi la connessione al database
}
?>
