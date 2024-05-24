<?php
include '../../BackEnd/Login_Back/chk.php';
include '../../BackEnd/Configure_Back/config.php';
?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="it">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="Painting">
  <meta name="description" content="">
  <title>Product Details Template</title>
  <link rel="stylesheet" href="nicepage.css" media="screen">
  <link rel="stylesheet" href="Product-Details-Template.css" media="screen">
  <script class="u-script" type="text/javascript" src="jquery-1.9.1.min.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
  <meta name="generator" content="Nicepage 6.9.18, nicepage.com">
  <link id="u-theme-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">




  <script type="application/ld+json">{
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "",
    "logo": "images/blazer-logo.png"
}</script>
  <meta name="theme-motor" content="#478ac9">
  <meta property="og:title" content="Product Details Template">
  <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/">
  <style>
    .u-motor-swatch {
      width: 80px;
      /* Aumenta la larghezza */
      height: 80px;
      /* Aumenta l'altezza */
      border: 2px solid #ccc;
      margin-right: 20px;
      /* Aumenta lo spazio tra i quadrati */
      cursor: pointer;
    }

    .motor-selector {
      display: flex;
      gap: 10px;
    }

    .motor-option {
      width: 30px;
      height: 30px;
      cursor: pointer;
      border: 2px solid transparent;
      border-radius: 5px;
      background-color: white;
      /* Aggiunto uno sfondo bianco */
    }

    .motor-option.selected {
      border-color: black;
    }

    html {
      zoom: 65%;
      /* Imposta lo zoom predefinito al 70% */
    }
  </style>
</head>

<body data-path-to-root="./" data-include-products="true" class="u-body u-xl-mode" data-lang="it">
  <header class="u-clearfix u-header u-header" id="sec-611f">

  </header>
  <section class="u-align-center u-clearfix u-section-1" id="sec-8617">
    <div
      class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-valign-middle-xs u-sheet-1">
      <!--product--><!--product_options_json--><!--{"source":"3"}--><!--/product_options_json--><!--product_item-->
      <div class="u-container-style u-expanded-width u-product u-product-1" data-product-id="3">
        <div class="u-container-layout u-valign-middle-xl u-container-layout-1">
          <!--product_gallery--><!--options_json--><!--{"maxItems":""}--><!--/options_json-->
          <div
            class="u-carousel u-gallery u-layout-thumbnails u-lightbox u-no-transition u-product-control u-show-text-none u-thumbnails-position-left u-gallery-1"
            data-interval="5000" data-u-ride="carousel" id="carousel-ceff">
            <div class="u-carousel-inner u-gallery-inner" role="listbox">
              <div class="u-carousel-item u-gallery-item u-active">
                <div class="u-back-slide">
                  <img class="u-back-image u-expanded u-image-contain" src="images/Motor.jpeg">
                </div>
              </div>
            </div>

            <ol class="u-carousel-thumbnails u-spacing-15 u-vertical-spacing u-carousel-thumbnails-1">
              <li class="u-carousel-thumbnail u-carousel-thumbnail-1 u-active" data-u-target="#carousel-ceff"
                data-u-slide-to="0">
                <img class="u-carousel-thumbnail-image u-image" src="images/Motor.jpeg" title="">
              </li>
            </ol>
          </div><!--/product_gallery--><!--product_title-->
          <h2 class="u-align-left u-product-control u-text u-text-1">Motorization</h2>
          <div class="u-align-left u-product-control u-product-desc u-text u-text-2">Choose a motor.</div>
          <!--/product_title--><!--product_price-->
          <div data-add-zero-cents="true" class="u-product-control u-product-price u-product-price-1">
            <div class="motor-selector">
              <label style="background-color: #e6e6e600;">
                <input type="radio" name="motor" class="motor-option" value="Diesel">
                <br>Diesel
              </label>
              <label style="background-color: #e6e6e600;">
                <input type="radio" name="motor" class="motor-option" value="Petrol">
                <br>Petrol
              </label>
              <label style="background-color: #e6e6e600;">
                <input type="radio" name="motor" class="motor-option" value="Mild-Hybrid">
                <br>Mild-Hybrid
              </label>
              <label style="background-color: #e6e6e600;">
                <input type="radio" name="motor" class="motor-option" value="Full-Hybrid">
                <br>Full-Hybrid
              </label>
              <label style="background-color: #e6e6e600;">
                <input type="radio" name="motor" class="motor-option" value="Electric">
                <br>Electric
              </label>
            </div>
          </div>

          <!------------------------------------------------------------------------------------------------------------------------->
          <a href="#"
            class="u-border-2 u-border-black u-btn u-button-style u-hover-black u-text-black u-text-hover-white u-btn-1">ADD
            NOW</a>
        </div>

      </div>
    </div>
  </section>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const motorOptions = document.querySelectorAll('.motor-option');
      const addButton = document.querySelector('.u-btn');

      addButton.addEventListener('click', function (event) {
        event.preventDefault(); // Prevenire il comportamento predefinito del form

        let selectedMotor = null;
        motorOptions.forEach(option => {
          if (option.checked) {
            selectedMotor = option.value;
          }
        });

        if (selectedMotor) {
          // Reindirizza alla stessa pagina con la motorizzazione selezionata come parametro GET
          window.location.href = `?motor=${selectedMotor}`;
        } else {
          alert("Please select a motorization before adding.");
        }
      });
    });
  </script>

</body>

</html>