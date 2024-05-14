<?php

$numero = 5;


function somma($val1, $val2 = 100){ //PARAMETRO DEFAULT SE VUOTO
    $somma = $val1 + $val2;
    echo $somma."<br>";
}
somma($numero);
somma($numero, 300);


function sott($val1, $val2): int{ //output obbligato
    $somma = $val1 - $val2;
    echo $somma."<br>";
}

sott($numero+10,5);

?>