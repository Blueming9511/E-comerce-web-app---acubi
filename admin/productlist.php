<?php
include "header.php";
include "sidebar.php";
require_once "class/product_class.php";
?>

<?php
$product = new Product;
$showProduct = $product->showProduct();
?>

<div class="right">
    <div class="product-list">
        <h1>PRODUCTS LIST</h1> <br>
        <label for="sort">Sort by: </label>
        <div class="filter">
            <select class="sort" id="sort">
                <option value="id">ID</option>
                <option value="category">Category</option>
                <option value="brand">Brand</option>
                <option value="name">Name</option>
                <option value="price">Price</option>
            </select>
        </div>

        <table>
            <tr>
                <th>No.</th>
                <th>ID</th>
                <th>Category</th>
                <th>Brand</th>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Image</th>
                <th colspan="2">Action</th>
            </tr>
            <?php
            if ($showProduct) {
                $i = 0;
                while ($result = $showProduct->fetch_assoc()) {
                    $i++;
            ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $result['product_id'] ?></td>
                        <td><?php echo $result['category_name'] ?></td>
                        <td><?php echo $result['brand_name']    ?></td>
                        <td><?php echo $result['product_name'] ?></td>
                        <td><?php echo $result['product_price'] ?></td>
                        <td>
                            <?php echo $result['product_desc'] ?>
                        </td>
                        <td><img src="uploads/<?php echo $result['product_img'] ?>"></td>
                        <td>
                            <a class="btn" href="productedit.php?product_id=<?php echo $result['product_id'] ?>">
                                Edit
                            </a>


                        </td>
                        <td>
                            <a class="btn" href="productdelete.php?product_id= <?php echo $result['product_id'] ?>">
                                Delete
                            </a>

                        </td>


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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $('#sort').change(function(event) {
        let value = $(event.target).val();
        $.ajax({
            url: "product-api.php",
            type: "POST",
            data: "value=" + value,
            beforeSend: function() {
                $("table").html("...Waiting...");
            },
            success: function(data) {
                $("table").html(data);
            }
        })
    })
</script>