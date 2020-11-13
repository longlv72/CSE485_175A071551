<?php require '../../config/config.php';
    $id = 0;
    if(isset($_POST['id-update']))
    {
        $id = $_POST['id-update'];
        $name = $_POST['name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $role_id = $_POST['role'];
        $sql = "UPDATE users SET name='$name', username ='$username', email = '$email', role_id = $role_id
                WHERE id = $id";
        echo "sql: ".$sql;
        echo "</br>";
        var_dump(mysqli_query($conn, $sql));
        if (mysqli_query($conn, $sql)) {
            echo 'thanh cong';
        } 
        else {
            echo 'that bai';
        }
    }
?>