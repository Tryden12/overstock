<!-- Header -->
<?php include '../view/header.php'; ?>
<!-- End of Header & Nav Section -->


<!-- Content goes below -->





<!-- Entire row for product image and info -->
<div class="row mt-5 mb-5">


<!-- ===================== Product Image (left side) =================================== -->
    <div class="col-xl-10 col-md-9 col-sm-12">
    <main class="card">
        <div class="row no-gutters">
            <aside class="col-sm-6 border-right">
                <article class="gallery-wrap"> 
                    <div class="item-gallery pt-5"> 
                        
                    
                        <!-- PHP CODE HERE FOR IMAGES -->
                        <img src="../images/mensboot.png">
                

                    </div>
                </article> 
                <!-- End of gallery-wrap css -->
            </aside>


<!-- ===================== Product Info (right side) =================================== -->
            <aside class="col-sm-6">
                <article class="card-body">


                    <!--== PHP CODE HERE FOR PRODUCT NAME ==-->
                    <h3 class="title mb-3">Product Name Goes Here</h3>




                    <div class="mb-3"> 
                        <var class="price h3 text-warning"> 



                            <!--== PHP CODE HERE FOR PRODUCT PRICE ==-->
                            <span class="currency">US $</span><span class="num">40</span>



                        </var> 
                    </div> <!-- end of price div -->

            
                    <!-- Row for Model#, Color -->
                    <dl class="row pt-5">
                        <dt class="col-sm-3">Model#</dt>
                        <dd class="col-sm-9">12345611</dd>

                        <dt class="col-sm-3">Color</dt>
                        <dd class="col-sm-9">Black and white </dd>

                    </dl>
   


                    <hr>
                    <!-- Row for Quantity and add to cart button -->
                        <div class="row">
                            <div class="col-sm-5">
                                <dl class="dlist-inline">
                                <dt>Quantity: </dt>
                                    <dd> 
                                        <select class="form-control form-control-sm" style="width:72px;">
                                            <option> 1 </option>
                                            <option> 2 </option>
                                            <option> 3 </option>
                                            <option> 4 </option>
                                            <option> 5 </option>
                                        </select>
                                    </dd>
                                </dl>  
                            </div> 
                            <div class="col-sm-7">
                                <dl class="dlist-inline">
                                    <dt>Size: </dt>
                                    <dd>
                                        <label class="form-check form-check-inline">
                                        <input class="form-check-input" name="inlineRadioOptions" id="inlineRadio2" value="option2" type="radio">
                                        <span class="form-check-label">SM</span>
                                        </label>
                                        <label class="form-check form-check-inline">
                                        <input class="form-check-input" name="inlineRadioOptions" id="inlineRadio2" value="option2" type="radio">
                                        <span class="form-check-label">MD</span>
                                        </label>
                                        <label class="form-check form-check-inline">
                                        <input class="form-check-input" name="inlineRadioOptions" id="inlineRadio2" value="option2" type="radio">
                                        <span class="form-check-label">LG</span>
                                        </label>
                                    </dd>
                                </dl>  
                            </div> 
                        </div> 
                        <!-- End of Row -->

                        <hr>
                        
                        <!-- ===================== ADD TO CART BUTTON =================================== -->
                        <a href="#" class="btn  btn-warning"> <i class="fa fa-envelope"></i> Add to Cart </a>



                    </article> <!-- END of card body -->
                </aside> <!-- END of col -->
        </div> <!-- END of row-->
    </main> <!-- END of card -->


    <!-- PRODUCT DETAIL -->
    <article class="card mt-3">
        <div class="card-body">
            <h4>Detail Overview</h4>
        <p>	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi deserunt mollit anim id est laborum.</p>

        </div> 
    </article> 

    <!-- PRODUCT DETAIL .// -->

    </div> <!-- END of col -->

</div> <!-- END of row -->



<!-- End of content -->

<!-- Footer -->
<?php include '../view/footer.php'; ?>