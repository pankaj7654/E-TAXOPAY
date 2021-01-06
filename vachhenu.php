<div class="grid_1">
     	<div class="container">
     	<div class="row">
     		<div class="col-md-3">
                <div class="news">
                    <h1  style="background-color:lightblue;">Services</h1>
                    <div class="section-content">
                        <article>
                        <figure class="date"><i class="fa fa-file-o"></i>05-02-2020</figure>
                            <a href="#"></a>
                        <ul>
                            <li><a href="services.php">Link Aadhaar</a></li>
                            <li><a href="services.php">Quick Filing of Returns</a></li>
                            <li><a href="services.php">Submit Returns / Forms</a></li>
                            <li><a href="services.php">e-Verify Return</a></li>
                            <li><a href="services.php">Tax Calculators</a></li>
                            <li><a href="services.php">E-Pay Tax</a></li>
                        </ul>
                        </article>
                    </div><!-- /.section-content -->
                    <a href="services.php" class="read-more">All News</a>
                </div><!-- /.news-small -->
            </div>
            <div class="col-md-6">
                <div class="news">
                    <h1  style="background-color:lightgreen;">News & Updates</h1>
                    <div class="section-content"  style="height: 230px;overflow: scroll;">

                        
                        <?php 
                        $selnews=mysqli_query($con,"select * from newsupdate ORDER BY nid DESC LIMIT 0,3");
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
                    <a href="news.php" class="read-more">All News</a>
                </div><!-- /.news-small -->

         <div class="clearfix"> </div>
            </div>
            <div class="col-md-3">
                <div class="news">
                    <h1  style="background-color:lightblue;">DownLoads</h1>
                    <div class="section-content" style="height: 230px;">
                        <article>
                            <figure class="date"><i class="fa fa-file-o"></i>05-02-2020</figure>
                            <a href="#"></a>
                        </article>
                    </div><!-- /.section-content -->
                    <a href="#" class="read-more">All News</a>
                </div><!-- /.news-small -->
            </div>
     	</div>
     	 <div class="clearfix"> </div>
         <div style="clear:  both;"></div>
   	</div>

</div>
<!--<div class="bg">
     	<div class="container">
     		
			<div class="newsletter">
			  
            </div>
        </div>
</div>

<div-- class="grid_1">
     	<div class="container">
     	<div class="row">
     		<div class="col-md-6">
                <div class="news">
                    <h1>Logos</h1>
                    <div class="section-content">
                        <article>
                            <figure class="date"><i class="fa fa-file-o"></i>05-02-2020</figure>
                            <a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a>
                        </article>
                    </div>
                    <a href="#" class="read-more">All News</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="news">
                    <h1>Statistics</h1>
                    <div class="section-content">
                        <article>
                            <figure class="date"><i class="fa fa-file-o"></i>05-02-2020</figure>
                            <a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a>
                        </article>
                    </div>
                    <a href="#" class="read-more">All News</a>
                </div>
            </div>
     	</div>
     	
   	</div>

</div-->
