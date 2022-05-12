<?php
include("connection.php");
error_reporting(0);
$email=isset($_COOKIE['email']) ? $_COOKIE['email'] :  "" ;

$sql = "select * from contact";
	$result = mysqli_query($con, $sql);
	$no = mysqli_num_rows($result);
	$row = mysqli_fetch_all($result);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <style>

#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
  background-color: #fff;
}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
          </style>
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
            
              <li><a href="userbuy.php">Purchase</a></li>
              <li><a href="userlist.php">Users</a></li>
              <li><a href="usercontact.php">Contact</a></li>
              <li><p style="color:#fff;position:relative;top:6px"><i class="fa fa-user">&nbsp;&nbsp;Admin</i></p></li> 
               <div class="main-white-button"><?= isset($_COOKIE['email']) ? '<a href="logout.php">Logout</a>' : '<a href="login.php">Login</a>' ?></div></li> 
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>  <!-- ***** Header Area End ***** -->

  <div class="main-banner">
    <div class="container">
      <div class="row">
      <table id="customers" style="position:relative;top:-100px">
  <tr>
    <th>S. No</th>
    <th>Usernames</th>
    <th>Mobile</th>
    <th>Email</th>
    <th>Paper</th>
    <th>Message</th>
  </tr>
  <?php
  for($i=0;$i<$no;$i++){
  ?>
  <tr>
    <td><?= $i+1 ?></td>
    <td><?= $row[$i][1] ?></td>
    <td><?= $row[$i][2] ?></td>
    <td><?= $row[$i][3] ?></td>
    <td><?= $row[$i][4] ?></td>
    <td><?= $row[$i][5] ?></td>
  </tr>
<?php } ?>
 
</table>

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

