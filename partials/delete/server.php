<?php
//Connessione al database
include_once __DIR__ . '/../database.php';

//Ottengo room ID
if (empty($_POST['id'])) {
    exit('ID non valido');
}

$room_id = $_POST['id'];

//Query
$sql = "DELETE FROM `stanze` WHERE `id` = $room_id";
$results = $connection->query($sql);

if ($results && $connection->affected_rows > 0) {
    header("Location: $base_path?del=1");
} elseif ($results) {
    echo 'Stanza non trovata';
} else {
    echo 'Si è verificato un errore';
}

//Chiusura connessione al database
$connection->close();