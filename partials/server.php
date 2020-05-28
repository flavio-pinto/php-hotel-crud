<?php
include __DIR__ . '/database.php';

//Ottengo lista stanze
$sql = "SELECT * FROM `stanze`";
$results = $connection->query($sql);

//Valuto vari casi con un if
if($results && $results->num_rows >= 1) {
    $rooms = [];
    while($row = $results->fetch_assoc()) {
        $rooms[] = $row;
    }
} elseif($results) {
    echo 'No results found';
} else {
    echo 'Query error';
}
//Chiusura connessione al database
$connection->close();