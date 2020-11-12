<?php
    // Kiem tra
    $errors = array();
    $email = $_POST['email'];
	

    $password = $_POST['password'];

	// Kiem tra Error:
    // B1: Ket noi database Server;
        require_once('../config.php');
    // B2: Khai bao cau truy van
    $sql = "SELECT * FROM users WHERE email='$email' AND is_active = 1";
    // echo $sql;
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_assoc($result);
        // print_r($row);
        $password_hash = $row['password'];
        if(password_verify($_POST['password'],$password_hash)){
            session_start();
            $_SESSION['name'] = $row['name'];
            if($row['role'] == 'Admin'){
                $_SESSION['role'] = $row['role'];
                $_SESSION['id'] = $row['id'];
            }
            Header("Location:http://localhost:8080/hung/3.PROJECT/");
        }else{
            echo "Chưa khớp";
        }
    }else{
        echo ".....";
    
?>