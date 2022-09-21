<?php
session_start();
error_reporting(0);
  if(!isset($_SESSION['name'])){
header("Location: adminLoginUI.php"); exit();
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Password</title>
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
                <form class="content" method="post" action="resetDBConfirmation.php">
                    <div class="main-div" align="center">
                        <div class="title">
                          Confirm Your Password 
                        </div>
                        <div class="row">
                        <input type="password" name="pass" id="pass"  placeholder="Enter password">
                        </div>
                        <div class="row">
                        <input type="password" name="repass" id="repass" placeholder="Re-enter password">
                        </div>
                        <div class="row">
                         <p id="alert"></p>
                          </div>
                        <div class="submit-button">
                            <button>Reset Now</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>