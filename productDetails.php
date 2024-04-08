<?php
include 'header.php';
include 'admin/class/product_class.php';
?>

<?php
// Check if the 'id' parameter exists in the URL
if(isset($_GET['id'])) {
    // Retrieve the 'id' value from the URL
    $productId = $_GET['id'];
    var_dump($productId);

    $product = new Product;
    $showProduct = $product->showProductById($productId);
    if ($showProduct) {
        $result = $showProduct -> fetch_assoc();
    }

}
?>

<div class="header-body productDetails">
    <h1>Product Detail</h1>
    <div class="productDetails-wrapper">
        <!-- PRODUCT LIES HERE -->
        <!-- IMG -->
        <div class="product-img">
            <img src="admin/uploads/<?php echo $result['product_img'] ?>" alt="" srcset="">
        </div>

        <!-- INFO -->

        <div class="product-info">
            <!-- NAME -->
            <div class="product-name">
            <?php echo $result['product_name'] ?>
            </div>

            <!-- PRICE -->
            <div class="product-price">
                $<span class="price"><?php echo $result['product_price'] ?> </span>
            </div>

            <!-- DESCRIPTION -->
            <div class="product-description">
                <?php echo $result['product_desc'] ?>
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