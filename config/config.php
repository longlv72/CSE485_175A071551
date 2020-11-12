<?php
        $host = 'localhost';
        $users = 'root';
        $password = '';
        $db = 'A_btl_web';
        $conn = mysqli_connect($host, $users, $password, $db);
        if(!$conn) echo "khong the ket noi den db";
?>