<?php
include "../../BackEnd/connect.php";

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
$user = $_SESSION['idUtente'];
$veicolo = $_SESSION['carId'];
$sql = "INSERT INTO ordine (ID_utente, ID_veicolo, ID_conf, Stato_ordine) VALUES ('$user', '$veicolo', '', '0');";

// if ($conn->query($sql) === TRUE) {
//   $_SESSION["id_order"] = $conn->insert_id;
// } else {
//   echo $conn->error;
// }

// Chiudi la connessione al database
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


    header('Location: success.html');

  }

  if (isset($_POST['interior']) && !empty($_POST['interior'])) {
    $interior = $_POST['interior'];
    header('Location: success.html');
  }

  if (isset($_POST['paint']) && !empty($_POST['paint'])) {
    $paint = $_POST['paint'];
    $_SESSION['paint'] = $paint;
    echo $_SESSION['paint'];
    //header('Location: success.html');
  }

  if (isset($_POST['wheel']) && !empty($_POST['wheel'])) {
    $wheel = $_POST['wheel'];
    header('Location: success.html');
  }

  if (isset($_POST['motor']) && !empty($_POST['motor'])) {
    $motor = $_POST['motor'];
    //var_dump($motor);
    header('Location: success.html');
  }

  if (isset($_POST['options']) && !empty($_POST['options'])) {
    $selectedOptions = json_decode($_POST['options'], true);
    //L'ULTIMO AGGIUNTO E IL PACK!!!!!
    //echo "<h2>Opzioni selezionate:</h2>";
    foreach ($selectedOptions as $index => $option) {
      echo "<p>Opzione $index: $option</p>";
    }
    echo 'Pack ' . $_POST['pack'] . ' Paint' . $_SESSION['paint'];


    //header('Location: ../Checkout/index.html');

  }

}


