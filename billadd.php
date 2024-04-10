<?php
include 'class/bill_class.php';
include 'class/billProduct.php';

$bill = new Bill;
$firstName = $_GET['firstName'];
$lastName = $_GET['lastName'];
$address = $_GET['address'];
$phone = $_GET['phone'];
$totalMoney = $_GET['totalMoney'];
$paymentMethod = $_GET['paymentMethod'];

$result = $bill->insertBill($paymentMethod, 
$firstName, 
$lastName, 
$address, 
$phone, 
$totalMoney);

$billId = $bill -> newestID();
$bill_id = $billId -> fetch_assoc()['bill_id'];

$products = json_decode($_GET['products'], true);
$billProduct = new BillProduct;
foreach ($products as $product) {
    $product_id = $product['id'];
    $product_name = $product['name'];
    $product_quantity = $product['quantity'];
    $product_price = $product['price'];
    $result = $billProduct -> insertBillProduct($bill_id, $product_id, $product_name, $product_quantity, $product_price);
}

header("Location: orderComplete.php?bill_id=" . urlencode($bill_id));
?>

