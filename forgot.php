<?php  
  require_once('connect.php');
  $er1=0;
  if(isset($_REQUEST['forgot']))
  {
    $pn=$_REQUEST['userid'];
    $pass=$_REQUEST['pass1'];
    $cpass=$_REQUEST['cpass1'];
    if($pass==$cpass)
    {
        $seluser=mysqli_query($con,"update user set pass='$pass' where pannum like '$pn'");
        $sellogin=mysqli_query($con,"update login set pass='$pass' where userid like '$pn'");
        header("location:login.php");
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
  		<h3>Forgot Password</h3>
  		<p class="description">
        </p>
        <div class="breadcrumb1">
            <ul>
                <li class="icon6"><a href="index.php">Home</a></li>
                <li class="current-page">Forgot Password</li>
            </ul>
        </div>
  	</div>
  </div>
    <!-- //banner -->
	<div class="courses_box1">
	   <div class="container">
	   	  <form class="login" method="post">
	    	<p class="lead">Change Your Password!</p>
		    <div class="form-group">
			    <input autocomplete="off" type="text" name="userid" class="required form-control" required="" placeholder="Enter User Id" onblur="usercheck('userpan',this.value,'','');" id="userid">
		    </div>
        <div id="dis"></div>
        <br/>
	        <p>Already have an account? <a href="login.php">Sign In</a></p>
		 </form>
	   </div>
	</div>
    <?php
        require_once('footer.php');         
    ?> 
</body>
</html> 