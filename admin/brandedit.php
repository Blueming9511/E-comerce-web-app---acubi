<?php
include "header.php";
include "sidebar.php";
include "class/brand_class.php"
?>

<?php
    $brand = new Brand;
    $brandId = $_GET['brand_id'];
    $getBrand = $brand -> getBrand($brandId);
    if ($getBrand) {
        $resultBrand = $getBrand -> fetch_assoc();
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $categoryId = $_POST['categoryId'];
        $brandName = $_POST['brandName'];
        $update = $brand->updateBrand($categoryId, $brandName, $brandId);
    }
?>

<div class="right">
  <div class="category add">
    <h1>Add product type</h1> <br>
    <form action="" method="POST">
        <select name="categoryId" id="">
            <option value="#">Choose category</option>
            <?php
            $show = $brand -> showCategory();
            if ($show) {
                while ($result = $show -> fetch_assoc()) {
            ?>
            <option <?php if($resultBrand['category_id'] == $result['category_id']) {echo 'SELECTED';} ?> 
                value="<?php echo $result['category_id'] ?>"> <?php echo $result['category_name']?> </option>
            <?php
                }
            }
            ?>
        </select> <br>
      <input type="text" name="brandName" id="" placeholder="Enter product type" 
        value = "<?php echo $resultBrand['brand_name'] ?>"
      require>
      <button type="submit">Edit</button>
    </form>
  </div>
</div>
</section>
</body>

</html>