<?php

$host = "127.0.0.1";
$user = "root";
$password = "";
$db = "progetto_ltw-main";

$connessione = new mysqli($host, $user, $password, $db);

// Configurazione delle informazioni di connessione al database

if($connessione === false){
    die("Errore di connessione: " . $connessione->connect_error);
}

// Verifica se la connessione al database è stata stabilita con successo
// In caso di errore, viene stampato un messaggio di errore e l'esecuzione dello script termina

?>
