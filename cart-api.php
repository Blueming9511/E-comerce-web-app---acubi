<?php
include 'class/ProductBought_class.php';
if (isset($_GET['id']) && $_GET['id'] != null) {
    $productId = $_GET['id'];
    $product = new ProductBought;
    $found = $product -> displayProductBoughtById($productId);

    if ($found) {
        $update = $product -> updateQuantity($productId, 1);
    }
    else {
        $productInfo = $product->displayProductsById($productId);

        if($productInfo) {
            $result = $productInfo -> fetch_assoc();
    
            $product_img = $result['product_img'];
            $product_name = $result['product_name'];
            $product_quantity = 1;
            $product_price = $result['product_price'];
            $product_subtotal = $product_quantity * $product_price;
            var_dump($product_subtotal);
            $insert = $product -> insertProductBought($productId, $product_img, $product_name, $product_quantity, $product_price, $product_subtotal);
        }  
    }
}

?>