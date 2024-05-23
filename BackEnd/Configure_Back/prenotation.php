<?php
if(isset($_GET['pack']) && isset($_GET['options'])) {
    $selectedPack = $_GET['pack'];
    $selectedOptions = json_decode($_GET['options']);

    echo "Pacchetto selezionato: $selectedPack<br>";
    echo "Opzioni selezionate:<br>";
    foreach($selectedOptions as $option) {
        echo "- $option<br>";
    }
} else {
    echo "Nessun dato ricevuto.";
}
?>