<?php
include "header.php";
include "sidebar.php";
include "class/brand_class.php"
?>

<?php
$brand = new Brand;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['categoryId']) && isset($_POST['brandName'])) {
        $categoryId = $_POST['categoryId'];
        $brandName = $_POST['brandName'];
        $insert = $brand->insertBrand($categoryId, $brandName);
    }
}
?>

<div class="right">
  <div class="category-add">
    <h1>ADD TYPE</h1> <br>
    <form action="" method="POST">
        <label for="categoryId">Choose category <span style="color: tomato;">*</span></label><br>
        <select name="categoryId" id="" required>
            <option value="#" disabled> BRAND SELECT</option>
            <?php
            $show = $brand -> showCategory();
            if ($show) {
                while ($result = $show -> fetch_assoc()) {
            ?>
            <option value="<?php echo $result['category_id'] ?>"> <?php echo $result['category_name']?> </option>
            <?php
                }
            }
            ?>
        </select> <br>
        <label for="brandName">Enter product type <span style="color: tomato;">*</span></label><br>
      <input type="text" name="brandName" id="" required>
      <button type="submit">Add</button>
    </form>
  </div>
</div>
</section>
</body>

</html>