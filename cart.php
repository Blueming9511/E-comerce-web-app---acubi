<?php 
    include 'header.php';
?>

        <div class="header-body">
            <!-- Title -->
            <div class="title">
                CART
            </div>

            <div class="process">
                <a id="shopping-cart" href="cart.html">SHOPPING CART</a> > <a id="checkout-details"
                    href="checkout.html">CHECKOUT DETAILS</a> > <a id="order-complete" href="">ORDER COMPLETE</a>
            </div>

            <div class="cart-wrapper">
                    <form class="cart-form" action="" method="post" >
                        <table class="shop-table">
                            <thead>
                                <tr>
                                    <th class="product-name">Product</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-subtotal">Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="cart-item">

                                    <td class="product">

                                        <img src="asset/image/SHOP-IMG/i1.jpg" alt="">
                                        <div class="product-info">
                                            <h2 class="product-name">Y2k shirt</h2>
                                            <div class="product-price">$ 123</div>
                                            <div class="product-remove">remove</div>
                                        </div>


                                    </td>

                                    <td class="product-quantity" data-title="Quantity">
                                        <span class="minus"> - </span>
                                        <span class="quantity"> 1 </span>
                                        <span class="add"> + </span>
                                    </td>

                                    <td class="product-subtotal" data-title="Subtotal">
                                        <span class="Price-amount amount"><bdi><span
                                                    class="woocommerce-Price-currencySymbol">$</span>117.00</bdi></span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="checkout">
                            <div class="cart-total" >
                                <h2>Total: <span class="total-price">$123</span></h2>
                                
                            </div>

                            <a href="checkout.html" class="navToCheckout">Check out</a>
                        </div>
                    </form>
                </div>
            </div>



        </div>


    </div>






<!-- ==== FOOOTER ==== -->
<?php
include 'footer.php';
?>