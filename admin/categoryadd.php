<?php
include "header.php";
include "sidebar.php";
include "class/category_class.php"
?>

<?php
$category = new Category;
if($_SERVER['REQUEST_METHOD'] === 'POST') {
  $categoryName = $_POST['categoryName'];
  $categoryImg = $_FILES['categoryImg'];
  $insert = $category -> insertCategory($categoryName, $categoryImg);
}
?>

<div class="right">
  <div class="category-add">
    <h1>ADD CATEGORY</h1>
    <form action="" method="POST" enctype="multipart/form-data">
      <label for="categoryName">Enter category <span style="color: tomato;">*</span></label><br>
      <input type="text" name="categoryName" id="" required><br>
      <label for="categoryImg">Choose category image <span style="color: tomato;">*</span></label><br>
      <input type="file" name="categoryImg" required>
      <button  type="submit">Add</button>
    </form>
  </div>
</div>
</section>
</body>

</html>