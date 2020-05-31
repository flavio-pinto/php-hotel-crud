<?php
//Connessione al database
include_once __DIR__ . '/../database.php';

//Ottengo id stanza
$room_id = $_GET['id'];

//Interrogazione per ottenere stanza selezionata
$sql = "SELECT * FROM `stanze` WHERE `id` = $room_id";
$results = $connection->query($sql);

if($connection && $results->num_rows >= 1) { //caso in cui ci sono una o più rows
    $room = $results->fetch_assoc();
} elseif ($results) { //caso in cui non c'è errore ma ci sono zero rows
    echo 'Nessun risultato';
} else { //in caso di false
    echo 'Query error';
}

//Chiusura connessione al database
$connection->close();