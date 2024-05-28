<?php
include "../../BackEnd/connect.php";

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
$user = $_SESSION['idUtente'];
$veicolo = $_SESSION['carId'];
$sql = "INSERT INTO ordine (ID_utente, ID_veicolo, ID_conf, Stato_ordine) VALUES ('$user', '$veicolo', '', '0');";

if ($conn->query($sql) === TRUE) {
  $_SESSION["id_order"] = $conn->insert_id;
} else {
  echo $conn->error;
}

$conn->close();


if ($_SERVER["REQUEST_METHOD"] == "POST") {


  if (isset($_POST['assistance']) && !empty($_POST['assistance'])) {
    $adaptiveSpeedAssist = isset($_POST['adaptiveSpeedAssist']) ? 1 : 0;
    $hillStartAssist = isset($_POST['hillStartAssist']) ? 1 : 0;
    $descentAssist = isset($_POST['descentAssist']) ? 1 : 0;
    $parkingAssistant = isset($_POST['parkingAssistant']) ? 1 : 0;
    $parkingAssistantPlus = isset($_POST['parkingAssistantPlus']) ? 1 : 0;
    $laneChangeWarning = isset($_POST['laneChangeWarning']) ? 1 : 0;
    $laneDepartureWarning = isset($_POST['laneDepartureWarning']) ? 1 : 0;

    // metti in db configurazione
    header('Location: success.html');

  }

  if (isset($_POST['interior']) && !empty($_POST['interior'])) {
    $interior = $_POST['interior'];
        // metti in db configurazione

    header('Location: success.html');
  }

  if (isset($_POST['paint']) && !empty($_POST['paint'])) {
    $paint = $_POST['paint'];
        // metti in db configurazione

    header('Location: success.html');
  }

  if (isset($_POST['wheel']) && !empty($_POST['wheel'])) {
    $wheel = $_POST['wheel'];
        // metti in db configurazione

    header('Location: success.html');
  }

  if (isset($_POST['motor']) && !empty($_POST['motor'])) {
    $motor = $_POST['motor'];
        // metti in db configurazione

    header('Location: success.html');
  }

  if (isset($_POST['options']) && !empty($_POST['options'])) {
    $selectedOptions = json_decode($_POST['options'], true);
    //L'ULTIMO AGGIUNTO E IL PACK!!!!!
    //echo "<h2>Opzioni selezionate:</h2>";
    foreach ($selectedOptions as $index => $option) {
      echo "<p>Opzione $index: $option</p>";
    }
    // metti in db configurazione
 //modfica stato ordine

    //header('Location: ../Checkout/index.html');

  }

}


