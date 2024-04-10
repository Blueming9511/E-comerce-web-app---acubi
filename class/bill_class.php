<?php
require_once 'admin/database.php';
?>

<?php
class Bill
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function insertBill($payment_method, $first_name, $last_name, $address, $phone_number, $total_money) {
        $query = "INSERT INTO tbl_bill (
                    payment_method, 
                    first_name, 
                    last_name, 
                    address, 
                    phone_number,  
                    total_money
                  ) VALUES (
                    '$payment_method', 
                    '$first_name', 
                    '$last_name', 
                    '$address', 
                    '$phone_number', 
                    '$total_money'
                  )";
        $result = $this->db->insert($query);
        return $result;
    }

    public function displayBills()
    {
        $query = "SELECT * FROM tbl_bill";
        $result = $this->db->select($query);
        return $result;
    }

    public function newestID() {
        $query = "SELECT bill_id FROM tbl_bill ORDER BY bill_id DESC LIMIT 1";        
        $result = $this -> db -> select($query);
        return $result;
    }

    public function displayBill($billId) {
        $query = "SELECT * FROM tbl_bill WHERE bill_id = '$billId'";        
        $result = $this -> db -> select($query);
        return $result;
    }
}
?>

