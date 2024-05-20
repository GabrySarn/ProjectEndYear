<?php
include '../../BackEnd/Login_Back/chk.php';
?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="it">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords"
    content="​Best valued deals from top car rental companies in USA, ​Best car &amp;amp; van rentals from top suppliers">
  <meta name="description" content="">
  <title>Cars list</title>
  <link rel="stylesheet" href="nicepage.css" media="screen">
  <link rel="stylesheet" href="Home-1.css" media="screen">
  <script class="u-script" type="text/javascript" src="jquery-1.9.1.min.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
  <meta name="generator" content="Nicepage 6.9.16, nicepage.com">
  <link id="u-theme-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">

  <script type="application/ld+json">{
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "",
    "logo": "images/blazer-logo.png"
}</script>
  <meta name="theme-color" content="#3151aa">
  <meta property="og:title" content="Home 1">
  <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/">
  <style>
    .login-info {
      display: flex;
      align-items: center;
      /* Allinea l'immagine e il testo verticalmente */
    }

    .username {
      margin-left: 5px;
      /* Aggiunge un margine a sinistra del nome utente */
    }

    .header-content {
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .header-right {
      display: flex;
      align-items: center;
    }

  </style>
</head>

<body data-home-page-title="Home 1" data-path-to-root="./" data-include-products="false" class="u-body u-xl-mode"
  data-lang="it">

  <section class="u-clearfix u-header u-block-2321-1" custom-posts-hash="[]" data-style="header-imglogo-menu"
    data-post-id="post9"
    data-section-properties="{&quot;grid-spacing&quot;:&quot;0&quot;,&quot;align&quot;:&quot;left&quot;,&quot;stretch&quot;:true}"
    id="sec-5a30" data-source="" data-id="2321" style="background-image: none">


    <div class="u-clearfix u-sheet u-block-2321-2" style="min-height: 89px">
      <div class="header-content">
        <a href="#" class="u-image u-logo u-block-control u-block-2321-8" data-brightness=""
          style="width: 64.8px; height: 64.8px; margin: 13px auto 0px -64.8px;" data-block="1" data-block-type="Logo"
          data-image-width="500" data-image-height="500">
          <img src="images/blazer-logo.png" class="u-logo-image u-block-2321-10" style="width: 100%; height: 100%"
            data-block-type="">
        </a>

        <div class="header-right">
          <div class="login-info">
            <a href="index.php?login=1" class="u-block-control u-block-0699-17">
              <img class="u-image u-image-circle u-image-contain u-preserve-proportions" src="images/user.png" alt=""
                style="width: 43px; height: 43px;">
            </a>
            <?php if ($isLoggedIn): ?>
              <span class="username"><?= htmlspecialchars($username) ?></span>
            <?php endif; ?>
          </div>

          <nav class="u-menu u-menu-hamburger u-offcanvas u-block-control u-enable-responsive u-block-2321-11"
            data-responsive-from="XL" style="margin: -49.1501px -81px 0px auto;" data-block="2" data-block-type="Menu">

            <!--Hamb Menu-->
            <div class="menu-collapse" style="font-size: 1rem; font-weight: 700; letter-spacing: 0px;">
              <a class="u-button-style u-custom-border u-custom-border-color u-custom-borders u-custom-left-right-menu-spacing u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link"
                href="#"><svg class="u-svg-link" viewBox="0 0 24 24">
                  <use xlink:href="#menu-hamburger"></use>
                </svg><svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px"
                  xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                  <g>
                    <rect y="1" width="16" height="2"></rect>
                    <rect y="7" width="16" height="2"></rect>
                    <rect y="13" width="16" height="2"></rect>
                  </g>
                </svg></a>
            </div>
            <div class="u-custom-menu u-nav-container-collapse">
              <div
                class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav u-block-control u-block-2321-14"
                data-block="6" data-block-type="Menu,SideNavMenu">
                <div class="u-inner-container-layout u-sidenav-overflow">
                  <div class="u-menu-close u-block-control u-block-2321-15" data-block="7"></div>
                  <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-block-control u-block-0699-7"
                    style="font-size: 1rem" data-block="8">
                    <li class="u-nav-item"><a class="u-button-style u-nav-link active" href="index.php"
                        data-page-id="243124289">Home</a>
                    </li>
                    <li class="u-nav-item"><a class="u-button-style u-nav-link" href="#"
                        data-page-id="49570372">Informazioni su</a></li>
                    <li class="u-nav-item"><a class="u-button-style u-nav-link" href="#"
                        data-page-id="73379526">Contatti</a></li>
                    <li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php?logout=1"
                        data-page-id="73379526">Logout</a></li>
                  </ul>
                </div>
              </div>
              <div class="u-black u-menu-overlay u-opacity u-opacity-70" style="display: block;"></div>
            </div>
            <style class="offcanvas-style">
              .u-offcanvas .u-sidenav {
                flex-basis: 250px !important;
              }

              .u-offcanvas:not(.u-menu-open-right) .u-sidenav {
                margin-left: -250px;
              }

              .u-offcanvas.u-menu-open-right .u-sidenav {
                margin-right: -250px;
              }

              @keyframes menu-shift-left {
                from {
                  left: 0;
                }

                to {
                  left: 250px;
                }
              }

              @keyframes menu-unshift-left {
                from {
                  left: 250px;
                }

                to {
                  left: 0;
                }
              }

              @keyframes menu-shift-right {
                from {
                  right: 0;
                }

                to {
                  right: 250px;
                }
              }

              @keyframes menu-unshift-right {
                from {
                  right: 250px;
                }

                to {
                  right: 0;
                }
              }
            </style>
          </nav>
        </div>
      </div>
  </section>

  <section class="u-align-center u-clearfix u-container-align-center u-section-1" id="sec-9718">
    <div class="u-clearfix u-sheet u-sheet-1">
      <h2 class="u-align-center u-text u-text-default u-text-1" data-animation-name="customAnimationIn"
        data-animation-duration="1500"> Auto, SUV and Supercar</h2>
      <p class="u-align-center u-text u-text-2" data-animation-name="customAnimationIn" data-animation-duration="1250"
        data-animation-delay="250"> Choose the vehicle you prefer, all you have to do is configure it to your liking.
      </p>

      <?php
      require_once '../../BackEnd/connect.php';
      $sql = "SELECT * FROM veicolo";
      $res = $conn->query($sql);
      if ($res->num_rows > 0) {
        $row = $res->fetch_assoc();
        echo '<div class="u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <img alt="" class="u-image u-image-contain u-image-default u-image-1" data-image-width="986"
                  data-image-height="403" src="' . $row['ImgLink'] . '" data-animation-name="customAnimationIn"
                  data-animation-duration="1500" title="">
                <div class="custom-expanded u-container-style u-group u-shape-rectangle u-group-1"
                  data-animation-name="customAnimationIn" data-animation-duration="1250" data-animation-delay="250">
                  <div class="u-container-layout u-container-layout-2">
                    <h4 class="u-align-left u-text u-text-3">' . $row['Modello'] . '</h4>
                    <p class="u-align-left u-text u-text-4"> &nbsp;<span class="u-file-icon u-icon"><img
                          src="' . $row['ImgLink'] . '" alt="" title=""></span>&nbsp;Seats: ' . $row['Posti'] . '&nbsp;&nbsp;&nbsp;
                    </p>
                    <p class="u-align-left u-text u-text-5">' . $row['Descrizione'] . '</p>
                    <a href="../Configure/index.html?carId=1"
                      class="u-active-palette-1-dark-2 u-align-left u-border-none u-btn u-btn-round u-button-style u-hover-palette-1-dark-2 u-palette-1-base u-radius-50 u-btn-1"
                      data-animation-name="customAnimationIn" data-animation-duration="1500"
                      data-animation-delay="750">Book now</a>
                  </div>
                </div>
              </div>
            </div>';

        while ($row = $res->fetch_assoc()) {

          echo '<div class="u-list-item u-repeater-item">
                <div class="u-container-layout u-similar-container u-container-layout-3">
                  <img alt="" class="u-image u-image-contain u-image-default u-image-2" data-image-width="986"
                    data-image-height="403" src="' . $row['ImgLink'] . '" data-animation-name="customAnimationIn"
                    data-animation-duration="1500" title="">
                  <div class="custom-expanded u-container-align-left u-container-style u-group u-shape-rectangle u-group-2"
                    data-animation-name="customAnimationIn" data-animation-duration="1250" data-animation-delay="250">
                    <div class="u-container-layout u-container-layout-4">
                      <h4 class="u-align-left u-text u-text-6">' . $row['Modello'] . '</h4>
                      <p class="u-align-left u-text u-text-7"> &nbsp;<span class="u-file-icon u-icon"><img
                            src="' . $row['ImgLink'] . '" alt=""></span>&nbsp;Seats: ' . $row['Posti'] . '&nbsp;&nbsp;&nbsp;
                      </p>
                      <p class="u-align-left u-text u-text-8">' . $row['Descrizione'] . '</p>
                      <a href="../Configure/index.html?carId=2"
                        class="u-active-palette-1-dark-2 u-align-left u-border-none u-btn u-btn-round u-button-style u-hover-palette-1-dark-2 u-palette-1-base u-radius-50 u-btn-2"
                        data-animation-name="customAnimationIn" data-animation-duration="1500"
                        data-animation-delay="750">Book now</a>
                    </div>
                  </div>
                </div>
              </div>';

        }
      } else {
        echo "<h1>Nessun modello trovato<h1>";
      }
      ?>
    </div>
  </section>


  <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-77b4">

    <section class="u-backlink u-clearfix u-grey-80">
      <p class="u-text">
        <span>This site has been created by G.Sarnelli | A.Ricci | M.Ndoja </span>
      </p>
    </section>
  </footer>

</body>

</html>