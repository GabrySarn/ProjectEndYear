<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "anagrafica";
$dbport = 3306;

$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname,$dbport);
if($conn->error){
    echo "errore connessione";
}else{
    // echo conn a buon fine
}