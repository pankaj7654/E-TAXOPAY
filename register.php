<?php  
  require_once('connect.php'); 
  if(isset($_REQUEST['next']))
  {
    $type1=$_REQUEST['usertype'];
    $_SESSION['utype']=$type1;
    header('location:register1.php');
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
             <h4>Here you can select type of user</h4>
        </p>
      <div class="breadcrumb1">
            <ul>
                <li class="icon6"><a href="index.php">Home</a></li>
                <li class="current-page" style="black">Register</li>
            </ul>
        </div>
  		
        
  	</div>
  </div>
    <!-- //banner -->
	<div class="courses_box1">
    <div class="container text-center" style=" box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.4) ;width:36rem; background-color:lightyellow">
	   	  <form class="login" action="" method="post">
                <p class="lead">Register New Account</p>
                <div class="typeselect" style="text-align: center;">
                    <input type="radio" class="required" name="usertype" value="Individual">Individual
                    <input type="radio" class="required" name="usertype" value="Company">Company
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-lg1 btn-block" name="next" value="Next">
                </div>
                <p>Already have an account? <a href="login.php">Sign In</a></p>
            </form>
	   </div>
    </div>
</div>
    <?php
        require_once('footer.php');         
    ?> 
</body>
</html>