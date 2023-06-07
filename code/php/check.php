<?php

require_once("config.php");

$nome = $connessione->real_escape_string($_POST["nome"]);
$email = $connessione->real_escape_string($_POST["email"]);
$citta = $connessione->real_escape_string($_POST["citta"]);
$indirizzo = $connessione->real_escape_string($_POST["indirizzo"]);
$cap = $connessione->real_escape_string($_POST["cap"]);
$data = $connessione->real_escape_string($_POST["dati"]);

// Ottiene i valori dei campi del modulo

$sql = "INSERT INTO ordini (nome, email, citta, indirizzo, cap, data) VALUES ('$nome', '$email', '$citta', '$indirizzo', '$cap', '$data')";

// Crea la query SQL per inserire i dati nella tabella "ordini"

if($connessione->query($sql) === true){
    // Esegui la query e verifica se l'inserimento è avvenuto con successo

    header("location: ../cart.html");
    // Reindirizza l'utente alla pagina del carrello dopo aver completato l'inserimento
}else{
    echo "Errore durante prenotazione $sql. " . $connessione->error;
    // Stampa un messaggio di errore in caso di problemi durante l'inserimento dei dati
}

?>
