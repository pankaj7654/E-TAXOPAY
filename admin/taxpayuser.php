<?php 
    require_once("../connect.php");
    require_once('adminsecure.php');
    if(isset($_REQUEST['year']))
    {
      $_SESSION['distax']=$_REQUEST['year'];
      header("location:taxpayuser.php");
    }
?>
<!DOCTYPE html>
<html>
<?php
  require_once("head.php");
?>
<body class="hold-transition skin-blue sidebar-mini" onload="displaydata('taxpayuserdata','display','<?php echo $_SESSION['distax']; ?>');">
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
        <li class="active">Tax Pay User</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content" >
    <div id="taxpayuserdata"></div>
      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
  require_once("footer.php");
  ?>
  
</body>
</html>
