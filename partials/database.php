<?php

//Include credenziali
include __DIR__ . '/../env.php';

//Connessione
$connection = new mysqli($server, $username, $password, $database_name);

//Controllo connessione
if($connection && $connection->connect_error) {
    exit('Si è verificato un errore!');
};