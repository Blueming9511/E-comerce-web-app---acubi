<?php
include "../database.php"
?>

<?php
class Category
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function insertCategory($categoryName, $categoryImg)
    {
        $categoryImgName = $categoryImg['name'];
        $categoryImgTmpName = $categoryImg['tmp_name'];
        $categoryImgPath = "uploads/" . $categoryImgName;

        move_uploaded_file($categoryImgTmpName, $categoryImgPath);

        $query = "INSERT INTO tbl_category (category_name, category_img) VALUES ('$categoryName', '$categoryImgPath')";
        $result = $this->db->insert($query);
        return $result;
    }

    public function showCategory()
    {
        $query = "SELECT * from tbl_category ORDER BY category_id";
        $result = $this->db->select($query);
        return $result;
    }

    public function getCategory($categoryId)
    {
        $query = "SELECT * from tbl_category WHERE category_id = '$categoryId'";
        $result = $this->db->select($query);
        return $result;
    }

    public function updateCategory($categoryId, $categoryName)
    {
        $query = "UPDATE tbl_category SET category_name = '$categoryName' WHERE category_id = '$categoryId'";
        $result = $this->db->update($query);
        return $result;
    }

    public function deleteCategory($categoryId)
    {
        $query = "DELETE FROM tbl_category WHERE category_id = '$categoryId'";
        $result = $this->db->delete($query);
        return $result;
    }
}
?>