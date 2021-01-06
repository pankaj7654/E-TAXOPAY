<?php  
  require_once('connect.php');
    $wrpass=0;
    $wrcapcha=0;
  

    $rpannum= "";
    $rusername="";
    $rdob= "";
    $rpassword= "";
    $rcpassword= "";
    $rsque= "";
    $rsans= "";
    $remail= "";
    $rmobile= "";
    $rflat= "";
    $rroad= "";
    $rarea= "";
    $rstate= "";
    $rcity= "";
    $rpincode="";
    $rpname="";
    $rinscapcha= "";


  if(isset($_REQUEST['Register']))
  {
    $rpannum= $_REQUEST['pannum'];
    $rusername= $_REQUEST['username'];
    $rdob= $_REQUEST['dob'];
    $rpassword= $_REQUEST['password'];
    $rcpassword= $_REQUEST['cpassword'];
    $rsque= $_REQUEST['sque'];
    $rsans= $_REQUEST['sans'];
    $remail= $_REQUEST['email'];
    $rmobile= $_REQUEST['mobile'];
    $rflat= $_REQUEST['flat'];
    $rroad= $_REQUEST['road'];
    $rarea= $_REQUEST['area'];
    $rstate= $_REQUEST['state'];
    $rcity= $_REQUEST['city'];
    $rpincode= $_REQUEST['pincode'];
    $rinscapcha= $_REQUEST['inscapcha'];
    $t=date('Y-m-d H:i:s');
    $dd=substr($rdob, 8);
    $mm=substr($rdob,5 ,2); 
    $yyyy=substr($rdob,0 ,4); 
    $fdate=$dd."-".$mm."-".$yyyy;
    
    if($_SESSION['capcha'] == $rinscapcha)
    {
      if($rpassword==$rcpassword)
      {
        if($_SESSION['utype']=="Individual")
        {
          $type=1;
           mysqli_query($con,"insert into user values('','$rpannum','$rusername','$fdate','NILL','$type','$rpassword','$rsque','$rsans','$rmobile','$remail','$rflat','$rroad','$rarea','$rpincode','$rcity','$rstate')");
           mysqli_query($con,"insert into login values('$rpannum','$rpassword','$t','$type','0')");
           header("location:login.php");
        }
        else
        {
          $type=2;
          $rpname=$_REQUEST['pname'];
           mysqli_query($con,"insert into user values('','$rpannum','$rusername','$fdate','$rpname','$type','$rpassword','$rsque','$rsans','$rmobile','$remail','$rflat','$rroad','$rarea','$rpincode','$rcity','$rstate')");
           mysqli_query($con,"insert into login values('$rpannum','$rpassword','$t','$type','0')");
           header("location:login.php");
        }
      }
      else
      {
        $wrpass=1;
      }
    }
    else
    {
      $wrcapcha=1;
    }
  }
?>
<!DOCTYPE HTML>
<html>
<?php  
    require_once('head.php'); 
?>
<body onload="capchino('cap');">
<?php  
    require_once('top1.php'); 
?>
<?php  
    require_once('top2.php'); 
?>
<!-- banner -->
  <div class="courses_banner">
  	<div class="container">
  		<h3 style="color:black">Register</h3>
  		<p class="description">
            <h4 style="color:black">Here you can register if you are a new user.</h4>
        </p>
        <div class="breadcrumb1">
            <ul>
                <li class="icon6"><a href="index.php">Home</a></li>
                <li class="current-page">Register</li>
            </ul>
        </div>
  	</div>
  </div>
    <!-- //banner -->
	<div class="courses_box1">
	   <div class="container">
	   	  <form class="login1" action="" method="post">
                <p class="lead" style="color:white">Register New Account  For <?php echo $_SESSION['utype'];?></p>
                <p class="detai" style="color:white">Personal Details</p>
                <label>Pancard Number</label>
                <div class="form-group">
                    <input type="text" autocomplete="off" class="required form-control" placeholder="Enter Pan Card Number" name="pannum" value="<?php echo $rpannum; ?>" required="" pattern="^[A-Z]{5}[0-9]{4}[A-Z]$" title="PlZ Enter Valid Format : Like EJYPK8432B" onblur="userfun(this.value);">
                </div>
                <?php
                if($_SESSION['utype']=="Individual")
                {
                ?><label>User Name</label><?php
                }
                else
                {
                ?><label>Company Name</label><?php
                }
                ?>
                <div class="form-group">
                    <input type="text" autocomplete="off" class="required form-control" placeholder="Enter Name" name="username" value="<?php echo $rusername; ?>" required="" pattern="[a-zA-Z ]+" title="Space Allow But Digit Not Allow ">
                </div>
                <?php
                if($_SESSION['utype']=="Individual")
                {
                ?><label>Date Of Birth</label><?php
                }
                else
                {
                ?><label>Establish Date</label><?php
                }
                ?>
                <div class="form-group">
                    <input type="date" value="<?php echo $rdob; ?>" autocomplete="off" class="required form-control" name="dob" value="" required="">
                </div>
                <?php
                if($_SESSION['utype']=="Company")
                {
                ?><label>Propryter Name</label>
                <div class="form-group">
                    <input type="text" autocomplete="off" class="required form-control" placeholder="Enter Propryter Name" name="pname" value="<?php echo $rpname; ?>" required="" pattern="[a-zA-Z ]+" title="Space Allow But Digit Not Allow ">
                </div>
                <?php
                }?>
                <p class="detai" style="color:white">Security Details</p>
                <label>User Id</label>
                <div class="form-group">
                    <input type="text" autocomplete="off" id="user" class="required form-control" readonly="" name="userid" placeholder="Userid">
                </div>
                <label>Password</label>
                <div class="form-group">
                    <input type="password" class="required form-control" placeholder="Enter Password" name="password" required="">
                </div>
                <label>Conform Password</label>
                <div class="form-group">
                    <input type="password" class="required form-control" placeholder="Re-Enter Password *" name="cpassword" required="">
                </div>
                <label>Security Question</label>
                <div class="form-group">
                    <select class="form-control" name="sque" required="">
                    <option value="">--Select Security Questions--</option>
                      <option value="What Is Your Pat Name?">What Is Your Pet Name ?</option>
                      <option value="What Is Your Favourite Food?">What Is Your Favourite Food?</option>
                      <option value="Who Is Your First Teacher?">Who Is Your First Teacher?</option>
                    </select>
                </div>
                <label>Security Answer</label>
                <div class="form-group">
                    <input type="text" autocomplete="off" class="required form-control" placeholder="Enter Security Answer" name="sans" required="">
                </div>
                <p class="detai" style="color:white">Contact Details</p>
                <label>Email Id</label>
                <div class="form-group">
                    <input type="email" autocomplete="off" class="required form-control" placeholder="Enter Email Id" name="email" value="<?php echo $remail; ?>" required="" pattern="[a-zA-Z0-9._]+[@][a-z]+[.][a-z]+" title="Example : Abc.009@gmail.com">
                </div>
                <label>Mobile Number</label>
                <div class="form-group">
                    <input type="text" autocomplete="off" class="required form-control" placeholder="Enter Mobile Number" name="mobile" value="<?php echo $rmobile; ?>" required="" pattern="[0-9]{10}" title="Only 10 Digit Allow">
                </div>
                <p class="detai" style="color:white">Current Address</p>
                <label>Flat/Door/Building</label>
                <div class="form-group">
                    <input type="text" autocomplete="off" class="required form-control" placeholder="Enter Flat/Building Number" name="flat" value="<?php echo $rflat; ?>" required="" pattern="[a-zA-Z0-9]+" title="Special Charactor Not Allow">
                </div>
                <label>Road/Street</label>
                <div class="form-group">
                    <input type="text" autocomplete="off" class="required form-control" placeholder="Road/Street" name="road" value="<?php echo $rroad; ?>" required="">
                </div>
                <label>Area/Locality</label>
                <div class="form-group">
                    <input type="text" autocomplete="off" class="required form-control" placeholder="Area/Locality" name="area" value="<?php echo $rarea; ?>" required="">
                </div>
                <label>Pin Code</label>
                <div class="form-group">
                    <input type="text" autocomplete="off" class="required form-control" placeholder="Enter City Pin Code" name="pincode" value="<?php echo $rpincode; ?>" required="" pattern="[0-9]{6}" title="Allow 6 Digit Only">
                </div>
                <label>State</label>
                <div class="form-group">
                    <select class="form-control" name="state" required="" onchange="citt(this.value,'city');">
                    <option value="">--Select State--</option>
                    <?php
                        $mk=mysqli_query($con, "select * from state");
                        while($kl=mysqli_fetch_array($mk))
                        {
                    ?>
                      <option value="<?php echo $kl[0]; ?>"><?php echo $kl[1]; ?></option>
                      
                      <?php
                        }
                      ?>
                    </select>
                </div>
                <label>City</label>
                <div class="form-group">
                    <select class="form-control" name="city" required="" id="cit">
                    <option value="">--Select City--</option>
                    </select>
                </div>
                <p  class="detai" style="color:white">Capcha Details</p>
                <label>Capcha</label>
                <div class="row" style="margin: 3px 3px 13px 3px;">
                    <div class="col-md-11" id="capchi" style="background: #eee;border-bottom : 2px grey solid;border-left:2px grey solid;border-top : 2px grey solid;">
                    </div>
                    <div class="col-md-1  capdisplay" style="background: #eee;border-bottom : 2px grey solid;border-right:2px grey solid;border-top : 2px grey solid;" onclick="capchino('cap');"><i class="fa fa-refresh"></i>
                    </div>
                </div>
                <label>As For Above</label>
                <div class="form-group">
                    <input type="text" autocomplete="off" class="required form-control" placeholder="Enter Capcha As Above" name="inscapcha" required="">
                </div>
                <?php 
                    if($wrcapcha==1)
                    {
                        ?>
                             <div class="error">
                                <p class="error">Capcha Dose Not Match</p>
                            </div>
                        <?php
                    }
                    if($wrpass==1)
                    {
                        ?>
                             <div class="error">
                                <p class="error">Password Dose Not Match</p>
                            </div>
                        <?php
                    }
                ?>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-lg1 btn-block" name="Register" value="Register">
                </div>
                <p>Already have an account? <a href="login.php">Sign In</a></p>
            </form>
	   </div>
	</div>
    <?php
        require_once('footer.php');         
    ?> 
</body>
</html>