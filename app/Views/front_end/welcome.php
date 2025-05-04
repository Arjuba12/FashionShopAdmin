<!DOCTYPE html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8" />
  <title>OAK - HTML Theme</title>
  <meta name="description" content="" />
  <meta name="msapplication-tap-highlight" content="yes" />
  <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0" />

  <!-- Google Web Font -->
  <link href="http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700" rel="stylesheet" type="text/css" />
  <link href="http://fonts.googleapis.com/css?family=Lekton:400,700,400italic" rel="stylesheet" type="text/css" />

  <!--  Bootstrap 3-->
  <link rel="stylesheet" href="css/bootstrap.min.css" />

  <!-- OWL Carousel -->
  <link rel="stylesheet" href="css/owl.carousel.css" />
  <link rel="stylesheet" href="css/owl.theme.css" />

  <!--  Slider -->
  <link rel="stylesheet" href="css/jquery.kenburnsy.css" />

  <!-- Animate -->
  <link rel="stylesheet" href="css/animate.css" />

  <!-- Web Icons Font -->
  <link rel="stylesheet" href="css/pe-icon-7-stroke.css" />
  <link rel="stylesheet" href="css/iconmoon.css" />
  <link rel="stylesheet" href="css/et-line.css" />
  <link rel="stylesheet" href="css/ionicons.css" />

  <!-- Magnific PopUp -->
  <link rel="stylesheet" href="css/magnific-popup.css" />

  <!-- Tabs -->
  <link rel="stylesheet" type="text/css" href="css/tabs.css" />
  <link rel="stylesheet" type="text/css" href="css/tabstyles.css" />

  <!-- Loader Style -->
  <link rel="stylesheet" href="css/loader-1.css" />

  <!-- Costum Styles -->
  <link rel="stylesheet" href="css/main.css" />
  <link rel="stylesheet" href="css/responsive.css" />

  <!-- Favicon -->
  <link rel="icon" type="image/ico" href="favicon.ico" />

  <!-- Modernizer & Respond js -->
  <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

  <!-- Full Height -->
  <style>
    html,
    body {
      height: 100%;
      width: auto;
      overflow: hidden;
    }
  </style>

  <style>
    .main-nav ul li a:hover {
      background-color: aqua;
      transition: background-color 0.3s ease;
    }
  </style>
</head>

<body>
  <!-- Preloader -->
  <div class="cover"></div>

  <div class="header" style="
  height: 68px;
  position: fixed;
  top: 0;
  width: 100%;
  background-color: rgba(255, 255, 255, 0.2);
  z-index: 999;
  backdrop-filter: blur(10px);
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
">
    <div class="header-inner" style="
    height: 68px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 48px;
  ">
      <div class="logo">
        <a href="<?= base_url("welcome") ?>">
          <img src="/img/logo.png" alt="Logo" width="100" height="auto" />
        </a>
      </div>

      <nav class="main-nav">
        <ul style="
                list-style: none;
                margin: 0;
                padding: 0;
                display: flex;
                gap: 20px;
              ">
          <li>
            <a href="<?= base_url("home") ?>" style="
                    color: #000;
                    font-weight: 500;
                    text-decoration: none;
                    padding: 10px 20px;
                    border-radius: 5px;

                    background-color: aquamarine;
                  ">Home</a>
          </li>
          <li>
            <a href="<?= base_url("about") ?>" style="
                    color: #000;
                    font-weight: 500;
                    text-decoration: none;
                    padding: 10px 20px;
                    border-radius: 5px;

                    background-color: aquamarine;
                  ">About Us</a>
          </li>
          <li>
            <a href="<?= base_url("whitepaper") ?>" style="
                    color: #000;
                    font-weight: 500;
                    text-decoration: none;
                    padding: 10px 20px;
                    border-radius: 5px;

                    background-color: aquamarine;
                  ">Whitepaper</a>
          </li>
          <li>
            <a href="#" style="
                    color: #000;
                    font-weight: 500;
                    text-decoration: none;
                    padding: 10px 20px;
                    border-radius: 5px;

                    background-color: aquamarine;
                  ">Download</a>
          </li>
          <li>
            <a href="<?= base_url('login_page'); ?>" style="
                    color: #000;
                    font-weight: 500;
                    text-decoration: none;
                    padding: 10px 20px;
                    border-radius: 5px;

                    background-color: aquamarine;
                  ">Login</a>
          </li>
        </ul>
      </nav>
    </div>
  </div>


  <div class="slider-container">
    <div class="slider-control left inactive"></div>
    <div class="slider-control right"></div>
    <ul class="slider-pagi"></ul>
    <div class="slider">
      <div class="slide slide-0 active">
        <div class="slide__bg" style="background-image: url('img/full-slider/image_1.jpg')"></div>
        <div class="slide__content">
          <svg class="slide__overlay" viewBox="0 0 0.85 1" preserveAspectRatio="xMaxYMax slice">
            <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
          </svg>
          <div class="slide__text">
            <h2 class="slide__text-heading">
              THINK<span class="border-text">CREATIVE</span>
            </h2>
            <p>
              THE DESIGN IS NOT THE ONLY ONE
              <br />
              WHO CAN SEE, BUT IS ALSO A FUNCTION.
            </p>
          </div>
        </div>
      </div>

      <div class="slide slide-1">
        <div class="slide__bg" style="background-image: url('img/full-slider/image_2.jpg')"></div>
        <div class="slide__content">
          <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
            <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
          </svg>
          <div class="slide__text">
            <h2 class="slide__text-heading">
              <span class="border-text">MODERN</span>SLIDER
            </h2>
            <p>VOLUPTATUM MOLESTIAS RECUSANDAE QUAS REPREHENDERIT.</p>
          </div>
        </div>
      </div>

      <div class="slide slide-2">
        <div class="slide__bg" style="background-image: url('img/full-slider/image_3.jpg')"></div>
        <div class="slide__content">
          <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
            <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
          </svg>
          <div class="slide__text">
            <h2 class="slide__text-heading">
              We accomplish individual projects
            </h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="js/vendor/jquery-1.11.2.min.js"></script>
  <script data-pace-options='{ "ajax": false }' src="js/vendor/pace.min.js"></script>
  <script src="js/vendor/bootstrap.min.js"></script>
  <script src="js/vendor/classie.js"></script>
  <script src="js/vendor/isotope.pkgd.min.js"></script>
  <script src="js/vendor/jquery.velocity.min.js"></script>
  <script src="js/vendor/jquery.kenburnsy.min.js"></script>
  <script src="js/vendor/textslide.js"></script>
  <script src="js/vendor/imagesloaded.pkgd.min.js"></script>
  <script src="js/vendor/tabs.js"></script>
  <script src="js/ef-slider.js"></script>
  <script src="js/vendor/owl.carousel.min.js"></script>
  <script src="js/vendor/jquery.magnific-popup.min.js"></script>
  <script src="js/vendor/jquery.social-buttons.min.js"></script>
  <script src="js/vendor/wow.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/ajax.js"></script>
</body>

</html>