<?php
include '../../BackEnd/Login_Back/chk.php';
include '../../BackEnd/Configure_Back/order.php';
include '../../BackEnd/connect.php';

$sql = "SELECT * FROM colore";
$res = $conn->query($sql);
?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="it">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="Painting">
  <meta name="description" content="">
  <title>Product Details Template</title>
  <link rel="stylesheet" href="style/nicepage.css" media="screen">
  <link rel="stylesheet" href="style/Product-Details-Template.css" media="screen">
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script class="u-script" type="text/javascript" src="script/nicepage.js" defer=""></script>
  <link id="u-theme-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">

  <script type="application/ld+json">{
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "",
    "logo": "images/blazer-logo.png"
  }</script>
  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="Product Details Template">
  <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/">
  <style>
    .u-color-swatch {
      width: 80px;
      height: 80px;
      border: 2px solid #ccc;
      margin-right: 20px;
      cursor: pointer;
    }

    .color-selector {
      display: flex;
      gap: 10px;
      flex-wrap: wrap;
    }

    .color-option {
      width: 50px;
      height: 50px;
      cursor: pointer;
      border: 2px solid transparent;
      border-radius: 5px;
      background-color: white;
    }

    .color-option.selected {
      border-color: black;
    }

    html {
      zoom: 70%;
    }
  </style>
</head>

<body data-path-to-root="./" data-include-products="true" class="u-body u-xl-mode" data-lang="it">
  <header class="u-clearfix u-header u-header" id="sec-611f">
  </header>
  <section class="u-align-center u-clearfix u-section-1" id="sec-8617">
    <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-valign-middle-xs u-sheet-1">
      <div class="u-container-style u-expanded-width u-product u-product-1" data-product-id="3">
        <div class="u-container-layout u-valign-middle-xl u-container-layout-1">
          <div class="u-carousel u-gallery u-layout-thumbnails u-lightbox u-no-transition u-product-control u-show-text-none u-thumbnails-position-left u-gallery-1"
            data-interval="5000" data-u-ride="carousel" id="carousel-ceff">
            <div class="u-carousel-inner u-gallery-inner" role="listbox">
              <div class="u-carousel-item u-gallery-item u-active">
                <div class="u-back-slide">
                  <img class="u-back-image u-expanded u-image-contain" src="images/Designer.jpeg">
                </div>
              </div>
            </div>
            <ol class="u-carousel-thumbnails u-spacing-15 u-vertical-spacing u-carousel-thumbnails-1">
              <li class="u-carousel-thumbnail u-carousel-thumbnail-1 u-active" data-u-target="#carousel-ceff"
                data-u-slide-to="0">
                <img class="u-carousel-thumbnail-image u-image" src="images/Designer.jpeg" title="">
              </li>
            </ol>
          </div>
          <h2 class="u-align-left u-product-control u-text u-text-1">Painting</h2>
          <div class="u-align-left u-product-control u-product-desc u-text u-text-2">Choose a color.</div>
          <div data-add-zero-cents="true" class="u-product-control u-product-price u-product-price-1">
            <div class="color-selector">
              <?php
                while ($row = $res->fetch_assoc()) {
                  echo '<div class="color-option" style="color: white; background-color: ' . $row['Hex_color'] . ';" data-color="' . $row['Nome'] . '" color-id="' . $row['ID_colore'] . '">'. $row['prezzo']. '<br>Euro</div>';
                }
              ?>
            </div>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
              <input type="hidden" id="selectedColorInput" name="paint" value="">
              <button type="submit"
                class="u-border-2 u-border-black u-btn u-button-style u-hover-black u-text-black u-text-hover-white u-btn-1">ADD
                NOW</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const colorOptions = document.querySelectorAll('.color-option');
      const carouselImages = document.querySelectorAll('.u-gallery-item img');
      const selectedColorInput = document.getElementById('selectedColorInput');
      let selectedColor = null;

      colorOptions.forEach(option => {
        option.addEventListener('click', function () {
          colorOptions.forEach(opt => opt.classList.remove('selected'));
          option.classList.add('selected');
          selectedColor = option.getAttribute('data-color');
          
          selColorID = option.getAttribute('color-id');
          selectedColorInput.value = selColorID;
          
          carouselImages.forEach(img => {
            img.src = `images/colors/${selectedColor}.png`;
          });
        });
      });

      const addButton = document.querySelector('.u-btn-1');
      addButton.addEventListener('click', function (event) {
        if (!selectedColor) {
          event.preventDefault();
          alert("Please select a color before adding.");
        }
      });
    });
  </script>

</body>

</html>