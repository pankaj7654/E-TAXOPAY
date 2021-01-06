<?php  
	require_once('connect.php');
   require_once("usersecure.php"); 
  if(isset($_REQUEST['payment']))
  {
    $syear=$_REQUEST['year'];
    $fftype=$_REQUEST['ITR'];
    $total_ii=$_REQUEST['total_i'];
    $total_nn=$_REQUEST['total_n'];
    $total_dd=$_REQUEST['total_d'];
    $total_tt=$_REQUEST['total_t'];
    $t=date('Y-m-d H:i:s');
    $seldob=mysqli_query($con,"select * from user where pannum like '$_SESSION[userpan]'");
    $sbod=mysqli_fetch_array($seldob);
    mysqli_query($con,"insert into taxpaymnet values('','$_SESSION[userpan]','$sbod[3]','$syear','$fftype','$total_ii','$total_dd','$total_nn','$total_tt','$t')");
    header("location:checkout.php");
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
<div class="courses_banner">
  	<div class="container">
  		<h3 style="color:black">E-Payment</h3>
  		<p class="description">
          <h4>Here we have to select year after that open (ITR1,ITR2,ITR3,ITR4,ITR5,ITR6,ITR7,ITR-V) file which you have to fill.</h4>  
                  </p>
        <div class="breadcrumb1">
            <ul>
                <li class="icon6"><a href="index.php">Home</a></li>
                <li class="current-page">Payment</li>
            </ul>
        </div>
  	</div>
  </div>

  <div class="grid_1">
      <div class="container">
        <div class="col-md-12 grid_1_right">
              <h2>ITR Submission Form</h2>
        </div>
        <div class="container">
          <div class="container">
              <div class="col-md-12">
                <div class="course_list">
                    <form action="" method="post">
                    <div class="row payheader">
                      <div class="col-md-4">
                        <table>
                          <tr>
                            <td style="font-weight: bold;">Pan Number : </td>
                            <td><input type="" name="" readonly="" size="15" value="<?php echo $_SESSION['userpan'];?>"></td>
                          </tr>
                        </table>    
                      </div> 
                      <div class="col-md-4">
                        <table>
                          <tr>
                            <td style="font-weight: bold;">Select Year : </td>
                            <td>
                              <select  name="year" style="width: 150%;" required="" onchange="checkpay('displayform','disform',this.value);">
                                <option value="">--Select Year--</option>
                                <option value="2019-2020">2020-2021</option>
                                <option value="2019-2020">2019-2020</option>
                                <option value="2018-2019">2018-2019</option>
                                <option value="2017-2018">2017-2018</option>
                                <option value="2016-2017">2016-2017</option>
                                <option value="2015-2016">2015-2016</option>
                                <option value="2014-2015">2014-2015</option>
                              </select>
                            </td>
                          </tr>
                        </table>
                      </div>
                      <div class="col-md-4">
                        <table>
                          <tr>
                            <td style="font-weight: bold;">Select ITR Form : </td>
                            <td>
                              <select  name="ITR" style="width: 140%;" required="" onchange="checkpay('displayform','disform',this.value);">
                                <option value="">--Select ITR form--</option>
                                <option value="ITR-1" name="ftype">ITR1</option>  
                                <option value="ITR-1" name="ftype">ITR2</option>
                                <option value="ITR-1" name="ftype">ITR3</option>
                                <option value="ITR-1" name="ftype">ITR4</option>
                                <option value="ITR-1" name="ftype">ITR5</option>
                                <option value="ITR-1" name="ftype">ITR6</option>
                                <option value="ITR-1" name="ftype">ITR7</option>
                                
                              </select>
                            </td>
                          </tr>
                        </table>    
                      </div>      
                    </div>    
                        
                        
                        
                        <div id="displayform">
                          
                        </div>
                      </from>
                   </div>
                </div>
                <div class="clearfix"> </div>
             </div>
        </div> 
      </div>
  </div>
	

  <?php
		require_once('footer.php'); 		
	?> 
</body>
</html>	