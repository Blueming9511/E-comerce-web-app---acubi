<?php
include "header.php";
include "sidebar.php";
include "class/product_class.php";
?>

<?php
$product = new Product;
$showProduct = $product->showProduct();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $categoryName = $_POST['categoryName'];
  $insert = $category->insertCategory($categoryName);
}
?>

<div class="right">
      <div class="list">
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
                while($result = $showbrand->fetch_assoc()) {
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
                <td><?php echo $result['product_img']?></td>
                <td>
                    <a  href="brandedit.php?brand_id=<?php echo $result['product_id'] ?>" >
                    Sửa
                    </a> 
                    |

                    <a href="branddelete.php?brand_id= <?php echo $result['product_id'] ?>">
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