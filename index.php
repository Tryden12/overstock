<!-- Header -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Overstock</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="../image/x-icon" href="images/favicon.ico"/>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap -->
    <link href="bootstrap_dist/css/bootstrap.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet" type="text/css">
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
            <li class="nav-item">
              <a class="nav-link" href="main_pages/orderform.php">Cart</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="main_pages/orderform.php"><i class="fa-solid fa-cart-shopping"></i></a>
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
                <img class="d-block w-50 m-auto b-shadow" src="images/shirts.jpg" alt="Featured Product">
                <!-- Heading 
                <div class="carousel-caption d-none d-md-block">
                   h5 for heading (if needed) 
                </div>
				        -->
              </div>
            </div>
          </div>
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

      <!-- cards -->
        <div class="col-md-4 pb-1 pb-md-4">
          <div class="card b-shadow">
            <img class="card-img-top" src="images/mensboot.png" alt="Card image cap">
            <div class="card-body pb-2 bg-light">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="main_pages/item.php" class="btn btn-primary  m-4">View Item</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 pb-1 pb-md-4">
          <div class="card b-shadow">
            <img class="card-img-top" src="images/mensboot.png" alt="Card image cap">
            <div class="card-body pb-2 bg-light">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="main_pages/item.php" class="btn btn-primary m-4">View Item</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 pb-1 pb-md-4">
          <div class="card b-shadow">
            <img class="card-img-top " src="images/mensboot.png" alt="Card image cap">
            <div class="card-body pb-2 bg-light">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="main_pages/item.php" class="btn btn-primary m-4">View Item</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row text-center mt-4">
        <div class="col-md-4 pb-1 pb-md-4">
          <div class="card b-shadow">
            <img class="card-img-top" src="images/mensboot.png" alt="Card image cap">
            <div class="card-body pb-2 bg-light">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="main_pages/item.php" class="btn btn-primary m-4">View Item</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 pb-1 pb-md-4">
          <div class="card b-shadow">
            <img class="card-img-top" src="images/mensboot.png" alt="Card image cap">
            <div class="card-body pb-2 bg-light">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="main_pages/item.php" class="btn btn-primary m-4">View Item</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 pb-1 pb-md-4">
          <div class="card b-shadow">
            <img class="card-img-top" src="images/mensboot.png" alt="Card image cap">
            <div class="card-body pb-2 bg-light">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="main_pages/item.php" class="btn btn-primary m-4">View Item</a>
            </div>
          </div>
        </div>
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
