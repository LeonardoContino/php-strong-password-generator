<?php 
include 'function.php'



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>
    <title>Document</title>
</head>
<body>
    <!-- 
        L'utente potrà scegliere la lunghezza password e ricevere in un alert una password con il numero di caratteri casuali da lui richiesto!
Lo screen allegato è un riferimento, ma potete variare la grafica.
Milestone 1: creare un form che invii in GET la lunghezza della password.
Una nostra funzione utilizzerà questo dato per generare una password casuale
(composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file index.php
Milestone 2: verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php
che includeremo poi nella pagina principale
Milestone 3: invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente.
     -->


     <div class="container text-center mt-4">
        

        <form action="" method="POST">
            <h1>Password Generator</h1>
            <h3>genera una password</h3>
            <p>la password generata è: <?= generatePassword($_POST['lunghezza']) ?></p>
                <div class="d-flex justify-content-center gap-3 p-4 align-items-center">
                    <p class="">lunghezza password</p>
                    <input type="number" name="lunghezza">
                </div>

                <div>
                    <button class="btn btn-success">invia</button>
                    <button class="btn btn-secondary">annulla</button>
                </div>

        </form>
     </div>
    


</body>
</html>