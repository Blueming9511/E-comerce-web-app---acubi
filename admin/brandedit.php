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
    <h1>Thêm loại sản phẩm</h1> <br>
    <form action="" method="POST">
        <select name="categoryId" id="">
            <option value="#">Chọn danh mục</option>
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
      <input type="text" name="brandName" id="" placeholder="Nhập loại sản phẩm" 
        value = "<?php echo $resultBrand['brand_name'] ?>"
      require>
      <button type="submit">Sửa</button>
    </form>
  </div>
</div>
</section>
</body>

</html>