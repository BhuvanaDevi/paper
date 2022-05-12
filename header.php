<?php
include("connection.php");

$email=isset($_COOKIE['email']) ? $_COOKIE['email'] :  "" ;

$sql = "select * from register where email='$email'";
	$result = mysqli_query($con, $sql);
	$no = mysqli_num_rows($result);
	$row = mysqli_fetch_row($result);

?>
<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.php" class="logo">
            <img src="assets/images/neon_logo.png" alt="Waste paper Traders"  height="70px">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
            
              <li><a href="index.php">Home</a></li>
              <li><a href="category.php">Category</a></li>
              <li><a href="listing.php">Listing</a></li>
              <li><?= isset($_COOKIE['email']) ? '<a href="notification.php">Notification</a>' : '<a href="notification.php">Notification</a>' ?></li> 
             <li><?= isset($_COOKIE['email']) ? '<p style="color:#fff;position:relative;top:6px;left:20px;color:#000 !important"><i class="fa fa-user">&nbsp;&nbsp;'.$row[1].'</i></p>' : '<a href="contact.php">Contact Us</a>' ?> </li> 
              <li><?= isset($_COOKIE['email']) ? '' : '<a href="signup.php">Signup</a>' ?></li> 
           <li><div class="main-white-button"><?= isset($_COOKIE['email']) ? '<a href="logout.php">Logout</a>' : '<a href="login.php">Login</a>' ?></div></li> 
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>