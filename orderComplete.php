<?php 
    include 'header.php';
?>
        <div class="header-body">
            <!-- Title -->
            <div class="title">
                Order complete
            </div>

            <div class="process">
                <a href="cart.php">SHOPPING CART</a> > <a id="checkout-details" style="color: rgba(46, 46, 46, 0.427);"
                    href="checkout.php">CHECKOUT
                    DETAILS</a> > <a id="order-complete" href="orderComplete.php" style="color: black;">ORDER COMPLETE</a>
            </div>



            <div class="anouncement" style="text-align: center;">
                Thank you. Your order has been received
            </div>

            <div class="order-details">
                <table>
                    <thead>
                        <tr>
                            <th>Order number</th>
                            <th>Date</th>
                            <th>Total</th>
                            <th>Payment method</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td class="order-ID">123</td>
                            <td class="order-date">13-4-2024</td>
                            <td class="order-total">$123</td>
                            <td class="order-payment-method">Bank transfer</td>
                        </tr>
                    </tbody>
                </table>

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

                <a id="continueToShop" href="index.php">Continue to shop</a>
            </div>





        </div>



    </div>


    </div>




<!-- ==== FOOOTER ==== -->
<?php
include 'footer.php';
?>