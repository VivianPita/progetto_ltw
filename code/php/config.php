<?php

$host = "127.0.0.1";
$user = "root";
$password = "";
$db = "progetto_ltw-main";

$connessione = new mysqli($host, $user, $password, $db);

if($connessione === false){
    die("Errore di connesione: " . $connessione->connect_error);
}

?>