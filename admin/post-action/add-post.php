<?php
  if(isset($_POST)){
    if (session_id()=='') session_start();

    $title = $_POST['txtTitle'];
    $summary = $_POST['txtSummary'];
    $content = $_POST['txtContent'];
    $image = '../assets/image/imgPost/'.($_FILES["fileToUpload"]["name"]);
    $user_id = $_SESSION['id'];
    require_once('../../config/config.php');
    $sql ="INSERT INTO posts (post_name, post_summary, post_content,image) VALUES ('$title','$summary','$content','$image')";
    $result = mysqli_query($conn,$sql);
    if($result){
      ini_set('upload_max_filesize', '50M');
      ini_set('post_max_size', '50M');
      ini_set('max_input_time', 300);
      ini_set('max_execution_time', 300);


      $target_dir = "file:///opt/lampp/htdocs/a_project/assets/images/imgPost/";
      $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
      $uploadOk = 1;
      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

      // Check if image file is a actual image or fake image
      if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
          echo "File is an image - " . $check["mime"] . ".";
          $uploadOk = 1;
        } else {
          echo "File is not an image.";
          $uploadOk = 0;
        }
      }

      // Check if file already exists
      if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
      }

      // Check file size
      // if ($_FILES["fileToUpload"]["size"] > 500000) {
      //   echo "Sorry, your file is too large.";
      //   $uploadOk = 0;
      // }

      // Allow certain file formats
      if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
      && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
      }

      // Check if $uploadOk is set to 0 by an error
      if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
      // if everything is ok, try to upload file
      } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
          Header("Location: http://localhost:8080/a_project/admin/post.php");
        } else {
          echo "Sorry, there was an error uploading your file.";
        } 
      }
    }
    else die("<h1> co loi</h1>");



      // echo $title;
      // echo $description;
      // echo $content;
      // echo $slug;
      // echo 
      // echo $_SESSION['id'];
    }
?>