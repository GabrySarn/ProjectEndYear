<?php


$op1 = -3;
$op2 = 5.10;
$op3 = (int) "10";

// var_dump(is_int($op1)); //bool(true)
// var_dump(is_float($op2)); //bool(true)
// var_dump(is_string($op3)); //bool(true)

$ris = $op2 + $op3; //13  (non gli importa che prima era una stringa)

// var_dump(is_float($ris)); //lo considera float

var_dump(abs($op1));
var_dump($op1);

echo "<br>";
echo min(0, 56, 23, 100.12);
echo "<br>";
echo max(0, 56, 23, 100.12);
echo "<br>";
echo sqrt(25);
echo "<br>";
echo round(0.49); //arrotondamento
echo "<br>";
echo rand(0, 100); //num rand
echo "<br>";

$ope1 = 5;
$ope2 = 2;

echo $ope1 ** $ope2; //potenza




?>