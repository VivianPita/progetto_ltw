<?php

require_once("config.php");

$nome = $connessione->real_escape_string($_POST["nome"]);
$cognome = $connessione->real_escape_string($_POST["cognome"]);
$email = $connessione->real_escape_string($_POST["email"]);
$password = $connessione->real_escape_string($_POST["password"]);

$email_exists_query = "SELECT * FROM utenti WHERE email = '$email'";
$email_exists_result = $connessione->query($email_exists_query);

if ($email_exists_result->num_rows > 0) {
    
    $_SESSION['errore'] = "L'email è già esistente'";
    header("location: ../index.php");
} else {
    
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO utenti (nome, cognome, email, password) VALUES ('$nome', '$cognome', '$email', '$hashed_password')";
    if ($connessione->query($sql) === true) {
        header("location: ../successo_reg.html");
    } else {
        echo "Errore durante la registrazione dell'utente $sql. " . $connessione->error;
    }
}

?>
