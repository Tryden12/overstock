<?php

include '../db/connect.php';


$stmt = $link ->prepare("SELECT ItemID FROM item");
$stmt->execute();


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
                        <button type="submit" class="btn btn-light m-4"> &#9166; Return to Admin Portal</button>
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

    <!-- Banner -->
    <div class="container">
        <div class="row">
            <div>
                <form method="post" action="">
                      
                    <div class="col-lg-8 mx-auto">

                        <div class="card">
                            <table class="table table-hover shopping-cart-wrap">
                                <thead class="text-muted">
                                    <tr>
                                        <th scope="col" width="400">Item ID</th>
                                        <th scope="col" class="text-center" width="400">Choose Deal Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="p-3"> 




                                            <!--========== SELECT STATEMENT WITH PHP ==========-->

                                            <select class="form-control mt-2 pl-3" name="ItemID">
                                                <?php foreach ($stmt -> get_result() as $row) { ?>
                                                        <option value="<?php echo $row[$i]?>"><?php echo $row[$i]?></option>
                                                        <?php $i++; 
                                                }?>
                                            </select> 

                                            <!--========== END SELECT STATEMENT ==========-->




                                        </td>

                                        <td class=""> 
                                            <input type="date" value="2022-05-01" min="2022-05-01" max="2022-05-30">
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                            <!--======== END OF TABLE ========-->
                        </div>  


                        <button class="btn btn-primary btn-lg mx-auto d-block mt-5" type="submit"
                                name="itemID" value="<?php echo $ItemID[$i] ?>">Confirm Deal Date</button>
                    </div> 

                </form>
            </div>
        </div> 
    </div>

    <!-------------------------- Row for Edit Cart ------------------------->
    <div class="row">
            
    </div>

</body>
</html>

<!-- End of content -->

<!-- Footer -->
</body>
</html>