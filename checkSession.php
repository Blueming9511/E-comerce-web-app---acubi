<?php 
require_once "admin/session.php";

session_start();

$productId = $_GET['id'];
$redirect = $_GET['redirect'];

if (isset($_SESSION['itemAmount'][$productId])) {
    $_SESSION['itemAmount'][$productId] += 1; 
}
else {
    $_SESSION['itemAmount'][$productId] = 1; 
}
if ($redirect) {
header("Location:$redirect.php");
}
else {
    header("Location:index.php");
}
?>

