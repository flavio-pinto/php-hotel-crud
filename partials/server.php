<?php
include __DIR__ . '/database.php';

//Ottengo lista stanze
$sql = "SELECT * FROM `stanze`";
$results = $connection->query($sql);

//Valuto vari casi con un if
if($results && $results->num_rows >= 1) { //caso in cui ci sono una o più rows
    $rooms = [];
    while($row = $results->fetch_assoc()) {
        $rooms[] = $row;
    }
} elseif($results) { //caso in cui non c'è errore ma ci sono zero rows
    echo 'No results found';
} else { //in caso di false
    echo 'Query error';
}
//Chiusura connessione al database
$connection->close();