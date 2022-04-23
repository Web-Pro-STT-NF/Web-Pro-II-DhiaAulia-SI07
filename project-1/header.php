<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | PROJECT 1</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
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
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Praktikum 1
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../praktikum-1/array_buah.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>array_buah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../praktikum-1/array_pop($array).php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>array_pop($array)</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../praktikum-1/array_push($array).php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>array_push($array)</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../praktikum-1/array_shift($array).php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>array_shift($array)</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../praktikum-1/array_siswa.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>array_siswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../praktikum-1/array_unshift($array).php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>array_unshift($array)</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../praktikum-1/info.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>info</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../praktikum-1/pertanyaanpraktikum1.pdf" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>pertanyaanpraktikum1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../praktikum-1/sort($array).php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>sort($array)</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../praktikum-1/variable_konstan.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>variable_konstan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../praktikum-1/variable_system.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>variable_system</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../praktikum-1/variable_user.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>variable_user</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              Praktikum 2
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../praktikum-2/form_belanja_online_post.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>form_belanja_online_post</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../praktikum-2/form_penilaian.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>form_penilaian</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../praktikum-2/form_siswa.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>form_siswa</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Praktikum 3
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../praktikum-3/atas.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>atas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../praktikum-3/bawah.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>bawah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../praktikum-3/home.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>home</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Praktikum 4
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../praktikum-4/class_lingkaran.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>class_lingkaran</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../praktikum-4/class_nilai_mahasiswa.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>class_nilai_mahasiswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../praktikum-4/class-persegipanjang.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>class-persegipanjang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../praktikum-4/data_lingkaran.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>data_lingkaran</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../praktikum-4/data-persegipanjang.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>data-persegipanjang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../praktikum-4/mahasiswa.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>mahasiswa</p>
                </a>
              </li>
            </ul>
          </li>
              
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Praktikum 5
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../praktikum-5/1.2" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>1.2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../praktikum-5/2.2" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>2.2</p>
                </a>
              </li>
        </ul>
        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Project 1
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../project-1/classHasilBMI.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>hitung BMI</p>
                </a>
              </li>
            </ul>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>