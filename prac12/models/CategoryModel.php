<?php
    require("config/db.php");
    class CategoryModel extends Database{
        private $categoryId;
        private $categoryName;

        public function __construct()
        {
            $this->connection = $this->openConnection();
        }

        public function getCategoryById($id){
            $sql ="SELECT * FROM category WHERE id=".$id;
            $result = mysqli_query($this->connection, $sql);
            $category = mysqli_fetch_all($result);
            return $category;
        }

        public function insertCategory($categoryName)
    }

?>