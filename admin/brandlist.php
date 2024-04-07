<?php
include "header.php";
include "sidebar.php";
include "class/brand_class.php";
?>

<?php
$brand = new Brand;
$showbrand = $brand->showBrand();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $categoryName = $_POST['categoryName'];
  $insert = $category->insertCategory($categoryName);
}
?>

<div class="right">
  <div class="category-list">
    <h1>TYPE LIST</h1>
    <table>
      <tr>
        <th>No.</th>
        <th>ID</th>
        <th>Category</th>
        <th>Name</th>
        <th colspan="2">Action</th>
      </tr>
      <?php
      if ($showbrand) {
        $i = 0;
        while ($result = $showbrand->fetch_assoc()) {
          $i++;
      ?>
          <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $result['brand_id'] ?></td>
            <td><?php echo $result['category_name'] ?></td>
            <td><?php echo $result['brand_name'] ?></td>
            <td>
              <a class="btn" href="brandedit.php?brand_id=<?php echo $result['brand_id'] ?>">
                Edit
              </a>
            </td>
            <td> <a class="btn" href="branddelete.php?brand_id= <?php echo $result['brand_id'] ?>">
                Delete
              </a></td>


          </tr>
      <?php
        }
      }
      ?>
    </table>
  </div>
</div>
</section>
</body>

</html>