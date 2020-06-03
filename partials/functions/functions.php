<?php
/**
 * Funzione per ottenere tutti i dati da una tabella del database
 */
function getAllData($connection, $table) {
    $sql = "SELECT * FROM `$table`";
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

/**
 * Funzione per prendere singolo record tramite id
 */
function getSingleRecordById($connection, $table, $id) {
    $sql = "SELECT * FROM `$table` WHERE `id` = $id";
    $results = $connection->query($sql);

    if($connection && $results->num_rows >= 1) { //caso in cui ci sono una o più rows
        $record = $results->fetch_assoc();
    } elseif ($results) { //caso in cui non c'è errore ma ci sono zero rows
        $record = [];
    } else { //in caso di false
        $record = false;
    }

    //Chiusura connessione al database
    $connection->close();

    return $record;
}

/**
 * Funzione per cancellare record tramite id
 */
function deleteById($connection, $table, $id, $url) {
    $sql = "DELETE FROM `$table` WHERE `id` = $id";
    $results = $connection->query($sql);

    if ($results && $connection->affected_rows > 0) {
        header("Location: $url");
    } elseif ($results) {
        exit('Non ho trovato alcun record da cancellare');
    } else {
        exit('Si è verificato un errore');
    }

    //Chiusura connessione al database
    $connection->close();
}