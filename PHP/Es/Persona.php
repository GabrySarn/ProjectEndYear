<?php

$nome = 'Luca';
$eta = 23;
$temperatura = 36.07;
$is_online = true;
$interessi = ['calcio', 'basket', 'cinema'];
$fidanzata = null;

class Persona
{
    public $nome;
    public $cognome;

    public function __construct($nome, $cognome)
    {
        $this->nome = $nome;
        $this->cognome = $cognome;
    }
}

$persona1 = new Persona('Orazio', 'Rossi');

var_dump($persona1); //mostra a schermo il tipo,la lunghezza e il dato



?>