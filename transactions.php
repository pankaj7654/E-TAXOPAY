<?php  
	require_once('connect.php'); 
   require_once("usersecure.php");
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
<div class="courses_banner">
  	<div class="container">
  		<h3 style="color:black">My Transaction</h3>
  		<p class="description">
        <h4>Here you can see all your TRANSACTION which you have done</h4>
        </p>
        <div class="breadcrumb1">
            <ul>
                <li class="icon6"><a href="index.php">Home</a></li>
                <li class="current-page">My Transaction</li>
            </ul>
        </div>
  	</div>
  </div>

  <div class="courses_box1">
     <div class="container">
         <div class="col-md-12 grid_1_right">
              <h2 style="color:white;">Transaction</h2>
        </div>
    <div class="col-md-12">
      <div class="course_list">
                <div class="table-header clearfix">
                  <div class="name_col" style="width: 15%;">Year</div>
                    <div class="duration_col" style="width: 15%;">Total Income</div>
                    <div class="date_col" style="width: 20%;">Total Expences</div>
                    <div class="duration_col" style="width: 15%;">Net Income</div>
                    <div class="date_col" style="width: 15%;">Total Tax</div>
                    <div class="date_col" style="width: 20%;">Date</div>
                </div>
                    <ul class="table-list">
                        <?php
                          $seldata=mysqli_query($con,"select * from taxpaymnet where ppannum like '$_SESSION[userpan]' order by year desc");
                          while($sd=mysqli_fetch_array($seldata))
                          {
                            ?>
                              <li class="clearfix">
                          <div class="name_col" style="width: 15%;"><?php echo $sd[3];?></div>
                          <div class="duration_col" style="width: 15%;"><?php echo $sd[5];?></div>
                          <div class="duration_col" style="width: 20%;"><?php echo $sd[6];?></div>
                          <div class="date_col" style="width: 15%;"><?php echo $sd[7];?></div>
                          <div class="date_col" style="width: 15%;"><?php echo $sd[8];?></div>
                          <div class="date_col" style="width: 20%;"><?php echo $sd[9];?></div>
                              </li>
                            <?php
                          }
                        ?>
                      </ul>
               </div>
        </div>
        <div class="clearfix"> </div>
     </div>
  </div>
  <?php

  ?>
	<?php
		require_once('footer.php'); 		
	?> 
</body>
</html>	