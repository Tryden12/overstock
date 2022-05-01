<?php

    include '../db/connect.php';
    if(isset($_POST["email"])) {

        $fN = $_POST['firstName'];
        $lN = $_POST['lastName'];
        $mail = $_POST['email'];
        $addr = $_POST['address'];
        $addr2 = $_POST['address2'];   
        $city = $_POST['city'];
        $st = $_POST['state'];
        $zip = $_POST['zip'];
        $ItemID = $_POST["itemID"];
        $Quantity = $_POST["quantity"];
        $total = $_POST["total"];
        $ItemName = $_POST["itemname"];
        $PriceSQL = $_POST["price"];
        $ImgName = $_POST['imgname'];

        echo $ItemID;


        $addrf = $addr . " " . $addr2;
    
        $sqlIN = "INSERT INTO customer(`FName`, `LName`, `ShipAdd`, `ShipCity`, `ShipState`, `ShipZIP`, `BillAdd`, `BillCity`, `BillState`, `BillZIP`, `Phone`, `Email`) VALUES (\"$fN\", \"$lN\", \"$addrf\", \"$city\", \"$st\", \"$zip\", \"$addrf\", \"$city\",\"$st\",\"$zip\", '555-555-5555',\"$mail\")";
    
        if($result = mysqli_query($link, $sqlIN)){

            $sqlCustID = "SELECT CustID FROM customer WHERE Email = \"$mail\" && ShipZIP = \"$zip\" && LName = \"$lN\"";

            if($result = mysqli_query($link, $sqlCustID)){
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){
                  
                    $CustID = $row['CustID'];
                    }

                    $sqlIN2 = "INSERT INTO orderroot(`CustID`, `ItemID`, `Quantity`, `Total`, `STAT`) VALUES (\"$CustID\",\"$ItemID\",\"$Quantity\",\"$total\",'New')";

                    if($result = mysqli_query($link, $sqlIN2)){

                        header("Location: orderconf.php");
                        
                    } else{
                        echo "ERROR: Could not able to execute $sqlIN2. " . mysqli_error($link);
                    }

                    mysqli_free_result($result);
                }
            } else{
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
        
        
    }else{

        $ItemID = $_POST["itemID"];
        $Quantity = $_POST["quantity"];


        $sql1 = "SELECT * FROM item INNER JOIN ( model INNER JOIN manufacturer ON model.ManufacturerID = manufacturer.ManufacturerID) ON item.ModelID = model.ModelID WHERE item.itemID = \"$ItemID\";";

        if($result = mysqli_query($link, $sql1)){
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
              
                $ItemName = $row['ItemName'];
                $PriceSQL = $row['Price'];
              
                }
                mysqli_free_result($result);
            } else{
                $ItemName = "error";
                $Price = "error";

            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }

        $sql2 = "SELECT category.* FROM Item INNER JOIN category ON item.CategoryID = category.CategoryID WHERE item.itemID = \"$ItemID\";";

        if($result = mysqli_query($link, $sql2)){
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
              
                $Category = $row['Category'];
            }
            mysqli_free_result($result);
            } else{
                $Category = "error";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }

        $sql3 = "SELECT images.* FROM item INNER JOIN images ON item.imgID = images.ImgID WHERE item.itemID = \"$ItemID\";";

        if($result = mysqli_query($link, $sql3)){
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
              
                $ImgName = $row['ImgName'];
                }
                mysqli_free_result($result);
            } else{
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
    }    
?>



<!-- Header -->
<?php include '../view/header.php'; ?>
<!-- End of Header & Nav Section -->


<!-- Content goes below -->


<!-- ========================= SECTION CONTENT ========================= -->

<section class="section-content bg padding-y border-top">
    <div class="container m-2">


        <!-------------------------- Row for Edit Cart ------------------------->
        <div class="row">
            <main class="col-sm-9">

                <div class="card">
                    <table class="table table-hover shopping-cart-wrap">
                        <thead class="text-muted">
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col" width="120">Quantity</th>
                                <th scope="col" width="120">Price</th>
                                <th scope="col" class="text-right" width="200">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <figure class="media">
                                        <div class="img-wrap">
                                            
                                            <!--========  PHP CODE HERE  ========-->
                                            <img class="w-50 img-thumbnail img-sm" src="../images/<?php echo $ImgName ?>">
                                        </div>


                                            <figcaption class="media-body">


                                                <!--========  PHP CODE HERE  ========-->
                                                <h6 class="title text-truncate pt-2"><?php echo $ItemName ?></h6>


                                            </figcaption>
                                    </figure> 
                                </td>
                                <td> 
                                    <select class="form-control">
                                            <option><?php echo $Quantity; ?></option>
                                            <option>1</option>
                                            <option>2</option>	
                                            <option>3</option>	
                                            <option>4</option>	
                                    </select> 
                                </td>
                                <td> 
                                    <div class="price-wrap"> 
                                        <var class="price">
                                            <?php 
                                                
                                                echo number_format((float)$PriceSQL, 2, '.', '');
                 
                                            ?>
                                        </var> 
                                    </div> <!-- END of price wrap -->
                                </td>
                                <td class="text-right"> 
                                    <a href="" class="btn btn-outline-danger"> × Remove</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!--======== END OF TABLE ========-->
                </div> 
                <!--======================================== END of shopping cart edit section ================================ -->
            </main> <!-- END of col -->
            <aside class="col-sm-3">
                
                    <!-- Order Totals Calculation -->
                <div class="row">
                    <div">
                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-muted">Totals</span>
                        </h4>
                        <ul class="list-group mb-3">
                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                    <h6 class="my-0">Subtotal:</h6>
                                </div>


                                <!--========  PHP CODE HERE  ========-->
                                <span class="text-muted">
                                    <?php 
                                        if ($Quantity == 1) {
                                            $Price = $PriceSQL;
                                            echo number_format((float)$Price, 2, '.', ''); 
                                        } else {
                                            $Price = $PriceSQL * $Quantity;
                                            echo number_format((float)$Price, 2, '.', ''); 
                                        }
                                                                        
                                    ?>
                                </span>



                            </li>
                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                    <h6 class="my-0">Shipping:</h6>
                                    <small class="text-muted">FREE</small>
                                </div>
                                <span class="text-muted">$0.00</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                    <h6 class="my-0">Tax</h6>

                                    <small class="text-muted">7%</small>
                                </div>


                                <!--========  PHP CODE HERE  ========-->
                                <span class="text-muted">$


                                    <!--========== Calculate Tax ==========-->
                                    <?php
                                        $tax = .07 * $Price;
                                        echo number_format((float)$tax, 2, '.', ''); 
                                    ?>

                                </span>



                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <h5 class="my-0">Total (USD)</h5>


                                <!--========  PHP CODE HERE  ========-->
                                <strong>$

                                    <!--========== Calculate Total ==========-->
                                    <?php
                                            $total = $Price + $tax;
                                            echo number_format((float)$total, 2, '.', ''); 
                                    ?>
                                </strong>



                            </li>
                        </ul>
                        <figure class="itemside mb-3">
                    <aside class="aside">
                        <img src="../images/mastercard.png">
                        <img src="../images/visa.png">
                        <img src="../images/paypal.png">
                    </aside>
                </figure>

                    </div>
            </aside> <!-- END of col -->
        </div>

    </div> <!-- END of container  -->
</section>
<!-- ========================= SECTION CONTENT END ========================= -->


<!-- ========================= CHECKOUT FORM ========================= -->
<main id="main" role="main">
        <section id="checkout-container">
            <div class="container">
                <div class="py-5 text-center">
                    <h2 class="text-start">Checkout Form</h2>
                </div>


                    
                    <div class="col-md-8 order-md-1 my-auto mb-5">
                        <h4 class="mb-3">Shipping address</h4>


                        <!-- ========== FORM BEGINS  ==========-->
                        <form class="needs-validation" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" novalidate>
                            <div class="row">

                                <div class="col-md-6 mb-3">
                                    <label for="firstName">First name</label>
                                    <input type="text" class="form-control" name="firstName" id="firstName" placeholder="" value="" required>
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName">Last name</label>
                                    <input type="text" class="form-control" name="lastName" id="lastName" placeholder="" value="" required>
                                    <div class="invalid-feedback">
                                        Valid last name is required.
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="email">Email
                                </label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="you@example.com">
                                <div class="invalid-feedback">
                                    Please enter a valid email address.
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" name="address" id="address" placeholder="1234 Main St" required>
                                <div class="invalid-feedback">
                                    Please enter your shipping address.
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="address2">Address 2
                                    <span class="text-muted">(Optional)</span>
                                </label>
                                <input type="text" class="form-control" name="address2" id="address2" placeholder="Apartment or suite">
                            </div>

                            <div class="row">
                                <div class="col-md-5 mb-3">
                                    <label for="city">City</label>
                                    <input type="text" class="form-control" name="city" id="city" placeholder="" required>
                                    <div class="invalid-feedback">
                                        Please provide a valid state.
                                    </div>
                                    <div class="invalid-feedback">
                                        Please select a valid city.
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="state">State</label>
                                   <input type="text" class="form-control" name="state" id="state" placeholder="" required>
                                    <div class="invalid-feedback">
                                        Please provide a valid state.
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="zip">Zip</label>
                                    <input type="text" class="form-control" name="zip" id="zip" placeholder="" required>
                                    <div class="invalid-feedback">
                                        Zip code required.
                                    </div>
                                </div>
                            </div>
 


                            
                            </div>
                            <input type="hidden" name="itemID" id="itemID" value="<?php echo $ItemID?>">
                            <input type="hidden" name="quantity" id="quantity" value="<?php echo $Quantity?>">
                            <input type="hidden" name="total" id="total" value="<?php echo $total?>">
                            <input type="hidden" name="itemname" id="itemname" value="<?php echo $ItemName?>">
                            <input type="hidden" name="price" id="price" value="<?php echo $PriceSQL?>">
                            <input type="hidden" name="imgname" id="imgname" value="<?php echo $ImgName?>">
                            <button class="btn btn-primary btn-lg btn-block mb-5" type="submit" name="submit">Place Order</button>
                        </form>
                    </div>
                </div>
            </div>

        </section>
    </main>







<!-- End of content -->

<!-- Footer -->
<?php include '../view/footer.php'; ?>