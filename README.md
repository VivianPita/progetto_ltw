#  Pet World

Il sito è stato ideato per una clinica veterinaria:
I servizi che il sito offre sono:
- gestione di un sistema di prenotazioni per le visite 
- sezione e-commerce dove si possono effetturare acquisti pertinenti

## Studenti 
- PITA ALEXANDRU VIVIAN 1948533
- PROIETTI SAMUELE 1946329

## Tecnologie usate per il sito web
- HTML5
- CSS3
- JavaScript
- jquery-3.6.4.min
- PHP
- SQL
- Fontawesome
- Bootstrap 5.2.3

## Ambiente di sviluppo:
Per sviluppare il sito abbiamo usato:
- Visual Studio Code
   - Live Server(per la parte di web design)
   - PHP Server
   - PHP Intelephense
- Xampp
  - Apache
  - MySQL
## Database:
- database: progetto_ltw-main
- host = "127.0.0.1"
- user = "root"
- password = ""
- tabelle:
  - utenti
  - ordini
  - prenotazioni

## Descrizione cartella code
Il codice è stato scritto nella cartella code per poi essere suddiviso in due ulteriori cartelle:
- immagini dove abbiamo inserito le immagini usate nelle varie pagine del sito
- php dove abbiamo gestito la parte server del nostro sito
Il resto dei file che si vedono nella cartella sono i file HTML,CSS,PHP e JavaScript che sono stati usati per implementare le pagine.

## Descrizione file con estensione HTML
- about.html : pagina dove lo staff dei medici è presentato
- home.html : la homepage del sito suddivisa in 3 sezioni connesse allo shop, al servizio di prenotazione e alla pagina di about us
- cart.html: pagina dove gli elementi aggiunti dallo shop vengono elencati e dove è possibile concludere l'ordine
- services.html : pagina dove il servizio di prenotazione delle visite è accessibile all'utente tramite una lista di possibili servizi
- shop.html : pagina dove è implementato lo shop tramite una lista di oggetti che si possono aggiungere al carrello
- successo_reg.html : pagina dove si viene avvertiti del successo della registrazione di un nuovo account

## Descrizione file con estensione CSS
- about.css : definiamo lo stile della pagina di about us
- area-privata.css : definiamo lo stile della pagina dell'area privata una volta fatto l'accesso
- card.css : definiamo lo stile della pagina del checkout
- checkup.css : definiamo lo stile della pagina che si apre per prenotare il servizio checkup
- conferma.css : definiamo lo stile della pagina di conferma della nostra prenotazione effettuata con successo
- controllo-log.css : definiamo lo stile della pagina a cui siamo indirizzati se non abbiamo effettuato l'accesso
- footer.css : definiamo lo stile del footer del nostro sito
- header.css : definiamo lo stile dell'header del nostro sito
- home.css : definiamo lo stile della pagina home
- index-prova.css : definiamo lo stile della pagina di registrazione al sito
- login.css : definiamo lo stile della pagina di login al sito
- services.css : definiamo lo stile della pagina dei servizi di prenotazione
- shop.css : definiamo lo stile della pagina shop del nostro sito
- successo_reg.css : definiamo lo stile della pagina a cui veniamo indirizzati se effettuiamo con successo la registrazione al sito
- vaccinazione.css : definiamo lo stile della pagina che si apre per prenotare il servizio vaccinazione
- toeletta.css : definiamo lo stile della pagina che si apre per prenotare il servizio toeletta

## Descrizione file con estensione JS
- Data.js : lista degli oggetti json che si possono comprare nella pagina dello shop
- card.js : invia la lista degli oggetti che si vogliono comprare al file "check.php"
- cart.js : genera gli oggetti aggiunti nel carrello con la possibilità di svuotare il carrello o di andare a fare il checkout
- main.js : genera gli oggetti nello shop 

## Descrizione file con estensione PHP
- check.php : inserisce nel database "ordini" i dati dell'ordinazione e della spedizione che si è effetuata nalla pagina di check out
- config.php : stabilisce una connessione al database MySQL
- login.php : effettua il log-in con le informazioni d'accesso e controlla che l'account sia esistente e i dati inseriti sia corretti
- logout.php : disconette l'account dal sito web
- register.php : inserisce nel database "utenti" i dati dell'utente che si è registrato nalla pagina di registrazione
- reservation.php : inserisce nel database "prenotazioni" i dati della prenotazione che si è effettuata nella apposita pagina
- area-privata.php : pagina dell'area personale dove vi si accede dopo aver effetuato il log-in, è possibile effettuare il log-out del proprio account dal sito
- card.php : pagina del check out dove vengono inseriti i dati di spedizione e di fatturazione per effetuare l'acquisto dei prodotti che erano stati inseriti nel carrello
- checkup.php : pagina dove si può prenotare il servizio del checkup con i dati della visita, si può accedere a questa pagina solo dopo aver fatto il log-in
- conferma.php : pagina di conferma che notifica la corretta prenotazione al cliente del servizio che si è voluto riservare
- controllo-log.php : pagina di controllo che notifica di effettuare il log-in se si volesse accedere alla prenotazione dei servizi o al check out del carrello senza averlo prima fatto, è possibile andare direttamente alla pagina di log-in tramite un pulsante 
- index.php : pagina di registrazione dove si può creare il proprio account con i propri dati personali, in caso si avesse già possiamo accedere alla pagina di log-in
- log.php : pagina dove puoi effetuare il log-in tramite il proprio account, in caso non fossimo registrati possiamo accedere alla pagina di registrazione
- toeletta.php : pagina dove si può prenotare il servizio della toeletta con i dati della visita, si può accedere a questa pagina solo dopo aver fatto il log-in 
- vaccinazione.php : pagina dove si può prenotare il servizio della vaccinazione con i dati della visita, si può accedere a questa pagina solo dopo aver fatto il log-in


