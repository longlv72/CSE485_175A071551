<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="./assets/css/style_home_index.css">
    <link rel="stylesheet" href="./assets/css/style_footer.css">
    
    
  </head>
  <body>
      <!-- header__top -->
        <?php if (session_id()=='') session_start() ?>
        <div class="container-fluid globalnav">
                <div class="container" id="header__top">
                    <div class="label">
                        <a href="http://www.tlu.edu.vn" class="">
                        Trường Đại học Thủy Lợi -TLU
                        </a>
                    </div>
                    <ul class="list-top">
                        <li class="language">
                            <span class="language-text"> Ngôn ngữ: &nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <a href="#" title="Tiếng Việt"><img src="assets/images/icons/icon-lang-vi.png" alt="Tiếng Việt"></a>
                            <a href="#" title="Tiếng Anh"></a><img src="assets/images/icons/icon-lang-en.png" alt="Tiếng Anh"></a>
                        </li>

                        <?php if ( isset($_SESSION['name']) && isset($_SESSION['role_id']) && $_SESSION['role_id'] == 1) { ?> 
                             
                            <li><a class="border-left pl-3" href="#">Xin chao <?php echo ' '.$_SESSION['name']; ?> </a></li>
                            <li><a class="border-left pl-3" href="http://localhost:8080/a_project/admin/user.php">Dardboard</a></li>  
                            <li><a class="border-left pl-3" id="btnLogout" href="http://localhost:8080/a_project/handle/handle_logout.php">Logout</a></li>  

                        <?php } else if ( isset($_SESSION['name']) && isset($_SESSION['role_id']) && $_SESSION['role_id'] == 2) {  ?> 

                            <li><a class="border-left pl-3" href="#">Xin chao <?php echo ' '.$_SESSION['name']; ?> </a></li>
                            <li><a class="border-left pl-3" id="btnLogout" href="http://localhost:8080/a_project/handle/handle_logout.php">Logout</a></li>

                        <?php } else if ( !isset($_SESSION['name']) && !isset($_SESSION['role_id'])) { ?>    

                            <li><a class="border-left pl-2" href="./user/login.php">Login </a></li>
                            <li><a class="border-left pl-2" href="./user/register.php">Register</a></li>  
                            
                        <?php } ?>                        
                    </ul>

                    <ul class="session_user">

                    </ul>

                </div>
        </div>
        <!-- end header__top -->

        <!-- header image -->
        <div class="container mt-4" id="header__logo">
            <h1>
                <img src="./assets/images/logo.jpg" alt="">
            </h1>
        </div>
        <!-- endheader image -->

        <!-- header__menu_hozizontal -->
        <div class="container border-top" id="header__menu">
            <div class="row">
                <div class="col-md-12">
                    <ul id="menu">
                        <li class="pr-1 pt-2 pb-2 pl-1 border-right"><a href="#">Trang chủ</a></li>
                        <li class="pr-1 pt-2 pb-2 pl-1 border-right"><a href="#">Liên hệ</a></li>
                        <li class="pr-1 pt-2 pb-2 pl-1 border-right"><a href="#">Nghiện cứu khoa học</a></li>
                        <li class="pr-1 pt-2 pb-2 pl-1 border-right"><a href="#">Đào tạo</a></li>
                        <li class="pr-1 pt-2 pb-2 pl-1 border-right"><a href="#">Bộ Môn-Trung Tâm</a></li>
                        <li class="pr-1 pt-2 pb-2 pl-1 border-right"><a href="#">Sinh viên</a></li>
                        <li class="pr-1 pt-2 pb-2 pl-1 border-right"><a href="#">Tin tức</a></li>
                        <li class="pr-1 pt-2 pb-2 pl-1 border-right"><a href="#">Thông báo</a></li>
                        <li class="pr-1 pt-2 pb-2 pl-1"><a href="#">Liên hệ</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid border-top">
            <div class="row">

            </div>
        </div>