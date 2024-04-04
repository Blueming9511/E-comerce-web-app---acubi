<?php
    include "database.php"
?>

<?php
class Category {
    private $db;

    public function __construct() {
        $this -> db = new Database();
    }

    public function insertCategory($categoryName) {
        $query = "INSERT INTO tbl_category (category_name) VALUES ('$categoryName')";
        $result = $this -> db -> insert($query);
        return $result;
    }


}
?>