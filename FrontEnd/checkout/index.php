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
    error_log("Errore nella preparazione della dichiarazione: " . htmlspecialchars($conn->error));
    return ['Nome' => 'Errore nella preparazione della dichiarazione', $priceField => 0];
  }

  // Collega il parametro alla dichiarazione
  $stmt->bind_param("i", $id);

  // Esegui la dichiarazione
  if (!$stmt->execute()) {
    // Gestisci l'errore se l'esecuzione della dichiarazione fallisce
    error_log("Errore nell'esecuzione della dichiarazione: " . htmlspecialchars($stmt->error));
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
$motorData = isset($_SESSION['motor']) && $_SESSION['motor'] ? getNameAndPriceById($conn, 'motore', (int) $_SESSION['motor'], 'ID_motore', 'Potenza') : ['Nome' => 'Non selezionato', 'Prezzo' => 0];

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
$total = $packPrice + $paintPrice + $wheelPrice + $interiorPrice + $motorPrice + $carPrice;
/*$options = [];
foreach ($options_ids as $option_id) {
    $options[] = getNameById($conn, 'options', $option_id,  '');
}*/
?>

<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <script src="assets/js/color-modes.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.122.0">
  <title>Blazer - Checkout</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/checkout/">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
  <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="style/checkout.css" rel="stylesheet">
</head>

<body class="bg-body-tertiary">
  <div class="container">
    <main>
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="../Configure/images/blazer-logo.png" alt="" width="72" height="57">
        <h2>Checkout form</h2>
      </div>

      <div class="row g-5">
        <div class="col-md-5 col-lg-4 order-md-last">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-primary">Your cart</span>
            <span class="badge bg-primary rounded-pill">6</span>
          </h4>
          <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-sm bg-body-tertiary">
              <div>
                <h6 class="my-0">Pack</h6>
                <small class="text-body-secondary"><?php echo htmlspecialchars($car); ?></small>
              </div>
              <span class="text-body-secondary"><?php echo htmlspecialchars($carPrice); ?></span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-sm bg-body-tertiary">
              <div>
                <h6 class="my-0">Pack</h6>
                <small class="text-body-secondary"><?php echo htmlspecialchars($pack); ?></small>
              </div>
              <span class="text-body-secondary"><?php echo htmlspecialchars($packPrice); ?></span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-sm bg-body-tertiary">
              <div>
                <h6 class="my-0">Painting</h6>
                <small class="text-body-secondary"><?php echo htmlspecialchars($paint); ?></small>
              </div>
              <span class="text-body-secondary"><?php echo htmlspecialchars($paintPrice); ?></span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-sm bg-body-tertiary">
              <div>
                <h6 class="my-0">Motorization</h6>
                <small class="text-body-secondary"><?php echo htmlspecialchars($motor); ?></small>
              </div>
              <span class="text-body-secondary"><?php echo htmlspecialchars($motorPrice); ?></span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-sm bg-body-tertiary">
              <div>
                <h6 class="my-0">Wheels</h6>
                <small class="text-body-secondary"><?php echo htmlspecialchars($wheel); ?></small>
              </div>
              <span class="text-body-secondary"><?php echo htmlspecialchars($wheelPrice); ?></span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-sm bg-body-tertiary">
              <div>
                <h6 class="my-0">Interiors</h6>
                <small class="text-body-secondary"><?php echo htmlspecialchars($interior); ?></small>
              </div>
              <span class="text-body-secondary"><?php echo htmlspecialchars($interiorPrice); ?></span>
            </li>
            <!--<?php foreach ($options as $option): ?>
            <li class="list-group-item d-flex justify-content-between lh-sm bg-body-tertiary">
              <div>
                <h6 class="my-0">Option</h6>
                <small class="text-body-secondary"><?php echo htmlspecialchars($option); ?></small>
              </div>
              <span class="text-body-secondary">$Option Price</span>
            </li>
            <?php endforeach; ?>-->
            <li class="list-group-item d-flex justify-content-between bg-body-tertiary">
              <span class="text-body-secondary">Total (USD)</span>
              <strong><?php echo htmlspecialchars($total); ?></strong>
            </li>
          </ul>
        </div>
        <div class="col-md-7 col-lg-8">
          <h4 class="mb-3">Billing address</h4>
          <form class="needs-validation" novalidate>
            <div class="row g-3">
              <div class="col-sm-6">
                <label for="Nome" class="form-label">First name</label>
                <input type="text" class="form-control" id="Nome" placeholder=""
                  value="<?php echo htmlspecialchars($nome); ?>" required>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>

              <div class="col-sm-6">
                <label for="Cognome" class="form-label">Last name</label>
                <input type="text" class="form-control" id="Cognome" placeholder=""
                  value="<?php echo htmlspecialchars($cognome); ?>" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>

              <div class="col-12">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder=""
                  value="<?php echo htmlspecialchars($email); ?>" required>
                <div class="invalid-feedback">
                  Please enter a valid email address for shipping updates.
                </div>
              </div>

              <div class="col-12">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                <div class="invalid-feedback">
                  Please enter your shipping address.
                </div>
              </div>

              <div class="col-12">
                <label for="address2" class="form-label">Address 2 <span
                    class="text-body-secondary">(Optional)</span></label>
                <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
              </div>

              <div class="col-md-5">
                <label for="country" class="form-label">Country</label>
                <select class="form-select" id="country" required>
                  <?php foreach ($countries as $country) { ?>
                    <option><?php echo htmlspecialchars($country); ?></option>
                  <?php } ?>
                </select>
                <div class="invalid-feedback">
                  Please select a valid country.
                </div>
              </div>
            </div>

            <hr class="my-4">

            <h4 class="mb-3">Payment</h4>

            <div class="my-3">
              <div class="form-check">
                <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                <label class="form-check-label" for="credit">Credit card</label>
              </div>
              <div class="form-check">
                <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                <label class="form-check-label" for="debit">Debit card</label>
              </div>
              <div class="form-check">
                <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
                <label class="form-check-label" for="paypal">PayPal</label>
              </div>
            </div>

            <div class="row gy-3">
              <div class="col-md-6">
                <label for="cc-name" class="form-label">Name on card</label>
                <input type="text" class="form-control" id="cc-name" placeholder="" required>
                <small class="text-body-secondary">Full name as displayed on card</small>
                <div class="invalid-feedback">
                  Name on card is required
                </div>
              </div>

              <div class="col-md-6">
                <label for="cc-number" class="form-label">Credit card number</label>
                <input type="text" class="form-control" id="cc-number" placeholder="" required>
                <div class="invalid-feedback">
                  Credit card number is required
                </div>
              </div>

              <div class="col-md-3">
                <label for="cc-expiration" class="form-label">Expiration</label>
                <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                <div class="invalid-feedback">
                  Expiration date required
                </div>
              </div>

              <div class="col-md-3">
                <label for="cc-cvv" class="form-label">CVV</label>
                <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                <div class="invalid-feedback">
                  Security code required
                </div>
              </div>
            </div>

            <hr class="my-4">

            <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
          </form>
        </div>
      </div>
    </main>

    <footer class="my-5 pt-5 text-body-secondary text-center text-small">
      <p class="mb-1">&copy; 2005–2024 Blazer</p>
    </footer>
  </div>
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  <script src="script/checkout.js"></script>
</body>

</html>