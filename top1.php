<nav class="navbar navbar-default" role="navigation">
	<div class="container">
	    <div class="navbar-header">
	        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
	        </button>
	        <a class="navbar-brand" href="index.php">E-Taxopay</a>
	    </div>
	    <!--/.navbar-header-->
	    <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
	        <ul class="nav navbar-nav">
		        <?php
		            	if(isset($_SESSION['usertype']))
		            	{
		            			?>
		            			<li class="dropdown">
					            <a href="logout.php"><i class="fa fa-user"></i><span><h3 style="font-weight: bold; font-size:20px">LogOut</h3></span></a>
					        </li>
		            			<?php
		            	}
		            	else
		            	{
		            		?>
		            		<li class="dropdown">
						            <a href="login.php"><i class="fa fa-user"></i><span><h3 style="font-weight: bold; font-size:20px">Login</h3></span></a>
						        </li>
						        <li class="dropdown">
						            <a href="register.php"><i class="fa fa-user"></i><span><h3 style="font-weight: bold; font-size:20px">SignUp</h3></span></a>
						        </li>
		            		
		            		<?php
		            	}
		            ?>

		        
		    </ul>
	    </div>
	    <div class="clearfix"> </div>
	  </div>
	    <!--/.navbar-collapse-->
</nav>