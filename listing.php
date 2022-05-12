<?php
include("connection.php");

$email=isset($_COOKIE['email']) ? $_COOKIE['email'] :  "" ;

$sql = "select * from register where email='$email'";
	$result = mysqli_query($con, $sql);
	$no = mysqli_num_rows($result);
	$row = mysqli_fetch_row($result);

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

    <title>Waste paper Traders</title>

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
          <div class="top-text header-text" style="position: relative;top:-115px;">
            <h2>Recent Listing</h2>
            <h6>Check Them Out</h6>
          </div>
          <?php
if($no) {
?>
 <div class="recent-listing"  style="position: relative;top:-160px;">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-carousel owl-listing">
            <div class="item">
              <div class="row">
                <div class="col-lg-12">
                  <div class="listing-item">
                    <div class="left-image">
                      <a href="#"><img src="assets/images/millpic1.jpg" alt=""></a>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#"><h4>1. Mill board</h4></a>
                                      <h6>For packing</h6>
                                      <ul class="rate">
                                        <li><i class="fa fa-star-o"></i></li>
                                        <li><i class="fa fa-star-o"></i></li>
                                        <li><i class="fa fa-star-o"></i></li>
                                        <li><i class="fa fa-star-o"></i></li>
                                        <li><i class="fa fa-star-o"></i></li>
                                        <li>(18) Reviews</li>
                                      </ul>
                                      <span class="price"><div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div>rs:10/kg</span>
                                      <span class="details">Size: <em>27X32,26X31 Inch</em></span>
                                      <ul class="info">
                                        <li> Color: Available in White, Grey, etc.Size: 27 x32, 26x31 Inch
                                        </li>
                                        <li>Usage/Application: Packaging 
                                          Material: Paper
                                          Packaging Type: Bundle</li>
                                      </ul>
                                      <div class="main-white-button">
                                        <a href="buy.php?paper=Mill Board&rate=10/kg"><i class="fa fa-eye"></i> Contact Now</a>
                                      </div>
                                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="listing-item">
                    <div class="left-image">
                      <a href="#"><img src="assets/images/mapli.jpg" alt=""></a>
                    </div>
                    <div class="right-content align-self-center">
                      <a href="#"><h4>2.White Maplitho paper</h4></a>
                      <h6>by: Top Sale Agent</h6>
                      <ul class="rate">
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li>(24) Reviews</li>
                      </ul>
                      <span class="price"><div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div>rs:64/kg</span>
                      <span class="details">GSM:<em>130</em></span>
                      <ul class="info">
                        <li><img src="assets/images/listing-icon-02.png" alt="">Usage/Application: Printing
                        
                          Color: White</li>
                        <li><img src="assets/images/listing-icon-03.png" alt=""> Material: Paper
                          Country of Origin: Made in India
                          Pattern: Plain
                          </li>
                      </ul>
                      <div class="main-white-button">
                      <a href="buy.php?paper=White Maplitho paper&rate=64/kg"><i class="fa fa-eye"></i> Purchase Now</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="listing-item">
                    <div class="left-image">
                      <a href="#"><img src="assets/images/newspaper.jpg" alt=""></a>
                    </div>
                    <div class="right-content align-self-center">
                      <a href="#"><h4>3. Old newspaper</h4></a>
                      <h6>Packing type:10kg</h6>
                      <ul class="rate">
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li>(36) Reviews</li>
                      </ul>
                      <span class="price"><div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div> rs:30/kg</span>
                      <span class="details">Packing type: <em>10kg</em></span>
                      <ul class="info">
                        <li><img src="assets/images/listing-icon-02.png" alt="">Pattern: USEFUL FOR FRUIT PACKING, GROCERY STORES, MISELLANEOUS PACKING </li>
                        <li><img src="assets/images/listing-icon-03.png" alt=""> Country of Origin: Made in India</li>
                      </ul>
                      <div class="main-white-button">
                      <a href="buy.php?paper=Old newspaper&rate=30/kg"><i class="fa fa-eye"></i> Purchase Now</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="row">
                <div class="col-lg-12">
                  <div class="listing-item">
                    <div class="left-image">
                      <a href="#"><img src="assets/images/navs.jpg" alt=""></a>
                    </div>
                    <div class="right-content align-self-center">
                      <a href="#"><h4>4. Navkar sack kraft paper</h4></a>
                      <h6>Brand: navkar</h6>
                      <ul class="rate">
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li>(24) Reviews</li>
                      </ul>
                      <span class="price"><div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div> rs:65/kg</span>
                      <span class="details">Paper Grade: <em>80 GSM to 150 GSM</em></span>
                      <ul class="info">
                        <li><img src="assets/images/listing-icon-02.png" alt=""> Available Color: White , Brown
                          Coating Material: PE</li>
                        <li><img src="assets/images/listing-icon-03.png" alt=""> Use: Packaging
                        </li>
                      </ul>
                      <div class="main-white-button">
                      <a href="buy.php?paper=Navkar sack kraft paper&rate=65/kg"><i class="fa fa-eye"></i> Purchase Now</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="listing-item">
                    <div class="left-image">
                      <a href="#"><img src="assets/images/cream1.jpg" alt=""></a>
                    </div>
                    <div class="right-content align-self-center">
                      <a href="#"><h4>5. Cream wove paper</h4></a>
                      <h6>Application: Stationary</h6>
                      <ul class="rate">
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li>(32) Reviews</li>
                      </ul>
                      <span class="price"><div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div>rs:40/kg</span>
                      <span class="details">Details: <em>1750 sq ft</em></span>
                      <ul class="info">
                        <li><img src="assets/images/listing-icon-02.png" alt=""> color:cream</li>
                        <li><img src="assets/images/listing-icon-03.png" alt="">pattern:plain</li>
                      </ul>
                      <div class="main-white-button">
                      <a href="buy.php?paper=Cream wove paper&rate=40/kg"><i class="fa fa-eye"></i> Purchase Now</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="listing-item">
                    <div class="left-image">
                      <a href="#"><img src="assets/images/cutting.jpg" alt=""></a>
                    </div>
                    <div class="right-content align-self-center">
                      <a href="#"><h4>6. Paper cutting </h4></a>
                      <h6>Paper cutting for packing white and colored</h6>
                      <ul class="rate">
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li>(40) Reviews</li>
                      </ul>
                      <span class="price"><div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div>rs:13/kg</span>
                      <span class="details">Type: <em>All</em></span>
                      <ul class="info">
                        <li><img src="assets/images/listing-icon-02.png" alt=""> </li>
                        <li><img src="assets/images/listing-icon-03.png" alt=""> </li>
                      </ul>
                      <div class="main-white-button">
                      <a href="buy.php?paper=Paper cutting&rate=13/kg"><i class="fa fa-eye"></i> Purchase Now</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="row">
                <div class="col-lg-12">
                  <div class="listing-item">
                    <div class="left-image">
                      <a href="#"><img src="assets/images/kraft paper cutting.jpeg" alt=""></a>
                    </div>
                    <div class="right-content align-self-center">
                      <a href="#"><h4>7. kraft paper Cutting</h4></a>
                      <h6>by: Sale Agent</h6>
                      <ul class="rate">
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li>(24) Reviews</li>
                      </ul>
                      <span class="price"> Rs:20/kg</span>
                      <span class="details">Details: <em>1640 sq ft</em></span>
                      <span>
                      
                      </span>
                      
                      <div class="main-white-button">
                      <a href="buy.php?paper=kraft paper Cutting&rate=20/kg"><i class="fa fa-eye"></i> Purchase Now</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="listing-item">
                    <div class="left-image">
                      <a href="#"><img src="assets/images/cream wove paper cutting.jpg" alt=""></a>
                    </div>
                    <div class="right-content align-self-center">
                      <a href="#"><h4>8. Cream Wove Cutting Paper</h4></a>
                      <h6>by: Sale Agent</h6>
                      <ul class="rate">
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li>(15) Reviews</li>
                      </ul>
                      <span class="price">Rs:35/kg</span>
                      <span class="details">Details: <em>1660 sq ft</em></span>
                     <span></span>
                      <div class="main-white-button">
                      <a href="buy.php?paper=Cream Wove Cutting Paper&rate=35/kg"><i class="fa fa-eye"></i> Purchase Now</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="listing-item">
                    <div class="left-image">
                      <a href="#"><img src="assets/images/duplex board cutting.jpg" alt=""></a>
                    </div>
                    <div class="right-content align-self-center">
                      <a href="#"><h4>9. Duplex Board Cutting</h4></a>
                      <h6>by: Sale Agent</h6>
                      <ul class="rate">
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li>(20) Reviews</li>
                      </ul>
                      <span class="price">Rs:25/kg</span>
                      <span class="details">Details: <em>2880 sq ft</em></span>
                     <span></span>
                      <div class="main-white-button">
                      <a href="buy.php?paper=Duplex Board Cutting&rate=25/kg"><i class="fa fa-eye"></i> Contact Now</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="row">
                <div class="col-lg-12">
                  <div class="listing-item">
                    <div class="left-image">
                      <a href="#"><img src="assets/images/color cutting.jpg" alt=""></a>
                    </div>
                    <div class="right-content align-self-center">
                      <a href="#"><h4>10.Color Cutting Paper</h4></a>
                      <h6>by: Sale Agent</h6>
                      <ul class="rate">
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li>(24) Reviews</li>
                      </ul>
                      <span class="price"> Rs:10/kg</span>
                      <span class="details">Details: <em>1640 sq ft</em></span>
                      <span>
                      
                      </span>
                      
                      <div class="main-white-button">
                        <a href="contact.php"><i class="fa fa-eye"></i> Contact Now</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="listing-item">
                    <div class="left-image">
                      <a href="#"><img src="assets/images/News_paper_cutting1.jpg" alt=""></a>
                    </div>
                    <div class="right-content align-self-center">
                      <a href="#"><h4>11.News Paper Cutting</h4></a>
                      <h6>by: Sale Agent</h6>
                      <ul class="rate">
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li>(15) Reviews</li>
                      </ul>
                      <span class="price">Rs:25/kg</span>
                      <span class="details">Details: <em>1660 sq ft</em></span>
                     <span></span>
                      <div class="main-white-button">
                        <a href="contact.php"><i class="fa fa-eye"></i> Contact Now</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="listing-item">
                    <div class="left-image">
                      <a href="#"><img src="assets/images/duplex board cutting.jpg" alt=""></a>
                    </div>
                    <div class="right-content align-self-center">
                      <a href="#"><h4>12. Note Book Paper Cutting</h4></a>
                      <h6>by: Sale Agent</h6>
                      <ul class="rate">
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li>(20) Reviews</li>
                      </ul>
                      <span class="price">Rs:32/kg</span>
                      <span class="details">Details: <em>2880 sq ft</em></span>
                     <span></span>
                      <div class="main-white-button">
                        <a href="contact.php"><i class="fa fa-eye"></i> Contact Now</a>
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
<?php } else{
  ?>
  <div class="card bg-light text-dark">
    <div class="card-body text-center"><b>If You Want To Visit The Waste Paper Listinig Items,<br/> Please Click
      <a href="signup.php" class="btn btn-primary">Signup</a></b>
    </div>
  </div>
  <?php
} ?>


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

