<?php
//Includo connessione database
include_once __DIR__ . '/../database.php';

//Ottengo stanza da editare
if(!empty($_GET['id'])) { //controllo se c'è un id
    $room_id = $_GET['id'];
    //query
    $sql = "SELECT * FROM `stanze` WHERE `id` = $room_id ";
    $results = $connection->query($sql);

    if($results && $results->num_rows > 0) { //trova un risultato
        $room = $results->fetch_assoc(); //assegna risultato, quindi la variabile viene settata
    } else {
        exit('Errore: id inesistente');
    }
} else {
    exit('Impossibile ottenere stanza da editare');
}

//Chiusura connessione al database
$connection->close();