<?php
    include "../database.php"
?>

<?php
class Brand {
    private $db;

    public function __construct() {
        $this -> db = new Database();
    }

    public function insertBrand($categoryId, $brandName) {
        $query = "INSERT INTO tbl_brand (category_id, brand_name) VALUES ('$categoryId', '$brandName')";
        $result = $this -> db -> insert($query);
        header("Location:brandlist.php");
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