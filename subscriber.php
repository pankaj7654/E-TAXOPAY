<?php
	if(isset($_REQUEST['subscribe']))
	{
		mysqli_query($con, "insert into subscriber values('','$_REQUEST[subemail]')");
	}

?>
<div class="bg">
     	<div class="container .newsletter">
			<div class="newsletter">
			  <form action="" method="post">
				<input type="text" name="subemail" size="30" required="" placeholder="Please fill your email" required="" pattern="[a-zA-Z0-9._]+[@][a-z]+[.][a-z]+" title="Example : Abc.009@gmail.com">
				<input type="submit" name="subscribe" value="Subscribe">
			  </form>
            </div>
        </div>
   </div>