<?php
include "header.php";
include "sidebar.php";
require_once "class/category_class.php"
?>

<?php
$category = new Category;
$categoryId = $_GET['category_id'];
$delete = $category->deleteCategory($categoryId);
header('Location: categorylist.php');
?>