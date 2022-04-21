<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Overstock</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="../image/x-icon" href="../images/favicon.ico"/>
    <!--Font Awesome-->
    <link rel="stylesheet" href="bootstrap_dist/font-awesome/css/font-awesome.min.css" />
    <!-- Bootstrap -->
    <link href="../bootstrap_dist/css/bootstrap.css" rel="stylesheet">
    <link href="../style.css" rel="stylesheet" type="text/css">
  </head>
  <body>
<!-- End of Header & Nav Section -->


<!-- Content goes below -->



<div class="global-container mt-5">
	<div class="card login-form mt-5">
	<div class="card-body">
        <div class="row">
            <div class="login-logo">
                <img class="w-25 mx-auto d-block" src="../images/overstock_logo_tp.png">
            </div>
        </div>
		<h3 class="card-title text-center mt-2">Admin Login</h3>
		<div class="card-text">

            <!-- ===== FORM START =====-->
			<form method="POST" action="adminportal.php">
				<div class="form-group">
					<label class="login-label" for="inputEmail1">Email address</label>
					<input type="email" class="form-control form-control-sm" id="inputEmail1" aria-describedby="emailHelp">
				</div>
				<div class="form-group">
					<label class="login-label" for="inputPassword">Password</label>
					<input type="password" class="form-control form-control-sm" id="inputPassword">
				</div>
				<button type="submit" class="btn btn-login btn-primary btn-block mx-auto d-block btn-long-width mb-2">Sign in</button>
			</form>
            <!-- ===== FORM END =====-->

		</div>
	</div>
</div>
</div>















<!-- End of content -->

<!-- Footer -->
</body>
</html>