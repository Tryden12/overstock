<?php

include '../db/connect.php';

$sql1 = "SELECT * FROM orderroot";
$result = $link -> query($sql1);

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Order Report</title>
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
                        <button type="submit" class="btn btn-light m-4"> &#9166; Return to Admin Portal</button>
            </form>
        </div> 
    </div>
	
    <div class="global-container mt-5 p-2">
	<div class="card card-table mt-5">
    <div class="contianer">
            <div class="row">
                <h1 class="text-black text-center m-2">Order Report</h1>
            </div>
        </div>
	<div class="card-body">
        <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">OrderID</th>
                            <th scope="col">CustID</th>
                            <th scope="col">ItemID</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                            <th scope="col">STAT</th>
                            </tr>
                        </thead>
                        <tbody>
                            


                            <!--================= ITERATE THROUGH DB and CREATE ROWS =================-->
                            <?php 
                            
                                    if ($result -> num_rows > 0) {

                                        while ($row = mysqli_fetch_array($result)) { // beginning of while loop ?>
                                            <tr>
                                                <td><?php echo $row['OrderID'] ?></td>
                                                <td><?php echo $row['CustID'] ?></td>
                                                <td><?php echo $row['ItemID'] ?></td>
                                                <td><?php echo $row['Quantity'] ?></td>
                                                <td><?php echo $row['Total'] ?></td>
                                                <td><?php echo $row['STAT'] ?></td>
                                            </tr>
                            <?php       }  // end of while loop 
                                    } // end if 
                                
                                ?>



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