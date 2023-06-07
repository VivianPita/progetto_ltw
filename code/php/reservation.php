<?php

require_once("config.php");

$nome = $connessione->real_escape_string($_POST["nome"]);
$numero = $connessione->real_escape_string($_POST["numero"]);
$data = $connessione->real_escape_string($_POST["data"]);
$ora = $connessione->real_escape_string($_POST["ora"]);

// Ottiene i valori dai campi del modulo di prenotazione

$sql = "INSERT INTO prenotazioni (nome, numero, data, ora) VALUES ('$nome', '$numero', '$data', '$ora')";

// Crea una query per inserire i dati della prenotazione nella tabella "prenotazioni"

if ($connessione->query($sql) === true) {
    header("location: ../conferma.php");
    // Se l'inserimento dei dati della prenotazione nella tabella "prenotazioni" ha avuto successo, l'utente viene reindirizzato alla pagina di conferma della prenotazione
} else {
    echo "Errore durante la prenotazione $sql. " . $connessione->error;
    // In caso di errore durante l'inserimento dei dati della prenotazione, viene stampato un messaggio di errore
}

?>
