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
    html,
    body {
      height: 100%;
    }

    body {
      min-height: 100vh;
      background: linear-gradient(to bottom, #fceabb, rgba(127, 255, 212, 0.774));
      background-size: cover;
      margin: 0;
      padding: 0;
      overscroll-behavior: none;
      overflow-x: hidden;
    }

    .login-container {
      background-color: rgba(255, 255, 255, 0.5);
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
      width: 320px;

      backdrop-filter: blur(10px);
      /* efek blur latar belakang */
      -webkit-backdrop-filter: blur(10px);
      /* untuk Safari */

      /* Tambahan untuk center */
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

    .login-container h2 {
      text-align: center;
      margin-bottom: 24px;
      color: #333;
    }

    .login-container input[type="text"],
    .login-container input[type="password"] {
      width: 100%;
      padding: 12px;
      margin: 8px 0 16px;
      border: 1px solid #ccc;
      border-radius: 8px;
      box-sizing: border-box;
    }

    .login-container button {
      width: 100%;
      padding: 12px;
      background-color: aquamarine;
      border: none;
      border-radius: 8px;
      color: white;
      font-weight: bold;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .login-container button:hover {
      background-color: aquamarine;
    }

    .login-container .register-link {
      display: block;
      text-align: center;
      margin-top: 16px;
      color: #555;
      font-size: 14px;
    }

    .login-container .register-link a {
      color: rgb(66, 134, 112);
      text-decoration: none;
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

  <style>
    .login-container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
    }

    .role-selector {
      display: flex;
      justify-content: center;
      font-size: 13px;
      margin-bottom: 15px;
      gap: 10px;
    }

    .role-selector button {
      border: none;
      background: none;
      color: #333;
      cursor: pointer;
      padding: 4px 8px;
      border-bottom: 1px solid transparent;
    }

    .role-selector button.active {
      font-weight: bold;
      border-bottom: 1px solid #333;
    }

    form {
      display: none;
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    input,
    5 button[type="submit"] {
      padding: 8px;
      font-size: 14px;
    }

    .register-link {
      margin-top: 10px;
      font-size: 13px;
      text-align: center;
    }
  </style>

  <div class="login-container">
    <h2 style="text-align: center;">Login to Your Account</h2>

    <?php
    $errors = session()->getFlashdata('errors');
    if (!empty($errors)) { ?>
      <div class="alert alert-danger alert-dismissible">
        <ul>
          <?php foreach ($errors as $key => $value) { ?>
            <li><?= esc($value) ?></li>
          <?php } ?>
        </ul>
      </div>
    <?php } ?>

    <?php
    if (session()->getFlashdata('pesan')) {
      echo '<div class="alert alert-danger alert-dismissible">';
      echo session()->getFlashdata('pesan');
      echo '</div>';
    } ?>

    <!-- Pilihan Peran -->
    <div class="role-selector">
      <button type="button" id="adminBtn" onclick="showForm('admin')">Admin</button>
      <button type="button" id="userBtn" onclick="showForm('user')">User</button>
    </div>

    <!-- Form Admin -->
    <form id="admin-form" action="<?= base_url('auth/login') ?>" method="post">
      <input type="text" name="username" placeholder="Admin Username" required /> <input type="password" name="password"
        placeholder="Admin Password" required />
      <input type="hidden" name="role" value="admin" />
      <button type="submit">Login as Admin</button>
    </form>

    <!-- Form User -->
    <form id="user-form" action="#">
      <input type="text" name="username" placeholder="User Username" required />
      <input type="password" name="password" placeholder="User Password" required />
      <input type="hidden" name="role" value="user" />
      <button type="submit">Login as User</button>
      <div class="register-link">
        Don't have an account? <a href="register.html">Register here</a>
      </div>
    </form>

  </div>

  <script>
    function showForm(role) {
      document.getElementById('admin-form').style.display = 'none';
      document.getElementById('user-form').style.display = 'none';

      document.getElementById('adminBtn').classList.remove('active');
      document.getElementById('userBtn').classList.remove('active');

      if (role === 'admin') {
        document.getElementById('admin-form').style.display = 'flex';
        document.getElementById('adminBtn').classList.add('active');
      } else {
        document.getElementById('user-form').style.display = 'flex';
        document.getElementById('userBtn').classList.add('active');
      }
    }

    // Default tampilkan form user
    showForm('user');
  </script>

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