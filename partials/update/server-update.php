<?php
//Includo connessione database
include_once __DIR__ . '/../database.php';

//Controllo ID
if(empty($_POST['id'])) {
    exit('Errore: id inesistente');
}

$room_id = $_POST['id'];
$room_number = $_POST['room_number'];
$room_beds = $_POST['beds'];
$room_floor = $_POST['floor'];

//Aggiorna dati stanza
// $sql = "UPDATE `stanze` 
// SET `room_number` = $room_number, `beds` = $room_beds, `floor` = $room_floor
// WHERE `id` = $room_id";

//UPDATE con prepared statements per evitare SQL Injections
$sql = "UPDATE `stanze` 
SET `room_number` = ?, `beds` = ?, `floor` = ?, `updated_at` = NOW()
WHERE `id` = ?";
$statement = $connection->prepare($sql);
$statement->bind_param('iiii', $room_number, $room_beds, $room_floor, $room_id); //i sta per numero intero

$statement->execute();

$results = $connection->query($sql);

if($statement && $statement->affected_rows > 0) {
    header("Location: $base_path" . "show.php?id=$room_id");
} elseif($statement) {
    exit('Nessuna stanza trovata');
} else {
    exit('Si è verificato un errore');
}

//Chiusura connessione al database
$connection->close();