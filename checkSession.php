<?php 
require_once "admin/session.php";
require_once "class/shop_class.php";

session_start();

$productId = $_GET['id'];
$redirect = $_GET['redirect'];
$product = new Shop;
$productP = $product->displayProductPriceById($productId);
$productPrice = $productP->fetch_assoc();

// Check if $_SESSION['totalAmount'] is set, initialize it if not
if (!isset($_SESSION['totalAmount'])) {
    $_SESSION['totalAmount'] = 0;
}

// Update session with quantity of the product
if (isset($_SESSION['itemAmount'][$productId])) {
    $_SESSION['itemAmount'][$productId] += 1;
} else {
    $_SESSION['itemAmount'][$productId] = 1; 
}

$_SESSION['totalAmount'] += $productPrice['product_price'];
echo '<script>alert("' . $_SESSION['totalAmount'] . '");</script>';

// Redirect to the specified location
if ($redirect) {
    header("Location: $redirect.php");
    exit; // Stop further execution
} else {
    header("Location: index.php");
    exit; // Stop further execution
}
?>
