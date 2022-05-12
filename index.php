<?php
include("connection.php");
$sqll = "select name from paper";  
$resultl = mysqli_query($con, $sqll);  
$nol=mysqli_num_rows($resultl);
$rowl = mysqli_fetch_all($resultl);

//print_r($rowl);die();
 

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
<?php include("header.php");?>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="top-text header-text">
            <h6>Over 36,500+ Active Listings</h6>
            <h2>Waste Paper &amp; Traders</h2>
          </div>
        </div>
        <div class="col-lg-12">
          <form id="search-form" method="POST" action="">
            <div class="row">
              <div class="col-lg-3 align-self-center">
                  <fieldset>
                    
                      <select name="area" class="form-select" aria-label="Area" id="chooseCategory" onchange="this.form.click()" >
                         
                        <option value="Tamilnadu">Tamil Nadu</option>
                          <option value="Andhra Pradesh">Andhra Pradesh</option>
                          <option value="Arunachal pradesh">Arunachal pradesh</option>
                          <option value="Bihar">Bihar</option>
                          <option value="Chattishgarh">Chattishgarh</option>
                          <option value="Goa">Goa</option>
                          <option value="Gujarat">Gujarat</option>
                          <option value="Haryana">Haryana</option>
                          <option value="Himachal Pradesh">Himachal pradesh</option>
                          <option value="Jharkhand">Jharkhand</option>
                          <option value="Karnataka">Karnataka</option>
                          <option value="Kerala">Kerala</option>
                          <option value="Madhya Pradesh">Madhya Pradesh</option>
                          <option value="Maharastra">Maharastra</option>
                          <option value="Manipur">Manipur</option>
                          <option value="Meghalaya">Meghalaya</option>
                          <option value="Mizoram">Mizoram</option>
                          <option value="Nagaland">Nagaland</option>
                          <option value="Odisha">Odisha</option>
                          <option value="Punjab">Punjab</option>
                          <option value="Rajasthan">Rajasthan</option>
                          <option value="Sikkim">Sikkim</option>
                          <option value="Telangana">Telangana</option>
                          <option value="Tripura">Tripura</option>
                          <option value="Uttar pradesh">Uttar Pradesh</option>
                          <option value="Uttarakhand">Uttarakhand</option>
                          <option value="WestBengal">WestBengal</option>
                      </select>

                  </fieldset>
              </div>
              <div class="col-lg-3 align-self-center">
                  <fieldset>
                      <!-- <input type="address" name="address" class="searchText" placeholder="Enter a paper type" autocomplete="on" required> -->

                      <select name="paper">
                        <?php for($i=0;$i<$nol;$i++){?>
                        <option value="<?= $rowl[$i][0] ?>"><?= $rowl[$i][0] ?></option>
                        <?php } ?>
                      </select>
                  </fieldset>
              </div>
              <div class="col-lg-3 align-self-center">
                  <fieldset>
                      <select name="price" class="form-select" aria-label="Default select example" id="chooseCategory" onchange="this.form.click()">
                          <option value="Exporter">Exporter</option>
                          <option value="Wholesaler">Wholesaler</option>
                          <option value="Retailer">Retailer</option>
                          <option value="Importer">Importer</option>
                      </select>
                  </fieldset>
              </div>
              <div class="col-lg-3">                        
                  <fieldset>
                      <button type="submit" name="search" class="main-button"><i class="fa fa-search"></i>
                      Get latest price</button>
                  </fieldset>
              </div>
            </div>
          </form>
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
  <div class="popular-categories">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2>Popular paper Categories</h2>
            <h6>Check Them Out</h6>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="naccs">
            <div class="grid">
              <div class="row">
                <div class="col-lg-3">
                  <div class="menu">
                    <div class="first-thumb active">
                      <div class="thumb">
                        <span class="icon"><img src="assets/images/calicon.jpg" alt=""></span>
                        Calender
                      </div>
                    </div>
                    <div>
                      <div class="thumb">                 
                        <span class="icon"><img src="assets/images/dairyicon.png" alt=""></span>
                        Cream wove paper
                      </div>
                    </div>
                    <div>
                      <div class="thumb">                 
                        <span class="icon"><img src="assets/images/bagicon.png" alt=""></span>
                        Kraft paper
                      </div>
                    </div>
                    <div>
                      <div class="thumb">                 
                        <span class="icon"><img src="assets/images/newsicon.jpg" alt=""></span>
                        Scrap paper
                      </div>
                    </div>
                    <div class="last-thumb">
                      <div class="thumb">                 
                        <span class="icon"><img src="assets/images/newsicon.jpg" alt=""></span>
                        Craft paper
                      </div>
                    </div>
                  </div>
                </div> 
                <div class="col-lg-9 align-self-center">
                  <ul class="nacc">
                    <li class="active">
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-5 align-self-center">
                              <div class="left-text">
                                <h4>Available materials for calender</h4>
                                <p> Most of the materials available for made the calender(daily calender) For example Mil board and Pali board with low price and high quality here
                                </p>
                                <div class="main-white-button"><a href="#"><i class="fa fa-eye"></i> Explore me</a></div>
                              </div>
                            </div>
                            <div class="col-lg-7 align-self-center">
                              <div class="right-image">
                                <img src="assets/images/calender.jpg" alt="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-5 align-self-center">
                              <div class="left-text">
                                <h4>Cream Wove paper and its uses</h4>
                                <p>Cream Wove Paper is a writing paper with a uniform surface, not ribbed or watermarked. The quality is well accepted for high level of surface cleanliness and used for making of Exercise Note Books, Multi part Continuous stationery, Adding Rolls and Drawing Books.</p>
                                <div class="main-white-button"><a href="#"><i class="fa fa-eye"></i>Explore me</a></div>
                              </div>
                            </div>
                            <div class="col-lg-7 align-self-center">
                              <div class="right-image">
                                <img src="assets/images/creamdairy.jpg" alt="Foods on the table">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-5 align-self-center">
                              <div class="left-text">
                                <h4>Kraft paper and its use</h4>
                                <p>One Of The Most Trending Stuffs Right Now!</h4>
                                  <p>Every type of kraft paper comes in a variety of sizes and can often be found in both sheet and roll format. As you can see, each type of kraft paper offers unique benefits that can be used in both businesses and homes. Take a look at some of these unique and creative ways that kraft paper can be used around the house.
                                   </p>
                                <div class="main-white-button"><a href="#"><i class="fa fa-eye"></i> Explore me</a></div>
                              </div>
                            </div>
                            <div class="col-lg-7 align-self-center">
                              <div class="right-image">
                                <img src="assets/images/bag2.jpg" alt="cars in the city">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-5 align-self-center">
                              <div class="left-text">
                                <h4>Newspaper waste for recycling:</h4>
                                <p>Newspaper is easily recycled through many curbside recycling programs and can be made into new newsprint and other materials.
                                  Post-consumer waste is material discarded after consumer use, such as old corrugated containers (OCC), old magazines, and newspapers. Paper suitable for recycling is called "scrap paper", often used to produce moulded pulp packaging.
                                </p>
                                <div class="main-white-button"><a href="#"><i class="fa fa-eye"></i> Explore me</a></div>
                              </div>
                            </div>
                            <div class="col-lg-7 align-self-center">
                              <div class="right-image">
                                <img src="assets/images/newspaper.jpg" alt="newspaper">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-5 align-self-center">
                              <div class="left-text">
                                <h4>Craft paper</h4>
                                <p>A type of multipurpose paper and product created and designed in various colors, paper materials, shapes, sizes and styles you use to create with in art and crafts.</p>
                                <div class="main-white-button"><a rel="nofollow" href="#"><i class="fa fa-eye"></i> Explore me</a></div>
                              </div>
                            </div>
                            <div class="col-lg-7 align-self-center">
                              <div class="right-image">
                                <img src="assets/images/ship.jpg" alt="Traveling Beach">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>          
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--Listing gallery-->

  <div class="recent-listing">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2>Gallery</h2>
            <h6>Check Them Out</h6>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="owl-carousel owl-listing">
            <div class="item">
              <div class="row">
                <div class="col-lg-12">
                  <div class="listing-item">
                    <div class="left-image">
                      <a href="#"><img src="assets/images/image1.jpg" alt=""></a>
                    </div>
                    <div class="right-content align-self-center">
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="listing-item">
                    <div class="left-image">
                      <a href="#"><img src="assets/images/image2.jpg" alt=""></a>
                    </div>
                    <div class="right-content align-self-center">
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
                      <a href="#"><img src="assets/images/image3.jpg" alt=""></a>
                    </div>
                    <div class="right-content align-self-center">
                     </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="listing-item">
                    <div class="left-image">
                      <a href="#"><img src="assets/images/image4.jpg" alt=""></a>
                    </div>
                    <div class="right-content align-self-center">

                  </div>
                </div>

              </div>
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

<?php

if(isset($_POST['search'])){
  $name=$_POST['paper'];
  
  $sql = "select name,money from paper where name='$name'";  
  $result = mysqli_query($con, $sql);  
  $no=mysqli_num_rows($result);
  $row = mysqli_fetch_row($result);

    echo '<script>
    Swal.fire({ title: "'.$name.' - Rs. '.$row[1].'",
       text: "",
       type: "danger"}).then(okay => {
         if (okay) {
          window.location.href = "index.php";
        }
      });
  </script>';
    }   

  // else{
  //   echo '<script>
  //   Swal.fire({ title: "No Results Found!",
  //      text: "Try Again..",
  //      type: "danger"}).then(okay => {
  //        if (okay) {
  //         window.location.href = "index.php";
  //       }
  //     });
  // </script>';
  //   }   
?>
</body>

</html>

