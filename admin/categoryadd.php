<?php
include "header.php";
include "sidebar.php";
include "class/category_class.php"
?>

<?php
$category = new Category;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $categoryName = $_POST['categoryName'];
  $insert = $category->insertCategory($categoryName);
}
?>

<div class="right">
  <div class="category add">
    <h1>Category Add</h1>
    <form action="" method="POST">
      <input type="text" name="categoryName" id="" placeholder="Nhập tên danh mục" require>
      <button type="submit">Thêm</button>
    </form>
  </div>
</div>
</section>
</body>

</html>