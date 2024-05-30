<?php
include '../../BackEnd/Login_Back/chk.php';
include '../../BackEnd/connect.php';

$email = $_SESSION['email'];
$idUtente = $_SESSION['idUtente'];
$nome = $_SESSION['nome'];
$cognome = $_SESSION['cognome'];

$query = "SELECT * FROM paese";
$result = mysqli_query($conn, $query);

$countries = [];
if ($result) {
  while ($row = mysqli_fetch_assoc($result)) {
    $countries[] = $row['Nome'];
  } 
}

// Funzione per recuperare nome e Prezzo tramite ID dal database
function getNameAndPriceById($conn, $table, $id, $nameId, $priceField)
{
  // Prepara la dichiarazione SQL per prevenire SQL injection
  $stmt = $conn->prepare("SELECT Nome, $priceField FROM $table WHERE $nameId = ?");
  if ($stmt === false) {
    // Gestisci l'errore se la preparazione della dichiarazione fallisce
    return ['Nome' => 'Errore nella preparazione della dichiarazione', $priceField => 0];
  }

  // Collega il parametro alla dichiarazione
  $stmt->bind_param("i", $id);

  // Esegui la dichiarazione
  if (!$stmt->execute()) {
    // Gestisci l'errore se l'esecuzione della dichiarazione fallisce
    return ['Nome' => 'Errore nell esecuzione della dichiarazione', $priceField => 0];
  }

  // Ottieni il risultato
  $result = $stmt->get_result();

  // Recupera nome e Prezzo se disponibili
  if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $stmt->close();
    return ['Nome' => $row['Nome'], 'Prezzo' => $row[$priceField]];
  } else {
    // Gestisci il caso in cui non viene trovato alcun risultato
    $stmt->close();
    return ['Nome' => 'Non selezionato', 'Prezzo' => 0];
  }
}

// Recupera i nomi e i prezzi in base agli ID
$carData = isset($_SESSION['carId']) && $_SESSION['carId'] ? getNameAndPriceById($conn, 'veicolo', (int) $_SESSION['carId'], 'ID_auto', 'Prezzo') : ['Nome' => 'Non selezionato', 'Prezzo' => 0];
$packData = isset($_SESSION['pack']) && $_SESSION['pack'] ? getNameAndPriceById($conn, 'pack', (int) $_SESSION['pack'], 'ID_pack', 'Prezzo') : ['Nome' => 'Non selezionato', 'Prezzo' => 0];
$paintData = isset($_SESSION['paint']) && $_SESSION['paint'] ? getNameAndPriceById($conn, 'colore', (int) $_SESSION['paint'], 'ID_colore', 'Prezzo') : ['Nome' => 'Non selezionato', 'Prezzo' => 0];
$wheelData = isset($_SESSION['wheel']) && $_SESSION['wheel'] ? getNameAndPriceById($conn, 'cerchi', (int) $_SESSION['wheel'], 'ID_cerchi', 'Prezzo') : ['Nome' => 'Non selezionato', 'Prezzo' => 0];
$interiorData = isset($_SESSION['interior']) && $_SESSION['interior'] ? getNameAndPriceById($conn, 'interni', (int) $_SESSION['interior'], 'ID_interni', 'Prezzo') : ['Nome' => 'Non selezionato', 'Prezzo' => 0];
$motorData = isset($_SESSION['motor']) && $_SESSION['motor'] ? getNameAndPriceById($conn, 'motore', (int) $_SESSION['motor'], 'ID_motore', 'prezzo') : ['Nome' => 'Non selezionato', 'Prezzo' => 0];

// Estrai i nomi e i prezzi
$pack = $packData['Nome'];
$packPrice = $packData['Prezzo'];
$paint = $paintData['Nome'];
$paintPrice = $paintData['Prezzo'];
$wheel = $wheelData['Nome'];
$wheelPrice = $wheelData['Prezzo'];
$interior = $interiorData['Nome'];
$interiorPrice = $interiorData['Prezzo'];
$motor = $motorData['Nome'];
$motorPrice = $motorData['Prezzo'];
$car = $carData['Nome'];
$carPrice = $carData['Prezzo'];

$fixedItemCount = 6;

global $total;
$total = $packPrice + $paintPrice + $wheelPrice + $interiorPrice + $motorPrice + $carPrice;

if (isset($_SESSION['conf_id']) && $_SESSION['conf_id'] !== '') {
  $conf_id = $_SESSION['conf_id'];
} else {
  echo "Errore: ID configurazione non valido.";
  return;
}

function getOptionalByConfiguration($conn, $id_configurazione, $tipo_optional)
{
  if ($tipo_optional == "standard") {
    $optional_table = "optional";
    $optional_conf_table = "optional_conf";
    $optional_id_field = "ID_opt";
    $optional_id_conf = "ID_optional";
  } elseif ($tipo_optional == "assistenza") {
    $optional_table = "assistenza";
    $optional_conf_table = "assistenza_conf";
    $optional_id_field = "id";
    $optional_id_conf = "ID_assistenza";
  } else {
    echo "Tipo di optional non valido";
    return [[], 0];
  }

  $sql = "SELECT $optional_table.Nome, $optional_table.Prezzo
          FROM $optional_table
          INNER JOIN $optional_conf_table ON $optional_table.$optional_id_field = $optional_conf_table.$optional_id_conf
          WHERE $optional_conf_table.ID_conf = ?";

  $stmt = $conn->prepare($sql);
  if ($stmt === false) {
    echo "Errore nella preparazione dello statement: " . $conn->error;
    return [[], 0];
  }

  $stmt->bind_param("i", $id_configurazione);
  if (!$stmt->execute()) {
    echo "Errore nell'esecuzione dello statement: " . $stmt->error;
    return [[], 0];
  }

  $result = $stmt->get_result();
  $optional_list = [];
  while ($row = $result->fetch_assoc()) {
    $optional_list[] = ['Nome' => $row['Nome'], 'Prezzo' => $row['Prezzo']];
    global $total;
    $total += $row['Prezzo'];
  }

  $stmt->close();
  return [$optional_list, count($optional_list)];
}

list($optional_standard, $optionalStandardCount) = getOptionalByConfiguration($conn, $conf_id, "standard");
list($optional_assistenza, $optionalAssistanceCount) = getOptionalByConfiguration($conn, $conf_id, "assistenza");

// Total count of items in the cart
$totalItemCount = $fixedItemCount + $optionalStandardCount + $optionalAssistanceCount;

if (isset($_POST['state'])) {
    $new_state = $_POST['state'];
    $conf_id = $_SESSION['conf_id'];

    $current_date = date('Y-m-d');
    $current_time = date('H:i:s');

    // Verificare se conf_id esiste
    $check_sql = "SELECT COUNT(*) as count FROM ordine WHERE ID_conf = ?";
    $stmt = $conn->prepare($check_sql);
    $stmt->bind_param("i", $conf_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if ($row['count'] > 0) {
        // Se conf_id esiste, aggiorna lo stato dell'ordine
        $update_sql = "UPDATE ordine SET Stato_ordine = ?, Data_acquisto = ?, Ora_acquisto = ? WHERE ID_conf = ?";
        $stmt = $conn->prepare($update_sql);
        $stmt->bind_param("sssi", $new_state, $current_date, $current_time, $conf_id);
        if ($stmt->execute()) {
        } else {
            echo "Errore: " . $stmt->error;
        }
    } else {
        echo "Errore: conf_id non trovato";
    }
    $stmt->close();

    echo "<script>
    window.onload = function() {
        alert('The order was completed successfully! Redirect...');
        
        window.location.href = '../../FrontEnd/Home/index.php';
    }
    </script>";
}