<?php
include 'header.php';
?>


<?php
    if (isset($_GET['name']) && !empty($_GET['name'])) {
        // Retrieve and sanitize the product name
        $name = htmlspecialchars($_GET['name']);
        var_dump($name);
    }
?>  



</div>






<div class="header-body productDetails">
    <h1>Product Details</h1>
    <div class="productDetails-wrapper">
        <!-- PRODUCT LIES HERE -->


        <!-- IMG -->
        <div class="product-img">
            <img src="asset/image/SHOP-IMG/i1.jpg" alt="" srcset="">
        </div>

        <!-- INFO -->

        <div class="product-info">
            <!-- NAME -->
            <div class="product-name">
                ITEM 1
            </div>

            <!-- PRICE -->
            <div class="product-price">
                $<span class="price">12</span>
            </div>

            <!-- DESCRIPTION -->
            <div class="product-description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Accusantium adipisci dignissimos at ipsum exercitationem, obcaecati iste porro quo neque
                perferendis laudantium placeat nesciunt vero. Necessitatibus aliquid repellat quia assumenda sequi.
            </div>

            <!-- ADD TO CART BUTTON -->
            <div class="addToCart">
                <button id="addToCart-btn" onclick="">BUY NOW</button>
            </div>
        </div>



    </div>

</div>



<?php
include 'footer.php';
?>