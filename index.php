<!-- Header -->
<!DOCTYPE html>

<?php

include 'db/connect.php';

date_default_timezone_set('America/Chicago');

$dates = array();
$ItemID = array();
$ItemName = array();
$Price = array();
$ImgName = array();

for ($i=0; $i<=6; $i++){
    $date=new DateTime(date("Y-n-j"), new DateTimeZone('America/Chicago'));
    $dateinterm = date_add($date,date_interval_create_from_date_string("$i days"));
    $dates[$i] = date_format($dateinterm,"Y-n-j");
}

$i = 0;

foreach($dates as $val){
  $sql = "SELECT * FROM item INNER JOIN images ON item.imgID = images.ImgID WHERE DealDate = \"$val\"";
  if($result = mysqli_query($link, $sql)){
      if(mysqli_num_rows($result) > 0){
          while($row = mysqli_fetch_array($result)){
            
            $ItemID[$i] = $row['ItemID'];
            $ItemName[$i] = $row['ItemName'];
            $Price[$i] = $row['Price'];
            $ImgName[$i] = $row['ImgName'];
            
          }
          mysqli_free_result($result);
      } else{
          $ItemID[$i] = "";
          $ItemName[$i] = "err";
          $Price[$i] = "";
      }
  } else{
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
  }
  $i++;
}
?>


<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Overstock</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="../image/x-icon" href="images/favicon.ico"/>
    <!-- Bootstrap -->
    <link href="bootstrap_dist/css/bootstrap.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="../images/overstock_icon_blue_small.jpg">
  </head>
  <body>
    <!-- Navbar section -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">Overstock</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>

        </div>
      </div>
    </nav>
<!-- End of Header & Nav Section -->



<!-- Content goes below -->

    <!-- Banner for Deal of the Day section-->
    <h2 class="text-center pt-4 bg-light">Deal of the Day</h2>
    <div class="container bg-light">
      <div class="row">
        <div class="col-12">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            
            <div class="carousel-inner">
              <div class="carousel-item active pb-3">
                <img class="d-block w-50 m-auto b-shadow" src="images/<?php echo $ImgName[0];?>" alt="Featured Product">
                <div class="carousel-caption d-none d-md-block">
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12 text-center">
          <h5 class="card-title"><?php echo $ItemName[0]; ?></h5>
          <p class="card-text">$<?php echo $Price[0]; ?></p>
          <form method="post" action="main_pages/item.php">
            <button type="submit" name="itemID" value="<?php echo $ItemID[0]; ?>" class="btn btn-primary  m-4">View Item</button>
          </form>
        </div>

      </div>

      <hr>
    </div>



    <!-- Free shipping/returns & low prices section -->

    <!-- Free shipping -->
    <div class="container pt-4">
      <div class="row">
        <div class="col-4">
          <div class="row">
            <div class="col-2"><img class="rounded-circle w-100" alt="Free Shipping" src="images/fast.png"></div>
            <div class="col-lg-6 col-10 m-1">
              <h4>Free Shipping</h4>
            </div>
          </div>
        </div>
        <!-- Free Returns -->
        <div class="col-4">
          <div class="row">
            <div class="col-2"><img class="rounded-circle w-100" alt="Free Returns" src="images/product-return.png"></div>
            <div class="col-lg-6 col-10 m-1">
              <h4>Free Returns</h4>
            </div>
          </div>
        </div>
        <!-- Low Prices -->
        <div class="col-4">
          <div class="row">
            <div class="col-2"><img class="rounded-circle w-100" alt="Low Prices" src="images/save-money.png"></div>
            <div class="col-lg-6 col-10 m-1">
              <h4>Low Prices</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr>


  <!-- Deals of the day section -->
  <h2 class="text-center pt-4 m-4">Deals of the Week</h2>
    <div class="container pb-5">
      <div class="row text-center">



          <!-- START FOR LOOP -->
          <?php for($i = 1; $i <= 6; $i++) { ?>
                  <div class="col-md-4 pb-1 pb-md-4">
                  <div class="card b-shadow">
                    <img class="card-img-top" src="images/<?php echo $ImgName[$i]?>" alt="Failed Pull">
                    <div class="card-body pb-2 bg-light">
                      <h5 class="card-title"><?php echo $ItemName[$i]?></h5>
                      <p class="card-text">$<?php echo $Price[$i]?></p>
                      <form method="post" action="main_pages/item.php">
                        <button type="submit" name="itemID" value="<?php echo $ItemID[$i] ?>" class="btn btn-primary  mb-4">View Item</button>
                      </form>
                    </div>
                  </div>
                </div>
            <?php } ?> <!-- END FOR LOOP -->




      </div>
    </div>  
<!-- end of content -->
        

 
<!-- Footer -->
<!-- Footer -->
<div class="container text-white bg-dark p-4">
      <div class="row">
        <div class="col-6 col-md-8 col-lg-7">
          <div class="row">
            <a class="navbar-brand" href="#"><img class="w-25" src="images/overstock_logo_tp_white.png"></a>
          </div>
        </div>
        <div class="col-md-4 col-lg-5 col-6">
          <address>
            <strong>OverStock, Inc.</strong><br>
            Clarksville, TN, 99110-0219<br>
            <abbr title="Phone"></abbr> (123) 456-7890
          </address>
          <address>
            <strong>Contact Us:</strong><br>
            <a href="mailto:#">support@overstock.com</a>
          </address>
        </div>
      </div>
    </div>
    <footer class="text-center">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <p>Copyright © OverStock 2022. All rights reserved.</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="bootstrap_dist/js/jquery-3.4.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap_dist/js/popper.min.js"></script>
    <script src="bootstrap_dist/js/bootstrap-4.4.1.js"></script>
  </body>
</html>
