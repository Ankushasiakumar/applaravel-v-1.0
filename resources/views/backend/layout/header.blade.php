

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="{{ Config::get('app.name') }}">
    <title>{{Config::get('app.name') . @(isset($page_title) ? " | ".$page_title : '') }}</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ URL::asset('backend/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ URL::asset('backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ URL::asset('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ URL::asset('backend/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}">

  <link rel="stylesheet" href="{{ URL::asset('backend/plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ URL::asset('backend/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ URL::asset('backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ URL::asset('backend/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ URL::asset('backend/plugins/summernote/summernote-bs4.min.css') }}">

  <link rel="stylesheet" href="{{ URL::asset('backend/plugins/dropzone/min/dropzone.min.css') }}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div> -->

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('admin_dashboard') }}" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/" target="_blank" class="nav-link">View Site</a>
      </li>
    </ul>


    <ul class="navbar-nav ml-auto">
          <!-- Navbar Search -->
          <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="{{ route('admin_logout') }}" role="button">
              Logout
            </a>
        </li>
    </ul>


  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
      <span class="brand-text font-weight-light">Sheds - Free Fittings</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Pages
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin_home') }}" class="nav-link {{ (request()->is('backend/home')) ? 'active' : '' }}">
                  <i class="fas fa-file-alt nav-icon"></i>
                  <p>Home</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('build_shed_get') }}" class="nav-link {{ (request()->is('backend/build-shed')) ? 'active' : '' }}">
                  <i class="fas fa-home nav-icon"></i>
                  <p>Build a Shed</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin_gallery') }}" class="nav-link {{ (request()->is('backend/gallery*')) ? 'active' : '' }}">
                  <i class="fas fa-images nav-icon"></i>
                  <p>Gallery</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('delivery') }}" class="nav-link {{ (request()->is('backend/delivery')) ? 'active' : '' }}">
                  <i class="fas fa-map-marker-alt nav-icon"></i>
                  <p>Delivery Area</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('contact_us') }}" class="nav-link {{ (request()->is('backend/contact')) ? 'active' : '' }}">
                  <i class="fas fa-id-card-alt nav-icon"></i>
                  <p>Contact Us</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('categories') }}" class="nav-link {{ (request()->is('backend/categories')) ? 'active' : '' }}">
                  <i class="fas fa-tags nav-icon"></i>
                  <p>Categories</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('sheds') }}" class="nav-link {{ (request()->is('backend/sheds')) ? 'active' : '' }}">
                  <i class="fas fa-home nav-icon"></i>
                  <p>Sheds</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('cladding') }}" class="nav-link {{ (request()->is('backend/cladding')) ? 'active' : '' }}">
                  <i class="fas fa-door-open nav-icon"></i>
                  <p>Cladding</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('security') }}" class="nav-link {{ (request()->is('backend/security')) ? 'active' : '' }}">
                  <i class="fas fa-door-closed nav-icon"></i>
                  <p>Security</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('extras') }}" class="nav-link {{ (request()->is('backend/extras')) ? 'active' : '' }}">
                  <i class="fas fa-puzzle-piece nav-icon"></i>
                  <p>Extras</p>
                </a>
              </li>

              <!-- <li class="nav-item">
                <a href="{{ route('mapping') }}" class="nav-link {{ (request()->is('backend/mapping')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sheds Mapping</p>
                </a>
              </li> -->

              <li class="nav-item">
                <a href="{{ route('users') }}" class="nav-link {{ (request()->is('backend/users')) ? 'active' : '' }}">
                  <i class="fas fa-users nav-icon"></i>
                  <p>Users</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('admin_testimonial') }}" class="nav-link {{ (request()->is('backend/testimonial*')) ? 'active' : '' }}">
                  <i class="nav-icon fas fa-star-half-alt"></i>
                  <p class="text">Testimonial</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('preview_images') }}" class="nav-link {{ (request()->is('backend/preview-images*')) ? 'active' : '' }}">
                  <i class="fas fa-images nav-icon"></i>
                  <p class="text">Preview Images</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('orders') }}" class="nav-link {{ (request()->is('backend/orders')) ? 'active' : '' }}">
                  <i class="fas fa-luggage-cart nav-icon"></i>
                  <p class="text">Orders</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('admin_settings') }}" class="nav-link {{ (request()->is('backend/settings')) ? 'active' : '' }}">
                  <i class="fas fa-cogs nav-icon"></i>
                  <p class="text">Settings</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-home nav-icon"></i>
              <p>
                Garden Room
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('layout') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Layout</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('window_model') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Window Model</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('window_color') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Window Color</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('window_position') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Window Position</p>
                </a>
              </li>

              <!-- Door -->

              <li class="nav-item">
                <a href="{{ route('door_model') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Door Model</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('door_color') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Door Color</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('door_position') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Door Position</p>
                </a>
              </li>
            </ul>
          </li>


          <!-- Pages -->

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-home nav-icon"></i>
              <p>
                Extra Pages
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('garden_room_get') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Garden Room</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('cladding_options_get') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Cladding Option</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('capillary_action_get') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Capillary Action</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('terms_and_conditions_get') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Terms and Conditions</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('prepare_base_get') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>How to prepare a base</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('security_package_get') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Security Package</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('privacy_policy_get') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Privacy Policy</p>
                    </a>
                  </li>
                </ul>
            </li>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>