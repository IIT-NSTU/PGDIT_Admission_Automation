<?php
    error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./password.css">
 
    <script src="AdminAjax.js"></script>
</head>
<body>

    <nav class="navbar">
        <!-- LOGO -->
        <div class="logo"><img src="./img/NstuLogo.png" alt=""></div>
        <!-- NAVIGATION MENU -->
        <ul class="nav-links menu">
            <li><a href="#">PGDIT Admission 2022</a></li>
        </ul>
      </nav>
      <!-- __________Login Section______________ -->
      <section class="login-section">
        <div class="container1">
            <div class="login-form">
                <form class="content" method="post" action="adminLogin.php">
                    <div class="main-div" align="center">
                        <div class="title">
                          Admin Login 
                        </div>
                        <div class="row">
                        <input type="text" name="phone" id="phone"  placeholder="Mobile number">
                        </div>
                        <div class="row">
                        <input type="password" name="pass" id="pass" placeholder="Enter password">
                        </div>
                        <div class="row">
                         <p id="alert"></p>
                          </div>
                        <div class="row">
                            <a href="./adminForgetPassUI.php">New Admin? Forgot Password? </a>
                          </div>
                        <div class="submit-button">
                            <button>Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>