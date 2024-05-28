<?php 

include '../../BackEnd/Login_Back/chk.php';
include '../../BackEnd/connect.php';

$email = $_SESSION['email'];
$idUtente = $_SESSION['idUtente'];
$nome = $_SESSION['nome']; 
$cognome = $_SESSION['cognome'];

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

  <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }

      body {
        background-color: #000000;
        color: #ffffff;
      }
      
      .text-body-secondary {
        color: #a0a0a0 !important;
      }

      .bg-body-tertiary {
        background-color: #1a1a1a !important;
      }

      .form-control, .form-select {
        background-color: #333333;
        color: #ffffff;
        border: 1px solid #444444;
      }

      .form-control::placeholder {
        color: #cccccc;
      }

      .form-control:focus, .form-select:focus {
        border-color: #555555;
        box-shadow: none;
      }

      .form-check-label {
        color: #ffffff;
      }
  </style>

  <!-- Custom styles for this template -->
  <link href="checkout.css" rel="stylesheet">
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
            <span class="badge bg-primary rounded-pill">3</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-sm bg-body-tertiary">
              <div>
                <h6 class="my-0">Pack</h6>
                <small class="text-body-secondary">Nome del pack</small>
              </div>
              <span class="text-body-secondary">$Costo del pack</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-sm bg-body-tertiary">
              <div>
                <h6 class="my-0">Painting</h6>
                <small class="text-body-secondary">Nome del painting</small>
              </div>
              <span class="text-body-secondary">$499.99</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-sm bg-body-tertiary">
              <div>
                <h6 class="my-0">Motorization</h6>
                <small class="text-body-secondary">Nome del motorization</small>
              </div>
              <span class="text-body-secondary">$Prezzo del motorization</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-sm bg-body-tertiary">
              <div>
                <h6 class="my-0">Wheels</h6>
                <small class="text-body-secondary">Nome del wheels</small>
              </div>
              <span class="text-body-secondary">$Costo del wheels</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-sm bg-body-tertiary">
              <div>
                <h6 class="my-0">Interiors</h6>
                <small class="text-body-secondary">Nome del interior</small>
              </div>
              <span class="text-body-secondary">$Costo del interior</span>
            </li>
            <li class="list-group-item d-flex justify-content-between bg-body-tertiary">
              <span>Total (USD)</span>
              <strong>$Totale</strong>
            </li>
          </ul>

          <form class="card p-2 bg-body-tertiary">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Promo code">
              <button type="submit" class="btn btn-secondary">Redeem</button>
            </div>
          </form>
        </div>
        <div class="col-md-7 col-lg-8">
          <h4 class="mb-3">Billing address</h4>
          <form class="needs-validation" novalidate>
            <div class="row g-3">
              <div class="col-sm-6">
                <label for="Nome" class="form-label">First name</label>
                <input type="text" class="form-control" id="Nome" placeholder="" value="<?php echo htmlspecialchars($nome); ?>" required>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>

              <div class="col-sm-6">
                <label for="Cognome" class="form-label">Last name</label>
                <input type="text" class="form-control" id="Cognome" placeholder="" value="<?php echo htmlspecialchars($cognome); ?>" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>

              <div class="col-12">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" placeholder="" value="<?php echo htmlspecialchars($email); ?>" required>
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
                  <label for="address2" class="form-label">Address 2 <span class="text-body-secondary">(Optional)</span></label>
                  <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                </div>

                <div class="col-md-5">
                  <label for="country" class="form-label">Country</label>
                  <select class="form-select" id="country" required>
                    <option>United States</option>
                    <option>Great Britain</option>
                    <option>France</option>
                    <option>Germany</option>
                    <option>Italy</option>
                    <option>Spain</option>
                    <option>China</option>
                    <option>Japan</option>
                    <option>Russia</option>
                  </select>
                  <div class="invalid-feedback">
                    Please select a valid country.
                  </div>
                </div>

              <hr class="my-4">

              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="same-address">
                <label class="form-check-label" for="same-address">Shipping address is the same as my billing address</label>
              </div>

              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="save-info">
                <label class="form-check-label" for="save-info">Save this information for next time</label>
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
    <script src="checkout.js"></script>
  </body>
</html>
