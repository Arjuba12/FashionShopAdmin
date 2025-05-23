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

  <style>
    body {
      background: linear-gradient(to bottom,
          #fceabb,
          rgba(127, 255, 212, 0.774));
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
        background-color: rgba(255, 255, 255, 0.2); /* transparan putih */
        z-index: 999;
        backdrop-filter: blur(10px); /* efek blur latar belakang */
        -webkit-backdrop-filter: blur(10px); /* untuk Safari */
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
      ">
    <div class="container">
      <div class="header-inner" style="
            height: 68px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 0;
          ">
        <!-- Logo -->
        <div class="logo" style="padding-right: 40px">
          <a href="<?= base_url("welcome") ?>">
            <img src="img/logo.png" alt="Logo" width="100" height="auto" />
          </a>
        </div>

        <!-- Navigation Menu -->
        <nav class="main-nav">
          <ul style="
                list-style: none;
                margin: 0;
                padding: 0;
                display: flex;
                gap: 20px;
              ">
            <li>
              <a href="<?= base_url("front_end_home") ?>" style="
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
              <a href="<?= base_url("#") ?>" style="
                    color: #000;
                    font-weight: 500;
                    text-decoration: none;
                    padding: 10px 20px;
                    border-radius: 5px;

                    background-color: aquamarine;
                  ">Download</a>
            </li>
            <li>
              <a href="<?= base_url("login_page") ?>" style="
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
  </div>

  <div class="container" style="padding-top: 100px;">
    <div class="header-page ef-parallax-bg" style="background-image: url(img/about-header.jpg)">
      <div class="col-md-6 col-md-offset-6">
        <div class="row">
          <div class="inner-content">
            <div class="header-content">
              <h1>About Us</h1>
              <hr />
              <p>Everything created in simple way</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container margin-top">
    <div class="main-title near-content">
      <h1>WE ARE UNPRA AGENCY</h1>
      <hr />
    </div>
    <div class="row">
      <div class="col-md-4">
        <p style="font-size: 18px; line-height: 26px">
          Kami memiliki semangat dalam dunia <b>DESAIN</b> yang tidak hanya indah secara visual, tetapi juga fungsional.
          Setiap detail memiliki arti.
        </p>
        </p>
      </div>
      <div class="col-md-4">
        <p>
          Kreativitas adalah inti dari setiap karya kami. Dengan perpaduan visi, strategi, dan ketelitian, kami
          mewujudkan ide menjadi karya yang bermakna.
        </p>
      </div>
      <div class="col-md-4">
        <p>
          <strong>DESAIN WEB</strong> bukan sekadar tampilan. Ini tentang pengalaman, kejelasan, dan tujuan — dibalut
          dalam estetika yang bersih dan modern.
        </p>
      </div>
    </div>
  </div>

  <div class="container margin-top">
    <div class="row">
      <div class="col-md-12">
        <div class="our-story wow fadeInUp" style="background: url(img/our-story.png) no-repeat"
          data-wow-duration="0.5s" data-wow-delay="0.2s">
          <div class="col-md-6 col-md-offset-6">
            <div class="our-story-content wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
              <div class="our-story-content-inner">
                <h1>OUR STORY</h1>
                <hr />
                <p>
                  Setiap proyek dimulai dari sebuah cerita — sebuah visi yang menunggu untuk diwujudkan. Perjalanan kami
                  dimulai dari keinginan untuk menciptakan desain yang bermakna, efektif, dan mampu menyampaikan pesan
                  dengan jelas. <br /><br />
                  Kami percaya bahwa desain yang baik membangun kepercayaan, menyampaikan cerita, dan menciptakan ikatan
                  emosional. Itulah mengapa kami selalu mendekati setiap tantangan dengan perspektif baru, strategi yang
                  matang, dan sentuhan visual yang kuat demi hasil yang nyata.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container margin-top">
    <div class="main-title">
      <h1>WHY CHOOSE US?</h1>
      <hr />
      <h6>Except to obtain some advantage from it</h6>
    </div>
    <div class="col-md-4">
      <div class="row">
        <div class="services-home-page">
          <div class="col-md-12 wow fadeInUp" data-wow-duration="0.2s" data-wow-delay="0.2s">
            <div class="row">
              <div class="services-icon">
                <span class="icon-tools"></span>
                <hr />
              </div>
              <h4>BRANDING</h4>
              <p>
                Expound the actual teachings of the great explorer of the
                truth, the master-builder of human happiness. No one rejects,
                dislikes, or avoids pleasure itself, because.
              </p>
            </div>
          </div>
          <div class="col-md-12 wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="0.4s">
            <div class="row">
              <div class="services-icon">
                <span class="icon-globe"></span>
                <hr />
              </div>
              <h4>PLAN OF WORK</h4>
              <p>
                The actual teachings of the great explorer of the truth, the
                master-builder of human happiness. No one rejects, dislikes,
                or avoids pleasure itself, because.
              </p>
            </div>
          </div>
          <div class="col-md-12 wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.6s">
            <div class="row">
              <div class="services-icon">
                <span class="icon-paintbrush"></span>
                <hr />
              </div>
              <h4>ILUSTRATION</h4>
              <p>
                Pound the actual teachings of the great explorer of the truth,
                the master-builder of human happiness. No one rejects,
                dislikes, or avoids pleasure itself, because.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-7 col-md-offset-1">
      <div class="our-story-image wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
        <img src="img/services.gif" alt="Our Story" />
      </div>
    </div>
  </div>

  <div class="container margin-top">
    <div class="main-title">
      <h1>OUR AMAZING TEAM</h1>
      <hr />
      <h6>Except to obtain some advantage from it</h6>
    </div>
    <div class="owl-carousel team">
      <div>
        <div class="img member">
          <img src="img/team/jojo-avatar.png" alt="Team Member" />
          <div class="overlay-thumb">
            <div class="overlay-member-content">
              <div class="overlay-member-content-inner">
                <span class="position">WEB DEVELOPER</span>
                <hr />
                <ul class="member-social-media">
                  <li>
                    <a href="http://facebook.com/EliteFingers" target="_blank">Facebook</a>
                  </li>
                  <li>
                    <a href="http://twitter.com/EliteFingers" target="_blank">Twitter</a>
                  </li>
                  <li><a href="#" target="_blank">Dribbble</a></li>
                </ul>
              </div>
            </div>
            <span class="btnBefore"></span>
            <span class="btnAfter"></span>
          </div>
        </div>
        <span class="member-name">ARJUNA BIMANTARA</span>
      </div>

      <div>
        <div class="img member">
          <img src="img/team/jojo-avatar2.png" alt="Team Member" />
          <div class="overlay-thumb">
            <div class="overlay-member-content">
              <div class="overlay-member-content-inner">
                <span class="position">WEB DEVELOPER</span>
                <hr />
                <ul class="member-social-media">
                  <li>
                    <a href="http://facebook.com/EliteFingers" target="_blank">Facebook</a>
                  </li>
                  <li>
                    <a href="http://twitter.com/EliteFingers" target="_blank">Twitter</a>
                  </li>
                  <li><a href="#" target="_blank">Dribbble</a></li>
                </ul>
              </div>
            </div>
            <span class="btnBefore"></span>
            <span class="btnAfter"></span>
          </div>
        </div>
        <span class="member-name">NIZAM KORI</span>
      </div>

      <div>
        <div class="img member">
          <img src="img/team/jojo-avatar3.png" alt="Team Member" />
          <div class="overlay-thumb">
            <div class="overlay-member-content">
              <div class="overlay-member-content-inner">
                <span class="position">WEB DEVELOPER</span>
                <hr />
                <ul class="member-social-media">
                  <li>
                    <a href="http://facebook.com/EliteFingers" target="_blank">Facebook</a>
                  </li>
                  <li>
                    <a href="http://twitter.com/EliteFingers" target="_blank">Twitter</a>
                  </li>
                  <li><a href="#" target="_blank">Dribbble</a></li>
                </ul>
              </div>
            </div>
            <span class="btnBefore"></span>
            <span class="btnAfter"></span>
          </div>
        </div>
        <span class="member-name">SEPTURO</span>
      </div>
    </div>

    <div class="footer margin-top">
      <div class="container">
        <div class="row">
          <div class="col-md-2 col-sm-4 col-xs-12">
            <div class="footer-inner">
              <div class="footer-content">
                <h4>ARNIC DISTRO</h4>
                <address>
                  Prabumulih <br />Pandean no 31 <br />Indonesia
                </address>
              </div>
            </div>
          </div>

          <div class="col-md-2 col-md-push-8 col-sm-4 col-xs-12">
            <div class="footer-inner">
              <div class="footer-content">
                <h4>CONTACT INFO</h4>
                <p>
                  003 124 115 <br />
                  bongkol@gmail.com <br />
                  www.arnicdistro.com
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-inner">
              <div class="footer-content">
                <ul class="social-media">
                  <li>
                    <a href="#"><i class="iconmoon-facebook"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="iconmoon-twitter"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="iconmoon-flickr2"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="iconmoon-dribbble3"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="iconmoon-pinterest"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="iconmoon-linkedin2"></i></a>
                  </li>
                </ul>
                <span class="copyright-mark">&copy; 2025 ARNIC, ALL RIGHTS RESERVED</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <a href="javascript:void(0)" class="scroll-top" id="scroll-top"><i class="pe-7s-angle-up"></i></a>

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