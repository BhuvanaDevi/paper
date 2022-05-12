<?php 
include("connection.php");

$paper=$_GET['paper'];
$rate=$_GET['rate'];
$email=$_COOKIE['email'];

$sql = "select username from register where email='$email'";  
$result = mysqli_query($con, $sql);  
$no=mysqli_num_rows($result);
$row = mysqli_fetch_row($result);

?>
<!DOCTYPE html>
<html lang="en">

  <head>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.all.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Waste paper Traders</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-plot-listing.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

<body>

  <!-- ***** Preloader Start ***** -->
<!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <?php include("header.php");?>
  <div class="main-banner">
    <div class="container">
      <div class="row">
          <div class="top-text header-text" style="position: relative;top:-115px;">
            <h2>Purchase Details</h2>
          </div>
     <div class="contact-page"  style="position: relative;top:-115px;">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="inner-content">
            <div class="row">
              <div class="col-lg-6">
                <div id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15741.834492560514!2d77.80863716725986!3d9.468777506911156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b06ce60edcccccb%3A0x466900b987d55b66!2sPallapatti%2C%20Sivakasi%2C%20Tamil%20Nadu%2C%20India!5e0!3m2!1sen!2sus!4v1652300491763!5m2!1sen!2sus" width="100%" height="650px" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
              </div>
              <div class="col-lg-6 align-self-center">
                <form id="contact" action="" method="POST">
                  <div class="row">
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="name" name="username" id="username" placeholder="Name" autocomplete="on" required value="<?= isset($row[1]) ? $row[1] : "" ?>">
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="text" name="mobile" id="mobile" placeholder="Mobile" autocomplete="on" required>
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" value="<?= isset($_COOKIE['email']) ? $_COOKIE['email'] : "" ?>" placeholder="Your Email" required="">
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                    <fieldset>
                        <input type="text" name="paper" id="paper" placeholder="Enter Paper Type" required="" value="<?= isset($paper) ? $paper : "" ?>">
                      </fieldset>
                        </div>
                        <div class="col-lg-12">
                    <fieldset>
                        <input type="text" name="rate" id="rate" placeholder="Enter Paper Type" required="" value="<?= isset($rate) ? $rate : "" ?>" >
                      </fieldset>
                        </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <textarea name="address" class="form-control" id="address" placeholder="Your Address" required=""></textarea>  
                      </fieldset>
                    </div>
                    
                    <div class="col-lg-12">
                      <fieldset>
                        <button type="submit" name="buy" id="form-submit" class="main-button "><i class="fa fa-paper-plane"></i> Send Message</button>
                      </fieldset>
                    </div>
                  </div>
                </form>
               </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 
        </div>
        <div class="col-lg-10 offset-lg-1">
          <ul class="categories">
            <li><a href="#"><span class="icon"><img src="assets/images/calicon.jpg" alt="calender"></span> Calender</a></li>
            <li><a href="#"><span class="icon"><img src="assets/images/dairyicon.png" alt="cream"></span> Cream wove paper</a></li>
            <li><a href="#"><span class="icon"><img src="assets/images/bagicon.png" alt="kraft paper"></span> Kraft paper</a></li>
            <li><a href="#"><span class="icon"><img src="assets/images/newsicon.jpg" alt="Scrap paper"></span> Scrap paper</a></li>
            <li><a href="#"><span class="icon"><img src="assets/images/shipicon.png" alt="craft paper"></span> Craft paper</a></li>
          </ul>
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
<?php
if(isset($_POST['buy'])){
  $name=$_POST['username'];
  $mobile=$_POST['mobile'];
  $email=$_POST['email'];
  $paper=$_POST['paper'];
  $rate=$_POST['rate'];
  $address=$_POST['address'];
  
  $ins="insert into purchase(username,mobile,email,address,paper,money,status) values('$name','$mobile','$email','$address','$paper','$rate',2)";
  $exe=mysqli_query($con,$ins);

  if($exe){
    echo "<script>";
    echo "Swal.fire('Purchase Message Sent Successfully!', 'Thank you for contacting us. We will get back to you shortly.', 'success');";
    echo "</script>";
    }    
  else{
    echo "<script>";
    echo "Swal.fire('Message Sent Failure!', 'Try Again..', 'error');";
      echo "</script>";   
  }
}
?>

</body>

</html>

  