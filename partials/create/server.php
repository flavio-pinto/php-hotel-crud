<?php
//Connessione al database
include_once __DIR__ . '/../database.php';

//Controllo dati
if(empty($_POST['room_number']) || empty($_POST['beds']) || empty($_POST['floor'])) {
    exit('Errore: non hai inserito tutti i dati necessari');
}

$room_number = $_POST['room_number'];
$beds = $_POST['beds'];
$floor = $_POST['floor'];

//Query inserimento stanza
$sql = "INSERT INTO `stanze`(`room_number`, `beds`, `floor`, `created_at`, `updated_at`)
VALUES(?, ?, ?, NOW(), NOW());";

$statement = $connection->prepare($sql);
$statement->bind_param('iii', $room_number, $beds, $floor);
$statement->execute();

if($statement && $statement->insert_id) {
    $room_id = $statement->insert_id;
    header("Location: $base_path" . "show.php?id=$room_id");
} else {
    exit("Errore nell'aggiunta di una nuova stanza");
}