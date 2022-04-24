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
    <title>Inventory Report</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="../image/x-icon" href="../images/favicon.ico"/>
    <!--Font Awesome-->
    <link rel="stylesheet" href="bootstrap_dist/font-awesome/css/font-awesome.min.css" />
    <!-- Bootstrap -->
    <link href="../bootstrap_dist/css/bootstrap.css" rel="stylesheet">
    <link href="../style.css" rel="stylesheet" type="text/css">
  </head>
<body>
	
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
                            


                            <!--================= ITERATE THROUGH DB and CREATE ROWS =================-->
                            <?php 
                            
                                    if ($result -> num_rows > 0) {

                                        while ($rows = mysql_fetch_assoc($result)) { // beginning of while loop ?>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td><?php echo $rows.['ItemID'] ?></td>
                                                <td><?php echo $rows.['CategoryID'] ?></td>
                                                <td><?php echo $rows.['ModelID'] ?></td>
                                                <td><?php echo $rows.['ItemName'] ?></td>
                                                <td><?php echo $rows.['InStock'] ?></td>
                                                <td><?php echo $rows.['Price'] ?></td>
                                                <td><?php echo $rows.['DealDate'] ?></td>
                                                <td><?php echo $rows.['ImgID'] ?></td>
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