<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "prova";
$dbport = 3306;

$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname,$dbport);
if($conn->error){
    echo "errore connessione";
}