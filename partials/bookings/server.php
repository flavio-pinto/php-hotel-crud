<?php
//Includo db
include __DIR__ . '/../database.php';
//Includo funzioni
include __DIR__ . '/../functions/functions.php';

//Query prenotazioni
$bookings = getAllData($connection, 'prenotazioni');