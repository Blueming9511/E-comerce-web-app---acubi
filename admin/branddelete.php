<?php
include "header.php";
include "sidebar.php";
include "class/brand_class.php"
?>

<?php
$brand = new Brand;
$brandId = $_GET['brand_id'];
$delete = $brand->deleteBrand($brandId);
header('Location: brandlist.php');
?>