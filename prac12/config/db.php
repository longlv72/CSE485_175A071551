<?php
    class Database{
        private $host = 'localhost';
        private $user = 'root';
        private $pass = '';
        private $db = 'test_btl';
        private $port = '3306';
 
        public function openConnection(){
            $conn = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
            if(!$conn){
                die("Khong the ket noi");
            }
            return $conn;
        }
 
        public function closeConnection($conn){
            mysqli_close($conn);
        }
    }

?>