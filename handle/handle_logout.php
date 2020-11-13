<?php
    if(session_id() =='') 
        session_start();
    if(isset($_SESSION)){
        unset($_SESSION['name']);
        unset($_SESSION['role_id']);
        unset($_SESSION['email']);
        session_destroy();
        header('Location:http://localhost:8080/a_project/index.php');
    }
    
?>