<?php
// Include i file necessari
include '../../BackEnd/Configure_Back/order.php';

// Inizializza la variabile per la motorizzazione selezionata
$selectedMotor = "";

// Controlla se il modulo è stato inviato
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Controlla se il campo motor è stato impostato e non è vuoto
    if (isset($_POST['motor']) && !empty($_POST['motor'])) {
        // Salva la motorizzazione selezionata
        $selectedMotor = $_POST['motor'];
        // Puoi qui fare ulteriori operazioni, ad esempio salvare i dati nel database
    }
}
?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="it">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Painting">
    <meta name="description" content="">
    <title>Motorization</title>
    <link rel="stylesheet" href="style/nicepage.css" media="screen">
    <link rel="stylesheet" href="style/Product-Details-Template.css" media="screen">
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script class="u-script" type="text/javascript" src="script/nicepage.js" defer=""></script>
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
    <meta property="og:title" content="Motorization">
    <meta property="og:type" content="website">
    <meta data-intl-tel-input-cdn-path="intlTelInput/">
    <style>
        .u-motor-swatch {
            width: 80px;
            height: 80px;
            border: 2px solid #ccc;
            margin-right: 20px;
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
        }

        .motor-option.selected {
            border-color: black;
        }

        html {
            zoom: 70%;
        }
    </style>
</head>

<body data-path-to-root="./" data-include-products="true" class="u-body u-xl-mode" data-lang="it">

    <section class="u-align-center u-clearfix u-section-1" id="sec-8617">
        <div
            class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-valign-middle-xs u-sheet-1">
            <div class="u-container-style u-expanded-width u-product u-product-1" data-product-id="3">
                <div class="u-container-layout u-valign-middle-xl u-container-layout-1">
                    <div class="u-carousel u-gallery u-layout-thumbnails u-lightbox u-no-transition u-product-control u-show-text-none u-thumbnails-position-left u-gallery-1"
                        data-interval="5000" data-u-ride="carousel" id="carousel-ceff">
                        <div class="u-carousel-inner u-gallery-inner" role="listbox">
                            <div class="u-carousel-item u-gallery-item u-active">
                                <div class="u-back-slide">
                                    <img class="u-back-image u-expanded u-image-contain" src="images/Motor.jpeg">
                                </div>
                            </div>
                        </div>

                        <ol class="u-carousel-thumbnails u-spacing-15 u-vertical-spacing u-carousel-thumbnails-1">
                            <li class="u-carousel-thumbnail u-carousel-thumbnail-1 u-active"
                                data-u-target="#carousel-ceff" data-u-slide-to="0">
                                <img class="u-carousel-thumbnail-image u-image" src="images/Motor.jpeg" title="">
                            </li>
                        </ol>
                    </div>

                    <h2 class="u-align-left u-product-control u-text u-text-1">Motorization</h2>
                    <div class="u-align-left u-product-control u-product-desc u-text u-text-2">Choose a motor.</div>
                    <div data-add-zero-cents="true" class="u-product-control u-product-price u-product-price-1">
                        <div class="motor-selector">
                            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                <label style="background-color: #e6e6e600;">
                                    <input type="radio" name="motor" class="motor-option" value="Diesel">
                                    Diesel
                                </label>
                                <label style="background-color: #e6e6e600;">
                                    <input type="radio" name="motor" class="motor-option" value="Petrol">
                                    Petrol
                                </label>
                                <label style="background-color: #e6e6e600;">
                                    <input type="radio" name="motor" class="motor-option" value="Mild-Hybrid">
                                    Mild-Hybrid
                                </label>
                                <label style="background-color: #e6e6e600;">
                                    <input type="radio" name="motor" class="motor-option" value="Full-Hybrid">
                                    Full-Hybrid
                                </label>
                                <label style="background-color: #e6e6e600;">
                                    <input type="radio" name="motor" class="motor-option" value="Electric">
                                    Electric
                                </label>
                                <button type="submit"
                                    class="u-border-2 u-border-black u-btn u-button-style u-hover-black u-text-black u-text-hover-white u-btn-1">ADD
                                    NOW</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const interiorOptions = document.querySelectorAll('.motor-option');
            interiorOptions.forEach(option => {
                option.addEventListener('change', function () {
                    if (option.checked) {
                        selectedInterior = option.value;
                    }
                });
            });
        });
    </script>

</body>

</html>