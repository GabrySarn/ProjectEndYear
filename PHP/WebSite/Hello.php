<?php

//echo "Hello World!";
/*$num = 12;
echo 'La mia età: '.$num."<br>";
echo 'Sono grande';*/

$dict['dog'] = "Fido";
$dict["cat"] = "Gino";
//echo $dict["dog"]."<br>";
//var_dump($dict);

//memorizzare in un array un elenco di citazioni e visualizzarlo

/*$cit[0] = "Tutti noi compiamo delle scelte e noi stessi siamo frutto delle nostre decisioni.";
$cit[1] = "Volere qualcosa non ti dà il diritto di averlo.";
$cit[2] = "Se non vedi nessun punto debole, crealo.";


for ($i = 0; $i < count($cit); $i++) {
    //echo ($i + 1) . "_";
    echo $cit[$i]."<br>";
}
*/
//memorizzare in un array un elenco di citazioni e l"autore visualizzarlo

$cit["Franklin D. Roosevelt"] = "L'unica cosa di cui dobbiamo avere paura è la paura stessa.";
$cit["Allen Saunders"] = "La vita è ciò che succede mentre sei occupato a fare altri progetti.";
$cit["Abraham Lincoln"] = "Non è importante quanti anni hai, ma quanto hai vissuto negli anni.";

foreach($cit as $autore => $citazione){
    echo  $citazione." ".$autore .'<br>';
}

?>
