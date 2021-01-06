<?php  
  require_once('connect.php');
if ($_REQUEST['olkhan'] == "cap") {
    ?>
    <div class="capcha" style="font-size: 30px;">
        <font class="capitalcap capchaf">
            <?php
            $dig1 = chr(rand(65, 90));
            echo $dig1;
            $str = $dig1;
            ?>
        </font>
        <font class="digitcap capchaf" >
            <?php
            $dig2 = rand(0, 9);
            echo $dig2;
            $str = $str . $dig2;
            ?>
        </font>
        <font class="smallcap capchaf" >
            <?php           
            $dig3 = chr(rand(97, 122));
            echo $dig3;
            $str = $str . $dig3;
            ?>
        </font>
        <font class="digitcapp capchaf">
            <?php
            $dig4 = rand(0, 9);
            echo $dig4;
            $str = $str . $dig4;
            ?>
        </font>
        <font class="capitalcapp capchaf">
            <?php
            $dig5 = chr(rand(65, 90));
            echo $dig5;
            $str = $str . $dig5;

            $_SESSION['capcha'] = $str;
            ?>
        </font>
        
    </div>
    <?php
}

//Display Profile start
if($_REQUEST['olkhan']=="disprofile")
{
                  ?>
                <div class="row" class="">
                   <?php
                   $pan=$_SESSION['userpan'];
                    $sel=mysqli_query($con,"select * from user where pannum like '$pan'");
                    $s=mysqli_fetch_array($sel);

                    $gst=mysqli_query($con, "select statename from state where stateid='$s[16]'");
                    $kjl=mysqli_fetch_array($gst);

                    $gsts=mysqli_query($con, "select cityname from city where cityid='$s[15]'");
                    $kjls=mysqli_fetch_array($gsts);
                   ?>
                   <table class="col-md-12 dd">
                     <tr>
                       <td class="col-md-3 d1">PAN NUMBER</td>
                       <td class="col-md-9 d2"><?php echo $s[1];?></td>
                     </tr>
                     <tr>
                       <td class="col-md-3 d1">Name OF Assessee</td>
                       <td class="col-md-9 d2"><?php echo $s[2];?></td>
                     </tr>
                     <tr>
                      <?php 
                      if($s[5]=='1') 
                     {
                      ?>
                       <td class="col-md-3 d1">Date Of Birth</td>
                       <?php 
                        }else{
                        ?>
                          <td class="col-md-3 d1">Establish Date</td>
                        <?php
                        } ?>
                       <td class="col-md-9 d2"><?php echo $s[3];?></td>
                     </tr>


                     <tr>
                       <td class="col-md-3 d1">Status</td>
                       <td class="col-md-9 d2"><?php if($s[5]=='1'){echo "Individul";}?>
                         <?php if($s[5]=='2'){echo "Company";}?>
                       </td>
                     </tr>

                     <?php 
                      if($s[5]=='2') 
                     {
                      ?>
                     <tr>


                       <td class="col-md-3 d1">Properiter Name</td>
                       <td class="col-md-9 d2"><?php echo $s[4];?></td>
                     </tr>

                     <?php }
                     ?>
                     <tr>
                       <td class="col-md-3 d1">Address Of Assessee</td>
                       <td class="col-md-9 d2"><?php 
                      $addr=$s[11].', '.$s[12].', '.$s[13].', '.$kjl[0].', '.$kjls[0].', '.$s[14];
                      echo $addr; 
                    ?></td>
                     </tr>
                   </table>
                    </div>
                  <?php
}
//display Profile

  //update mobile and Contact start
if($_REQUEST['olkhan']=="discontact" || $_REQUEST['olkhan']=="savecontact" )
{
    if($_REQUEST['olkhan']=="savecontact")
    {
        $mb= $_REQUEST['mobile'];
        $em= $_REQUEST['email'];
        $ur=$_SESSION['userpan'];
        if($mb!="" && $em!="")
        {
            mysqli_query($con,"update user set mobile='$mb',email='$em' where pannum like '$ur'");    
        } 
    }
                   $pan=$_SESSION['userpan'];
                    $sel=mysqli_query($con,"select * from user where pannum like '$pan'");
                    $s=mysqli_fetch_array($sel);
                   ?>   
                    <div class="row">
                        <table class="col-md-12 dd">
                         
                     <tr>
                       <td class="col-md-3 d1">Mobile</td>
                       <td class="col-md-9 d2"><?php echo $s[9];?></td>
                     </tr>
                     <tr>
                       <td class="col-md-3 d1">Email</td>
                       <td class="col-md-9 d2"><?php echo $s[10];?></td>
                     </tr>
                     <tr>
                           <td class="col-md-12" align="right" colspan="2"><button class="btn btn-primary btn-lg1" type="button" onclick="editdetail('discontact','editcontact');">EDIT</button></td>
                         </tr>
                   </table>
                      </div>

    <?php
}
if($_REQUEST['olkhan']=="editcontact")
{
                   $pan=$_SESSION['userpan'];
                    $sel=mysqli_query($con,"select * from user where pannum like '$pan'");
                    $s=mysqli_fetch_array($sel);
                   ?>
                  <div class="row">
                  <form id="savecontact"  class="editprofile1">
                        <table class="col-md-12 dd">
                         
                     <tr>
                       <td class="col-md-3 d1">Mobile</td>
                       <td class="col-md-9"><input type="text" name="mobile" value="<?php echo $s[9];?>" /></td>
                     </tr>
                     <tr>
                       <td class="col-md-3 d1">Email</td>
                       <td class="col-md-9"><input type="email" name="email" value="<?php echo $s[10];?>" /></td>
                     </tr>
                     <tr>
                           <td class="col-md-12" align="right" colspan="2"><button class="btn btn-primary btn-lg1" type="button" onclick="editdetail('discontact','savecontact');">SAVE</button></td>
                         </tr>
                   </table>
                   </form>
                      </div>

    <?php
}
//update mobile and Contact over

//update address start
if($_REQUEST['olkhan']=="disaddress" || $_REQUEST['olkhan']=="saveaddress" )
{
    if($_REQUEST['olkhan']=="saveaddress")
    {
        $flt= $_REQUEST['flat'];
        $rd= $_REQUEST['road'];
        $ar= $_REQUEST['area'];
        $pin= $_REQUEST['pincode'];
        $ct= $_REQUEST['city'];
        $st= $_REQUEST['state'];
        $ur=$_SESSION['userpan'];
        if($flt!="" && $rd!="" && $ar!="" && $pin!="" && $ct!="" && $st!="" )
        {
            mysqli_query($con,"update user set flat='$flt',road='$rd',area='$ar',pincode='$pin',city='$ct',state='$st' where pannum like '$ur'");    
        } 
    }
                   $pan=$_SESSION['userpan'];
                    $sel=mysqli_query($con,"select * from user where pannum like '$pan'");
                    $s=mysqli_fetch_array($sel);

                    $gst=mysqli_query($con, "select statename from state where stateid='$s[16]'");
                    $kjl=mysqli_fetch_array($gst);

                    $gsts=mysqli_query($con, "select cityname from city where cityid='$s[15]'");
                    $kjls=mysqli_fetch_array($gsts);
                   ?>   
                    <div class="row">
                        <table class="col-md-12 dd">
                     <tr>
                       <td class="col-md-3 d1">Flat/Door/Building</td>
                       <td class="col-md-9 d2"><?php echo $s[11];?></td>
                     </tr>
                     <tr>
                       <td class="col-md-3 d1">Road/Street</td>
                       <td class="col-md-9 d2"><?php echo $s[12];?></td>
                     </tr>
                     <tr>
                       <td class="col-md-3 d1">Area/Locality</td>
                       <td class="col-md-9 d2"><?php echo $s[13];?></td>
                     </tr>
                     <tr>
                       <td class="col-md-3 d1">Pincode</td>
                       <td class="col-md-9 d2"><?php echo $s[14];?></td>
                     </tr>
                     <tr>
                       <td class="col-md-3 d1">Town/City/Distric</td>
                       <td class="col-md-9 d2"><?php echo $kjls[0];?></td>
                     </tr>
                     <tr>
                       <td class="col-md-3 d1">State</td>
                       <td class="col-md-9 d2"><?php echo $kjl[0];?></td>
                     </tr>
                     <tr>
                           <td class="col-md-12" align="right" colspan="2"><button class="btn btn-primary btn-lg1" type="button" onclick="editdetail('disaddress','editaddress');">EDIT</button></td>
                         </tr>
                   </table>
                      </div>

    <?php
}
if($_REQUEST['olkhan']=="editaddress")
{
                   $pan=$_SESSION['userpan'];
                    $sel=mysqli_query($con,"select * from user where pannum like '$pan'");
                    $s=mysqli_fetch_array($sel);
                   ?>
    <div class="row">
    <form id="saveaddress" class="editprofile1">
                         
                     <table class="col-md-12 dd">
                     <tr>
                       <td class="col-md-3 d1">Flat/Door/Building</td>
                       <td class="col-md-9"><input type="text" name="flat" value="<?php echo $s[11];?>" /></td>
                     </tr>
                     <tr>
                       <td class="col-md-3 d1">Road/Street</td>
                       <td class="col-md-9"><input type="text" name="road" value="<?php echo $s[12];?>" /></td>
                     </tr>
                     <tr>
                       <td class="col-md-3 d1">Area/Locality</td>
                       <td class="col-md-9"><input type="text" name="area" value="<?php echo $s[13];?>" /></td>
                     </tr>
                     <tr>
                       <td class="col-md-3 d1">Pincode</td>
                       <td class="col-md-9"><input type="text" name="pincode" value="<?php echo $s[14];?>" /></td>
                     </tr>

                     <tr>
                       <td class="col-md-3 d1">State</td>
                       <td class="col-md-9 ">
                           <select name="state" onchange="citt(this.value,'city');">
                                <?php
                                  $hj=mysqli_query($con,"select state from user where pannum='$_SESSION[userpan]'");
                                  $nj=mysqli_fetch_array($hj);

                                    $mk=mysqli_query($con, "select * from state");
                                    while($kl=mysqli_fetch_array($mk))
                                    {
                                        if($nj[0]==$kl[1])
                                        {
                                        ?>
                                        <option value="<?php echo $kl[0]; ?>"><?php echo $kl[1]; ?></option>
                                        <?php
                                        }
                                        else
                                        {
                                        ?>
                                        <option value="<?php echo $kl[0]; ?>"><?php echo $kl[1]; ?></option>
                                        <?php  
                                        }
                                ?>
                                  
                                  
                                  <?php
                                    }
                                  ?>
                                    
                            </select>
                       </td>
                     </tr>

                     <tr>
                       <td class="col-md-3 d1">Town/City/Distric</td>
                       <td class="col-md-9">
                           <select name="city" id="cit">
                           <?php
                           $gsts=mysqli_query($con, "select city from user where pannum like '$_SESSION[userpan]'");
                            $kjls=mysqli_fetch_array($gsts);

                            $gstf=mysqli_query($con, "select cityname from city where cityid=$kjls[0]");
                            $kjlf=mysqli_fetch_array($gstf);
                           ?>

                                <option value="<?php echo $kjls[0];?>"><?php echo $kjlf[0];?></option>
                                    
                                    
                                </select>

                       </td>
                     </tr>
                     
                     <tr>
                           <td class="col-md-12" align="right" colspan="2"><button class="btn btn-primary btn-lg1" type="button" onclick="editdetail('disaddress','saveaddress');">SAVE</button></td>
                         </tr>
                   </table>
                   </form>
                      </div>

    <?php
}
//update address Over


//Change Password Start
if($_REQUEST['olkhan']=="userpan")
{
  if($_REQUEST['pan']!="")
  {
    $pn=$_REQUEST['pan'];
    $sel=mysqli_query($con,"select * from user where pannum like '$pn'");
    $sp=mysqli_fetch_array($sel);
    if($sp[0]!="")
    {
        ?>
        <div class="form-group">
                    <select class="form-control" name="sque" id="sque" required="">
                    <option value="">--Select Security Questions--</option>
                      <option value="What Is Your Pat Name?">What Is Your Pat Name ?</option>
                      <option value="What Is Your Favourite Food?">What Is Your Favourite Food?</option>
                      <option value="Who Is Your First Teacher?">Who Is Your First Teacher?</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" autocomplete="off" required="" class="required form-control" placeholder="Answer *" name="sans" value="" onblur="usercheck('answer',document.getElementById('userid').value,document.getElementById('sque').value,this.value);">
                </div>
        <?php
    }
    else
    {
        ?>
        <div class="error">
            <p>User Id Is Worng</p>
        </div>
        <?php

    }
  }
  else
  {
    ?>
        <div class="error">
            <p class="error">User Id Is Worng</p>
        </div>
        <?php
  }
}

if($_REQUEST['olkhan']=="answer")
{
  if($_REQUEST['pan']!="")
  {
    $pn=$_REQUEST['pan'];
    $sel=mysqli_query($con,"select * from user where pannum like '$pn'");
    $sp=mysqli_fetch_array($sel);
    $que=$_REQUEST['sque'];
    $ans=$_REQUEST['sans'];
    if($sp[0]!="" && $sp[7 ]=="$que")
    {
        if($sp[8]=="$ans")
        {
        ?>
        
                <div class="form-group">
                    <input type="password" class="required form-control" placeholder="Password *" name="password" id="pass" required="">
                </div>
                <div class="form-group">
                    <input type="password" required="" class="required form-control" placeholder="Conform Password *" name="cpassword" id="cpass" onblur="usercheck('update',document.getElementById('userid').value,document.getElementById('pass').value,this.value);">
                </div>
        <?php
        }
        else
        {
            ?>
                <div class="error">
                    <p class="error">Security Answer Are Wong !</p>
                </div>
            <?php
        }
    }
    else
    {
        ?>
            <div class="error">
                <p class="error">Security Question Are Wong !</p>
            </div>
        <?php
    }
  }
}

if($_REQUEST['olkhan']=="update")
{
  if($_REQUEST['pan']!="")
  {
    $pn=$_REQUEST['pan'];
    $pass=$_REQUEST['sque'];
    $cpass=$_REQUEST['sans'];
    if($pass==$cpass)
    {
        ?>
        <div class="form-group">
                    <input required="" type="password" value="<?php echo $pass;?>" class="required form-control" placeholder="Password" name="pass1" id="pass1" >
                </div>
                <div class="form-group">
                    <input value="<?php echo $cpass;?>" required="" type="password" class="required form-control" placeholder="Conform Password"  name="cpass1" id="cpass1" onblur="usercheck('update',document.getElementById('userid').value,document.getElementById('pass1').value,this.value);">
                </div>
                <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg1 btn-block" name="forgot" style="letter-spacing: 1px;">Submit</button>
            </div>
           
        <?php
    }
    else
    {
        ?>
        <div class="error">
            <p class="error">Password Not Match</p>
        </div>
        <?php
    }
  }
}
//change password over
//display tax pay form
if($_REQUEST['olkhan']=='disform')
{
  $selyear=mysqli_query($con,"select * from taxpaymnet where ppannum like '$_SESSION[userpan]' AND year like '$_REQUEST[val]'");
    $syear=mysqli_fetch_array($selyear);
    
      if($syear[3]==$_REQUEST['val'])
      {
        ?>
           <div>
            <p align="center" style="font-size: 18px;color: red;font-weight: bold;margin: 2em;">Allready Tax Pay SuccessFully For <?php echo $syear[3]; ?></p>
        </div>
        <?php
      }
      else
      {
          ?>
          <div class="table-header clearfix">
                        <div style="width: 100%;background-color: blue;">Income And Deduction</div>
                        </div>
                        <div>
                          <table class="pay_form" style="width: 100%;">
                            <tr>
                              <td style="width: 6%;" align="center">B1</td>
                              <td style="width: 80%;" colspan="2"> &nbsp;&nbsp;&nbsp;Income From Salary / Pension (Ensure to Fill "Sch TDS1")</td>
                              <td style="width: 14%;"  align="center"><input type="" name="" value="0" id="i1" onblur="incomefun();taxcount();"></td>
                            </tr>
                            <tr>
                              <td style="width: 6%;" align="center" rowspan="2">B2</td>
                              <td style="width: 80%;" colspan="2"> &nbsp;&nbsp;&nbsp;Type Of House Property</td>
                              <td  style="width: 14%;" align="center">
                                  <select name="house" required="" style="width:100%;padding: 5px;">
                                    <option value="">--Select--</option>
                                    <option value="Self Occupied">Self Occupied</option>
                                    <option value="Let Out">Let Out</option>
                                  </select>
                              </td>
                            </tr>
                            <tr>
                              <td style="width: 6%;"  colspan="2">  &nbsp;&nbsp;&nbsp;Income From One House Property(If loss, Put The figure in negetive)</td>
                              <td style="width: 66%;" align="center"><input type="" name="" value="0" id="i2" onblur="incomefun();taxcount();"></td>
                            </tr>
                            <tr>
                              <td style="" align="center">B3</td>
                              <td  colspan="2"> &nbsp;&nbsp;&nbsp;Income From Other Source(Ensure to fill "Sch TDS2"</td>
                              <td align="center"><input type="" name="" value="0" id="i3" onblur="incomefun();taxcount();"></td>
                            </tr>
                            <tr>
                              <td align="center">B4</td>
                              <td colspan="2" ><b> &nbsp;&nbsp;&nbsp;Gross Total Income (B1+B2+B3)(If loss,put the figure in negative)</b></td>
                              <td  align="center"><input type="" name="total_i" value="0" readonly="" id="i4" onblur="incomefun();taxcount();"></td>
                            </tr>
                            <tr>
                              <td align="center"></td>
                              <td colspan="3"> &nbsp;&nbsp;&nbsp;Part C - Deduction And Taxable Total Income </td>
                            </tr>
                            <tr>
                              <td style="width: 6%;" align="center"></td>
                              <td style="width: 66%;"><b> &nbsp;&nbsp;&nbsp;Sections</b></td>
                              <td style="width: 14%;" align="center"><b>Amount</b></td>
                              <td style="width: 14%;" align="center"><b>System Calculatd</b></td>
                            </tr>
                            <tr>
                              <td align="center"></td>
                              <td >D1 (LIC,Tution fee <=1,50,000)</td>
                              <td align="center"><input type="" name="" value="0" onblur="systemd1();deductionfun();taxcount();" id="d1"></td>
                              <td align="center"><input type="" name="" value="0" id="dd1" readonly=""></td>
                            </tr>
                            <tr>
                              <td align="center"></td>
                              <td >D2 (NPS <=50,000)</td>
                              <td align="center"><input type="" name="" value="0" onblur="systemd2();deductionfun();taxcount();" id="d2"></td>
                              <td align="center"><input type="" name="" value="0" id="dd2" readonly=""></td>
                            </tr>
                            <tr>
                              <td align="center"></td>
                              <td >D3 (Interest on Home Loan <=2,00,000)</td>
                              <td align="center"><input type="" name="" value="0" onblur="systemd3();deductionfun();taxcount();" id="d3"></td>
                              <td align="center"><input type="" name="" value="0" id="dd3" readonly=""></td>
                            </tr>
                            <tr>
                              <td align="center"></td>
                              <td >D4 (Medical Insurance <=25000)</td>
                              <td align="center"><input type="" name="" value="0" onblur="systemd4();deductionfun();taxcount();" id="d4"></td>
                              <td align="center"><input type="" name="" value="0" id="dd4" readonly=""></td>
                            </tr>
                            <tr>
                              <td align="center"></td>
                              <td >D5 (Charity and Donation 1/2 of amount)</td>
                              <td align="center"><input type="" name="" value="0" onblur="systemd5();deductionfun();taxcount();" id="d5"></td>
                              <td align="center"><input type="" name="" value="0" id="dd5" readonly=""></td>
                            </tr>

                            <tr>
                              <td align="center">C1</td>
                              <td ><b>Total Deduction</b></td>
                              <td align="center"><input type="" name="" value="0" readonly="" id="texpence"></td>
                              <td align="center"><input type="" name="total_d" value="0" readonly="" id="ttexpence"></td>
                            </tr>
                            <tr>
                              <td align="center">C2</td>
                              <td colspan="2" ><b>Tax Payble on Total Income (B4-C1)</b></td>
                              <td align="center"><input type="" name="total_n" value="0" readonly="" id="totaldeduction"></td>
                            </tr>
                            <tr>
                              <td align="center"></td>
                              <td colspan="3"> &nbsp;&nbsp;&nbsp;Part D - Computation of Tax Payable </td>
                            </tr>

                             <tr>
                              <td align="center">D6</td>
                              <td colspan="2" ><b>Total Tax</b></td>
                              <td align="center"><input type="" name="total_t" value="0" readonly="" id="total_tax"></td>
                            </tr>
                          </table>

                        </div>
                        <div class="row" style="margin: 10px;">
                          <div class="col-md-8"></div>
                          <div class="col-md-2">
                            <button class="btn btn-primary btn-lg1 btn-block" type="reset">CLEAR</button>
                          </div> 
                          <div class="col-md-2">
                            <button class="btn btn-primary btn-lg1 btn-block" type="submit" name="payment">SUBMIT </button>
                          </div>
                      </div>
          <?php
          
      }
    
}


if($_REQUEST['olkhan']=="city")
{
    if($_REQUEST['val']!="")
    {
        $get=mysqli_query($con, "select * from city where stateid='$_REQUEST[val]'");
        while($op=mysqli_fetch_array($get))
        {
          ?>
            <option value="<?php  echo $op[0];?>"><?php  echo $op[1];?></option>
          <?php
        }

    }
}
?>

