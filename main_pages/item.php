<!-- Header -->
<?php include '../view/header.php'; ?>
<!-- End of Header & Nav Section -->


<!-- Content goes below -->

<?php

    include '../db/connect.php';

    $ItemID = $_POST["itemID"];

    $sql1 = "SELECT * FROM item INNER JOIN ( model INNER JOIN manufacturer ON model.ManufacturerID = manufacturer.ManufacturerID) ON item.ModelID = model.ModelID WHERE item.itemID = \"$ItemID\";";

    if($result = mysqli_query($link, $sql1)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
              
              $ItemName = $row['ItemName'];
              $Price = $row['Price'];
              $InStock = $row['InStock'];
              $ModelID = $row['ModelID'];
              $Model = $row['Model'];
              $Manufacturer = $row['Manufacturer'];
            }
            mysqli_free_result($result);
        } else{
            $ItemName = "error";
            $Price = "error";
            $InStock = "error";
            $ModelID = "error";
            $Model = "error";
            $Manufacturer = "error";
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

?>



<!-- Entire row for product image and info -->
<div class="row mt-5 mb-5">


<!-- ===================== Product Image (left side) =================================== -->
    <div class="col-xl-10 col-md-9 col-sm-12 m-auto">
    <main class="card">
        <div class="row no-gutters">
            <aside class="col-sm-6 border-right">
                <article class="gallery-wrap"> 
                    <div class="item-gallery pt-5"> 
                        
                    
                        <!-- PHP CODE HERE FOR IMAGES -->
                        <img src="../images/<?php echo $ImgName ?>">
                

                    </div>
                </article> 
                <!-- End of gallery-wrap css -->
            </aside>


<!-- ===================== Product Info (right side) =================================== -->
            <aside class="col-sm-6">
                <article class="card-body">
                    <form method="post" action="orderform.php">


                    <!--== PHP CODE HERE FOR PRODUCT NAME ==-->
                    <h3 name="itemName" class="title mb-3"><?php echo $ItemName ?></h3>




                    <div class="mb-3"> 
                        <var class="price h3 text-warning"> 



                            <!--== PHP CODE HERE FOR PRODUCT PRICE ==-->
                            <span name="price" class="currency">US $</span><span class="num"><?php echo $Price ?></span>



                        </var> 
                    </div> <!-- end of price div -->

            
                    <!-- Row for Model#, Color -->
                    <dl class="row pt-5">
                        <dt class="col-sm-6">Model ID</dt>
                        <dd class="col-sm-6"><?php echo $ModelID ?></dd>

                        <dt class="col-sm-6">In stock?</dt>
                        <dd class="col-sm-6"><?php if($InStock >0){echo $Price;}else{echo "Not In Stock";} ?></dd>

                    </dl>
   


                    <hr>
                    <!-- Row for Quantity and add to cart button -->
                        <div class="row">
                        <dt class="col-sm-6">Quantity: </dt>
                        <dd class="col-sm-6">
                            <select name="quantity" class="form-control form-control-sm" style="width:80px;">
                                    <option> 1 </option>
                                    <option> 2 </option>
                                    <option> 3 </option>
                                    <option> 4 </option>
                                    <option> 5 </option>
                            </select>
                        </dd>
                        </div> 
                        <!-- End of Row -->

                        <hr>
                        
                        <!-- ===================== ADD TO CART BUTTON =================================== -->
                            <input type="hidden" name="itemID" value="<?php echo $ItemID ?>">
                            <input type="hidden" name="" value="<?php echo $Quantity ?>">
                            <button type="submit" name="submit" class="btn btn-warning mb-3 fw-bold">Add to Cart</button>
                        </form>

                    </article> <!-- END of card body -->
                </aside> <!-- END of col -->
        </div> <!-- END of row-->
    </main> <!-- END of card -->


    <!-- PRODUCT DETAIL -->
    <article class="card mt-3">
        <div class="card-body">
            <h4>Detail Overview</h4>
        <p>	<?php

            echo "Item ID: " . $ItemID . "<br>";
            echo "Item Name: " . $ItemName . "<br>";
            echo "Model: " . $Model . "<br>";
            echo "Manufacturer: " . $Manufacturer . "<br>";
            echo "Category: " . $Category . "<br>";
            ?></p>

        </div> 
    </article> 

    <!-- PRODUCT DETAIL .// -->

    </div> <!-- END of col -->

</div> <!-- END of row -->



<!-- End of content -->

<!-- Footer -->
<?php include '../view/footer.php'; ?>