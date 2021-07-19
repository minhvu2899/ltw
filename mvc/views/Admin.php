<?php

if (!isset($_SESSION['admin'])) {
  session_start();
  header('location: http://localhost/ltweb/');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <base href="http://localhost/ltweb/">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="public/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="./public/bootstrap/css/bootstrap.min.css">
  <script src="./public/bootstrap/js/jquery.min.js"></script>
  <script src="./public/js/bootstrap.min.js"></script>
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Template style -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="public/css/dist/css/style.css">
  <link rel="stylesheet" href="public/css/dist/et-line-font/et-line-font.css">
  <link rel="stylesheet" href="public/css/dist/font-awesome/css/font-awesome.min.css">
  <link type="text/css" rel="stylesheet" href="dist/weather/weather-icons.min.css">
  <link type="text/css" rel="stylesheet" href="dist/weather/weather-icons-wind.min.css">
  <style>
    table {
      width: 100%;
      border-collapse: collapse;
    }

    table,
    td,
    th {
      border: 1px solid black;
      padding: 5px;
    }

    th {
      text-align: left;
    }
  </style>
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  <script src="plugins/charts/code/highcharts.js"></script>
  <title>Admin</title>

  <!-- <style>
        div{padding: 20px;}
        #header,#footer{background-color: yellow;}
    </style> -->
</head>

<body>
  <div class="wrapper">

    <!-- Main Header -->
    <header class="main-header dark-bg">

      <!-- Logo -->
      <a href="Admin" class="logo dark-bg">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><img src="public/images/logo.png" alt="Ovio"></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><img src="public/images/logo.png" alt="Ovio"></span> </a>

      <!-- Header Navbar -->
      <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button"> <span class="sr-only">Toggle navigation</span> </a>
        <div class="pull-left search-box">

          <h5 class="text-center">ADMIN</h5>




        </div>
        <!-- search form -->
        <!-- Navbar Right Menu -->
        <!-- <div><h3>Admin</h3></div> -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">

            <!-- messages-menu -->

            <!-- Notifications Menu -->

            <!-- Tasks Menu -->
            <!-- User Account Menu -->
            <li class="dropdown user user-menu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="hidden-xs"><?php echo $_SESSION["admin"][3] ?></span> </a>
              <ul class="dropdown-menu">
                <li class="">

                  <h2 class="text-left"><?php echo $_SESSION["admin"][3] ?></h2>
                </li>
                <li><a href="Admin/Profile"><i class="icon-profile-male"></i> My Profile</a></li>
                <li><a href="#"><i class="icon-gears"></i> Đổi mật khẩu</a></li>
                <li role="separator" class="divider"></li>


                <li><a href="Login/Logout"><i class="fa fa-power-off"></i> Đăng xuất</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar dark-bg">
      <section class="sidebar">
        <div class="user-panel black-bg">
          <div class="pull-left image"> <img src="<?php echo "./public/images/" . $_SESSION["admin"][7]; ?>" class="img-circle" alt="User Image"> </div>
          <div class="pull-left info">
            <p><?php echo $_SESSION["admin"][3]; ?></p>
            <a href="#"><i class="fa fa-circle"></i> Online</a>
          </div>
        </div>
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header dark-bg">Menu</li>
          <li class="treeview active"><a href="#"><i class="fa fa-dashboard"></i> <span>Quản lí nhà cung cấp</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
            <ul class="treeview-menu ">
              <li class="active"><a href="NhaCungCap"><i class="fa fa-angle-right"></i>Danh sách nhà cung cấp </a></li>


              <li><a href="ThongKeNCC"><i class="fa fa-angle-right"></i> Thống kê nhà cung cấp</a></li>
            </ul>
          </li>
          <li class="treeview"> <a href="#"><i class="fa fa-desktop"></i> <span>Quản lí vận chuyển</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
            <ul class="treeview-menu">
              <li><a href="DonHang"><i class="fa fa-angle-right"></i>Danh sách đơn hàng</a></li>


              <li><a href="Shipper/ListShipper"><i class="fa fa-angle-right"></i> Danh sách shipper</a></li>
              <!-- <li><a href="index-top-nav.html"><i class="fa fa-angle-right"></i> Top Navigation</a></li> -->
              <!-- <li><a href="index-rtl.html"><i class="fa fa-angle-right"></i> RTL</a></li> -->
            </ul>
          </li>

          <!-- sidebar-menu -->
      </section>
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->


      <!-- Main content -->
      <section class="content container-fluid">
        <?php
        require_once "./mvc/views/pages/" . $data["Page"] . ".php";
        ?>
      </section>
      <!-- content -->
    </div>
    <!-- content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer dark-bg">
      <div class="pull-right hidden-xs"> Version 1.0</div>
      Copyright &copy; 2017 Yourdomian. All rights reserved.
    </footer>
  </div>
  <!-- wrapper -->

  <!-- jQuery -->
  <script src="public/css/dist/js/jquery.min.js"></script>
  <script src="public/bootstrap/js/bootstrap.min.js"></script>
  <script src="public/css/dist/js/ovio.js"></script>

  <!-- charts -->
  <script src="plugins/charts/code/modules/exporting.js"></script>
  <script src="plugins/charts/chart-functions.js"></script>



</body>

</html>