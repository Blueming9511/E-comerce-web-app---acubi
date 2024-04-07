<?php
include 'header.php';
include 'sidebar.php';
include 'class/product_class.php';
?>

<?php
$product = new Product;
$productId = $_GET['product_id'];
$getProduct = $product -> getProduct($productId);
if ($getProduct) {
    $resultProduct = $getProduct -> fetch_assoc();
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    var_dump($_GET);
    var_dump($_POST);
    $update = $product->updateProduct($_GET, $_POST, $_FILES);
}

?>


<div class="right">
      <div class="product add">
        <form action="" method="POST" enctype="multipart/form-data">
            <table class="product-add">
                <tr>
                    <td colspan="2"><h1>ADD PRODUCT </h1></td>
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
                        <select name="categoryId" id="categorySelect" required>
                            <option value="#"></option>
                            <?php
                                $showCategory = $product -> showCategory();
                                if ($showCategory) {
                                    while ($resultCategory = $showCategory -> fetch_assoc()) {
                                ?>
                            <option 
                                <?php 
                                    if($resultProduct['category_id'] == $resultCategory['category_id']) {echo 'SELECTED';} 
                                ?> 
                                value="<?php echo $resultCategory['category_id'] ?>">
                                <?php 
                                    echo $resultCategory['category_name']
                                ?> 
                            </option>
                            <?php
                                }
                            }
                            ?>
                        </select>                   
                    </td>

                    <td>
                        <select name="brandId" id="brandSelect" required>
                            <option value="#"></option>
                            <?php
                                $showBrand = $product -> showBrand();
                                if ($showBrand) {
                                    while ($resultBrand = $showBrand -> fetch_assoc()) {
                                ?>
                            <option 
                                <?php 
                                    if($resultBrand['category_id'] == $resultProduct['category_id']) {echo 'SELECTED';} 
                                ?> 
                                value="<?php echo $resultBrand['brand_id'] ?>">
                                <?php 
                                    echo $resultBrand['brand_name']
                                ?> 
                            </option>
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
                        <input required ="text" name="productName" id=""
                        value = "<?php echo $resultProduct['product_name']?>">
                    </td>
                    <td>
                        <input required ="text" name="productPrice" id=""
                        value = "<?php echo $resultProduct['product_price']?>">
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
                        <textarea name="productDesc" id="" cols="30" rows="10"><?php echo $resultProduct['product_desc']?></textarea>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="producImg">Product image <span style="color:tomato">*</span></label> 
                    </td>
                </tr>

                <tr>
                <td>
                    <input required type="file" name="productImg" id="productImg" accept="image/png, image/jpeg, image/pdf">
                </td>
                </tr>
            </table>
          
          <button type="submit">Add</button>
        </form>
      </div>
    </div>
  </section>
</body>
<script>
    function fetchBrands(categoryId) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("brandSelect").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "fetch_brands.php?categoryId=" + categoryId, true);
    xhttp.send();
}                  
</script>
</html>