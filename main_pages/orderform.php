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
                                <span class="text-muted">$75.00</span>
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
                                <span class="text-muted">$9.12</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <h5 class="my-0">Total (USD)</h5>
                                <strong>$84.12</strong>
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
                    <i class="fa fa-credit-card fa-3x text-primary"></i>
                    <h2 class="text-start">Checkout Form</h2>
                </div>


                    
                    <div class="col-md-8 order-md-1 my-auto mb-5">
                        <h4 class="mb-3">Billing address</h4>


                        <!-- ========== FORM BEGINS  ==========-->
                        <form class="needs-validation" method="POST" action="orderconf.php" novalidate>
                            <div class="row">
                                
                                <div class="col-md-6 mb-3">
                                    <label for="firstName">First name</label>
                                    <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName">Last name</label>
                                    <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                                    <div class="invalid-feedback">
                                        Valid last name is required.
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="email">Email
                                </label>
                                <input type="email" class="form-control" id="email" placeholder="you@example.com">
                                <div class="invalid-feedback">
                                    Please enter a valid email address.
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                                <div class="invalid-feedback">
                                    Please enter your shipping address.
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="address2">Address 2
                                    <span class="text-muted">(Optional)</span>
                                </label>
                                <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                            </div>

                            <div class="row">
                                <div class="col-md-5 mb-3">
                                    <label for="country">Country</label>
                                    <input type="text" class="form-control" id="country" placeholder="" required>
                                    <div class="invalid-feedback">
                                        Please provide a valid state.
                                    </div>
                                    <div class="invalid-feedback">
                                        Please select a valid country.
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="state">State</label>
                                   <input type="text" class="form-control" id="state" placeholder="" required>
                                    <div class="invalid-feedback">
                                        Please provide a valid state.
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="zip">Zip</label>
                                    <input type="text" class="form-control" id="zip" placeholder="" required>
                                    <div class="invalid-feedback">
                                        Zip code required.
                                    </div>
                                </div>
                            </div>
                            <hr class="mb-4">
                            <div class="custom-control custom-checkbox p-2">
                                <input type="checkbox" class="custom-control-input" id="same-address">
                                <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
                            </div>

                            <hr class="mb-4">

                            <h4 class="mb-3">Payment</h4>

                            <div class="d-block my-3">
                                <div class="custom-control custom-radio">
                                    <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                                    <label class="custom-control-label" for="credit">Credit card</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                                    <label class="custom-control-label" for="debit">Debit card</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                                    <label class="custom-control-label" for="paypal">Paypal</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="cc-name">Name on card</label>
                                    <input type="text" class="form-control" id="cc-name" placeholder="" required>
                                    <small class="text-muted">Full name as displayed on card</small>
                                    <div class="invalid-feedback">
                                        Name on card is required
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="cc-number">Credit card number</label>
                                    <input type="text" class="form-control" id="cc-number" placeholder="" required>
                                    <div class="invalid-feedback">
                                        Credit card number is required
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <label for="cc-expiration">Expiration</label>
                                    <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                                    <div class="invalid-feedback">
                                        Expiration date required
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="cc-expiration">CVV</label>
                                    <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                                    <div class="invalid-feedback">
                                        Security code required
                                    </div>
                                </div>
                            </div>
                            <hr class="mb-4">
                            <button class="btn btn-primary btn-lg btn-block" type="submit">Place Order</button>
                        </form>
                    </div>
                </div>
            </div>

        </section>
    </main>







<!-- End of content -->

<!-- Footer -->
<?php include '../view/footer.php'; ?>