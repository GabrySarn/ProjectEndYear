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

    html {
      zoom: 65%;
      /* Imposta lo zoom predefinito al 70% */
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
  </style>
</head>

<body data-path-to-root="./" data-include-products="true" class="u-body u-xl-mode" data-lang="it">

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
                  <img class="u-back-image u-expanded u-image-contain" src="images/Interior.jpg">
                </div>
              </div>
            </div>

            <ol class="u-carousel-thumbnails u-spacing-15 u-vertical-spacing u-carousel-thumbnails-1">
              <li class="u-carousel-thumbnail u-carousel-thumbnail-1 u-active" data-u-target="#carousel-ceff"
                data-u-slide-to="0">
                <img class="u-carousel-thumbnail-image u-image" src="images/Interior.jpg" title="">
              </li>
            </ol>
          </div><!--/product_gallery--><!--product_title-->
          <h2 class="u-align-left u-product-control u-text u-text-1">Interiors</h2>
          <div class="u-align-left u-product-control u-product-desc u-text u-text-2">Choose a interior.</div>
          <!--/product_title--><!--product_price-->
          <div data-add-zero-cents="true" class="u-product-control u-product-price u-product-price-1">
            <div class="interior-selector">
              <label>
                <input type="radio" name="interior" class="interior-option" data-interior="normal_interior">
                <img src="products/Interiors/normal_seats.png" alt="Wheel 1" style="width: 100px; height: 130px;">Basic
                Seats</label>

              <label>
                <input type="radio" name="interior" class="interior-option" data-interior="sport_interior">
                <img src="products/Interiors/sport_seats.png" alt="Wheel 2" style="width: 100px; height: 130px;">Sport Seats
              </label>
            </div>

          </div>

          <!------------------------------------------------------------------------------------------------------------------------->
          <!--/product_content--><!--product_button--><!--options_json--><!--{"clickType":"add-to-cart","content":""}--><!--/options_json-->
          <a href="index.php"
            class="u-border-2 u-border-black u-btn u-button-style u-hover-black u-text-black u-text-hover-white u-btn-1">ADD
            NOW</a>
        </div>
      </div>
    </div>
  </section>
  <script>
    const interiorOptions = document.querySelectorAll('.interior-option');
    const carouselImages = document.querySelectorAll('.u-gallery-item img');

    interiorOptions.forEach(option => {
      document.addEventListener('DOMContentLoaded', function () {
        const interiorOptions = document.querySelectorAll('.interior-selector');
        option.addEventListener('change', function () {
          if (option.checked) {
            selecteInterior = option.value;

            // Aggiorna l'URL dell'immagine con il cerchione selezionato
            const interior = option.getAttribute('data-interior');
            carouselImages.forEach(img => {
              img.src = `products/Interiors/${interior}.jpg`; // Assumi che le immagini siano nel formato "interior.png" nella cartella "interiors"
            });
          }
        });

        const addButton = document.querySelector('.u-btn-1');
        addButton.addEventListener('click', function (event) {
          event.preventDefault(); // Prevenire il comportamento predefinito del link

          if (selecteInterior) {
            // Reindirizza alla stessa pagina con il colore selezionato come parametro GET
            window.location.href = `?interior=${selecteInterior}`;
          } else {
            alert("Please select a interior before adding.");
          }
        });
      });
    });
  </script>

</body>

</html>