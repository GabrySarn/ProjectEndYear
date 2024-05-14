<?php

// echo 'Ciao '.$_POST['nome'].' '.$_POST['cognome'];
// //echo stampa
// //$_POST da metodo post del html
// //'nome' nome della variabile di html

// $nome = $_POST['nome'];

// function saluta(){
//     $GLOBALS['nome'] = 'Orazio';
//     echo $GLOBALS['nome'];

// }

// saluta();
// echo $nome


// define('INDIRIZZO', 'Piazza Roma'); 
const ADDRESS = 'Viale Genova';  // NON PUO ESSERE DEFINITA IN UNA FUNZIONE


function saluta(){
    define('INDIRIZZO', 'Piazza Roma'); 
}

saluta();

echo INDIRIZZO;

echo ADDRESS;


?>