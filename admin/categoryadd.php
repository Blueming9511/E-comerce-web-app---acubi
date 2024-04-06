<?php
include "header.php";
include "sidebar.php";
include "class/category_class.php"
?>

<?php
$category = new Category;
?>

<div class="right">
  <div class="category-add">
    <h1>ADD CATEGORY</h1>
    <form action="" method="POST">
      <label for="categoryName">Enter category <span style="color: tomato;">*</span></label><br>
      <input type="text" name="categoryName" id="" required>
      <button  type="submit">Add</button>
    </form>
  </div>
</div>
</section>
</body>

</html>