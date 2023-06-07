// Recupera i dati dal localStorage
var cart_data = localStorage.data;

// Crea una nuova richiesta XMLHttpRequest
var xhr = new XMLHttpRequest();

// Imposta la richiesta POST verso "php/check.php"
xhr.open("POST", "php/check.php", true);

// Imposta l'intestazione Content-Type della richiesta
xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

// Definisce la funzione di callback che verrà chiamata quando lo stato della richiesta cambia
xhr.onreadystatechange = function() {
  if (xhr.readyState === 4 && xhr.status === 200) {
    
    // Stampa la risposta ricevuta dalla richiesta sul console.log
    console.log(xhr.responseText);
  }
};

// Invia la richiesta POST con i dati del carrello
xhr.send("dati=" + encodeURIComponent(cart_data));
