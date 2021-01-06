<nav class="navbar nav_bottom" role="navigation" style="background-color:lightgreen">
 <div class="container">
 <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header nav_2">
      <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"></a>
   </div> 
   <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
        <ul class="nav navbar-nav nav_1">
            <?php
              if(isset($_SESSION['userpan']))
              {
                ?>
              <li><a href="userhome.php"><h4 style="font-weight: bold; font-size:20px">Home</h4></a></li>
            <?php
              }
              else
              {
                ?>
                  <li><a href="index.php"><h4 style="font-weight: bold; font-size:20px">Home</h4></a></li>
                <?php
              }
            ?>
            <li><a href="about.php"><h4 style="font-weight: bold; font-size:20px">About</h4></a></li>
            <li><a href="services.php"><h4 style="font-weight: bold; font-size:20px">Services</h4></a></li>
            <li><a href="contact.php"><h4 style="font-weight: bold; font-size:20px">Contacts</h4></a></li>
            <?php
              if(isset($_SESSION['userpan']))
              {
                ?>
                  <li><a href="payment.php"><h4 style="font-weight: bold; font-size:20px">E-Pay</h4></a></li>
                <?php
              }
            ?>
            <?php
              if(isset($_SESSION['userpan']))
              {
                ?>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><h4 style="font-weight: bold; font-size:20px">Profile Setting</h4> <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu" >
                      <li><a href="profile.php?what=profile"><h4 style="font-weight: bold; font-size:20px">My Profile</h4></a></li>
                      <li><a href="profile.php?what=password"><h4 style="font-weight: bold; font-size:20px">Change Password</h4></a></li>
                      <li><a href="profile.php?what=security"><h4 style="font-weight: bold; font-size:20px">Change Securiry Question/Answer</h4></a></li>
                  </ul>
                </li>
                <?php
              }
            ?>
            <?php
              if(isset($_SESSION['userpan']))
              {
                ?>
                  <li><a href="transactions.php"><h4 style="font-weight: bold; font-size:20px">My Transactios</h4></a></li>
                <?php
              }
            ?>
        </ul>
     </div><!-- /.navbar-collapse -->
   </div>
</nav>