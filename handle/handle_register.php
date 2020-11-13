<?php
    require_once('../config/config.php');
    // echo "ket noi thanh cong";
    $username = trim( strip_tags( $_POST['username'] ));
    $name = trim( strip_tags( $_POST['name'] ));
    $email = trim( strip_tags( $_POST['email'] ));
    $password1 = trim( strip_tags( $_POST['password1'] ));
    $password2 = trim( strip_tags( $_POST['password2'] ));
    
    $password_hash = password_hash($password, PASSWORD_DEFAULT);
    $checkUnique = "SELECT * FROM users WHERE email = '$email'";
    $activation_code = substr(md5(uniqid(rand(), true)), 16, 16);
    $sql = "INSERT INTO users (name, username, email, password ,activation_code) VALUES ('$name','$username', '$email', '$password_hash', '$activation_code')";
    if(!empty($name) && !empty($username) && !empty($email) && !empty($password1) && !empty($password2)){
        $check = mysqli_query($conn,$checkUnique);
        $num_Rows = mysqli_num_rows($check);
        if(mysqli_num_rows($check)!= 0) {
            
            $message = 'Email bạn đăng ký đã tồn tại.';

            echo "<SCRIPT> //not showing me this
                alert('$message')
                window.location.replace('../user/register.php');
            </SCRIPT>";
            return;
        }
        $result = mysqli_query($conn,$sql);

        if($result){
            require_once("../contact.php");
            $m = new sendMail();
            $to = $email;
            $tieudethu = "Liên hệ từ ĐHTL".$activation_code;  
            $noidungthu = "Chao mung ban den voi trang Web cua toi. De kich hoat tai khoan, vui long truy cap duong link duoi day";        
            $noidungthu .= '<a href="http://localhost:8080/a_project/handle/active-user.php?code='.$activation_code.'">Click Here</a>';
                
            $from = "longlv197@gmail.com";
            //pass email gmail
            $pass = "&991Gnol"; 
            $error = '';
            $m -> sendMailFromLocalhost($to, $from, $tennguoigui="ĐHTL", $tieudethu, $noidungthu, $from, $pass, $error);
            if( $error != '' ) {
                die("Có lỗi khi gửi mail");
                $message = $error;

                echo "<SCRIPT> //not showing me this
                    alert('$message')
                    window.location.replace('../user/register.php');
                </SCRIPT>";
                return;
            }else {
                $message = "Vui lòng đăng nhập vào mail để xác nhận tài khoản!";

                echo "<SCRIPT> //not showing me this
                    alert('$message')
                    window.location.replace('../user/login.php');
                </SCRIPT>";
                return;
            }

        }
        else die("<h1> Có lỗi xảy ra </h1>");
    }
    else {
        $message = "Vui lòng điền đầy đủ thông tin";

        echo "<SCRIPT> //not showing me this
            alert('$message')
            window.location.replace('../user/register.php');
        </SCRIPT>";
        return;
    }
        
?>