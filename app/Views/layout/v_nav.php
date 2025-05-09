<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="<?= base_url() ?>/template/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
      class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Administrator</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?= base_url() ?>/template/dist/img/user8-128x128.jpg" class="img-circle elevation-2"
          alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Septuro</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-item">
          <a href="<?= base_url('product'); ?>" class="nav-link <?= ($title == 'Data Product') ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-box"></i>
            <p>Data Product</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= base_url('penjualan'); ?>" class="nav-link <?= ($title == 'Data Penjualan') ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-book"></i>
            <p>Data Penjualan</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= base_url('supplier'); ?>" class="nav-link <?= ($title == 'Data Supplier') ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-truck"></i>
            <p>Data Supplier</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= base_url('konsumen'); ?>" class="nav-link <?= ($title == 'Data Konsumen') ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-user"></i>
            <p>Data Konsumen</p>
          </a>

        </li>
        <li class="nav-item">
          <a href="<?= base_url('product_home'); ?>"
            class="nav-link <?= ($title == 'Data Product Porto') ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-box"></i>
            <p>Product Porto</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= base_url('grafik_penjualan'); ?>"
            class="nav-link <?= ($title == 'Grafik Penjualan') ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-chart-line"></i>
            <p>Grafik Penjualan</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= base_url('admin'); ?>" class="nav-link <?= ($title == 'Data Admin') ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-user-cog"></i>
            <p>Data Admin</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="auth/logout" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>Logout</p>
          </a>
        </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->


  </div>
  <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"><?= $title; ?></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active"><?= $title; ?></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">