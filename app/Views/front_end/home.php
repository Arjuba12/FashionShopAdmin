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
      background: linear-gradient(to bottom, #fceabb, rgba(127, 255, 212, 0.774));
    }

    .blur-text-bg {
      background: rgba(0, 0, 0, 0.1);
      /* hitam transparan */
      backdrop-filter: blur(8px);
      /* efek blur */
      padding: 20px;
      border-radius: 12px;
      display: inline-block;
      z-index: 2;
    }

    b {
      color: aquamarine;
    }

    #history-images {
      width: 470px;
      height: 500px;
      overflow: hidden;
    }

    #history-images .owl-item img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: center;
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
    <div class="slider-wrapper">
      <div class="slider-description">
        <div class="slider-description-inner">
          <h1>Pure<span>Elegance</span></h1>
        </div>
        <div class="cd-intro">
          <div class="cd-headline clip">
            <div class="blur-text-bg">
              <span class="cd-words-wrapper">
                <b class="is-visible">Where Technology Meets <br> Fashion</b>
                <b>A Student Project from <br> Universitas Prabumulih</b>
                <b>Crafted by Code,<br> Inspired by Style</b>
              </span>
            </div>
          </div>
        </div>
      </div>
      <div id="slider-ef" class="slider-images-wrapper">
        <img class="img-responsive" src="img/slider/image_1.jpg" alt="" />
        <img class="img-responsive" src="img/slider/image_2.jpg" alt="" />
        <img class="img-responsive" src="img/slider/image_3.jpg" alt="" />
      </div>
    </div>
  </div>
  <div class="container margin-top">
    <div class="history-wrapper">
      <div class="col-md-6 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
        <div class="row">
          <article>
            <h1>SEBUAH PERJALANAN DARI IDE MAHASISWA BIASA MENUJU PLATFORM FASHION DIGITAL</h1>
            <hr />
            <h4>
              Kami adalah mahasiswa Informatika dari Universitas Prabumulih yang tengah merintis sebuah proyek
              website fashion sebagai bagian dari pembelajaran dan eksplorasi kami di dunia pengembangan web. Project
              ini berawal dari ide sederhana. <br>— <br>Bagaimana jika kami bisa menggabungkan minat kami terhadap
              teknologi dan
              ketertarikan terhadap fashion menjadi satu platform digital yang menarik dan fungsional?
            </h4>
            <p>
              <br />Dengan semangat belajar dan kerja sama tim, kami mulai membangun website ini dari nol. Proyek ini
              tidak hanya menjadi media untuk mengasah keterampilan coding dan desain, tetapi juga menjadi bukti bahwa
              mahasiswa biasa pun bisa menciptakan sesuatu yang kreatif dan bermanfaat. Di balik setiap baris kode dan
              desain halaman, ada semangat untuk berkembang dan berkarya.
            </p>
          </article>
        </div>
      </div>
      <div class="col-md-5 col-md-offset-1 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
        <div class="row">
          <div id="history-images" class="owl-carousel">
            <div>
              <img class="img-responsive center-block" src="img/about_img.jpg" alt="About" />
            </div>
            <div>
              <img class="img-responsive center-block" src="img/about_img2.jpg" alt="About" />
            </div>
            <div>
              <img class="img-responsive center-block" src="img/about_img3.jpg" alt="About" />
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
      <h6>Kami percaya bahwa teknologi dan fashion bisa berjalan beriringan.
        Sebagai mahasiswa IT dari Universitas Prabumulih, kami menghadirkan platform yang tidak hanya fungsional, tapi
        juga stylish dan relevan dengan tren masa kini.</h6>
    </div>
    <div class="services-home-page">
      <div class="row">
        <div class="col-md-4">
          <div class="services-icon">
            <span class="icon-tools"></span>
            <hr />
          </div>
          <h4>BRANDING</h4>
          <p>
            Kami merancang identitas visual yang kuat dan elegan untuk setiap produk fashion.
            Fokus kami adalah menciptakan kesan pertama yang melekat, dengan tampilan modern dan konsisten dari logo
            hingga layout.
        </div>
        <div class="col-md-4">
          <div class="services-icon">
            <span class="icon-globe"></span>
            <hr />
          </div>
          <h4>PLAN OF WORK</h4>
          <p>
            Kami merancang setiap fitur dengan pendekatan terstruktur:
            mulai dari riset kebutuhan pengguna, perancangan wireframe, hingga pengembangan sistem yang intuitif dan
            responsif.
          </p>
        </div>
        <div class="col-md-4">
          <div class="services-icon">
            <span class="icon-paintbrush"></span>
            <hr />
          </div>
          <h4>ILUSTRATION</h4>
          <p>
            Visual adalah bahasa utama fashion.
            Kami menyajikan ilustrasi dan elemen visual yang mendukung tampilan produk agar lebih menarik, tanpa
            melupakan nilai estetika dan kemudahan akses.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="container margin-top">
    <div class="main-title">
      <h1>PRODUCT CATEGORY</h1>
      <hr />
      <h6>Best Category & Brand Available </h6>
    </div>
    <div class="portfolio-wrapper">
      <button class="nav">
        <span class="icon-container">
          <span class="line line01"></span>
          <span class="line line02"></span>
          <span class="line line03"></span>
          <span class="line line04"></span>
        </span>
      </button>
      <div class="works-filter">
        <a href="javascript:void(0)" class="filter active" data-filter="mix">All</a>
        <a href="javascript:void(0)" class="filter" data-filter="branding">Brand</a>
        <a href="javascript:void(0)" class="filter" data-filter="web">Kategori</a>
      </div>
      <div class="js-masonry">
        <div class="row" id="work-grid">
          <!-- Begin of Thumbs Portfolio -->
          <?php foreach ($products as $product): ?>
            <div class="col-md-4 col-sm-4 col-xs-12 mix <?= esc($product['category']) ?>">
              <div class="img home-portfolio-image">
                <img src="<?= base_url($product['image']) ?>" alt="<?= esc($product['title']) ?>" />
                <div class="overlay-thumb">
                  <a href="javascript:void(0)" class="like-product">
                    <i class="ion-ios-heart-outline"></i>
                    <span class="like-product">Liked</span>
                    <span class="output"><?= esc($product['liked']) ?></span>
                  </a>
                  <div class="details">
                    <span class="title"><?= esc($product['title']) ?></span>
                    <span class="info"><?= esc($product['info']) ?></span>
                  </div>
                  <span class="btnBefore"></span>
                  <span class="btnAfter"></span>
                  <a class="main-portfolio-link" href="single-project.html"></a>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
          <!-- End of Thumbs Portfolio -->

        </div>
      </div>
      <div class="load-more">
        <a href="javascript:void(0)" id="load-more"><i class="icon-refresh"></i></a>
      </div>
    </div>
  </div>
  <div class="container margin-top">
    <div class="newsletter">
      <div class="col-md-6">
        <div class="row">
          <div class="newsletter-left">
            <div class="newsletter-left-inner">
              <h1>
                STAY INFORMED <br />
                WITH OUR <b>NEWSLETTER</b>
              </h1>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row">
          <div class="newsletter-right" style="background: url(img/newsletter-bg.jpg)">
            <div class="newsletter-right-inner">
              <form>
                <input type="text" name="newsletter" placeholder="ENTER YOUR EMAIL" />
                <input type="submit" value="SUBSCRIBE" />
              </form>
            </div>
          </div>
        </div>
      </div>
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
                bongkolstudio@gmail.com <br />
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