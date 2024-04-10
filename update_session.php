<?php
session_start();

if (isset($_GET['productId']) && isset($_GET['quantity'])) {
    $productId = $_GET['productId'];
    $quantity = $_GET['quantity'];

    // Cập nhật số lượng sản phẩm trong session
    $_SESSION['itemAmount'][$productId] = $quantity;
}
?>
