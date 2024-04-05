<?php
include "header.php";
include "sidebar.php";
include "class/product_class.php";
?>

<?php
$product = new Product;
$showProduct = $product->showProduct();
?>

<div class="right">
      <div class="product list">
        <h1>PRODUCTS LIST</h1>
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
                <th>Action</th>
            </tr>
            <?php
            if ($showProduct) { 
                $i = 0;
                while($result = $showProduct->fetch_assoc()) {
                    $i++;
            ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $result['product_id']?></td>
                <td><?php echo $result['category_name']?></td>
                <td><?php echo $result['brand_name']    ?></td>
                <td><?php echo $result['product_name']?></td>
                <td><?php echo $result['product_price']?></td>
                <td><?php echo $result['product_desc']?></td>
                <td><img src="uploads/<?php echo $result['product_img']?>"></td>
                <td>
                    <a  href="productedit.php?product_id=<?php echo $result['product_id'] ?>" >
                    Sửa
                    </a> 
                    |

                    <a href="productdelete.php?product_id= <?php echo $result['product_id'] ?>">
                        Xóa
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