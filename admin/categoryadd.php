<?php
include "header.php";
include "sidebar.php";
include "class/category_class.php"
?>

<?php
  $category = new Category;
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $categoryName = $_POST['name'];
    $insert = $category -> insertCategory($categoryName);
  }
  var_dump($_POST);
?>

<div class="right">
      <div class="category add">
        <h1>Thêm sản phẩm</h1>
        <form action="" method="POST">
          <input type="text" name="name" id="" placeholder="Nhập tên sản phẩm">
          <button type="submit">Thêm</button>
        </form>
      </div>
    </div>
  </section>
</body>
</html>