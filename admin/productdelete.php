<?php
include "header.php";
include "sidebar.php";
include "class/product_class.php"
?>

<?php
$product = new Product;
$productId = $_GET['product_id'];
$delete = $product->deleteProduct($productId);
header('Location: productlist.php');
?>