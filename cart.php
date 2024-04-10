<?php
include 'header.php';
?>

<div class="header-body">
    <!-- Title -->
    <div class="title">
        CART
    </div>

    <div class="process">
        <a id="shopping-cart" href="cart.php">SHOPPING CART</a> > <a id="checkout-details" style="color: #00000051;" href="checkout.php">CHECKOUT DETAILS</a> > <a id="order-complete" href="">ORDER COMPLETE</a>
    </div>

    <div class="cart-wrapper">
        <form class="cart-form" action="" method="post">
            <table class="shop-table">
                <thead>
                    <tr>
                        <th class="product-name">Product</th>
                        <th class="product-quantity">Quantity</th>
                        <th class="product-subtotal">Subtotal</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    if (isset($_SESSION['itemAmount'])) {
                        $product = array();
                        foreach ($_SESSION['itemAmount'] as $productId => $amount) {
                            $product[] = $productId;
                        }
                        $strId = implode(', ', $product);
                        $query = "SELECT * FROM tbl_product WHERE product_id IN ($strId) ORDER BY product_id DESC";
                        $con = mysqli_connect("localhost", "root", "", "acubi");
                        $results = mysqli_query($con, $query);

                        $subTotal = 0;

                        while ($result = $results->fetch_assoc()) {
                            $subTotal += $result['product_price'] * $_SESSION['itemAmount'][$result['product_id']];

                    ?>
                            <tr class="cart-item" class="product">
                                <td class="product-img">
                                    <img src="asset/image/SHOP-IMG/<?php echo $result['product_img'] ?>" alt="">
                                    
                                    <div class="product-info">
                                        <h2 class="product-name"><?php echo $result['product_name'] ?></h2>
                                        <div class="product-price">$ <?php echo $result['product_price'] ?>
                                        <span class="product-remove">remove</span>
                                        </div>
                                    </div>
                                </td>
                                    
                                <td class="product-quantity" data-title="Quantity">
                                    <span class="minus" onclick="decreaseQuantity(<?php echo $result['product_id'];?>, <?php echo $result['product_price'];?>)"> - </span>
                                    <span id="quantity-<?php echo $result['product_id']; ?>" class="quantity"> <?php echo $_SESSION['itemAmount'][$result['product_id']] ?> </span>                                    
                                    <span class="add" onclick="increaseQuantity(<?php echo $result['product_id']; ?>, <?php echo $result['product_price'];?>)"> + </span>

                                </td>   

                                <td class="product-subtotal" data-title="Subtotal">
                                    <span class="Price-amount amount"><bdi id="subtotal-<?php echo $result['product_id']; ?>"><span class="woocommerce-Price-currencySymbol">$</span><?php echo $_SESSION['itemAmount'][$result['product_id']] * $result['product_price']?>.00</bdi></span>
                                </td>
                            </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>

            <div class="checkout">
                <div class="cart-total">
                <h2>Total: <span class="total-price" id="total"> $<?php echo isset($_SESSION['totalAmount']) ? $_SESSION['totalAmount'] : 0 ?>.00</span></h2>
                </div>
                <a href="<?php echo isset($_SESSION['totalAmount']) ? 'checkout.php' : '#' ?>" class="navToCheckout">Check out</a>            
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