<?php

if(!isset($_SESSION['username'])){
    session_start();
  header('location: http://localhost/Minh/Login');
}
?>
<div class="wrapper"> 
  
  <!-- Main Header -->
  <header class="main-header dark-bg"> 
    
    <!-- Logo --> 
    <a href="Admin" class="logo dark-bg"> 
    <!-- mini logo for sidebar mini 50x50 pixels --> 
    <span class="logo-mini"><img src="public/css/dist/img/logo.png" alt="Ovio"></span> 
    <!-- logo for regular state and mobile devices --> 
    <span class="logo-lg"><img src="public/css/dist/img/logo-lg.png" alt="Ovio"></span> </a> 
    
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation"> 
      <!-- Sidebar toggle button--> 
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button"> <span class="sr-only">Toggle navigation</span> </a>
      <div class="pull-left search-box">
        <form action="#" method="get" class="search-form">
          <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i> </button>
            </span></div>
        </form>
        <!-- search form --> </div>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown messages-menu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-envelope"></i>
            <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <ul class="menu">
                  <li><a href="#">
                    <div class="pull-left"><img src="public/css/dist/img/img1.jpg" class="img-circle" alt="User Image"></div>
                    <h4>Florence Douglas</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <p><small><i class="fa fa-clock-o"></i> 2 mins</small></p>
                    </a></li>
                  <li><a href="#">
                    <div class="pull-left"><img src="public/css/dist/img/img2.jpg" class="img-circle" alt="User Image"></div>
                    <h4>Douglas Smith</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <p><small><i class="fa fa-clock-o"></i> 15 mins</small></p>
                    </a></li>
                  <li><a href="#">
                    <div class="pull-left"><img src="public/css/dist/img/img3.jpg" class="img-circle" alt="User Image"></div>
                    <h4>Lorence Deo</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <p><small><i class="fa fa-clock-o"></i> 35 mins</small></p>
                    </a></li>
                  <li><a href="#">
                    <div class="pull-left"><img src="public/css/dist/img/img1.jpg" class="img-circle" alt="User Image"></div>
                    <h4>Florence Douglas</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <p><small><i class="fa fa-clock-o"></i> 2 mins</small></p>
                    </a></li>
                </ul>
              </li>
              <li class="footer"><a href="#">Check all notifications</a></li>
            </ul>
          </li>
          <!-- messages-menu --> 
          
          <!-- Notifications Menu -->
          <li class="dropdown notifications-menu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-megaphone"></i>
            <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Notifications</li>
              <li>
                <ul class="menu">
                  <li><a href="#"><i class="icon-lightbulb"></i> Lorem ipsum dolor sit amet </a> </li>
                  <li><a href="#"><i class="icon-map-pin blue"></i> Lorem ipsum dolor sit amet </a> </li>
                  <li><a href="#"><i class="icon-refresh orange"></i> Lorem ipsum dolor sit amet </a> </li>
                  <li><a href="#"><i class="icon-map-pin blue"></i> Lorem ipsum dolor sit amet </a> </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks Menu --> 
          <!-- User Account Menu -->
          <li class="dropdown user user-menu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="dist/img/img1.jpg" class="user-image" alt="User Image"> <span class="hidden-xs">Florence Douglas</span> </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <div class="pull-left user-img"><img src="public/css/dist/img/img1.jpg" class="img-responsive" alt="User"></div>
                <p class="text-left">Florence Douglas <small>florence@gmail.com</small> </p>
                <div class="view-link text-left"><a href="#">View Profile</a> </div>
              </li>
              <li><a href="#"><i class="icon-profile-male"></i> My Profile</a></li>
              <li><a href="#"><i class="icon-wallet"></i> My Balance</a></li>
              <li><a href="#"><i class="icon-envelope"></i> Inbox</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#"><i class="icon-gears"></i> Account Setting</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="Login/Logout"><i class="fa fa-power-off"></i> Logout</a></li>
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
        <div class="pull-left image"> <img src="public/css/dist/img/img1.jpg" class="img-circle" alt="User Image"> </div>
        <div class="pull-left info">
          <p>Florence Douglas</p>
          <a href="#"><i class="fa fa-circle"></i> Online</a> </div>
      </div>
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header dark-bg">Menu</li>
        <li class="treeview active"><a href="#"><i class="fa fa-dashboard"></i> <span>Dashboard</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu ">
            <li class="active"><a href=""><i class="fa fa-angle-right"></i> Quản lí nhà cung cấp 1</a></li>
            <li><a href=""><i class="fa fa-angle-right"></i> Quản lí vận chuyển</a></li>
            <li><a href="NhaCungCap"><i class="fa fa-angle-right"></i> Quản lí shipper</a></li>
          </ul>
        </li>
        <li class="treeview"> <a href="#"><i class="fa fa-desktop"></i> <span>Templates</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="index.html"><i class="fa fa-angle-right"></i> Default</a></li>
            <li><a href="index-light.html"><i class="fa fa-angle-right"></i> Light</a></li>
            <li><a href="index-dark.html"><i class="fa fa-angle-right"></i> Dark</a></li>
            <li><a href="index-collapsed-sidebar.html"><i class="fa fa-angle-right"></i> Collapsed Sidebar</a></li>
            <li><a href="index-boxed.html"><i class="fa fa-angle-right"></i> Boxed</a></li>
            <li><a href="index-top-nav.html"><i class="fa fa-angle-right"></i> Top Navigation</a></li>
            <li><a href="index-rtl.html"><i class="fa fa-angle-right"></i> RTL</a></li>
          </ul>
        </li>
        <li class="treeview"> <a href="#"><i class="fa fa-bullseye"></i> <span>Apps</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="app/project-summary.html"><i class="fa fa-angle-right"></i> Project Summary</a></li>
            <li><a href="app/invoice.html"><i class="fa fa-angle-right"></i> Invoice</a></li>
            <li><a href="app/calendar.html"><i class="fa fa-angle-right"></i> Calendar</a></li>
            
            <li><a href="app/gallery.html"><i class="fa fa-angle-right"></i> Gallery</a></li>
            <li><a href="app/timeline.html"><i class="fa fa-angle-right"></i> Timeline</a></li>
            <li><a href="app/contacts.html"><i class="fa fa-angle-right"></i> Contacts</a></li>
          </ul>
        </li>
        <li> <a href="widgets.html"> <i class="fa fa-th"></i> <span>Widgets</span></a> </li>
        <li class="header dark-bg">Components</li>
        <li class="treeview"> <a href="#"><i class="fa fa-briefcase"></i> <span>UI Components</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="component/alerts.html"><i class="fa fa-angle-right"></i> Alerts</a></li>
            <li><a href="component/buttons.html"><i class="fa fa-angle-right"></i> Buttons</a></li>
            <li><a href="component/carousel.html"><i class="fa fa-angle-right"></i> Carousel</a></li>
            <li><a href="component/collapse.html"><i class="fa fa-angle-right"></i> Collapse</a></li>
            <li><a href="component/listgroup.html"><i class="fa fa-angle-right"></i> List Group</a></li>
            <li><a href="component/pagination.html"><i class="fa fa-angle-right"></i> Pagination</a></li>
            <li><a href="component/tabs.html"><i class="fa fa-angle-right"></i> Tabs</a></li>
            <li><a href="component/tooltips.html"><i class="fa fa-angle-right"></i> Tooltips</a></li>
            <li><a href="component/popovers.html"><i class="fa fa-angle-right"></i> Popovers</a></li>
            <li><a href="component/progress.html"><i class="fa fa-angle-right"></i> Progress</a></li>
            <li><a href="component/mediaobjects.html"><i class="fa fa-angle-right"></i> Media Objects</a></li>
          </ul>
        </li>
        <li class="treeview"> <a href="#"><i class="fa fa-pencil-square-o"></i> <span>Forms</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="forms/general-elements.html"><i class="fa fa-angle-right"></i> General Elements</a></li>
            <li><a href="forms/layouts.html"><i class="fa fa-angle-right"></i> Form Layouts</a></li>
            <li><a href="forms/validation.html"><i class="fa fa-angle-right"></i> Form Validation</a></li>
            <li><a href="forms/wizard.html"><i class="fa fa-angle-right"></i> Form Wizard</a></li>
            
          </ul>
        </li>
        <li class="treeview"> <a href="#"><i class="fa fa-table"></i> <span>Tables</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="tables/basic.html"><i class="fa fa-angle-right"></i> Basic Tables</a></li>
            <li><a href="tables/data.html"><i class="fa fa-angle-right"></i> Data Tables</a></li>
          </ul>
        </li>
        <li class="treeview"> <a href="#"><i class="fa fa-bar-chart"></i> <span>Charts</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="charts/line.html"><i class="fa fa-angle-right"></i> Line Charts</a></li>
            <li><a href="charts/area.html"><i class="fa fa-angle-right"></i> Area Charts</a></li>
            <li><a href="charts/bar.html"><i class="fa fa-angle-right"></i> Bar Charts</a></li>
            <li><a href="charts/pie.html"><i class="fa fa-angle-right"></i> Pie Charts</a></li>
            <li><a href="charts/bubble.html"><i class="fa fa-angle-right"></i> Bubble Charts</a></li>
            <li><a href="charts/combinations.html"><i class="fa fa-angle-right"></i> Combinations</a></li>
            <li><a href="charts/3d.html"><i class="fa fa-angle-right"></i> 3D Charts</a></li>
            
          </ul>
        </li>
        <li class="treeview"> <a href="#"><i class="fa fa-map-marker"></i> <span>Maps</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="maps/google-maps.html"><i class="fa fa-angle-right"></i> Google Maps</a></li>
            <li><a href="maps/vector-map.html"><i class="fa fa-angle-right"></i> Vector Map</a></li>
          </ul>
        </li>
        <li class="treeview"> <a href="#"><i class="fa fa-files-o"></i> <span>Pages</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="pages/login.html"><i class="fa fa-angle-right"></i> Login</a></li>
            <li><a href="pages/register.html"><i class="fa fa-angle-right"></i> Register</a></li>
            <li><a href="pages/forgot-password.html"><i class="fa fa-angle-right"></i> Forgot password</a></li>
            <li><a href="pages/coming-soon.html"><i class="fa fa-angle-right"></i> Coming Soon</a></li>
          </ul>
        </li>
        <li class="treeview"> <a href="#"> <i class="fa fa-align-left"></i> <span>Multilevel</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu" style="display: none;">
            <li><a href="#"><i class="fa fa-angle-right"></i> Level One</a></li>
            <li class="treeview"> <a href="#"><i class="fa fa-angle-right"></i> Level One <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
              <ul class="treeview-menu" style="display: none;">
                <li><a href="#"><i class="fa fa-angle-right"></i> Level Two</a></li>
                <li class="treeview"> <a href="#"><i class="fa fa-angle-right"></i> Level Two <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                  <ul class="treeview-menu" style="display: none;">
                    <li><a href="#"><i class="fa fa-angle-right"></i> Level Three</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i> Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Level One</a></li>
          </ul>
        </li>
      </ul>
      <!-- sidebar-menu --> 
    </section>
  </aside>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Dashboard</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
      </ol>
    </section>
    
    <!-- Main content -->
    <section class="content container-fluid">
        <?php require_once "./mvc/views/pages/ThemNCC.php";?>
    </section>
    <!-- content --> 
  </div>
  <!-- content-wrapper --> 
  
  <!-- Main Footer -->
  <footer class="main-footer dark-bg">
    <div class="pull-right hidden-xs"> Version 1.0</div>
    Copyright &copy; 2017 Yourdomian. All rights reserved. </footer>
</div>
<!-- wrapper --> 

<!-- jQuery --> 
<script src="public/css/dist/js/jquery.min.js"></script> 
<script src="public/bootstrap/js/bootstrap.min.js"></script> 
<script src="public/css/dist/js/ovio.js"></script> 

<!-- charts --> 
<script src="plugins/charts/code/modules/exporting.js"></script> 
<script src="plugins/charts/chart-functions.js"></script>
