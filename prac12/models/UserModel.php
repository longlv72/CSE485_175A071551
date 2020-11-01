<?php
   require("config/db.php");
   class UserModel extends Database{
    // Properties
       private $userID;
       private $firstName;
       private $lastName;
       private $email;
       private $passsword;
       private $activation_code;
       private $status;
       private $connection;
    // Method
        public function __construct(){
            $this->connection = $this->openConnection();
        }

        public function getAllUsers(){
            $sql = "SELECT * FROM users";
            $result = mysqli_query($this->connection, $sql);
            $users = mysqli_fetch_all($result);
            return $users;
        }
   }
?>