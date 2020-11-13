<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style_register_login.css">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <title>TLU Login</title>
</head>
<body>
     <div id="wrapper">
        <div class="container_register_login">

            <div class="header">
                <h2>Login-TLU</h2>
            </div>
    
            <form class="form" id="form" method="post" action="../handle/handle_login.php">
    
                <!-- email -->
                <div class="form-control">
                    <label>Email</label>
                    <input type="text" placeholder="longlv72@wru.vn" id="email" name="email">
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error message</small>
                </div>
    
                 <!-- email -->
                 <div class="form-control">
                    <label>Password</label>
                    <input type="password" placeholder="password" id="password" name="password">
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error message</small>
                </div>
    
                <!-- button submit -->
                <button type="submit" id="btnLogin">Login</button>
                <div><span>Or&nbsp;</span><a href="register.php">Register</a></div>
            </form>
         </div>
     </div>
     <script src="../assets/js/index_login.js"></script>
</body>

</html>