<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style_register_login.css">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <title>TLU-User-Register</title>
</head>
<body>
     <div id="wrapper">
        <div class="container_register_login">

            <div class="header">
                <h2>Create Account</h2>
            </div>
    
            <form class="form" id="form" method="post" action="../handle/handle_register.php">
    
                <!-- username -->
                <div class="form-control">
                    <label>Name</label>
                    <input type="text" placeholder="Le Van Long" id="name" name="name">
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error message</small>
                </div>

                <div class="form-control">
                    <label>Username</label>
                    <input type="text" placeholder="longlv72" id="username" name="username">
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error message</small>
                </div>
    
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
                    <input type="password" placeholder="password" id="password" name="password1">
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error message</small>
                </div>
    
                 <!-- email -->
                 <div class="form-control">
                    <label>Confirm password</label>
                    <input type="password" placeholder="password2" id="password2" name="password2">
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error message</small>
                </div>
    
                <!-- button submit -->
                <button type="submit" id="btnRegister">Register</button>

                <div><span>Or&nbsp;</span><a href="login.php">Login</a></div>
    
            </form>
         </div>
     </div>
     <script src="../assets/js/index_register.js"></script>
</body>

</html>