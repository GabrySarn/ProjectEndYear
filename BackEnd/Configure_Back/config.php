<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  include "../../BackEnd/connect.php";
  if (isset($_GET['package'])) {
    $_SESSION['pack'] = $_GET['package'];
  }

} else if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include "../../../BackEnd/connect.php";

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

  if (isset($_GET['interior'])) {
    $_SESSION['interior'] = $_GET['interior'];
    header('Location: success.html');
  }

  if (isset($_GET['paint'])) {
    $_SESSION['paint'] = $_GET['paint'];
    header('Location: success.html');
  }

  if (isset($_GET['wheel'])) {
    $_SESSION['wheel'] = $_GET['wheel'];
    header('Location: success.html');
  }

  if (isset($_GET['motor'])) {
    $_SESSION['motor'] = $_GET['motor'];
    header('Location: success.html');
  }

}
