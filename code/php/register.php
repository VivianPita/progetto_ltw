<?php

require_once("config.php");

$nome = $connessione->real_escape_string($_POST["nome"]);
$cognome = $connessione->real_escape_string($_POST["cognome"]);
$email = $connessione->real_escape_string($_POST["email"]);
$password = $connessione->real_escape_string($_POST["password"]);

$email_exists_query = "SELECT * FROM utenti WHERE email = '$email'";
$email_exists_result = $connessione->query($email_exists_query);

// Verifica se l'email esiste già nella tabella degli utenti

if ($email_exists_result->num_rows > 0) {
    
    $_SESSION['errore'] = "L'email è già esistente'";
    header("location: ../index.php");
    // Se l'email esiste già, viene impostato un messaggio di errore e l'utente viene reindirizzato alla pagina di registrazione
} else {
    
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Crea l'hash della password per la sicurezza

    $sql = "INSERT INTO utenti (nome, cognome, email, password) VALUES ('$nome', '$cognome', '$email', '$hashed_password')";
    // Crea una query per inserire i dati dell'utente nella tabella "utenti"

    if ($connessione->query($sql) === true) {
        header("location: ../successo_reg.html");
        // Se l'inserimento dei dati dell'utente nella tabella "utenti" ha avuto successo, l'utente viene reindirizzato alla pagina di registrazione avvenuta con successo
    } else {
        echo "Errore durante la registrazione dell'utente $sql. " . $connessione->error;
        // In caso di errore durante l'inserimento dei dati dell'utente, viene stampato un messaggio di errore
    }
}

?>
