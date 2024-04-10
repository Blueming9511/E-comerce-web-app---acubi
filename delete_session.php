<?php
session_start();
$productId = $_GET['id'];
$productPrice = $_GET['price'];
$productQuantity = $_GET['quantity'];
if (isset($_SESSION['itemAmount'][$productId])) {
    unset($_SESSION['itemAmount'][$productId]);
    $_SESSION['totalAmount'] -= floatval($productPrice) * intval($productQuantity);
}
header("Location: cart.php");

?>