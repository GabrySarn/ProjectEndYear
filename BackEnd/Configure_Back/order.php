<?php
include "../../BackEnd/connect.php";

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

  if (!isset($_SESSION['idUtente'])) {
      // Se l'utente non è loggato, reindirizzalo immediatamente alla pagina di login
      echo "<script>alert('Utente non loggato!!')<script>"
      header("Location: ../../FrontEnd/Login/Login.html");
  }


$isLoggedIn = isset($_SESSION['user']);
$username = $isLoggedIn ? $_SESSION['user'] : '';

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
    header('Location: success.html');
  }

  if (isset($_POST['wheel']) && !empty($_POST['wheel'])) {
    $wheel = $_POST['wheel'];
    header('Location: success.html');
  }

  if (isset($_POST['motor']) && !empty($_POST['motor'])) {
    $motor = $_POST['motor'];
    header('Location: success.html');
  }

  if (isset($_POST['options']) && !empty($_POST['options'])) {
    $selectedOptions = json_decode($_POST['options'], true);

    foreach ($selectedOptions as $option) {
      $selectedOptionsArray[] = $option;
    }
    //L'ULTIMO AGGIUNTO E IL PACK!!!!!
    echo "<h2>Opzioni selezionate:</h2>";
    foreach ($selectedOptionsArray as $index => $option) {
      echo "<p>Opzione $index: $option</p>";
    }

    //header('Location: ../Checkout/index.html');

  }
}
