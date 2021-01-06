<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>E-Tax</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>E-Taxopay</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
         
          <li class="dropdown user user-menu">
            <a href="../logout.php">
              Logout
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>ADMIN</p>
          <i class="fa fa-circle text-success"></i> Online
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="">
          <a href="index.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span> 
          </a>
        </li>
        <li class="">
          <a href="manageuser.php">
            <i class="fa fa-user"></i> <span>User</span> 
          </a>
        </li>
        <li class="">
          <a href="managecompany.php">
            <i class="fa fa-user"></i> <span>Company</span> 
          </a>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Tax Pay User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="taxpayuser.php?year=2017-2018"><i class="fa fa-circle-o"></i> 2017-2018</a></li>
            <li><a href="taxpayuser.php?year=2016-2017"><i class="fa fa-circle-o"></i> 2016-2017</a></li>
            <li><a href="taxpayuser.php?year=2015-2016"><i class="fa fa-circle-o"></i> 2015-2016</a></li>
            <li><a href="taxpayuser.php?year=2014-2015"><i class="fa fa-circle-o"></i> 2014-2015</a></li>
          </ul>
        </li>
        <li class="">
          <a href="contactus.php">
            <i class="fa fa-user"></i> <span>Contact Us</span> 
          </a>
        </li>
        <li class="">
          <a href="managenews.php">
            <i class="fa fa-user"></i> <span>News & Update</span> 
          </a>
        </li>
        <li class="">
          <a href="managesubscriber.php">
            <i class="fa fa-envelope"></i> <span>Subscriber</span> 
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>