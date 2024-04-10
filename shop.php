<?php
include 'header.php';
require_once 'class/shop_class.php';
?>
<main class="header-body" style="padding-top: 7em;">

    <div class="category-wrapper">
        <div class="category-title">
            Category
        </div>

        <div class="categories">
            <div class="category">
                <?php
                $category = new Shop;
                $categories = $category->displayAllCategory();
                if ($categories) {
                    while ($cate = $categories->fetch_assoc()) {

                ?>
                        <h1 class="category-name"><?php echo $cate['category_name'] ?></h1>
                        <a href="<?php echo strtolower($cate['category_name']) . '.php'; ?>" class="category-a">
                            <img src="admin/uploads/<?php echo $cate['category_img'] ?>" alt="" srcset="">
                        </a>
            </div>
    <?php
                    }
                }
    ?>

        </div>
    </div>
</main>


</div>




<!-- ==== FOOOTER ==== -->
<?php
include 'footer.php';
?>