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

$getCategory = $category->getCategory($categoryId);

if ($getCategory) {
    $result = $getCategory->fetch_assoc();
}
?>

<?php
$category = new Category;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $categoryName = $_POST['categoryName'];
    $insert = $category->updateCategory($categoryId, $categoryName);
    header('Location: categorylist.php');
}
?>

<div class="right">
    <div class="category-add">
        <h1>Add Category</h1>
        <form action="" method="POST">
            <label for="categoryName">Enter category <span style="color: tomato;">*</span></label><br>
            <input type="text" name="categoryName" id="" placeholder="" value="<?php echo $result['category_name'] ?>" required> <br>
            <label for="categoryImg">Choose category image <span style="color: tomato;">*</span></label><br>
            <input type="file" name="caategoryImg" require>
            <button type="submit">Edit</button>
        </form>
    </div>
</div>
</section>
</body>

</html>