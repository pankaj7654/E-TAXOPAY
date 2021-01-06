<?php  
  require_once('connect.php'); 
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
      <h3>About</h3>
      <p class="description">
        </p>
        <div class="breadcrumb1">
            <ul>
                <li class="icon6"><a href="index.php">Home</a></li>
                <li class="current-page">About</li>
            </ul>
        </div>
    </div>
  </div>
    <!-- //banner -->
  <div class="features">
        <h1  style="background-color:lightgreen;">News & Updates</h1>
      <div class="container">
      <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="news">
                    <div class="section-content">
                      
                        <?php 
                        $selnews=mysqli_query($con,"select * from newsupdate");
                        while($sn=mysqli_fetch_array($selnews))
                        {
                            ?>
                            <article>
                                <figure class="date"><i class="fa fa-file-o"></i><?php echo $sn[1]; ?></figure>
                                <a><?php echo $sn[2];?></a>
                            </article>
                            <?php
                        }
                        ?>
                      
                    </div><!-- /.section-content -->
                    
                </div><!-- /.news-small -->
            </div>
            <div class="col-md-1"></div>
      </div>
      
    </div>
  </div>
    <?php
    require_once('footer.php');     
  ?> 
</body>
</html> 