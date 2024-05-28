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
} 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  function insertConfiguration($conn, $pack, $color, $motor, $wheel, $interior)
  {
    $stmt = $conn->prepare("INSERT INTO configurazione (ID_pack, ID_colore, ID_motore, ID_cerchi, ID_interni) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("iiiii", $pack, $color, $motor, $wheel, $interior);
    $stmt->execute();
    return $stmt->insert_id;
  }

  // Funzione per inserire gli optional nella configurazione
  function insertOptionalConf($conn, $config_id, $optional_id)
  {
    $stmt = $conn->prepare("INSERT INTO optional_conf (ID_conf, ID_optional) VALUES (?, ?)");
    $stmt->bind_param("ii", $config_id, $optional_id);
    $stmt->execute();
  }

  // Funzione per inserire le assistenze nella configurazione
  function insertAssistenzaConf($conn, $config_id, $assistenza_id)
  {
    $stmt = $conn->prepare("INSERT INTO assistenza_conf (ID_conf, ID_assistenza) VALUES (?, ?)");
    $stmt->bind_param("ii", $config_id, $assistenza_id);
    $stmt->execute();
  }

  // Controlla e inserisci le assistenze selezionate
  if (isset($_POST['assistance']) && !empty($_POST['assistance'])) {
    $assistenze = [
      'adaptiveSpeedAssist' => isset($_POST['adaptiveSpeedAssist']) ? 1 : 0,
      'hillStartAssist' => isset($_POST['hillStartAssist']) ? 1 : 0,
      'descentAssist' => isset($_POST['descentAssist']) ? 1 : 0,
      'parkingAssistant' => isset($_POST['parkingAssistant']) ? 1 : 0,
      'parkingAssistantPlus' => isset($_POST['parkingAssistantPlus']) ? 1 : 0,
      'laneChangeWarning' => isset($_POST['laneChangeWarning']) ? 1 : 0,
      'laneDepartureWarning' => isset($_POST['laneDepartureWarning']) ? 1 : 0,
    ];

    foreach ($assistenze as $nome => $selected) {
      if ($selected) {
        $stmt = $conn->prepare("SELECT id FROM assistenza WHERE nome = ?");
        $stmt->bind_param("s", $nome);
        $stmt->execute();
        $stmt->bind_result($assistenza_id);
        $stmt->fetch();
        $stmt->close();

        if ($assistenza_id) {
          $assistenze_selezionate[] = $assistenza_id;
        }
      }
    }
  }
  if (isset($_POST['interior']) && !empty($_POST['interior'])) {
    $interior = isset($_POST['interior']) ? intval($_POST['interior']) : null;

    header('Location: success.html');
  }

  if (isset($_POST['paint']) && !empty($_POST['paint'])) {
    $paint = isset($_POST['paint']) ? intval($_POST['paint']) : null;

    header('Location: success.html');
  }

  if (isset($_POST['wheel']) && !empty($_POST['wheel'])) {
    $wheel = isset($_POST['wheel']) ? intval($_POST['wheel']) : null;

    header('Location: success.html');
  }

  if (isset($_POST['motor']) && !empty($_POST['motor'])) {
    $motor = isset($_POST['motor']) ? intval($_POST['motor']) : null;

    header('Location: success.html');
  }



  // Inserisci gli optional nella tabella optional_conf
  if (isset($_POST['options']) && !empty($_POST['options']) && isset($_POST['pack']) && !empty($_POST['pack'])) {
    $pack = isset($_POST['pack']) ? intval($_POST['pack']) : null;


    if ($color && $motor && $wheel && $interior && $pack) {
      $config_id = insertConfiguration($conn, $pack, $color, $motor, $wheel, $interior);

      $selectedOptions = json_decode($_POST['options'], true);
      foreach ($selectedOptions as $option_id) {
        insertOptionalConf($conn, $config_id, $option_id);
      }

      if (isset($assistenze_selezionate)) {
        foreach ($assistenze_selezionate as $assistenza_id) {
          insertAssistenzaConf($conn, $config_id, $assistenza_id);
        }
      }
      $idOrder = $_SESSION["id_order"];
      $sqlUpdate = "UPDATE ordine SET ID_conf = '$config_id' WHERE ID = '$id_order'";

      if ($conn->query($sqlUpdate) === TRUE) {
        echo "Ordine aggiornato con successo";
      } else {
        echo "Errore durante l'aggiornamento dell'ordine: " . $conn->error;
      }

    }
    $conn->close();
  }

}
?>