<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>AdminLTE 3 | Log in (v2)</title>

    <!-- Google Font: Source Sans Pro -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="<?= base_url() ?>/template/plugins/fontawesome-free/css/all.min.css" />
    <!-- icheck bootstrap -->
    <link
      rel="stylesheet"
      href="<?= base_url() ?>/template/plugins/icheck-bootstrap/icheck-bootstrap.min.css" />
    <!-- Theme style -->
    <link
      rel="stylesheet"
      href="<?= base_url() ?>/template/dist/css/adminlte.min.css" />
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <!-- /.login-logo -->
      <div class="card card-outline card-primary">
        <div class="card-header text-center">
          <a href="<?= base_url() ?>/template/index2.html" class="h1"
            ><b>Admin</b
            ><?= $title; ?></a
          >
        </div>
        <div class="card-body">
          <p class="login-box-msg">Silahkan Login Di Sini !!!!</p>

          <?php
          $errors= session()->getFlashdata('errors');
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

          <?php echo form_open('auth/login'); ?>
          <div class="input-group mb-3">
            <input
              type="text"
              name="username"
              class="form-control"
              placeholder="Username"
              required />
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input
              type="password"
              name="password"
              class="form-control"
              placeholder="Password"
              required />
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember" />
                <label for="remember"> Remember Me </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">
                Login
              </button>
            </div>
            <!-- /.col -->
          </div>
          <?php echo form_close();?>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?= base_url() ?>/template/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>/template/dist/js/adminlte.min.js"></script>
  </body>
</html>
