<?php
//Includo db
include __DIR__ . '/database.php';
//Includo
include __DIR__ . '/functions/functions.php';

//Ottengo lista stanze
$rooms = getAllData($connection, 'stanze');