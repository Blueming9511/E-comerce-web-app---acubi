<?php
include 'header.php';
include 'sidebar.php';
include 'class/product_class.php';
?>

<?php
$product = new Product;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $insert = $product->insertProduct($_POST, $_FILES);
}

?>


<div class="right">
      <div class="product add">
        <form action="" method="POST" enctype="multipart/form-data">
            <table class="product-add">
                <tr>
                    <td colspan="2"><h1>ADD PRODUCT</h1></td>
                </tr>
                <tr>
                    <td>
                        <label for="category">Category select <span style="color:tomato">*</span></label>        
                    </td>
                    <td>
                        <label for="brand">Brand select <span style="color:tomato">*</span></label>
                    </td>
                </tr>

                <tr>
                    <td>
                        <select name="categoryId" id="" required>
                            <option value="#"></option>
                            <?php
                                $showCategory = $product -> showCategory();
                                if ($showCategory) {
                                    while ($result = $showCategory -> fetch_assoc()) {
                                ?>
                            <option value="<?php echo $result['category_id'] ?>"> 
                            <?php echo $result['category_name']?> </option>
                            <?php
                                }
                            }
                            ?>
                        </select>                   
                    </td>

                    <td>
                        <select name="brandId" id="" required>
                            <option value="#"></option>
                            <?php
                                $showBrand = $product -> showBrand();
                                if ($showBrand) {
                                    while ($resultBrand = $showBrand -> fetch_assoc()) {
                                ?>
                            <option value="<?php echo $resultBrand['brand_id'] ?>"> 
                            <?php echo $resultBrand['brand_name']?> </option>
                            <?php
                                }
                            }
                            ?>
                        </select>                    
                        </td>
                </tr>

                <tr>
                    <td>
                        <label for="productName">Product name <span style="color:tomato">*</span></label>
                    </td>

                    <td>
                        <label for="productPrice">Product price <span style="color:tomato">*</span></label>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input required ="text" name="productName" id="">
                    </td>
                    <td>
                        
                        <input required ="text" name="productPrice" id="">
                        <span class="money"> $ </span>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="productDesc">Product description <span style="color:tomato">*</span></label> 
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <textarea name="productDesc" id="" cols="30" rows="10"></textarea>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="">Product image <span style="color:tomato">*</span></label> 
                    </td>
                </tr>

                <tr>
                    <td>
                        <input required multiple type="file" name="productImg" id="" accept="image/png, image/jpeg, image/pdf">
                    </td>
                </tr>
            </table>
          <button type="submit">Add</button>
        </form>
      </div>
    </div>
  </section>
</body>
</html>