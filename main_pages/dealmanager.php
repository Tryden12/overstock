<?php

include '../db/connect.php';

$result = $link -> query("SELECT * FROM item");

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Deal Manager</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="../image/x-icon" href="../images/favicon.ico"/>
    <!--Font Awesome-->
    <link rel="stylesheet" href="bootstrap_dist/font-awesome/css/font-awesome.min.css" />
    <!-- Bootstrap -->
    <link href="../bootstrap_dist/css/bootstrap.css" rel="stylesheet">
    <link href="../style.css" rel="stylesheet" type="text/css">
  </head>
<body>

    <div class="container">
        <div class="row">
            <form method="post" action="adminportal.php">
                        <button type="submit" class="btn btn-light m-4"> &#9166; Return to Portal</button>
            </form>
        </div> 
    </div>
	
    <!-- Banner -->
    <div class="container">
        <div class="jumbotron mt-2 mb-3">
            <h1 class="text-center pt-3">Deal Manager</h1>      
            <p class="text-center pb-3">You can set the deal dates for each product in the week below.</p>
        </div> 
    </div>

</body>
</html>

<!-- End of content -->

<!-- Footer -->
</body>
</html>