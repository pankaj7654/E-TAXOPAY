<?php  
	require_once('connect.php'); 
   require_once("usersecure.php");
  if(isset($_REQUEST['what']))
  {
    $_SESSION['what']=$_REQUEST['what'];
    header("location:profile.php");
  }
  $ercp=0;
  $erncp=0;
  $erans=0;
  if(isset($_REQUEST['change']))
  {
    $cp=$_REQUEST['cpass'];
    $np=$_REQUEST['npass'];
    $cnp=$_REQUEST['cnpass'];
    $pn=$_SESSION['userpan'];
    $selpass=mysqli_query($con,"select pass from user where pannum like '$pn'");
    $sp=mysqli_fetch_array($selpass);
    if($sp[0]==$cp)
    {
      if($np==$cnp)
      {
          mysqli_query($con,"update user set pass='$np' where pannum like '$pn'");
          mysqli_query($con,"update login set pass='$np' where userid like '$pn'");
      }
      else
      {
        $erncp=1;
      }
    } 
    else
    {
      $ercp=1;
    }
  }


  if(isset($_REQUEST['changeans']))
  {
    $csqe=$_REQUEST['sqe'];
    $cans=$_REQUEST['ans'];
    $pn=$_SESSION['userpan'];

      if($cans!="")
      {
          mysqli_query($con,"update user set question='$csqe',answer='$cans' where pannum like '$pn'");
      }
      else
      {
        $erans=1;
      }
  }

?>
<!DOCTYPE HTML>
<html>
<head>
  <link rel="stylesheet" type=text/css href="style.css"/>
  </head>
<?php  
	require_once('head.php'); 
?>
<body onload="editdetail('disprofile','disprofile');">
<?php  
	require_once('top1.php'); 
?>
<?php  
	require_once('top2.php'); 
?>
<div class="courses_banner">
  	<div class="container">
  		<h3 style="color:black">User Profile</h3>
  		<p class="description">
        <h4>This is your profile here you can see all details about you which you have been mentioned.</h4>     
    </p>
        <div class="breadcrumb1">
            <ul>
                <li class="icon6"><a href="index.php">Home</a></li>
                <li class="current-page " style="color:black">User Profile</li>
            </ul>
        </div>
  	</div>
  </div>
<?php
  if($_SESSION['what']=="profile")
  {
     ?>

     <div class="grid_1">
      <div class="container">
        <div class="col-md-12 grid_1_right">
              <h2>My Profile</h2>
          <div class="but_list">
           <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
        <ul id="myTab" class="nav nav-tabs nav-tabs1" role="tablist" style="background-color:green;">
          <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true" onclick="editdetail('disprofile','disprofile');">PAN Details</a></li>
          <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" onclick="editdetail('disaddress','disaddress');">Address</a></li>
          <li role="presentation"><a href="#profile1" role="tab" id="profile-tab1" data-toggle="tab" aria-controls="profile1" onclick="editdetail('discontact','discontact');">Contact  Detail</a></li>
        </ul>
      <div id="myTabContent" class="tab-content">
        <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
          
         <div class="events_box">
         <div class="courses_box1">
               <div class="row">
                  <div class="col-md-12">
                    <div class="courses_box1-left">
                      <div id="disprofile">
                        
                      </div> 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
          <div class="events_box">
            <div class="courses_box1">
               <div class="row">
                  <div class="col-md-12">
                    <div class="courses_box1-left">
                      <div id="disaddress">
                        
                      </div> 
                    </div>  
                  </div>
                </div>
            </div>
         </div>
         
      </div>
      <div role="tabpanel" class="tab-pane fade" id="profile1" aria-labelledby="profile-tab1">
          <div class="events_box">
            <div class="courses_box1">
               <div class="row">
                  <div class="col-md-12">
                    <div class="courses_box1-left">
                      <div id="discontact">
                        
                      </div> 
                    </div>  
                  </div>
                </div>
            </div>
         </div>
         </div>
         </div>
        </div>
       </div>
      </div>
      <div class="clearfix"> </div>
     </div>
    </div>

     <?php
  } 
  if ($_SESSION['what']=="password") {
     ?>

       <div class="grid_1">
      <div class="container">
        <div class="col-md-12 grid_1_right">
              <h2>Change Password</h2>
              <div class="events_box">
              <div class="courses_box1">
               <div class="row">
                  <div class="col-md-12">
                  
                    <div class="courses_box1-left">
                      <div class="row">
                      <form action="" method="post" class="editprofile1">
                        <table class="col-md-12 dd">
                         <tr>
                           <td class="col-md-3 d1">Current Password</td>
                           <td class="col-md-6"><input type="text" name="cpass" placeholder="Enter your current password" /></td>
                           <td class="col-md-3">
                            <?php 
                              if($ercp==1){
                                ?>
                                <div class="error">
                                    <p class="error">Password Is Worng</p>
                                </div>
                                <?php
                              }
                              ?>
                           </td>
                         </tr>
                         <tr>
                           <td class="col-md-3 d1">New Password</td>
                           <td class="col-md-6"><input type="text" name="npass" placeholder="Enter new password" /></td>
                           <td class="col-md-3"></td>
                         </tr>
                         <tr>
                           <td class="col-md-3 d1">Conform New Password</td>
                           <td class="col-md-6"><input type="text" name="cnpass" placeholder="Re-enter your new password" /></td>
                           <td class="col-md-3">
                             <?php 
                              if($erncp==1){
                                ?>
                                <div class="error">
                                    <p class="error">Password Does Not Match</p>
                                </div>
                                <?php
                              }
                              ?>

                           </td>
                         </tr>
                         <tr>
                           <td class="col-md-3"></td>
                           <td class="col-md-6" ><button class="btn btn-primary btn-lg1" type="submit" name="change">Change Password</button></td>
                           <td class="col-md-3"></td>
                         </tr>
                   </table>
                   </form>
                    </div>  
                  </div>
                </div>
            </div>
          
      </div>
          </div>
      <div class="clearfix"> </div>
     </div>
    </div>


     <?php
   } 
  if ($_SESSION['what']=="security") {
     ?>
      <div class="grid_1">
      <div class="container">
        <div class="col-md-12 grid_1_right">
              <h3>Change Secrate Question/Answer</h3>
              <div class="events_box">
              <div class="courses_box1">
               <div class="row">
                  <div class="col-md-12">
                  
                    <div class="courses_box1-left">
                      <div class="row">
                      <form action="" method="post" class="editprofile1">
                        <table class="col-md-12 dd">
                         <tr>
                         <?php
                           $pan=$_SESSION['userpan'];
                            $sel=mysqli_query($con,"select * from user where pannum like '$pan'");
                            $s=mysqli_fetch_array($sel);
                           ?>
                           <td class="col-md-3 d1">Security Question</td>
                           <td class="col-md-6">
                             <select name="sqe">
                                <option value="<?php echo $s[7];?>"><?php echo $s[7];?></option>
                                <option value="What Is Your Pat Name?">What Is Your Pat Name ?</option>
                                <option value="What Is Your Favourite Food?">What Is Your Favourite Food?</option>
                                <option value="Who Is Your First Teacher?">Who Is Your First Teacher?</option>
                              </select>
                           </td>
                           <td class="col-md-3"></td>
                         </tr>
                         <tr>
                           <td class="col-md-3 d1">Security Answer</td>
                           <td class="col-md-6"><input type="text" name="ans" value="<?php echo $s[8]; ?>" /></td>
                           <td class="col-md-3">
                             <?php 
                              if($erans==1){
                                ?>
                                <div class="error">
                                    <p class="error">Answer Is Not Correct</p>
                                </div>
                                <?php
                              }
                              ?>

                           </td>
                         </tr>
                         <tr>
                           <td class="col-md-3"></td>
                           <td class="col-md-6" align="right"><button class="btn btn-primary btn-lg1" type="submit" name="changeans">Change</button></td>
                           <td class="col-md-3"></td>
                         </tr>
                   </table>
                   </form>
                    </div>  
                  </div>
                </div>
            </div>
          
      </div>
          </div>
      </div>
      <div class="clearfix"> </div>
     </div>
    </div>

     <?php
   } 
    
?>
	<?php
		require_once('footer.php'); 		
	?> 
</body>
</html>	