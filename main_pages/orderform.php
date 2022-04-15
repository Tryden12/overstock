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
                                            <img class="w-50" src="../images/mensboot.png" class="img-thumbnail img-sm">
                                        </div>


                                            <figcaption class="media-body">


                                                <!--========  PHP CODE HERE  ========-->
                                                <h6 class="title text-truncate pt-2">Product name goes here</h6>


                                            </figcaption>
                                    </figure> 
                                </td>
                                <td> 
                                    <select class="form-control">
                                            <option>1</option>
                                            <option>2</option>	
                                            <option>3</option>	
                                            <option>4</option>	
                                    </select> 
                                </td>
                                <td> 
                                    <div class="price-wrap"> 
                                        <var class="price">USD $145</var> 
                                    </div> <!-- END of price wrap -->
                                </td>
                                <td class="text-right"> 
                                    <a href="" class="btn btn-outline-danger"> × Remove</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <figure class="media">
                                    <div class="img-wrap">
                                            
                                            <!--========  PHP CODE HERE  ========-->
                                            <img class="w-50" src="../images/mensboot.png" class="img-thumbnail img-sm">
                                        </div>


                                            <figcaption class="media-body">


                                                <!--========  PHP CODE HERE  ========-->
                                                <h6 class="title text-truncate pt-2">Product name goes here</h6>


                                            </figcaption>
                                    </figure> 
                                </td>
                                <td> 
                                    <select class="form-control">
                                            <option>1</option>
                                            <option>2</option>	
                                            <option>3</option>	
                                            <option>4</option>	
                                    </select> 
                                </td>
                                <td> 
                                    <div class="price-wrap"> 
                                        <var class="price">USD $145</var> 
                                    </div> <!-- END of price wrap -->
                                </td>
                                <td class="text-right"> 
                                    <a href="" class="btn btn-outline-danger"> × Remove</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <figure class="media">
                                    <div class="img-wrap">
                                            
                                            <!--========  PHP CODE HERE  ========-->
                                            <img class="w-50" src="../images/mensboot.png" class="img-thumbnail img-sm">
                                        </div>


                                            <figcaption class="media-body">


                                                <!--========  PHP CODE HERE  ========-->
                                                <h6 class="title text-truncate pt-2">Product name goes here</h6>


                                            </figcaption>
                                    </figure> 
                                </td>
                                <td> 
                                    <select class="form-control">
                                            <option>1</option>
                                            <option>2</option>	
                                            <option>3</option>	
                                            <option>4</option>	
                                    </select> 
                                </td>
                                <td> 
                                    <div class="price-wrap"> 
                                        <var class="price">USD $145</var> 
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
                <dl class="dlist-align">
                <dt>Subtotal </dt>
                <dd class="text-right">USD $75.00</dd>
                </dl>
                <dl class="dlist-align">
                <dt>Shipping:</dt>
                <dd class="text-right">FREE</dd>
                </dl>
                <dl class="dlist-align">
                <dt>Tax (7%):</dt>
                <dd class="text-right">$12.56</dd>
                </dl>
                <dl class="dlist-align h4">
                <dt>Total:</dt>
                <dd class="text-right"><strong>USD $87.56</strong></dd>
                </dl>
                <hr>
                <figure class="itemside mb-3">
                    <aside class="aside">
                        <img src="../images/mastercard.png">
                        <img src="../images/visa.png">
                    </aside>
                    <aside class="aside">
                        <img src="../images/apple-pay.png">
                        <img src="../images/paypal.png">
                    </aside>

            </aside> <!-- END of col -->
        </div>

    </div> <!-- END of container  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->









<!-- End of content -->

<!-- Footer -->
<?php include '../view/footer.php'; ?>