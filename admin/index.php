<?php 
    require_once("../connect.php");
    require_once('adminsecure.php');
?>
<!DOCTYPE html>
<html>
<?php
  require_once("head.php");
?>
<body class="hold-transition skin-blue sidebar-mini">
<?php
  require_once("header.php");
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
         <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <?Php 
              $selu=mysqli_query($con,"select count(uid) from user where type='1'");
              $s=mysqli_fetch_array($selu);
            ?>
            <div class="inner">
              <h3><?php echo $s[0]; ?></h3>

              <p>User Registrations</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="manageuser.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <?Php 
              $selc=mysqli_query($con,"select count(uid) from user where type='2'");
              $sc=mysqli_fetch_array($selc);
            ?>
            <div class="inner">
              <h3><?php echo $sc[0];?></h3>

              <p>Company Registration</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="managecompany.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
          <?Php 
              $selt1=mysqli_query($con,"select sum(total_tax) from taxpaymnet where year like '2017-2018'");
              $st1=mysqli_fetch_array($selt1);
            ?>
            <div class="inner">
              <h3><?php echo $st1[0];?></h3>

              <p>Tax For 2017-2018</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="taxpayuser.php?year=2017-2018" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <?Php 
              $selt2=mysqli_query($con,"select sum(total_tax) from taxpaymnet where year like '2016-2017'");
              $st2=mysqli_fetch_array($selt2);
            ?>
            <div class="inner">
              <h3><?php echo $st2[0];?></h3>

              <p>Tax For 2016-2017</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="taxpayuser.php?year=2016-2017" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <?Php 
              $selt3=mysqli_query($con,"select sum(total_tax) from taxpaymnet where year like '2015-2016'");
              $st3=mysqli_fetch_array($selt3);
            ?>
            <div class="inner">
              <h3><?php echo $st3[0];?></h3>

              <p>Tax For 2015-2016</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="taxpayuser.php?year=2015-2016" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <?Php 
              $selt4=mysqli_query($con,"select sum(total_tax) from taxpaymnet where year like '2014-2015'");
              $st4=mysqli_fetch_array($selt4);
            ?>
            <div class="inner">
              <h3><?php echo $st4[0];?></h3>

              <p>Tax For 2014-2015</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="taxpayuser.php?year=2014-2015" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
       
        <!-- ./col -->
      </div>
      <!-- /.row -->
      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
  require_once("footer.php");
  ?>
</body>
</html>
