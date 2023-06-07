<?php

session_start();

// Avvia la sessione

$_SESSION = array();

// Svuota l'array delle variabili di sessione

session_destroy();

// Distrugge la sessione corrente

header("location: ../log.php");

// Reindirizza l'utente alla pagina di login

exit;

// Termina l'esecuzione dello script

?>
