<?php  
	require_once('connect.php'); 
	if(isset($_REQUEST['submit']))
	{
		$nam=$_REQUEST['name'];
		$ema=$_REQUEST['email'];
		$mob=$_REQUEST['mobile'];
		$msg=$_REQUEST['msg'];

		$pancard=$_REQUEST['pancard'];
		mysqli_query($con,"insert into contact values('','$pancard','$nam','$ema','$mob','$msg')");
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
  		<h3 style="color:black">Contact</h3>
  		<p class="description">
           <h4>Centralized Processing Centre, Income Tax Department, Bengaluru 560500. efilingwebmanager@incometax.gov.in</h4>
        <div class="breadcrumb1">
            <ul>
                <li class="icon6"><a href="index.php">Home</a></li>
                <li class="current-page" style="color:black">Contact</li>
            </ul>
        </div>
  	</div>
  </div>
    <!-- //banner -->
	<div class="features" style="background-color:lightyellow;">
	   <div class="container">
	   	  <h1 style="background-color:lightblue;">How to find us</h1>
	   	  
		  <p></p>
		  <div class="wrapper">
				<div class="col_1">
					<i class="fa fa-home  icon2"></i>
					<div class="box">
						<p class="marTop9">7224, sector 2, BTM Layout, pin: 560076<br>Near Mico Layout police station</p>
					</div>
				</div>

				<div class="col_2">
					<i class="fa fa-phone  icon2"></i>
					<div class="box">
						<p class="marTop9">+91 6268698585<br>+91 6268698585</p>
					</div>
				</div>

				<div class="col_2">
					<i class="fa fa-envelope icon2"></i>
					<div class="box">
						<p class="m_6"><a href="mailto@example.com" class="link4">help.etaxopay@gmail.com</a></p>
					</div>
				</div>
				<div class="clearfix"> </div>
		 </div>
		 <form class="contact_form" action="" method="post">
		 	<h2>Contact form</h2>
			<div class="col-md-6 grid_6">
				<input type="text" class="text" name="pancard" placeholder="Enter Your Pancard Number" required="" pattern="[A-Z]{5}[0-9]{4}[A-Z]" title="Capidal AlphaBet Allow Like : EJYPK8432B"  style="border:1px solid black;box-shadow:0px 0px 3px 2px lightblue; font-size:18px">
				<input type="text" class="text" name="email" placeholder="Enter Email Address" required="" pattern="[a-zA-Z0-9._]+[@][a-z]+[.][a-z]+" title="Example : Abc.009@gmail.com"  style="border:1px solid black;box-shadow:0px 0px 3px 2px lightblue;font-size:18px">
				<input type="text" class="text" name="mobile" placeholder="Enter Mobile Number" required="" pattern="[0-9]{10}" title="Only 10 Digit Allow"  style="border:1px solid black;box-shadow:0px 0px 3px 2px lightblue;font-size:18px">
			</div>
	
			<div class="col-md-6 grid_6">
				<input type="text" class="text" name="name" placeholder="Enter Your Name" required="" pattern="[a-zA-Z ]+" title="Space Allow But Digit Not Allow "  style="border:1px solid black;box-shadow:0px 0px 3px 2px lightblue;font-size:18px">
				<textarea placeholder="Enter Your Message" name="msg"  style="border:1px solid black;box-shadow:0px 0px 3px 2px lightblue;"></textarea>
			</div>
            <div class="clearfix"> </div>
            	
                <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-lg1 btn-block" style="width: 20% !important; margin-left: 79% !important;" name="submit" value="Submit">
                </div>
		 </form>
							
						
	  </div>
	</div>
	
	<?php
		require_once('footer.php'); 		
	?> 
</body>
</html>	