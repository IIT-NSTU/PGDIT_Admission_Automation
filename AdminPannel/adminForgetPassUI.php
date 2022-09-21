<?php 
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Set Password</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./password.css">
    
    <script src="AdminAjax.js">
</script>
    
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

<!-- ______Forget Password  -->
<section class="forgetPassword-section" id="forgetPassword-area">
  <div class="container1">
      <div class="forgetPassword-form">
          <div class="content">
              <div class="main-div">
                  <div class="title">
                   Confirm Your Number
                  </div>
                  <div class="row" align="center">
                      <input type="number" name="phone" id="phone"  placeholder="Mobile number" required>
                  </div>
                
                  <div class="row">
                   <p id="alert">* A 6 digit code will be sent to this number.</p>
                    </div>
                  <div class="submit-button">
                      <button onclick="passRecovery()">Submit</button>
                      <button onclick="window.location.href ='./setPasswordUI.php';">Next >></button>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
</body>
</html>