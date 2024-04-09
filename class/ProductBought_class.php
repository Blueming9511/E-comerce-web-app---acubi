<?php
include 'admin/database.php';
?>

<?php
class ProductBought
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function insertProductBought($product_id, $product_img, $product_name, $quantity, $price, $subtotal) {
        $query = "INSERT INTO tbl_product_bought (
                    product_id,
                    product_img,
                    product_name,
                    quantity,
                    price,
                    subtotal
                ) VALUES (
                    '$product_id',
                    '$product_img',
                    '$product_name',
                    '$quantity',
                    '$price',
                    '$subtotal'
                )";
    
        $result = $this->db->insert($query);
        return $result;
    }
    

    public function displayProductsById($productId)
    {
        $query = "SELECT * FROM tbl_product WHERE product_id = '$productId'";
        $result = $this->db->select($query);
        return $result;
    }

    public function displayProductBoughtById($productId)
    {
        $query = "SELECT * FROM tbl_product_bought WHERE product_id = '$productId'";
        $result = $this->db->select($query);
        return $result;
    }

    public function displayProductsBought()
    {
        $query = "SELECT product_img, product_name, quantity, subtotal FROM tbl_product_bought";
        $result = $this->db->select($query);
        return $result;
    }

    public function updateQuantity($product_id, $quantity) {
        $query = "UPDATE tbl_product_bought SET quantity = '$quantity', subtotal = price * '$quantity' WHERE product_id = '$product_id";
        $result = $this -> db -> select($query);
        return $result;
    }

}
?>

