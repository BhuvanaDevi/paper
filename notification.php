<?php
include("connection.php");
error_reporting(0);

$email=isset($_COOKIE['email']) ? $_COOKIE['email'] :  "" ;

$sql = "select * from register where email='$email'";
	$result = mysqli_query($con, $sql);
	$no = mysqli_num_rows($result);
	$row = mysqli_fetch_row($result);

    $sql1 = "select * from purchase where email='$email'";
	$result1 = mysqli_query($con, $sql1);
	$no1 = mysqli_num_rows($result1);
	$row1 = mysqli_fetch_all($result1);

  //  print_r($row1)[0];die();

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Waste Paper Traders</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-plot-listing.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
<!--

TemplateMo 564 Plot Listing

https://templatemo.com/tm-564-plot-listing

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <?php include("header.php"); ?>
  <!-- ***** Header Area End ***** -->
  <div class="main-banner">
    <div class="container">
      <div class="row">
       <div class="popular-categories" style="position: relative;top:-250px;">
    <div class="container">
      <div class="row">
      <?php
if($no) {
?>
       <div class="col-lg-12">
       <div class="card bg-light text-dark">
   <?php
   for($i=0;$i<$no1;$i++) { 
       if($row1[$i][7] == '1') {?>
       <div class="card-body text-center">Your <?= $row1[$i][5] ?> Paper Order Will Be Accepted., And Delivered Within 7 Days.. Thank Your For Purchasing Us!!</div>
       <?php }
        else if ($row1[$i][7] == '0') { ?>
        <div class="card-body text-center">Stock Not There., I Will Contact You Later</div>
   <?php }
    else if ($row1[$i][7] == '2') {
     ?>
          <div class="card-body text-center">Notifications Not Found</div>
   <?php
   }
} ?>
    </div>
        </div>
        <?php } else{
  ?>
  <div class="card bg-light text-dark">
    <div class="card-body text-center"><b>If You Want To Visit The Notification,<br/> Please Click
      <a href="signup.php" class="btn btn-primary">Signup</a></b>
    </div>
  </div>
  <?php
} ?>
      </div>
    </div>
  </div>
      </div>
    </div>
  </div>
 <?php include("footer.php"); ?>



  
  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/custom.js"></script>

</body>

</html>
