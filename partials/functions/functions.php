<?php
//Funzione per ottenere tutti i dati da una tabella del database
function getAllData($connection, $table) {
    $sql = "SELECT * FROM `stanze`";
    $results = $connection->query($sql);

    //Valuto vari casi con un if
    if($results && $results->num_rows >= 1) { //caso in cui ci sono una o più rows
        $records = [];
        while($row = $results->fetch_assoc()) {
            $records[] = $row;
        }
    } elseif($results) { //caso in cui non c'è errore ma ci sono zero rows
        $records = [];
    } else { //in caso di false
        $records = false;
    }
    //Chiusura connessione al database
    $connection->close();

    return $records;
}