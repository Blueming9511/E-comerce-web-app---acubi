<?php
include 'admin/database.php';
?>

<?php
class Shop
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function displayProducts()
    {
        $query = "SELECT * FROM tbl_product";
        $result = $this->db->select($query);
        return $result;
    }

    public function displayProductsById($productId)
    {
        $query = "SELECT * FROM tbl_product WHERE product_id = '$productId'";
        $result = $this->db->select($query);
        return $result;
    }

    public function displayProductsByCaregory($category_name)
    {
        $query = "SELECT p.* FROM tbl_product p INNER JOIN tbl_category c ON p.category_id = c.category_id WHERE c.category_name = '$category_name'";
        $result = $this->db->select($query);
        return $result;
    }

}
?>

