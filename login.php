<?php  
  require_once('connect.php'); 
  $wruser=0;
  if(isset($_REQUEST['login']))
  {

    $uname=$_REQUEST['userid'];
    $pass=$_REQUEST['userpass'];
    
    
    $sel=mysqli_query($con,"select * from login where userid like '$uname' AND pass like '$pass'");
    $s=mysqli_fetch_array($sel);
    if($s[0]!="")
    {
      /*    if(isset($_REQUEST['remember']))
          {
            setcookie("cookieuserid",$_REQUEST['userid']);
            setcookie("cookiepass",$_REQUEST['userpass']);
          }
*/
            $_SESSION['usertype']=$s[3];
            $_SESSION['userpan']=$s[0];
            if($_SESSION['usertype']=='0')
            {
              header("location:admin/index.php");
            }
            else
            {
              header("location:index.php");
            }
    }
    else
    {
      $wruser=1;
    }
  }
?>
<!DOCTYPE HTML>
<html>
<?php  
    require_once('head.php'); 
?>
<body>
<?php  
    require_once('top1.php'); 
?>
<?php  
    require_once('top2.php'); 
?>
<!-- banner -->
  <div class="courses_banner">
  	<div class="container">
  		<p class="description">
             <h4>This is login page, Here you can login your account</h4>
        </p>
        <div class="breadcrumb1">
            <ul>
                <li class="icon6"><a href="index.php">Home</a></li>
                <li class="current-page" style="color:black;">Login</li>
            </ul>
        </div>
  	</div>
  </div>
    <!-- //banner -->
	<div class="courses_box1">
	   <div class="container text-center" style=" box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.4) ;width:30rem; background-color:lightyellow">
	   	  <form class="login" action="" method="post">
	    	<p class="lead">Welcome Back!</p>
		    <?php 
                    if($wruser==1)
                    {
                        ?>
                             <div class="error">
                                <p class="error">UserId Or Password MissMatch</p>
                            </div>
                        <?php
                    }
                ?>
                <br/>
        <div class="form-group ">
                  <input autocomplete="off" type="text" name="userid" class="required form-control" placeholder="PAN NO." value="" required="" style="border: 1px solid lightblue; padding-left:5px; font-size:18px;color:black;">
		    </div>
		    <div class="form-group">
			    <input autocomplete="off" type="password" class="password required form-control" placeholder="Password" value="" name="userpass" required="" style="border: 1px solid lightblue;padding-left:5px; font-size:18px;color:black;">
		    </div>
		    <div class="form-group" style="text-align: center; "> 
		    	<input type="checkbox" name="remember" value="true"> Remember Me<br/>
          <a href="forgot.php" style="cursor: pointer;">Forgot Password !</a>
          
		    	<input type="submit" class="btn btn-primary btn-lg1 btn-block" name="login" value="Log In">
		    </div>
	        <p>Don not have an account? <a href="register.php" title="Sign Up">Sign Up</a></p>
		 </form>
	   </div>
  </div>
    <?php
        require_once('footer.php');         
    ?> 
</body>
</html> 