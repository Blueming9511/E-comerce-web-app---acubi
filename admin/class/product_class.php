<?php
    include "database.php"
?>

<?php
class Product {
    private $db;

    public function __construct() {
        $this -> db = new Database();
    }

    public function insertProduct() {
        $categoryId = $_POST['categoryId'];
        $brandId = $_POST['brandId'];
        $productName = $_POST['productName'];
        $productPrice = $_POST['productPrice'];
        $productDesc = $_POST['productDesc'];
        $productImg = $_FILES['productImg']['name'];
        move_uploaded_file($_FILES['productImg']['tmp_name'], "uploads/".$_FILES['productImg']['name']);
        $query = "INSERT INTO tbl_product (
            category_id,
            brand_id,
            product_name,
            product_price,
            product_desc,
            product_img)
            VALUES (
            '$categoryId',
            '$brandId',
            '$productName',
            '$productPrice',
            '$productDesc',
            '$productImg')";

        $result = $this -> db -> insert($query);
        return $result;
    }

    public function showProduct() {
        $query = "SELECT tbl_product. *, tbl_category.category_name, tbl_brand.brand_name
        FROM tbl_product AS p 
        INNER JOIN tbl_category AS c ON p.category_id = c.categor   y_id 
        INNER JOIN tbl_brand AS b ON p.brand_id = b.brand_id 
        ORDER BY product_id";
        $result = $this -> db -> select($query);
        return $result;
    }

    public function showCategory() {
        $query = "SELECT * from tbl_category ORDER BY category_id";
        $result = $this -> db -> select($query);
        return $result;
    }

    public function showBrand() {
        $query = "SELECT tbl_brand.*, tbl_category.category_name
        FROM tbl_brand INNER JOIN tbl_category ON tbl_brand.category_id = tbl_category.category_id 
        ORDER BY tbl_brand.brand_id";
        $result = $this -> db -> select($query);
        return $result;
    }

    public function getBrand($brandId) {
        $query = "SELECT * from tbl_brand    WHERE brand_id = '$brandId'";
        $result = $this -> db -> select($query);
        return $result;
    }

    public function updateBrand($categoryId, $brandName, $brandId) {
        $query = "UPDATE tbl_brand SET brand_name = '$brandName', category_id = '$categoryId' WHERE brand_id = '$brandId'";
        $result = $this-> db -> update($query);
        header("Location:brandlist.php");
        return $result;
    }

    public function deleteBrand($brandId) {
        $query = "DELETE FROM tbl_brand WHERE brand_id = '$brandId'";
        $result = $this -> db -> delete($query);
        return $result;
    }
}
?>