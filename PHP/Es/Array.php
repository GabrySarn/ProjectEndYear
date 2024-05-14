<?php

$citta = ["Milano", "Firenze", "Roma"];

for ($i = 0; $i < count($citta); $i++) { //count() max elem dell'array
    //echo $citta[$i] . "<br>";
}

//echo "<br>";

$persona = [
    //array associativo
    "nome" => "Luca",
    //valore chiave
    "cognome" => "Rossi",
    "eta" => 25
];

// echo $persona["nome"];

// echo "<br>";

foreach ($persona /* identificato come  */as $chiave => $valore) {
    //echo $chiave . "=>" . $valore . "<br>";
}


$classi = [
    //matrici
    ["Luca", "Marco", "Anna"],
    ["Leonardo", "Mattia", "Paola"]
];

//echo $classi[0][0];

// for ($classe = 0; $classe < count($classi); $classe++) {
//     echo "Classe" . $classe . "<br>";
//     for ($alunno = 0; $alunno < count($classi[$classe]); $alunno++) {
//         echo $classi[$classe][$alunno]."<br>";
//     }
// }


sort($citta);
print_r($citta); //stampa tutto array
echo "<br>";
rsort($citta);
print_r($citta);

echo "<br>" . "ksort";
ksort($persona);
print_r($persona);
echo "<br>" . "krsort";
krsort($persona);
print_r($persona);
echo "<br>" . "asort";
asort($persona);
print_r($persona);
echo "<br>" . "arsort";
arsort($persona);
print_r($persona);
echo "<br>";

$citta = ["Milano", "Firenze", "Roma"];
echo "<br>" . "array_push";
array_push($citta, "Napoli");
print_r($citta);
echo "<br>" . "array_pop";
array_pop($citta);
print_r($citta);
echo "<br>" . "array_unshift"; //mette all'inizio
array_unshift($citta, "Napoli");
print_r($citta);
echo "<br>" . "array_shift"; //toglie all'inizio
array_shift($citta);
print_r($citta);
echo "<br>";









?>