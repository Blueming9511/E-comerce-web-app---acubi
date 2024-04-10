<?php
    include "database.php";
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
        $query = "SELECT tbl_product.*, tbl_category.category_name, tbl_brand.brand_name
        FROM tbl_product 
        INNER JOIN tbl_category ON tbl_product.category_id = tbl_category.category_id
        INNER JOIN tbl_brand ON tbl_category.category_id = tbl_brand.category_id
        ORDER BY product_id";
        $result = $this -> db -> select($query);
        return $result;
    }

    public function getProduct($productId) {
        $query = "SELECT * from tbl_product WHERE product_id = '$productId'";
        $result = $this -> db -> select($query);
        return $result;
    }

    public function updateProduct() {
        $productId = $_GET['product_id'];
        $categoryId = $_POST['categoryId'];
        $brandId = $_POST['brandId'];
        $productName = $_POST['productName'];
        $productPrice = $_POST['productPrice'];
        $productDesc = $_POST['productDesc'];
        $productImg = $_FILES['productImg']['name'];

        $query = "UPDATE tbl_product 
            SET category_id = '$categoryId',
            brand_id = '$brandId',
            product_name = '$productName',
            product_price = '$productPrice',
            product_desc = '$productDesc',
            product_img = '$productImg'
            WHERE product_id = '$productId'";
        $update = $this-> db -> update($query);
        header("Location:productlist.php");
        return $update;
    }

    public function sortedProductById() {
        $query = "SELECT tbl_product.*, tbl_category.category_name, tbl_brand.brand_name
        FROM tbl_product 
        INNER JOIN tbl_category ON tbl_product.category_id = tbl_category.category_id
        INNER JOIN tbl_brand ON tbl_category.category_id = tbl_brand.category_id
        ORDER BY product_id";
        $result = $this -> db -> select($query);
        return $result;
     
    }
    public function sortedProductByCategory() {
        $query = "SELECT tbl_product.*, tbl_category.category_name, tbl_brand.brand_name
        FROM tbl_product 
        INNER JOIN tbl_category ON tbl_product.category_id = tbl_category.category_id
        INNER JOIN tbl_brand ON tbl_category.category_id = tbl_brand.category_id
        ORDER BY category_id";
        $result = $this -> db -> select($query);
        return $result;
        
    }

    public function sortedProductByName() {
        $query = "SELECT tbl_product.*, tbl_category.category_name, tbl_brand.brand_name
        FROM tbl_product 
        INNER JOIN tbl_category ON tbl_product.category_id = tbl_category.category_id
        INNER JOIN tbl_brand ON tbl_category.category_id = tbl_brand.category_id
        ORDER BY product_name";
        $result = $this -> db -> select($query);
        return $result;        
    }

    public function sortedProductByPrice() {
        $query = "SELECT tbl_product.*, tbl_category.category_name, tbl_brand.brand_name
        FROM tbl_product 
        INNER JOIN tbl_category ON tbl_product.category_id = tbl_category.category_id
        INNER JOIN tbl_brand ON tbl_category.category_id = tbl_brand.category_id
        ORDER BY product_price";
        $result = $this -> db -> select($query);
        return $result;        
    }
    public function sortedProductByBrand() {
        $query = "SELECT tbl_product.*, tbl_category.category_name, tbl_brand.brand_name
        FROM tbl_product 
        INNER JOIN tbl_category ON tbl_product.category_id = tbl_category.category_id
        INNER JOIN tbl_brand ON tbl_category.category_id = tbl_brand.category_id
        ORDER BY brand_id";
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

    public function showBrandByCategory($categoryId) {
        $query = "SELECT * FROM tbl_brand WHERE category_id ='$categoryId'";
        $result = $this -> db -> select($query);
        return $result;
    }

    public function showProductById($productId) {
        $query = "SELECT * FROM tbl_product WHERE product_id = '$productId'";
        $result = $this -> db -> select($query);
        return $result;
    }


    public function deleteProduct($productId) {
        $query = "DELETE FROM tbl_product WHERE product_id = '$productId'";
        $result = $this -> db -> delete($query);
        return $result;
    }
}
?>