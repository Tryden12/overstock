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
    <title>Modify Inventory</title>
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
	
    <div class="global-container mt-5 p-2">
	<div class="card card-table mt-5">
    <div class="contianer">
            <div class="row">
                <h1 class="text-black text-center m-2">Modify Inventory</h1>
            </div>
        </div>
	<div class="card-body">
        <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">ItemID</th>
                            <th scope="col">CategoryID</th>
                            <th scope="col">ModelID</th>
                            <th scope="col">ItemName</th>
                            <th scope="col">InStock</th>
                            <th scope="col">Price</th>
                            <th scope="col">DealDate</th>
                            <th scope="col">ImgID</th>
                            <th scope="col">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>21</td>
                                <td>21343</td>
                                <td>Nike Free Run</td>
                                <td>Yes</td>
                                <td>30</td>
                                <td>05/20/22</td>
                                <td>998899</td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>21</td>
                                <td>21343</td>
                                <td>Nike Free Run</td>
                                <td>Yes</td>
                                <td>30</td>
                                <td>05/20/22</td>
                                <td>998899</td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>21</td>
                                <td>21343</td>
                                <td>Nike Free Run</td>
                                <td>Yes</td>
                                <td>30</td>
                                <td>05/20/22</td>
                                <td>998899</td>
                            </tr>
                        </tbody>
                        </table>
	</div>
</div>
</div>

</body>
</html>

<!-- End of content -->

<!-- Footer -->
</body>
</html>