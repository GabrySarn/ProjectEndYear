<?php
include '../../BackEnd/Login_Back/chk.php';
?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="it">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords"
    content="xc60, Safe. Relaxing. Good to ride in. Subtly decorated., How does it work, Car Servicing, Safe. Relaxing. Good to ride in. Subtly decorated.">
  <meta name="description" content="">
  <title>Home</title>
  <link rel="stylesheet" href="style/nicepage.css" media="screen">
  <link rel="stylesheet" href="style/Home.css" media="screen">
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.1.0.js"></script>  <script class="u-script" type="text/javascript" src="script/nicepage.js" defer=""></script>
  <meta name="generator" content="Nicepage 6.9.14, nicepage.com">
  <link id="u-theme-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
  <link id="u-page-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">


  <script type="application/ld+json">{
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "",
    "url": "/"
}</script>
  <meta name="theme-color" content="#1c2122">
  <meta property="og:title" content="Home">
  <meta property="og:type" content="website">
  <link rel="canonical" href="/">
  <meta data-intl-tel-input-cdn-path="intlTelInput/">
  <style>
    html {
      scrollbar-gutter: stable;
    }

    .u-sheet {
      align-items: center;
      justify-content: space-between;
      width: 100%;
    }

    .u-menu {
      display: flex;
      align-items: center;
    }

    .login-info {
      display: flex;
      align-items: center;
      margin-right: 20px;
    }

    .login-info img {
      width: 43px;
      height: 43px;
      margin-right: 5px;
    }

    .username {
      color: white;
      margin-left: 2px;
    }

    .menu-collapse {
      display: flex;
      align-items: center;
    }
  </style>
</head>

<body data-home-page-title="Home" data-path-to-root="./" data-include-products="false"
  class="u-body u-overlap u-overlap-transparent u-xl-mode" data-lang="it">


  <section class="u-clearfix u-header u-block-0699-1" custom-posts-hash="[]" data-style="header-logo-menu-oneline"
    data-post-id="599471070"
    data-section-properties="{&quot;grid-spacing&quot;:&quot;0&quot;,&quot;align&quot;:&quot;left&quot;,&quot;stretch&quot;:true}"
    id="sec-ef8c" data-source="" data-id="0699" style="background-image: none">
    <div class="u-clearfix u-sheet u-valign-middle u-block-0699-2" style="min-height: 87px">
      <nav
        class="u-align-left u-font-size-14 u-menu u-menu-hamburger u-nav-spacing-25 u-offcanvas u-block-control u-enable-responsive u-block-0699-3"
        data-responsive-from="XL" style="margin: 22px -87px 0px auto;" data-block="2" data-block-type="Menu">

        <!-- BOTTONE LOGIN -->
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

        <!-- MENU HAMBURGER -->
        <div class="menu-collapse">
          <a class="u-button-style u-custom-active-color u-custom-color u-custom-hover-color u-custom-text-color u-nav-link u-text-white"
            href="#" style="padding: 4px 0px; font-size: calc(1em + 8px);">
            <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 302 302"  
              data-block-type="">
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
            class="u-align-center u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav u-block-control u-block-0699-5"
              data-block="6">
            <div class="u-sidenav-overflow u-inner-container-layout">
              <div class="u-menu-close u-block-control u-block-0699-6"   data-block="7"></div>
              <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-block-control u-block-0699-7"
                style="font-size: 1rem" data-block="8">
                <li class="u-nav-item"><a class="u-button-style u-nav-link active" href="index.php"
                    data-page-id="243124289">Home</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link active" href="../auto_list/index.php"
                    data-page-id="243124289">Shop</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="../Info/aboutus.html"
                    data-page-id="49570372">About Us</a></li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="../Info/contacts.html"
                    data-page-id="73379526">Contacts</a></li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php?logout=1"
                    data-page-id="73379526">Logout</a></li>
              </ul>
            </div>
          </div>
          <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
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
  </section>

  <section class="u-align-center u-clearfix u-image u-section-1" id="carousel_bd75" data-image-width="2048"
    data-image-height="1152">
    <div class="u-clearfix u-sheet u-sheet-1">
      <a href="../Home/index.php" class="u-image u-logo u-block-control u-block-2321-8" data-brightness=""
        style="width: 64.8px; height: 64.8px; margin: 13px auto 0px -64.8px;" data-block="1" data-block-type="Logo"
        data-image-width="500" data-image-height="500">
        <img src="images/blazer-logo.png" class="u-logo-image u-block-2321-10" style="width: 100%; height: 100%"
          data-block-type="">
      </a>
      <h1 class="u-custom-font u-font-lato u-text u-text-body-alt-color u-title u-text-1">Blazer</h1>
      <h4 class="u-custom-font u-text u-text-body-alt-color u-text-font u-text-2"> Driving has never been so special.
      </h4>
    </div>
  </section>

  <section class="u-clearfix u-gradient u-section-2" id="carousel_af51">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
      <div class="data-layout-selected u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-container-style u-layout-cell u-left-cell u-size-40 u-layout-cell-1">
              <div class="u-container-layout u-valign-middle u-container-layout-1">
                <img class="custom-expanded u-image u-image-1" src="images/AutoBlocco2.png" data-image-width="1024"
                  data-image-height="1024" title="">
              </div>
            </div>
            <div
              class="u-align-right-lg u-align-right-md u-align-right-xl u-container-style u-layout-cell u-right-cell u-size-20 u-layout-cell-2">
              <div
                class="u-container-layout u-valign-middle-lg u-valign-middle-xl u-valign-top-md u-valign-top-sm u-valign-top-xs u-container-layout-2">
                <h2 class="u-align-center-sm u-align-center-xs u-custom-font u-font-lato u-text u-text-white u-text-1">
                  Safe. Relaxing. Good to ride in. Subtly decorated.</h2>
                <p class="u-align-center-sm u-align-center-xs u-text u-text-body-alt-color u-text-2"> Our Blazer Jetx
                  car offers exceptional performance and an aerodynamic design. With a powerful engine and cutting-edge
                  technologies, it offers an exciting and unique driving experience.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="u-align-center u-clearfix u-palette-2-base u-section-3" id="carousel_aae5">
    <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-sheet-1">
      <h2 class="u-custom-font u-font-lato u-text u-text-1">How does it work</h2>
      <p class="u-text u-text-2">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
        mollit anim id est laborum.&nbsp;<br>
      </p>
      <div class="data-layout-selected u-clearfix u-expanded-width u-gutter-30 u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-container-style u-layout-cell u-left-cell u-size-20 u-size-20-md u-layout-cell-1">
              <div class="u-container-layout u-valign-top u-container-layout-1"><span
                  class="u-icon u-icon-circle u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice"
                    viewBox="0 0 468 468"  >
                    <use xlink:href="#svg-2b8a"></use>
                  </svg><svg class="u-svg-content" viewBox="0 0 468 468" x="0px" y="0px" id="svg-2b8a"
                    style="enable-background:new 0 0 468 468;">
                    <g>
                      <g>
                        <path
                          d="M450.1,187.5l-10.2-10.8l-35.8-96.5C398,63.9,382.4,53.1,365,53H109.3c-17.4,0-33,10.9-39.1,27.2l-35.3,95.3l-14.7,13.6    C7.4,200,0,216,0,232.8v140.6c0.1,23,18.8,41.6,41.8,41.6h26.4c23,0,41.7-18.6,41.8-41.6V353h248v20.4c0.1,23,18.8,41.6,41.8,41.6    h26.4c23,0,41.7-18.6,41.8-41.6V229.1C467.9,213.4,461.5,198.4,450.1,187.5z M89,87c3.2-8.5,11.3-14,20.3-14h255.8    c9,0,17.1,5.6,20.3,14l31.2,84h-23.3c-5.5-37.5-40.4-63.4-77.9-57.8c-29.9,4.4-53.4,27.9-57.8,57.8H57.8L89,87z M372.9,171h-95.1    c5.5-26.3,31.3-43.1,57.6-37.6C354.2,137.4,368.9,152.1,372.9,171z M90,373.4c-0.1,12-9.8,21.6-21.8,21.6H41.8    c-12,0-21.7-9.6-21.8-21.6v-26.2c6,3.9,13.9,5.8,21.8,5.8H90V373.4z M448,373.4c-0.1,12-9.8,21.6-21.8,21.6h-26.4    c-12,0-21.7-9.7-21.8-21.6V353h48.2c7.9,0,15.8-1.9,21.8-5.8V373.4z M426.2,333H41.8c-11.9,0.1-21.7-9.4-21.8-21.4v-78.8    c0-11,4.9-21.5,13.3-28.6c0.1-0.1,0.3-0.3,0.4-0.4L47.3,191H426l9.6,10.3c0.1,0.2,0.4,0.3,0.5,0.5c7.5,7.1,11.8,17,11.8,27.3v82.5    h0.1C447.9,323.5,438.1,333.1,426.2,333z">
                        </path>
                      </g>
                    </g>
                    <g>
                      <g>
                        <path
                          d="M132,231H57c-5.5,0-10,4.5-10,10v52c0,5.5,4.5,10,10,10h75c5.5,0,10-4.5,10-10v-52C142,235.5,137.5,231,132,231z M122,283    H67v-32h55V283z">
                        </path>
                      </g>
                    </g>
                    <g>
                      <g>
                        <path
                          d="M411,231h-75c-5.5,0-10,4.5-10,10v52c0,5.5,4.5,10,10,10h75c5.5,0,10-4.5,10-10v-52C421,235.5,416.5,231,411,231z     M401,283h-55v-32h55V283z">
                        </path>
                      </g>
                    </g>
                    <g>
                      <g>
                        <path
                          d="M282.3,273h-96.6c-5.5,0-10,4.5-10,10s4.5,10,10,10h96.6c5.5,0,10-4.5,10-10S287.8,273,282.3,273z">
                        </path>
                      </g>
                    </g>
                    <g>
                      <g>
                        <path
                          d="M282.3,242h-96.6c-5.5,0-10,4.5-10,10s4.5,10,10,10h96.6c5.5,0,10-4.5,10-10S287.8,242,282.3,242z">
                        </path>
                      </g>
                    </g>
                  </svg></span>
                <p class="u-align-center u-text u-text-3"> Book your car online and make an appointment.</p>
              </div>
            </div>
            <div class="u-container-style u-layout-cell u-size-20 u-size-20-md u-layout-cell-2">
              <div class="u-container-layout u-valign-top u-container-layout-2"><span
                  class="u-icon u-icon-circle u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice"
                    viewBox="0 0 512 512"  >
                    <use xlink:href="#svg-64e9"></use>
                  </svg><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" id="svg-64e9"
                    style="enable-background:new 0 0 512 512;">
                    <g>
                      <g>
                        <path
                          d="M290.133,0H119.467C95.94,0,76.8,19.14,76.8,42.667v307.2c0,23.526,19.14,42.667,42.667,42.667h153.6v-17.067h-153.6    c-14.114,0-25.6-11.486-25.6-25.6v-307.2c0-14.114,11.486-25.6,25.6-25.6h170.667c14.114,0,25.6,11.486,25.6,25.6v247.467H332.8    V42.667C332.8,19.14,313.66,0,290.133,0z">
                        </path>
                      </g>
                    </g>
                    <g>
                      <g>
                        <path
                          d="M414.643,227.294l-83.712-104.619l-13.338,10.667l83.712,104.61c10.863,13.568,16.836,30.618,16.828,48v208.981H293.291    c-44.083,0-79.957-35.866-79.957-79.957V384h-17.067v30.976c0,53.495,43.529,97.024,97.024,97.024h133.376    c4.719,0,8.533-3.814,8.533-8.533V285.961C435.209,264.73,427.913,243.891,414.643,227.294z">
                        </path>
                      </g>
                    </g>
                    <g>
                      <g>
                        <path
                          d="M221.833,201.242c5.99,0.171,11.563,2.662,15.667,7.014l114.68,121.856l12.433-11.699L249.916,196.548    c-7.245-7.672-17.05-12.066-27.597-12.365c-10.658-0.358-20.582,3.524-28.16,10.684c-0.094,0.094-0.777,0.742-0.862,0.836    c-14.583,14.626-15.565,37.581-2.261,53.436l73.498,86.784v26.402c-0.009,47.155,29.645,89.933,73.805,106.47l5.99-15.983    c-37.53-14.054-62.737-50.415-62.729-90.487V332.8c0-2.014-0.717-3.977-2.022-5.521l-75.494-89.148    c-7.552-8.994-6.997-22.059,1.707-30.771C210.142,203.247,215.825,201.207,221.833,201.242z">
                        </path>
                      </g>
                    </g>
                    <g>
                      <g>
                        <rect x="264.533" y="17.067" width="17.067" height="213.333"></rect>
                      </g>
                    </g>
                    <g>
                      <g>
                        <rect x="221.867" y="281.6" width="17.067" height="102.4"></rect>
                      </g>
                    </g>
                    <g>
                      <g>
                        <rect x="221.867" y="8.533" width="17.067" height="187.733"></rect>
                      </g>
                    </g>
                    <g>
                      <g>
                        <rect x="119.467" y="42.667" width="17.067" height="110.933"></rect>
                      </g>
                    </g>
                    <g>
                      <g>
                        <rect x="162.133" y="42.667" width="17.067" height="68.267"></rect>
                      </g>
                    </g>
                    <g>
                      <g>
                        <path
                          d="M179.2,281.6H128c-4.71,0-8.533,3.814-8.533,8.533v51.2c0,4.719,3.823,8.533,8.533,8.533h51.2    c4.71,0,8.533-3.814,8.533-8.533v-51.2C187.733,285.414,183.91,281.6,179.2,281.6z M170.667,332.8h-34.133v-34.133h34.133V332.8z">
                        </path>
                      </g>
                    </g>
                  </svg></span>
                <p class="u-align-center u-text u-text-4"> Come to the dealership for documents and pay.</p>
              </div>
            </div>
            <div class="u-container-style u-layout-cell u-right-cell u-size-20 u-size-20-md u-layout-cell-3">
              <div class="u-container-layout u-valign-top u-container-layout-3"><span
                  class="u-file-icon u-icon u-icon-3"><img src="images/4552609_key_open_icon11.png" alt="" title=""
                     ></span>
                <p class="u-align-center u-text u-text-5"> And you receive the car immediately turnkey</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section
    class="u-align-center u-clearfix u-palette-1-base u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-section-4"
    id="carousel_8890">
    <div class="data-layout-selected u-clearfix u-layout-wrap u-layout-wrap-1">
      <div class="u-layout">
        <div class="u-layout-row">
          <div class="u-align-center-lg u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-1">
            <div class="u-container-layout u-valign-middle u-container-layout-1">
              <h4
                class="u-align-center-md u-align-center-sm u-align-center-xl u-align-center-xs u-custom-font u-font-lato u-text u-text-body-alt-color u-text-1">
                Who we are<br>
              </h4>
              <p
                class="u-align-center-md u-align-center-sm u-align-center-xl u-align-center-xs u-text u-text-body-alt-color u-text-2">
                We take care of every single vehicle down to the smallest detail.</p>
              <a href="../Info/aboutus.html"
                class="u-border-2 u-border-radius-0 u-border-white u-btn u-btn-rectangle u-button-style u-btn-1">read
                more</a>
            </div>
          </div>
          <div class="u-container-style u-image u-layout-cell u-left-cell u-size-30 u-image-1">
            <div class="u-container-layout u-container-layout-2"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="u-clearfix u-grey-5 u-section-5" id="carousel_64e9">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="data-layout-selected u-clearfix u-gutter-30 u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div
              class="u-align-left u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-container-style u-layout-cell u-left-cell u-size-15 u-size-30-md u-white u-layout-cell-1">
              <div class="u-container-layout u-valign-top u-container-layout-1" data-image-width="2000"
                data-image-height="1333">
                <img src="images/jetx.png" alt="" class="u-expanded-width u-image u-image-default u-image-1" title=""
                  data-image-width="1024" data-image-height="1024">
                <h3 class="u-text u-text-1"> Jet x</h3>
                <p class="u-text u-text-2"> That's why we develop and sell high-quality and exceptionally reliable
                  sports car vehicles to get your adrenaline pumping.</p>
              </div>
            </div>
            <div
              class="u-align-left u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-container-style u-layout-cell u-size-15 u-size-30-md u-white u-layout-cell-2">
              <div class="u-container-layout u-valign-top u-container-layout-2" data-image-width="2000"
                data-image-height="1333">
                <img src="images/brl1.jpeg" alt="" class="u-expanded-width u-image u-image-default u-image-2" title="">
                <h3 class="u-text u-text-3">BRL 1
                </h3>
                <p class="u-text u-text-4">
                  Our broad range of products gives you the solutions you need for whatever the future holds. Our sedans
                  are luxurious and safe</p>
              </div>
            </div>
            <div
              class="u-align-left u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-container-style u-layout-cell u-size-15 u-size-30-md u-white u-layout-cell-3">
              <div class="u-container-layout u-valign-top u-container-layout-3" data-image-width="2000"
                data-image-height="1333">
                <img src="images/Sv3.jpeg" alt="" class="u-expanded-width u-image u-image-default u-image-3" title="">
                <h3 class="u-text u-text-5">SV 3</h3>
                <p class="u-text u-text-6">
                  The new SV 3 is a symbol of power and elegance on four wheels. With flowing lines and a commanding
                  profile, it embodies a perfect blend of on-road performance and off-road versatility.</p>
              </div>
            </div>
            <div
              class="u-align-left u-container-style u-layout-cell u-palette-1-base u-right-cell u-size-15 u-size-30-md u-layout-cell-4">
              <div class="u-container-layout u-container-layout-4" data-image-width="2000" data-image-height="1333">
                <h3 class="u-text u-text-7">Vehicles</h3>
                <p class="u-text u-text-8">Interested in purchasing some Blazer vehicles? Would you like to consult a
                  supplier for more information on all services and solutions available for Blazer vehicles? Our offices
                  in Italy are at your disposal. We look forward to speaking with you.</p><span
                  class="u-icon u-icon-circle u-icon-1"><a href="../Auto_list/index.php"><svg class="u-svg-link"
                      preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" >
                      <use xlink:href="#svg-cc5a"></use>
                    </svg><svg class="u-svg-content" viewBox="0 0 512 512" id="svg-cc5a">
                      <path
                        d="m256 512c-68.378906 0-132.667969-26.628906-181.019531-74.980469-48.351563-48.351562-74.980469-112.640625-74.980469-181.019531s26.628906-132.667969 74.980469-181.019531c48.351562-48.351563 112.640625-74.980469 181.019531-74.980469s132.667969 26.628906 181.019531 74.980469c48.351563 48.351562 74.980469 112.640625 74.980469 181.019531s-26.628906 132.667969-74.980469 181.019531c-48.351562 48.351563-112.640625 74.980469-181.019531 74.980469zm0-472c-119.101562 0-216 96.898438-216 216s96.898438 216 216 216 216-96.898438 216-216-96.898438-216-216-216zm104.285156 216-138.285156-138.285156-28.285156 28.285156 110 110-110 110 28.285156 28.285156zm0 0">
                      </path>
                    </svg></a></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="u-align-center u-clearfix u-section-6" id="carousel_7402">
    <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
      <div class="u-layout">
        <div class="u-layout-row">
          <div class="u-container-style u-layout-cell u-left-cell u-palette-1-base u-size-24 u-layout-cell-1">
            <div
              class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-container-layout-1">
              <span class="u-icon u-icon-circle u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice"
                  viewBox="0 0 468 468"  >
                  <use xlink:href="#svg-08d9"></use>
                </svg><svg class="u-svg-content" viewBox="0 0 468 468" x="0px" y="0px" id="svg-08d9"
                  style="enable-background:new 0 0 468 468;">
                  <g>
                    <g>
                      <path
                        d="M450.1,187.5l-10.2-10.8l-35.8-96.5C398,63.9,382.4,53.1,365,53H109.3c-17.4,0-33,10.9-39.1,27.2l-35.3,95.3l-14.7,13.6    C7.4,200,0,216,0,232.8v140.6c0.1,23,18.8,41.6,41.8,41.6h26.4c23,0,41.7-18.6,41.8-41.6V353h248v20.4c0.1,23,18.8,41.6,41.8,41.6    h26.4c23,0,41.7-18.6,41.8-41.6V229.1C467.9,213.4,461.5,198.4,450.1,187.5z M89,87c3.2-8.5,11.3-14,20.3-14h255.8    c9,0,17.1,5.6,20.3,14l31.2,84h-23.3c-5.5-37.5-40.4-63.4-77.9-57.8c-29.9,4.4-53.4,27.9-57.8,57.8H57.8L89,87z M372.9,171h-95.1    c5.5-26.3,31.3-43.1,57.6-37.6C354.2,137.4,368.9,152.1,372.9,171z M90,373.4c-0.1,12-9.8,21.6-21.8,21.6H41.8    c-12,0-21.7-9.6-21.8-21.6v-26.2c6,3.9,13.9,5.8,21.8,5.8H90V373.4z M448,373.4c-0.1,12-9.8,21.6-21.8,21.6h-26.4    c-12,0-21.7-9.7-21.8-21.6V353h48.2c7.9,0,15.8-1.9,21.8-5.8V373.4z M426.2,333H41.8c-11.9,0.1-21.7-9.4-21.8-21.4v-78.8    c0-11,4.9-21.5,13.3-28.6c0.1-0.1,0.3-0.3,0.4-0.4L47.3,191H426l9.6,10.3c0.1,0.2,0.4,0.3,0.5,0.5c7.5,7.1,11.8,17,11.8,27.3v82.5    h0.1C447.9,323.5,438.1,333.1,426.2,333z">
                      </path>
                    </g>
                  </g>
                  <g>
                    <g>
                      <path
                        d="M132,231H57c-5.5,0-10,4.5-10,10v52c0,5.5,4.5,10,10,10h75c5.5,0,10-4.5,10-10v-52C142,235.5,137.5,231,132,231z M122,283    H67v-32h55V283z">
                      </path>
                    </g>
                  </g>
                  <g>
                    <g>
                      <path
                        d="M411,231h-75c-5.5,0-10,4.5-10,10v52c0,5.5,4.5,10,10,10h75c5.5,0,10-4.5,10-10v-52C421,235.5,416.5,231,411,231z     M401,283h-55v-32h55V283z">
                      </path>
                    </g>
                  </g>
                  <g>
                    <g>
                      <path
                        d="M282.3,273h-96.6c-5.5,0-10,4.5-10,10s4.5,10,10,10h96.6c5.5,0,10-4.5,10-10S287.8,273,282.3,273z">
                      </path>
                    </g>
                  </g>
                  <g>
                    <g>
                      <path
                        d="M282.3,242h-96.6c-5.5,0-10,4.5-10,10s4.5,10,10,10h96.6c5.5,0,10-4.5,10-10S287.8,242,282.3,242z">
                      </path>
                    </g>
                  </g>
                </svg></span>
              <h2 class="u-align-center u-custom-font u-font-lato u-text u-text-1">Car Servicing&nbsp;<br>
              </h2>
              <p class="u-align-center u-text u-text-2">If you’re concerned about a fault with your car, our mechanics
                can carry out a number of different car repairs to help keep your car on the road and running smoothly.
                We offer a free car repair check to help diagnose the problem.</p>
              <a href="#"
                class="u-border-2 u-border-radius-0 u-border-white u-btn u-btn-rectangle u-button-style u-btn-1">read
                more</a>
            </div>
          </div>
          <div class="u-container-style u-image u-layout-cell u-right-cell u-size-36 u-image-1">
            <div class="u-container-layout u-valign-bottom u-container-layout-2">

              </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section
    class="u-clearfix u-palette-1-base u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-section-7"
    id="carousel_ef51">
    <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
      <div class="u-layout">
        <div class="u-layout-row">
          <div class="u-container-style u-image u-image-contain u-layout-cell u-left-cell u-size-40 u-image-1">
            <div class="u-container-layout u-container-layout-1"></div>
          </div>
          <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-20 u-layout-cell-2">
            <div class="u-container-layout u-valign-middle u-container-layout-2">
              <h2 class="u-custom-font u-font-lato u-text u-text-white u-text-1">Safe.<br>Relaxing.<br>Good to ride
                in.<br>Subtly
                decorated.</h2>
            </div>
          </div>
        </div>
      </div>
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