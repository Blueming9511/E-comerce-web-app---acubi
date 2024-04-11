
<?php
class BillProduct
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function insertBillProduct($billId, $productId, $productName, $quantity, $price)
    {
        $query = "INSERT INTO tbl_bill_product (
                    bill_id,
                    product_id,
                    product_name,
                    quantity,
                    price
                  ) VALUES (
                    '$billId',
                    '$productId',
                    '$productName',
                    '$quantity',
                    '$price'
                  )";
        $result = $this->db->insert($query);
        return $result;
    }

    public function displayBillProduct($billId)
    {
        $query = "SELECT bp.*, p.product_name, p.product_price, bp.quantity * p.product_price AS subtotal FROM tbl_bill_product bp
            INNER JOIN tbl_product p ON bp.product_id = p.product_id
            WHERE bill_id = '$billId'";
        $result = $this->db->select($query);
        return $result;
    }

    public function newestID()
    {
        $query = "SELECT bill_id FROM tbl_bill ORDER BY bill_id DESC LIMIT 1";
        $result = $this->db->select($query);
        return $result;
    }

    public function displayTotalMoney($billId) {
        $query = "SELECT SUM(price) FROM tbl_bill_product WHERE bill_id = '$billId'";
        $result = $this -> db -> select($query);
        return $result;
    }
}
?>

