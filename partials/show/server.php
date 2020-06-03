<?php
//Connessione al database
include_once __DIR__ . '/../database.php';
//Includo funzione per ottenere singolo record
include __DIR__ . '/../functions/functions.php';
//Ottengo id stanza
$room_id = $_GET['id'];

//Interrogazione per ottenere stanza selezionata
$room = getSingleRecordById($connection, 'stanze', $room_id);