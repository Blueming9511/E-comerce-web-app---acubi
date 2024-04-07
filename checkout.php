<?php 
    include 'header.php';
?>

        <div class="header-body">
            <!-- Title -->
            <div class="title">
                Checkout details
            </div>

            <div class="process">
                <a href="cart.html">SHOPPING CART</a> > <a id="checkout-details" href="checkout.html">CHECKOUT
                    DETAILS</a> > <a id="order-complete" href="orderComplete.html">ORDER COMPLETE</a>
            </div>



            <!-- billing process -->

          
            <div class="billing-process">
                <div class="billing-wrapper">

                    <form action="" method="post">

                        <h3>Billing details</h3>
                        <!-- name -->
                        <div class="fullname">
                            <div class="label-input">
                                <label for="firstname">First Name</label>
                                <input type="text" name="firstname" id="firstname">
                            </div>
                            <div class="label-input">
                                <label for="lastname">Last Name</label>
                                <input type="text" name="lastname" id="lastname">
                            </div>
                        </div>


                        <!-- address -->
                        <div class="label-input">
                            <label for="address">Address</label>
                            <input type="text" name="address" id="address">
                        </div>

                        <!-- phone number -->
                        <div class="label-input">
                            <label for="phone">Phone number</label>
                            <input type="tel" name="phone" id="phone">
                        </div>

                        <h3>Payment method</h3>

                        <style>
                            .payment-method {
                                display: flex;
                                gap: 1em;

                            }

                            label {
                                margin-bottom: 5px;
                            }
                        </style>
                        <div class="payment-method">

                            <div>
                                <input type="radio" name="payment-method" id="Bank-transfer" value="Bank-transfer">
                                <label for="Bank-transfer">Bank transfer</label>

                            </div>

                            <div>
                                <input type="radio" name="payment-method" id="cash" value="cash">
                                <label for="cash">Cash</label>
                            </div>


                        </div>

                        <button class="placeOrder-btn" type="submit">Place order</button>


                    </form>
                </div>

                <div class="cart-wrapper">
                    <h3>
                        Your order </h3>


                
                    <div class="cart-checkout">
                        <div class="cart-title">
                            <span class="Product-title">Product</span>
                            <span class="subtotal-title">Sub total</span>
                        </div>

                        <div class="cart-checkout-body">

                            <div class="product-details">
                                <img src="asset/image/SHOP-IMG/i1.jpg" alt="" srcset="">

                                <div class="product-name">
                                    Y2k <span class="quantity"> x 1</span>
                                </div>



                            </div>

                            <div class="subtotal">
                                $80.99
                            </div>
                        </div>

                        <div class="cart-footer">
                            <div class="total-title">Total</div>

                            <div class="total-money">
                                $80.99

                            </div>
                        </div>

                    </div>
                </div>
            </div>



        </div>



    </div>


    </div>







<!-- ==== FOOOTER ==== -->
<?php
include 'footer.php';
?>