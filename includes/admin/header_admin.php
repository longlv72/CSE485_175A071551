<!doctype html>
<html lang="en">
  <head>
    <title>Admin-TLU</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="./../assets/css/style_admin.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
  </head>
  <body>
    <?php if (session_id() == 0) session_start(); ?>
      <div class="container-fluid">
        
          <div class="row">
              <div class="col-md-2 vh-100 position-sticky" id="sidebar__admin_left">
                  <h1 class="title pl-3 pt-2 border-bottom">Admin TLU</h1>
                  <div class="menu pt-3">
                    <ul>
                      <li><a href="http://localhost:8080/a_project/admin/post.php"><i class="fas fa-tasks mr-3"></i></i>Posts Manager</a></li>
                      <li><a href="http://localhost:8080/a_project/admin/user.php"><i class="fas fa-users mr-3"></i>Users Manager </a></li>
                    </ul>
                  </div>
              </div>

              <div class="col-md-10 header-admin">
                <div class="row" id="admin-right">
                  <div class="col-md-3 ml-md-auto pr-0">
                    <ul id="admin_logout">
                        Xin chao<span> <?php echo $_SESSION['name']; ?></span> 
                      <i class="fas fa-chevron-down"></i>
                      <li>&nbsp;<a href="http://localhost:8080/a_project/index.php">Home</a></li>
                      <li>&nbsp;<a href="http://localhost:8080/a_project/handle/handle_logout.php">Log out</a></li>
                    </ul>
                  </div>
                  
                </div>
 