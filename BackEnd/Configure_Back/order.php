<?php
include "../../BackEnd/connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (isset($_POST['package']) && !empty($_POST['package'])) {
    $pack = $_POST['package'];
  }

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

}
