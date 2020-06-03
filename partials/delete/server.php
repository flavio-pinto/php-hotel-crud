<?php
//Connessione al database
include_once __DIR__ . '/../database.php';
//Includo funzione per eliminare record da db
include __DIR__ . '/../functions/functions.php';

//Ottengo room ID
if (empty($_POST['id'])) {
    exit('ID non valido');
}

$room_id = $_POST['id'];
$url = "$base_path?del=room"; //ho messo room per chiarezza ma potrebbe essere qualsiasi altra parola

//Richiamo funzione per fare query per eliminare stanza
deleteById($connection, 'stanze', $room_id, $url);
