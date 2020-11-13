<?php
    require '../../config/config.php';
    if(isset($_POST['id_delete'])){
        $id = $_POST['id_delete'];
        $query = "DELETE FROM users where id=$id";
        echo $query;
        if(mysqli_query($conn, $query))
            echo "true";
        else 
            echo "false";
    }
?>