<?php

include '../db/connect.php';

$sql1 = "SELECT * FROM item";
$result = $link -> query($sql1);

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
                        <button type="submit" class="btn btn-light m-4"> &#9166; Return to Admin Portal</button>
            </form>
        </div> 
    </div>

    <!--========================================= Page Content Begins ===============================================-->
    <div class="container">
        <div class="row">
            <form method="post" action="">
                <div class="container">
                    <h1 class="text-center">Add Item to Inventory</h1>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group pt-3">
                            <label for="first">ItemID</label>
                            <input type="text" name="ItemID" class="form-control" placeholder="" id="first">
                            </div>
                        </div>
                        <!--  col-md-6   -->

                        <div class="col-md-6">
                            <div class="form-group pt-3">
                            <label for="last">CategoryID</label>
                            <input type="text" name="CategoryID" class="form-control" placeholder="" id="last">
                            </div>
                        </div>
                        <!--  col-md-6   -->
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group pt-3">
                                <label for="company">ModelID</label>
                                <input type="text" name="ModelID" class="form-control" placeholder="" id="company">
                            </div>
                        </div>
                        <!--  col-md-6   -->

                        <div class="col-md-6">

                            <div class="form-group pt-3">
                                <label for="phone">ItemName</label>
                                <input type="tel" name="ItemName" class="form-control" id="phone">
                            </div>
                        </div>
                        <!--  col-md-6   -->
                    </div>
                    <!--  row   -->

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group pt-3">
                                <label for="company">InStock</label>
                                <input type="text" name="InStock" class="form-control" placeholder="" id="company">
                            </div>
                        </div>
                        <!--  col-md-6   -->

                        <div class="col-md-6">

                            <div class="form-group pt-3">
                                <label for="phone">Price</label>
                                <input type="tel" name="Price" class="form-control" id="phone">
                            </div>
                        </div>
                        <!--  col-md-6   -->
                    </div>
                    <!--  row   -->
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group pt-3">
                                <label for="company">DealDate</label>
                                <input type="text" name="DealDate" class="form-control" placeholder="" id="company">
                            </div>
                        </div>
                        <!--  col-md-6   -->

                        <div class="col-md-6">

                            <div class="form-group pt-3">
                                <label for="phone">ImgID</label>
                                <input type="tel" name="IteImgIDmName" class="form-control" id="phone">
                            </div>
                        </div>
                        <!--  col-md-6   -->
                    </div>
                    <!--  row   -->


    


    <button type="submit" class="btn btn-primary mt-3">Add Item to Inventory</button>

</div>
            
            </form>
        </div> 
    </div>



    
	
    <div class="global-container mt-2 p-2 mb-5">
	    <div class="card card-table mt-5">
            <div class="contianer">
                <div class="row">
                    <h2 class="text-black text-center m-2">Current Inventory</h2>
                </div>
            </div>
	            <div class="card-body">
                    <table class="table table-striped pb-3">
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
                            <th scope="col">Delete?</th>
                            </tr>
                        </thead>
                        <tbody>
                            


                            <!--================= ITERATE THROUGH DB and CREATE ROWS =================-->
                            <?php 
                            
                                    if ($result -> num_rows > 0) {

                                        while ($row = mysqli_fetch_array($result)) { // beginning of while loop ?>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td><?php echo $row['ItemID'] ?></td>
                                                <td><?php echo $row['CategoryID'] ?></td>
                                                <td><?php echo $row['ModelID'] ?></td>
                                                <td><?php echo $row['ItemName'] ?></td>
                                                <td><?php echo $row['InStock'] ?></td>
                                                <td><?php echo $row['Price'] ?></td>
                                                <td><?php echo $row['DealDate'] ?></td>
                                                <td><?php echo $row['ImgID'] ?></td>

                                                <!-- Last Item is a Delete Button -->
                                                <td>
                                                    <button type="submit" class="btn btn-danger mt-3">DELETE</button>
                                                </td>

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