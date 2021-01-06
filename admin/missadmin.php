<?php 
 
    require_once("../connect.php");
    require_once('adminsecure.php');


  if($_REQUEST['olkhan']=="userdata")
  {
    if($_REQUEST['what']=="delete")
    {
      $uid=$_REQUEST['val'];
      $sel=mysqli_query($con,"select pannum from user where uid='$uid'");
      $s=mysqli_fetch_array($sel);
      mysqli_query($con,"delete from login where userid='$s[0]'");
      mysqli_query($con,"delete from user where uid='$uid'");
    }
    if($_REQUEST['what']=="display" || $_REQUEST['what']=="delete")
    {
  ?>  

<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">User Data Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Pan Number</th>
                  <th>User Name</th>
                  <th>Date Of Birth</th>
                  <th>Mobile</th>
                  <th>Email</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $seluser=mysqli_query($con,"select * from user where type='1'");
                while($suser=mysqli_fetch_array($seluser))
                {

                ?>
                <tr style="cursor: pointer;">
                  <td><?php echo $suser[1];?></td>
                  <td><?php echo $suser[2];?></td>
                  <td><?php echo $suser[3];?></td>
                  <td><?php echo $suser[9];?></td>
                  <td><?php echo $suser[10];?></td>
                  <td style="cursor: pointer;"><i class="fa fa-trash" onclick="displaydata('userdata','delete','<?php echo $suser[0];?>');"></i></td>
                </tr>
                <?php
              }
                ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
<?php
  }
}

if($_REQUEST['olkhan']=="companydata")
  {
    if($_REQUEST['what']=="delete")
    {
      $uid=$_REQUEST['val'];
      $sel=mysqli_query($con,"select pannum from user where uid='$uid'");
      $s=mysqli_fetch_array($sel);
      mysqli_query($con,"delete from login where userid='$s[0]'");
      mysqli_query($con,"delete from user where uid='$uid'");
    }
    if($_REQUEST['what']=="display" || $_REQUEST['what']=="delete")
    {
  ?>  

<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Company Data Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Pan Number</th>
                  <th>User Name</th>
                  <th>Establish Date</th>
                  <th>Propryter Name</th>
                  <th>Mobile</th>
                  <th>Email</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $seluser=mysqli_query($con,"select * from user where type='2'");
                while($suser=mysqli_fetch_array($seluser))
                {

                ?>
                <tr style="cursor: pointer;">
                  <td><?php echo $suser[1];?></td>
                  <td><?php echo $suser[2];?></td>
                  <td><?php echo $suser[3];?></td>
                  <td><?php echo $suser[4];?></td>
                  <td><?php echo $suser[9];?></td>
                  <td><?php echo $suser[10];?></td>
                  <td style="cursor: pointer;"><i class="fa fa-trash" onclick="displaydata('companydata','delete','<?php echo $suser[0];?>');"></i></td>
                </tr>
                <?php
              }
                ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
<?php
  }
}


if($_REQUEST['olkhan']=="contactus")
  {
    if($_REQUEST['what']=="delete")
    {
      $cid=$_REQUEST['val'];
      mysqli_query($con,"delete from contact where cid='$cid'");
    }
    if($_REQUEST['what']=="display" || $_REQUEST['what']=="delete")
    {
  ?>  

<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Contact To Us</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Pancard</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Mobile</th>
                  <th>Messege</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $seluser=mysqli_query($con,"select * from contact");
                while($suser=mysqli_fetch_array($seluser))
                {

                ?>
                <tr style="cursor: pointer;">
                  <td><?php echo $suser[1];?></td>
                  <td><?php echo $suser[2];?></td>
                  <td><?php echo $suser[3];?></td>
                  <td><?php echo $suser[4];?></td>
                  <td><?php echo $suser[5];?></td>
                  <td style="cursor: pointer;"><i class="fa fa-trash" onclick="displaydata('contactus','delete','<?php echo $suser[0];?>');"></i></td>
                </tr>
                <?php
              }
                ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
<?php
  }
}


if($_REQUEST['olkhan']=="subscriber")
  {
    if($_REQUEST['what']=="delete")
    {
      $subid=$_REQUEST['val'];
      mysqli_query($con,"delete from subscriber where subid='$subid'");
    }
    if($_REQUEST['what']=="display" || $_REQUEST['what']=="delete")
    {
  ?>  

<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Subscribers</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Email</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $seluser=mysqli_query($con,"select * from subscriber");
                while($suser=mysqli_fetch_array($seluser))
                {

                ?>
                <tr style="cursor: pointer;">
                  <td><?php echo $suser[1];?></td>
                  <td style="cursor: pointer;"><i class="fa fa-trash" onclick="displaydata('subscriber','delete','<?php echo $suser[0];?>');"></i></td>
                </tr>
                <?php
              }
                ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
<?php
  }
}

 if($_REQUEST['olkhan']=="taxpayuserdata")
  {
    
    if($_REQUEST['what']=="display")
    {
  ?>  

<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tax Pay User Data Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Pan Number</th>
                  <th>User Name</th>
                  <th>Date Of Birth</th>
                  <th>Year</th>
                  <th>Mobile</th>
                  <th>Income</th>
                  <th>Expence</th>
                  <th>Net Income</th>
                  <th>Tax</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $seluser=mysqli_query($con,"select p.*,u.name,u.mobile from taxpaymnet p,user u where u.pannum like p.ppannum and p.year like '$_REQUEST[val]'");
                while($suser=mysqli_fetch_array($seluser))
                {

                ?>
                <tr style="cursor: pointer;">
                  <td><?php echo $suser[1];?></td>
                  <td><?php echo $suser[10];?></td>
                  <td><?php echo $suser[2];?></td>
                  <td><?php echo $suser[3];?></td>
                  <td><?php echo $suser[11];?></td>
                  <td><?php echo $suser[5];?></td>
                  <td><?php echo $suser[6];?></td>
                  <td><?php echo $suser[7];?></td>
                  <td><?php echo $suser[8];?></td>
                </tr>
                <?php
              }
                ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
<?php
  }
}


if($_REQUEST['olkhan']=="newsupdate")
  {
    if($_REQUEST['what']=="insert")
    {
      $nn=$_REQUEST['val'];
      if($nn!="")
      {
        $t=date('d-m-Y');
        mysqli_query($con,"insert into newsupdate values('','$t','$nn')");
      }
    }
    if($_REQUEST['what']=="delete")
    {
      $nd=$_REQUEST['val'];
        mysqli_query($con,"delete from newsupdate where nid='$nd'");
    }
    if($_REQUEST['what']=="display" || $_REQUEST['what']=="delete" || $_REQUEST['what']=="insert")
    {
  ?>  

<div class="row">
        <div class="col-xs-6">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">News & Update</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Date</th>
                  <th>News</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $seluser=mysqli_query($con,"select * from newsupdate");
                while($suser=mysqli_fetch_array($seluser))
                {

                ?>
                <tr style="cursor: pointer;">
                <td><?php echo $suser[1];?></td>
                  <td><?php echo $suser[2];?></td>
                  <td style="cursor: pointer;"><i class="fa fa-trash" onclick="displaydata('newsupdate','delete','<?php echo $suser[0];?>');"></i></td>
                </tr>
                <?php
              }
                ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->

        <div class="col-xs-6">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">News & Update</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="" name="newsupdate">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">News</label>

                  <div class="col-sm-10">
              
                    <textarea class="form-control" placeholder="Enter News & Update" rows="6" id="updates"></textarea>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="button" class="btn btn-info pull-right"  onclick="displaydata('newsupdate','insert',document.getElementById('updates').value);" >Add</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
        </div>
      </div>
<?php
  }
}


?>