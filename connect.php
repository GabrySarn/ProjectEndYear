<?php

$dbhost = "localhost"; 
$dbuser = "root";
$dbpass = "";
$dbname = "brand"; 
$dbport = 3306;

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if($conn->error){
    echo "Errore di connessione"; 
}else{
    //echo "Connesso al server";
}