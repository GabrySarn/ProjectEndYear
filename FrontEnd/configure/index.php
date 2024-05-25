<?php
include '../../BackEnd/Login_Back/chk.php';
include '../../BackEnd/Configure_Back/order.php';
include '../../BackEnd/connect.php';

$sql = "SELECT * FROM veicolo WHERE ID_auto =" . $_SESSION['carId'];
$res = $conn->query($sql);

$carModel = $res->fetch_assoc();
?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="it">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords"
    content="Finding the best car insurance company for you, Insurance and investing for your many sides, Finding the best car insurance company for you, The Best Insurance Companies for 2021, The Best Car Insurance Companies for 2021, Faq, Safe. Relaxing. Good to ride in. Subtly decorated., Contact Us">
  <meta name="description" content="">
  <title>Configuration</title>
  <link rel="stylesheet" href="style/nicepage.css" media="screen">
  <link rel="stylesheet" href="style/Pagina-1.css" media="screen">
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/jquery-migrate-1.1.0.js"></script>
  <script class="u-script" type="text/javascript" src="script/nicepage.js" defer=""></script>
  <meta name="generator" content="Nicepage 6.9.18, nicepage.com">
  <meta name="referrer" content="origin">
  <link id="u-theme-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
  <link id="u-page-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i">

  <script type="application/ld+json">{
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "",
    "url": "/",
    "logo": "images/blazer-logo.png"
}</script>
  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="Pagina 1">
  <meta property="og:type" content="website">
  <link rel="canonical" href="/">
  <meta data-intl-tel-input-cdn-path="intlTelInput/">

  <style>
    .u-header .u-sheet-1 {
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .u-logo {
      margin-right: auto;
      /* Spinge il logo a sinistra */
    }

    .header-right {
      display: flex;
      align-items: center;
    }

    .login-info {
      display: flex;
      align-items: center;
      margin-right: 15px;
      /* Spazio tra il nome utente e il menu hamburger */
    }

    .login-info img {
      margin-right: 5px;
      /* Spazio tra l'immagine utente e il nome utente */
    }

    .u-menu.u-menu-hamburger {
      margin: 0;
    }

    .u-image-2 {
      width: 100%;
      height: 100%;
      position: relative;
      overflow: hidden;
    }

    .full-width-image {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
    }

    .u-container-layout-4 {
      width: 100%;
      height: 100%;
    }

    #siteDialog {
      display: none;
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: white;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      z-index: 9999;
      width: 80%;
      max-width: 800px;
      max-height: 80%;
      overflow: auto;


    }

    #closeDialog {
      position: absolute;
      top: 5px;
      right: 5px;
      cursor: pointer;
    }

    /* Stile per l'immagine del prodotto */
    .product-image {
      cursor: pointer;
    }
  </style>
</head>

<body data-home-page="https://website6258029.nicepage.io/Pagina-1.html?version=779c6a8a-bc46-c7cc-4326-e9821f041e5f"
  data-home-page-title="Pagina 1" data-path-to-root="./" data-include-products="true"
  class="u-body u-overlap u-overlap-contrast u-overlap-transparent u-xl-mode" data-lang="it">
  <header class="u-clearfix u-header u-header" id="sec-611f">
    <div class="u-clearfix u-sheet u-sheet-1">
      <a href="../Home/index.php" class="u-image u-logo u-image-1" data-image-width="500" data-image-height="500">
        <img src="images/blazer-logo.png" class="u-logo-image u-logo-image-1" title="">
      </a>
      <div class="header-right">
        <div class="login-info">
          <a href="index.php?login=1">
            <img class="u-image u-image-circle u-image-contain u-preserve-proportions u-block-control u-block-0699-17"
              src="images/user.png" alt="Immagine utente" data-image-width="500" data-image-height="500" title=""
              style="width: 43px; height: 43px;" data-block="11" data-block-type="Image">
          </a>
          <?php if ($isLoggedIn): ?>
            <span class="username"><?= htmlspecialchars($username) ?></span>
          <?php endif; ?>
        </div>
        <nav class="u-align-left u-font-size-14 u-menu u-menu-hamburger u-nav-spacing-25 u-offcanvas u-menu-1"
          data-responsive-from="XL">
          <div class="menu-collapse">
            <a class="u-button-style u-nav-link" href="#" style="padding: 4px 0px; font-size: calc(1em + 8px);">
              <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 302 302" style="">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-7b92"></use>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                id="svg-7b92" x="0px" y="0px" viewBox="0 0 302 302" style="enable-background:new 0 0 302 302;"
                xml:space="preserve" class="u-svg-content">
                <g>
                  <rect y="36" width="302" height="30"></rect>
                  <rect y="236" width="302" height="30"></rect>
                  <rect y="136" width="302" height="30"></rect>
                </g>
              </svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div
              class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav u-block-control u-block-2321-14"
              data-block="6" data-block-type="Menu,SideNavMenu">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close u-block-control u-block-2321-15" data-block="7"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-block-control u-block-2321-16"
                  style="font-size: 1.25rem" data-block="8" data-block-type="Menu,SideNavMenuItems">
                  <li class="u-nav-item"><a class="u-nav-link u-button-style" href="../Home/index.php">Home</a></li>
                  <li class="u-nav-item"><a class="u-nav-link u-button-style" href="../Info/aboutus.html">About Us</a>
                  </li>
                  <li class="u-nav-item"><a class="u-nav-link u-button-style" href="../Info/contacts.html">Contacts</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70" style="display: block;"></div>
          </div>
        </nav>
      </div>
    </div>
  </header>

  <section class="u-align-center u-clearfix u-image u-shading u-section-1" id="carousel_c016" data-image-width="1024"
    data-image-height="1024">
    <div class="u-clearfix u-sheet u-sheet-1">
      <h1 class="u-custom-font u-font-lato u-text u-text-body-alt-color u-text-1"><?= htmlspecialchars($carModel['Modello']) ?> - CONFIGURATION</h1>
    </div>
  </section>

  <!--PACK-->
  <div class="pack">
    <section class="pack u-align-center u-clearfix u-gradient u-section-2" id="sec-24ac">
      <form id="packForm" class="packForm" method="POST">
        <div class="u-clearfix u-sheet u-sheet-1">
          <h2 class="u-custom-font u-font-lato u-text u-text-body-alt-color u-text-default u-text-1">Pack</h2>
          <div class="u-expanded-width u-list u-list-1">
            <div class="u-repeater u-repeater-1">
              <!-- Primo pacchetto -->
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <h3
                  class="u-align-center u-custom-font u-font-lato u-text u-text-body-alt-color u-text-default u-text-2">
                  Basic </h3>
                <h5 class="u-align-center u-text u-text-palette-2-base u-text-3">$30.000</h5>
                <img src="images/Basic.png" class="custom-expanded u-image u-image-1" data-image-width="2836"
                  data-image-height="1875">
                <ul class="u-align-left u-text u-text-4">
                  <li>Infotainment plus package</li>
                  <li>Assistance package plus</li>
                </ul>
                <button type="submit"
                  class="add_pack u-border-2 u-border-grey-25 u-btn u-btn-rectangle u-button-style u-none u-text-body-color u-btn-1"
                  data-package="Basic">
                  add now
                </button>
              </div>
              <!-- Secondo pacchetto -->
              <div class="u-container-layout u-similar-container u-container-layout-2">
                <h3
                  class="u-align-center u-custom-font u-font-lato u-text u-text-body-alt-color u-text-default u-text-5">
                  Business</h3>
                <h5 class="u-align-center u-text u-text-palette-2-base u-text-6">$40.000</h5>
                <img src="images/Buisness.png" alt="" class="custom-expanded u-image u-image-default u-image-2"
                  data-image-width="2836" data-image-height="1875">
                <ul class="u-align-left u-text u-text-7">
                  <li>16" alloy wheels</li>
                  <li>LED front headlights</li>
                  <li>10.25" virtual cockpit</li>
                  <li>Speed limiter with provision for Adaptive Cruise Control via FoD</li>
                  <li>Lane departure warning</li>
                </ul>
                <button type="submit"
                  class="add_pack u-border-2 u-border-grey-25 u-btn u-btn-rectangle u-button-style u-none u-text-body-color u-btn-2"
                  data-package="Business">
                  add now
                </button>
              </div>
              <!-- Terzo pacchetto -->
              <div class="u-container-layout u-similar-container u-container-layout-3">
                <h3
                  class="u-align-center u-custom-font u-font-lato u-text u-text-body-alt-color u-text-default u-text-8">
                  Sport</h3>
                <h5 class="u-align-center u-text u-text-palette-2-base u-text-9">$55.000</h5>
                <img src="images/Sports.png" alt="" class="custom-expanded u-image u-image-default u-image-3"
                  data-image-width="2836" data-image-height="1875">
                <ul class="u-align-left u-text u-text-10">
                  <li>18" alloy wheels</li>
                  <li>S line aesthetics</li>
                  <li>LED headlights with LED rear lights</li>
                  <li>Sporty setup</li>
                  <li>Plus Air Conditioning Package</li>
                </ul>
                <button type="submit"
                  class="add_pack u-border-2 u-border-grey-25 u-btn u-btn-rectangle u-button-style u-none u-text-body-color u-btn-3"
                  data-package="Sport">
                  add now
                </button>
              </div>
              <input type="hidden" name="selected_package" id="selected_package">
            </div>
          </div>
        </div>
      </form>


    </section>
  
  </div>

  <script>
  document.addEventListener('DOMContentLoaded', function () {
    const packForm = document.getElementById('packForm');
    const pack = document.querySelector('.pack');
    const buttons = pack.querySelectorAll('.add_pack');

    buttons.forEach(button => {
      button.addEventListener('click', function (event) {
        event.preventDefault();

        const packageValue = this.getAttribute('data-package');
        if (!packageValue) {
          console.error('Nessun pacchetto selezionato!');
          return;
        }

        buttons.forEach(btn => {
          btn.classList.remove('selected');
          btn.textContent = 'add now';
        });

        this.classList.add('selected');
        this.textContent = 'remove';

        const selectedPackageInput = document.getElementById('selected_package');
        selectedPackageInput.value = packageValue;

        sessionStorage.setItem('selected_package', packageValue);

        // Aggiungi un controllo per verificare se un pacchetto è stato selezionato
        /*if (selectedPackageInput.value) {
          packForm.submit(); // Invia il modulo solo se un pacchetto è stato selezionato
        } else {
          console.error('Nessun pacchetto selezionato!');
        }*/
      });
    });
  });
</script>

  <section class="u-align-center u-clearfix u-gradient u-section-3" id="carousel_4269">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-expanded-width u-layout-grid u-products u-products-1" data-site-sorting-prop="created"
        data-site-sorting-order="desc" data-products-datasource="site" data-items-per-page="4" data-products-id="1">
        <div class="u-list-control"></div>
        <div class="u-repeater u-repeater-1">

          <!--Painting-->
          <div>
            <div class="u-align-center u-container-style u-products-item u-repeater-item" data-product-id="4">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
                <!-- Titolo del prodotto -->
                <h4 class="u-align-center u-custom-font u-font-lato u-product-control u-text u-text-default u-text-3">
                  <a class="u-product-title-link" href="painting.php">Painting</a>
                </h4>
                <!-- Immagine del prodotto con apertura del dialog -->
                <a class="u-product-title-link" href="javascript:void(0)" onclick="openSiteDialog('painting.php')">
                  <img alt=""
                    class="custom-expanded u-image u-image-contain u-image-default u-product-control u-image-3 product-image"
                    src="images/Designer.jpeg" title="">
                </a>
              </div>
            </div>

            <!-- Dialog per mostrare il sito -->
            <div id="siteDialog" class="u-align-center"
              style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: white; padding: 20px; border: 1px solid #ccc; border-radius: 5px; z-index: 9999; width: 80%; max-width: 800px; height: 80%; overflow: auto;">
              <div onclick="closeSiteDialog()" style="position: absolute; top: 5px; right: 5px; cursor: pointer;">X
              </div>
              <!-- Inserisci qui il codice HTML della pagina -->
              <iframe id="siteDialogContent" src="" width="100%" height="100%" frameborder="0"></iframe>
            </div>
          </div>
          <!--Motor-->
          <div>
            <div class="u-align-center u-container-style u-products-item u-repeater-item" data-product-id="4">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
                <!-- Titolo del prodotto -->
                <h4 class="u-align-center u-custom-font u-font-lato u-product-control u-text u-text-default u-text-3">
                  <a class="u-product-title-link" href="motorization.php">Motorization</a>
                </h4>
                <!-- Immagine del prodotto con apertura del dialog -->
                <a class="u-product-title-link" href="javascript:void(0)" onclick="openSiteDialog('motorization.php')">
                  <img alt=""
                    class="custom-expanded u-image u-image-contain u-image-default u-product-control u-image-3 product-image"
                    src="images/motor.jpeg" title="">
                </a>
              </div>
            </div>

            <!-- Dialog per mostrare il sito -->
            <div id="siteDialog" class="u-align-center"
              style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: white; padding: 20px; border: 1px solid #ccc; border-radius: 5px; z-index: 9999; width: 80%; max-width: 800px; height: 80%; overflow: auto;">
              <div onclick="closeSiteDialog()" style="position: absolute; top: 5px; right: 5px; cursor: pointer;">X
              </div>
              <!-- Inserisci qui il codice HTML della pagina -->
              <iframe id="siteDialogContent" src="" width="100%" height="100%" frameborder="0"></iframe>
            </div>
          </div>
          <!-- Wheels -->
          <div>
            <div class="u-align-center u-container-style u-products-item u-repeater-item" data-product-id="4">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
                <!-- Titolo del prodotto -->
                <h4 class="u-align-center u-custom-font u-font-lato u-product-control u-text u-text-default u-text-3">
                  <a class="u-product-title-link" href="javascript:void(0)"
                    onclick="openSiteDialog('wheel.php')">Wheels</a>
                </h4>
                <!-- Immagine del prodotto con apertura del dialog -->
                <a class="u-product-title-link" href="javascript:void(0)" onclick="openSiteDialog('wheel.php')">
                  <img alt=""
                    class="custom-expanded u-image u-image-contain u-image-default u-product-control u-image-3 product-image"
                    src="images/wheels.jpeg" title="">
                </a>
              </div>
            </div>
          </div>
          <!-- Interiors -->
          <div>
            <div class="u-align-center u-container-style u-products-item u-repeater-item" data-product-id="3">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4">
                <!-- Titolo del prodotto -->
                <h4 class="u-align-center u-custom-font u-font-lato u-product-control u-text u-text-default u-text-4">
                  <a class="u-product-title-link" href="javascript:void(0)"
                    onclick="openSiteDialog('interior.php')">Interiors</a>
                </h4>
                <!-- Immagine del prodotto con apertura del dialog -->
                <a class="u-product-title-link" href="javascript:void(0)" onclick="openSiteDialog('interior.php')">
                  <img alt=""
                    class="custom-expanded u-image u-image-contain u-image-default u-product-control u-image-4"
                    src="images/Interior.jpg" title="">
                </a>
              </div>
            </div>
          </div>

        </div>
      </div>
  </section>

  <section class="u-align-center u-clearfix u-gradient u-section-4" id="sec-1a2b">
    <div class="u-clearfix u-sheet u-sheet-1">
      <h1 class="u-align-center u-custom-font u-font-lato u-text u-text-default u-title u-text-1">Assistance systems<br>
      </h1>
      <p class="u-align-center u-large-text u-text u-text-variant u-text-2">Add the assistance options you prefer, for a
        safer driving
        experience</p>
      <a href="javascript:void(0)" onclick="openSiteDialog('assistanceSystem.php')"
        class="u-active-black u-align-center u-border-2 u-border-active-black u-border-grey-dark-1 u-border-hover-black u-btn u-btn-round u-button-style u-dialog-link u-hover-black u-none u-radius-50 u-btn-1">Read
        More</a>
    </div>
  </section>


  <div class="optional">
    <form id="optionsForm" class="optionsForm" method="POST">
      <section class="u-clearfix u-grey-80 u-section-5" id="sec-b6f4">
        <div class="u-clearfix u-sheet u-sheet-1">
          <h2 class="u-align-center u-custom-font u-font-lato u-text u-text-default u-text-1">Optionals</h2>
          <div class="data-layout-selected u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-1">
            <div class="u-layout">
              <div class="u-layout-col">
                <div class="u-size-30">
                  <div class="u-layout-row">
                    <div class="u-container-style u-image u-layout-cell u-left-cell u-size-30 u-image-1" src=""
                      data-image-width="400" data-image-height="225">
                      <div class="u-container-layout u-valign-middle u-container-layout-1"></div>
                    </div>
                    <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-2">
                      <div class="u-container-layout u-valign-middle u-container-layout-2">
                        <h2 class="u-text u-text-2" data-optional="charge_phone_box"> Charge phone box</h2>
                        <a href="" class="add_opt u-btn u-btn-rectangle u-button-style u-palette-1-base u-btn-1">Add now
                        </a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="u-size-30">
                  <div class="u-layout-row">
                    <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-3">
                      <div class="u-container-layout u-valign-middle u-container-layout-3">
                        <h2 class="u-text u-text-3" data-optional="premium_sound_system"> SONOS 3D Premium Sound System
                        </h2>
                        <a href="" class="add_opt u-btn u-btn-rectangle u-button-style u-palette-1-base u-btn-2">add now
                        </a>
                      </div>
                    </div>
                    <div class="u-container-style u-image u-layout-cell u-right-cell u-size-30 u-image-2" src=""
                      data-image-width="400" data-image-height="225">
                      <div class="u-container-layout u-valign-middle u-container-layout-4"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="u-clearfix u-grey-80 u-section-6" id="carousel_acd1">
        <div class="u-clearfix u-sheet u-sheet-1">
          <div class="data-layout-selected u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-1">
            <div class="u-layout">
              <div class="u-layout-col">
                <div class="u-size-30">
                  <div class="u-layout-row">
                    <div class="u-container-style u-image u-layout-cell u-left-cell u-size-30 u-image-1" src=""
                      data-image-width="1024" data-image-height="1024">
                      <img src="images/sports_steering_wheel.jpeg" alt="sports_steering_wheel" class="full-width-image">
                      <div class="u-container-layout u-valign-middle u-container-layout-1"></div>
                    </div>
                    <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-2">
                      <div class="u-container-layout u-valign-middle u-container-layout-2">
                        <h2 class="u-text u-text-1" data-optional="sports_steering_wheel">Sports steering wheel<br></h2>
                        <a href="#" class="add_opt u-btn u-btn-rectangle u-button-style u-palette-1-base u-btn-1">ADD
                          NOW </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="u-size-30">
                  <div class="u-layout-row">
                    <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-3">
                      <div class="u-container-layout u-valign-middle u-container-layout-3">
                        <h2 class="u-text u-text-3" data-optional="panoramic_roof">Panoramic Roof</h2>
                        <a href="#" class="add_opt u-btn u-btn-rectangle u-button-style u-palette-1-base u-btn-2">add
                          now</a>
                      </div>
                    </div>
                    <div class="u-container-style u-image u-layout-cell u-right-cell u-size-30 u-image-2"
                      data-image-width="400" data-image-height="225">
                      <img src="images/panoramic_roof.jpg" alt="panoramic_roof" class="full-width-image">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </section>

  </div>

  <div class="u-clearfix u-grey-80 u-footer u-align-center">
    <div class="confirm-button-container">
      <button type="submit" id="confirmButton"
        class="confirm-button submitBtn u-btn u-btn-rectangle u-button-style u-palette-1-base u-btn-2">Confirm</button>
    </div>
  </div>
  </form>

  <script>
    document.addEventListener('DOMContentLoaded', function () {

      

      const optionalSection = document.querySelector('.optional');
      const buttonsOpt = optionalSection.querySelectorAll('.add_opt');

      buttonsOpt.forEach(button => {
        button.addEventListener('click', function (event) {
          event.preventDefault();

          // Toggle della classe "selected" e cambio del testo del pulsante cliccato
          this.classList.toggle('selected');
          if (this.classList.contains('selected')) {
            this.textContent = 'REMOVE';
          } else {
            this.textContent = 'ADD NOW';
          }
        });
      });

      const selectedPackage = sessionStorage.getItem('selected_package');

      // Aggiunta dell'evento di invio del form
      const optionsForm = document.getElementById('optionsForm');
      optionsForm.addEventListener('submit', function (event) {
        event.preventDefault();

        const selectedOptions = [];
        const selectedOptionElements = optionalSection.querySelectorAll('.add_opt.selected');
        selectedOptionElements.forEach(option => {
          const dataOptional = option.parentElement.querySelector('h2').getAttribute('data-optional');
          selectedOptions.push(dataOptional);
        });

        selectedOptions.push(selectedPackage);

        // Creazione di un campo nascosto nel form per inviare i dati
        const hiddenField = document.createElement('input');
        hiddenField.setAttribute('type', 'hidden');
        hiddenField.setAttribute('name', 'options');
        hiddenField.setAttribute('value', JSON.stringify(selectedOptions));
      
        optionsForm.appendChild(hiddenField);

        // Invio del modulo
        optionsForm.submit();
        
      });
    });
  </script>




  <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-d004">
    <div class="u-clearfix u-sheet u-sheet-1">
      <p class="u-small-text u-text u-text-variant u-text-1"> This site has been created by G.Sarnelli | A.Ricci |
        M.Ndoja</p>
    </div>
  </footer>


  <style>
    .u-dialog-section-9 .u-dialog-1 {
      width: 570px;
      min-height: 578px;
      height: auto;
      box-shadow: 0px 0px 8px 0px rgba(0, 0, 0, 0.2);
      margin: 60px auto;
    }

    .u-dialog-section-9 .u-container-layout-1 {
      padding: 34px 35px;
    }

    .u-dialog-section-9 .u-text-1 {
      font-weight: 700;
      margin: 0 165px 0 0;
    }

    .u-dialog-section-9 .u-payment-services-1 {
      min-height: 250px;
      min-width: 50px;
      margin: 236px 0 0;
    }

    .u-dialog-section-9 .u-container-layout-2 {
      padding: 20px 0 0;
    }

    .u-dialog-section-9 .u-container-layout-3 {
      padding: 20px 0 0;
    }

    .u-dialog-section-9 .u-btn-1 {
      width: 100%;
      margin: 0 auto;
    }

    .u-dialog-section-9 .u-icon-1 {
      width: 20px;
      height: 20px;
      left: auto;
      top: 36px;
      position: absolute;
      right: 35px;
      padding: 0;
    }

    @media (max-width: 1199px) {
      .u-dialog-section-9 .u-text-1 {
        margin-right: 165px;
      }

      .u-dialog-section-9 .u-payment-services-1 {
        margin-right: initial;
        margin-left: initial;
      }
    }

    @media (max-width: 991px) {
      .u-dialog-section-9 .u-container-layout-1 {
        padding: 30px;
      }

      .u-dialog-section-9 .u-container-layout-2 {
        padding-bottom: 0;
        padding-left: 0;
        padding-right: 0;
      }

      .u-dialog-section-9 .u-container-layout-3 {
        padding-bottom: 0;
        padding-left: 0;
        padding-right: 0;
      }

      .u-dialog-section-9 .u-icon-1 {
        top: 32px;
        right: 30px;
      }
    }

    @media (max-width: 767px) {
      .u-dialog-section-9 .u-dialog-1 {
        width: 540px;
      }
    }

    @media (max-width: 575px) {
      .u-dialog-section-9 .u-dialog-1 {
        width: 340px;
      }

      .u-dialog-section-9 .u-container-layout-1 {
        padding-left: 20px;
        padding-right: 20px;
      }

      .u-dialog-section-9 .u-text-1 {
        margin-right: 5px;
      }

      .u-dialog-section-9 .u-icon-1 {
        right: 20px;
      }
    }

    .confirm-button-container {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-top: 20px;
      /* Regola questo valore come necessario */
    }

    .confirm-button {
      padding: 10px 20px;
      background-color: #478ac9;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
      text-align: center;
    }

    .confirm-button:hover {
      background-color: #3572a3;
    }
  </style>

  <style>
    .u-dialog-section-10 .u-dialog-1 {
      width: 566px;
      min-height: 534px;
      box-shadow: 5px 5px 20px 0 rgba(0, 0, 0, 0.4);
      margin: 204px auto 60px;
    }

    .u-dialog-section-10 .u-container-layout-1 {
      padding: 0 0 40px;
    }

    .u-dialog-section-10 .u-btn-1 {
      border-style: none;
      font-size: 1rem;
      letter-spacing: 1px;
      font-weight: 700;
      text-transform: uppercase;
      margin: 223px auto 0;
      padding: 17px 54px 18px;
    }

    .u-dialog-section-10 .u-icon-1 {
      width: 41px;
      height: 41px;
      left: auto;
      top: 10px;
      position: absolute;
      background-image: none;
      right: 13px;
      padding: 14px;
    }

    @media (max-width: 991px) {
      .u-dialog-section-10 .u-container-layout-1 {
        padding: 0 0 30px;
      }
    }

    @media (max-width: 767px) {
      .u-dialog-section-10 .u-dialog-1 {
        width: 540px;
      }
    }

    @media (max-width: 575px) {
      .u-dialog-section-10 .u-dialog-1 {
        width: 340px;
        height: auto;
      }

      .u-dialog-section-10 .u-container-layout-1 {
        padding-bottom: 25px;
      }
    }
  </style>

  <script>
    // Funzione per aprire il dialog
    function openSiteDialog(url) {
      var dialog = document.getElementById("siteDialog");
      var iframe = document.getElementById("siteDialogContent");
      iframe.src = url;
      dialog.style.display = "block";
    }

    // Funzione per chiudere il dialog
    function closeSiteDialog() {
      var dialog = document.getElementById("siteDialog");
      var iframe = document.getElementById("siteDialogContent");
      iframe.src = "";
      dialog.style.display = "none";
    }

    // Aggiorna l'altezza del dialog in base all'altezza della finestra del browser
    window.addEventListener('resize', function () {
      var dialog = document.getElementById("siteDialog");
      var windowHeight = window.innerHeight;
      var newHeight = windowHeight * 0.8; // Imposta l'altezza del dialog al 80% dell'altezza della finestra
      dialog.style.height = newHeight + 'px';
    });
  </script>
</body>

</html>