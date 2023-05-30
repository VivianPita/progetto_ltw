<?php

require_once("config.php");

$nome = $connessione->real_escape_string($_POST["nome"]);
$email = $connessione->real_escape_string($_POST["email"]);
$citta = $connessione->real_escape_string($_POST["citta"]);
$indirizzo = $connessione->real_escape_string($_POST["indirizzo"]);
$cap = $connessione->real_escape_string($_POST["cap"]);
$data = $connessione->real_escape_string($_POST["data"]);




$sql = "INSERT INTO ordini (nome, email, citta, indirizzo, cap, data) VALUES ('$nome', '$email', '$citta', '$indirizzo', '$cap', '$data')";
if($connessione->query($sql) === true){
    
    header("location: ../cart.html");
}else{
    echo "Errore durante prenotazione $sql. " . $connessione->error;
}

?>