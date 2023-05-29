<?php

require_once("config.php");

$nome = $connessione->real_escape_string($_POST["nome"]);
$numero = $connessione->real_escape_string($_POST["numero"]);
$data = $connessione->real_escape_string($_POST["data"]);
$ora = $connessione->real_escape_string($_POST["ora"]);


$sql = "INSERT INTO prenotazioni (nome, numero, data, ora) VALUES ('$nome', '$numero', '$data', '$ora')";
if($connessione->query($sql) === true){
    header("location: ../conferma.php");
}else{
    echo "Errore durante prenotazione $sql. " . $connessione->error;
}

?>