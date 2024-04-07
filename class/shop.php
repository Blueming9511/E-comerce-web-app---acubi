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
}
?>

