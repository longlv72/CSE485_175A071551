<?php
    // Kiem tra
    $errors = array();
    $email = trim( strip_tags( $_POST['email'] ));
	

    $password = trim( strip_tags( $_POST['password'] ));

	// Kiem tra Error:
    // B1: Ket noi database Server;
        require_once('../config/config.php');
    // B2: Khai bao cau truy van
    $sql = "SELECT * FROM users WHERE email='$email'";
    // echo $sql;
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_assoc($result);
        // print_r($row);
        $password_hash = $row['password'];

        if( password_verify($password, $password_hash) )
        {
            session_start();
            $_SESSION['name'] = $row['name'];
            $_SESSION['role_id'] = $row['role_id'];
            $_SESSION['id'] = $row['id'];
            
            header("location:../index.php");
            // if($row['is_active'] == '1'){
            //     $message = "Tài khoản của bạn chưa được kích hoạt";
            //     echo "<SCRIPT>".
            //             "alert('$message')".
            //             "window.location.replace('../index.php');".
            //          "</SCRIPT>";
            // }
            // Header("Location:http://localhost:8080/a_project");
        } 
        else
        {
            $message = "Thông tin đăng nhập chưa chính xác";

            echo "<SCRIPT> //not showing me this
                alert('$message')
                window.location.replace('../user/login.php');
            </SCRIPT>";
        }
    }else{
        $message = "Thông tin đăng nhập chưa chính xác";

        echo "<SCRIPT> //not showing me this
            alert('$message')
            window.location.replace('../user/login.php');
        </SCRIPT>";
        return;
    }
?>