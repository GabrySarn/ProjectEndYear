<?php

$stringa = "      Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Vivamus vel tincidunt magna, et rutrum urna    ";
$nome = "Luca";

//echo "Qwerty".$nome."dgr4egg3g";

echo strlen($stringa); //lunghezza stringa
echo "<br>";
echo strtolower($stringa);
echo "<br>";
echo strtoupper($stringa);
echo "<br>";
echo trim($stringa); //leva spazi inizio e fine
echo "<br>";
echo str_word_count($stringa); //conta parole
echo "<br>";
echo strrev($stringa); //al contrario
echo "<br>";
echo strpos($stringa, "dolor"); //numero carattere dove inizia la parola
echo "<br>";
echo substr($stringa, 18, 5); //stampare solo parte di stringa
echo "<br>";
echo str_replace("ipsum", "Ciao", $stringa)



?>