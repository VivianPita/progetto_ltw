<?php

require_once("config.php");

$email = $connessione->real_escape_string($_POST["email"]);
$password = $connessione->real_escape_string($_POST["password"]);

if($_SERVER["REQUEST_METHOD"] === "POST"){

    $sql_select = "SELECT * FROM utenti WHERE email = '$email' ";
    if($result = $connessione->query($sql_select)){
        if($result->num_rows == 1){
            $row = $result->fetch_array(MYSQLI_ASSOC);
            if(password_verify($password, $row['password'])){
                session_start();

                $_SESSION['loggato'] = true;
                $_SESSION['id'] = $row['id'];
                $_SESSION['nome'] = $row['nome'];
                $_SESSION['cognome'] = $row['cognome'];

                header("location: ../area-privata.php");
            }else{
                echo "La Password non è corretta";
            }
        }else{
            echo "Non ci sono account registrati con questa email";
        }
    }else{
        echo "Errore in fase di login";
    }
    $connessione->close();
}
?>