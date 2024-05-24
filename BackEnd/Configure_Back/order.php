<?php
include "../../BackEnd/connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (isset($_POST['package'])) {
    $pack = $_POST['package'];
  }

  if (isset($_POST['assistance'])) {
    $stmt = $conn->prepare("INSERT INTO assistenza_dati (adaptiveSpeedAssist, hillStartAssist, descentAssist, parkingAssistant, parkingAssistantPlus, laneChangeWarning, laneDepartureWarning) VALUES (?, ?, ?, ?, ?, ?, ?)");
    // Imposta i valori dei campi
    $adaptiveSpeedAssist = isset($_POST['adaptiveSpeedAssist']) ? 1 : 0;
    $hillStartAssist = isset($_POST['hillStartAssist']) ? 1 : 0;
    $descentAssist = isset($_POST['descentAssist']) ? 1 : 0;
    $parkingAssistant = isset($_POST['parkingAssistant']) ? 1 : 0;
    $parkingAssistantPlus = isset($_POST['parkingAssistantPlus']) ? 1 : 0;
    $laneChangeWarning = isset($_POST['laneChangeWarning']) ? 1 : 0;
    $laneDepartureWarning = isset($_POST['laneDepartureWarning']) ? 1 : 0;

    // Associa i parametri della query ai valori dei campi del modulo
    $stmt->bind_param("iiiiiii", $adaptiveSpeedAssist, $hillStartAssist, $descentAssist, $parkingAssistant, $parkingAssistantPlus, $laneChangeWarning, $laneDepartureWarning);

    // Esegui l'inserimento dei dati nel database
    if (!$stmt->execute()) {
      echo "Errore nell'esecuzione dell'inserimento: " . $stmt->error;
    }

    // Chiudi la connessione
    $conn->close();
  }

  if (isset($_POST['interior'])) {
    $interior = $_POST['interior'];
    header('Location: success.html');
  }

  if (isset($_POST['paint'])) {
    $paint = $_POST['paint'];
    header('Location: success.html');
  }

  if (isset($_POST['wheel'])) {
    $wheel = $_POST['wheel'];
    header('Location: success.html');
  }

  if (isset($_POST['motor'])) {
    $motor = $_POST['motor'];
    header('Location: success.html');
  }

}
