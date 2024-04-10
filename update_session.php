<?php

session_start();

$productId = $_GET['productId'];
$type = $_GET['type'];

// Cập nhật số lượng sản phẩm trong session
if (isset($_SESSION['itemAmount'][$productId])) {
    if($type === 'minus') 
        $_SESSION['itemAmount'][$productId] -= 1; 
    else if ($type = 'add')
        $_SESSION['itemAmount'][$productId] += 1; 

}

echo ( $_SESSION['itemAmount'][$productId]);

?>