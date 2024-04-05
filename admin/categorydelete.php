<?php
include "header.php";
include "sidebar.php";
include "class/category_class.php"
?>

<?php
$category = new Category;
if (!isset($_GET['category_id']) || $_GET['category_id'] == NULL) {
    echo "<script> window.location = 'categorylist.php' </script>";
} else {
    $categoryId = $_GET['category_id'];
}
$delete = $category->deleteCategory($categoryId);
header('Location: categorylist.php');
?>