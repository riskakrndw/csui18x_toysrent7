<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>RENT TOYZ</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
        folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="../bower_components/morris.js/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="../bower_components/jvectormap/jquery-jvectormap.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <link rel="icon" href="../dist/img/icon.png">

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <style type="text/css">
      .main-header .navbar {
        background-color: #305f72 !important;
        color: #ffffff !important;
      }
        .main-header .navbar .nav > li > a {
        color: #ffffff;
      }
        .main-header .navbar .nav > li > a:hover,
        .main-header .navbar .nav > li > a:active,
        .main-header .navbar .nav > li > a:focus,
        .main-header .navbar .nav .open > a,
        .main-header .navbar .nav .open > a:hover,
        .main-header .navbar .nav .open > a:focus,
        .main-header .navbar .nav > .active > a {
        background: rgba(0, 0, 0, 0.1);
        color: #f6f6f6;
      }
        .main-header .navbar .sidebar-toggle {
        color: #ffffff;
      }
        .main-header .navbar .sidebar-toggle:hover {
        background-color: #b75006 !important;
        color: #ffffff !important;
      }
        .main-header .navbar .sidebar-toggle {
        color: #fff;
      }
      @media (max-width: 767px) {
          .main-header .navbar .dropdown-menu li.divider {
          background-color: rgba(255, 255, 255, 0.1);
        }
          .main-header .navbar .dropdown-menu li a {
          color: #fff;
        }
          .main-header .navbar .dropdown-menu li a:hover {
          background: #367fa9;
        }
      }
      .navbar-custom-menu>.navbar-nav>li>.dropdown-menu {
        border-color: #113f67;
      }
      .open>.dropdown-menu {
        border-color: #305f72;
      }
        .main-header .logo {
        background-color: #305f72 !important;
        color: #ffffff !important;
        border-bottom: 0 solid transparent;
      }
        .main-header .logo:hover {
        background-color: #b75006 !important;
        color: #ffffff !important;
      }
        .main-header li.user-header {
        background-color: #1c4b82 !important;
      }
        .content-header {
        background: transparent;
      }

      .main-sidebar .wrapper, .main-sidebar, .main-sidebar .left-side {
        background-color: white !important;
        border-right: 1px solid #d2d6de;
      }

      .main-sidebar .sidebar-menu>li:hover>a, .main-sidebar .sidebar-menu>li.active>a{
        color: #000000 !important;
        background: #fded5d !important;
        border-left-color: #305f72 !important;
        font-weight: bolder;
      }
      .main-sidebar .sidebar-menu>li>a, .main-sidebar .sidebar-menu>li>a{
        color: #000000 !important;
        background: #ffffff !important;
      }
      .main-sidebar .sidebar-menu>li.sidebar {
        color: #ffffff !important;
        background: #af9d00 !important;
      }
      .main-sidebar .sidebar-menu>li.header {
        color: #ffffff;
        background: #305f72;
      }
      .main-sidebar .treeview-menu>li>a {
        color: #ffffff;
        background: #2d2c26 !important;
      }
      .main-sidebar .treeview-menu>li:hover>a, .main-sidebar .treeview-menu>li.active>a {
        color: #fbbc35 !important;
        background: #2d2c26 !important;
      }
      .main-sidebar .sidebar-menu>li>.treeview-menu {
        margin: 0 1px;
        background: #2d2c26;
      }
      .skin-blue .sidebar-mini .wrapper, .wrapper .wrapper, .wrapper .left-side {
        background-color: #23221c !important;
      }
      .skin-blue .wrapper, .skin-blue .main-sidebar, .skin-blue .left-side {
        background-color: #ffffff;
        border-right: 1px solid #d2d6de;
      }

      .bg-aqua, .callout.callout-info, .alert-info, .label-info, .modal-info .modal-body {
        background-color: #ffffff !important;
        color: #444 !important;
        border-right: 1px solid #d2d6de;
        border-top: 1px solid #d2d6de;
        border-bottom: 1px solid #d2d6de;
      }

      .btn-primary {
        background-color: #ffffff !important;
        border-color: #367fa9 !important;
        color: #367fa9 !important;
      }

      .btn-primary:hover {
        background-color: #367fa9 !important;
        border-color: #1f4a63 !important;
        color: #fff !important;
      }

      .btn-default {
        background-color: #fff !important;
        color: #305f72 !important;
        border-color: #305f72 !important;
      }

      .btn-default:hover {
        background-color: #305f72 !important;
        color: #fff !important;
        border-color: #984509 !important;
      }

      .btn-danger {
        background-color: #fff !important;
        border-color: #d73925 !important;
        color: #d73925 !important;
      }

      .btn-danger:hover {
        background-color: #d73925 !important;
        border-color: #832014 !important;
        color: #fff !important;
      }

      .datepicker table tr td.disabled,
      .datepicker table tr td.disabled:hover {
        background: none !important;
        color: #c0bbbb !important;;
        cursor: not-allowed !important;
      }
    </style>
  </head>
  
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <header class="main-header">
          <!-- Logo -->
          <a href="../layout_admin/index.php" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>LT</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>RENT</b>TOYZ</span>
          </a>
          <!-- Header Navbar: style can be found in header.less -->
          <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
              <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
              <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                <li class="dropdown messages-menu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-envelope-o"></i>
                    <span class="label label-success">4</span>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="header">You have 4 messages</li>
                    <li>
                      <!-- inner menu: contains the actual data -->
                      <ul class="menu">
                        <li><!-- start message -->
                          <a href="#">
                            <div class="pull-left">
                              <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                            </div>
                            <h4>
                              Support Team
                              <small><i class="fa fa-clock-o"></i> 5 mins</small>
                            </h4>
                            <p>Why not buy a new awesome theme?</p>
                          </a>
                        </li>
                        <!-- end message -->
                        <li>
                          <a href="#">
                            <div class="pull-left">
                              <img src="../dist/img/avatar.png" class="img-circle" alt="User Image">
                            </div>
                            <h4>
                              AdminLTE Design Team
                              <small><i class="fa fa-clock-o"></i> 2 hours</small>
                            </h4>
                            <p>Why not buy a new awesome theme?</p>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <div class="pull-left">
                              <img src="../dist/img/avatar.png" class="img-circle" alt="User Image">
                            </div>
                            <h4>
                              Developers
                              <small><i class="fa fa-clock-o"></i> Today</small>
                            </h4>
                            <p>Why not buy a new awesome theme?</p>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <div class="pull-left">
                              <img src="../dist/img/avatar.png" class="img-circle" alt="User Image">
                            </div>
                            <h4>
                              Sales Department
                              <small><i class="fa fa-clock-o"></i> Yesterday</small>
                            </h4>
                            <p>Why not buy a new awesome theme?</p>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <div class="pull-left">
                              <img src="../dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                            </div>
                            <h4>
                              Reviewers
                              <small><i class="fa fa-clock-o"></i> 2 days</small>
                            </h4>
                            <p>Why not buy a new awesome theme?</p>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="footer"><a href="#">See All Messages</a></li>
                  </ul>
                </li>
                
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="../dist/img/avatar.png" class="user-image" alt="User Image">
                    <span class="hidden-xs">Alexander Pierce</span>
                  </a>
                  <ul class="dropdown-menu">
                    <!-- User image -->
                    <li class="user-header">
                      <img src="../dist/img/avatar.png" class="img-circle" alt="User Image">
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                      <div class="pull-left">
                        <a href="../layout_admin/profile.php" class="btn btn-default btn-flat">Profile</a>
                      </div>
                      <div class="pull-right">
                        <a href="#" class="btn btn-default btn-flat">Sign out</a>
                      </div>
                    </li>
                  </ul>
                </li>
                
              </ul>
            </div>
          </nav>
      </header>