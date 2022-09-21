<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Set Password</title>
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

<!-- Set New Password -->
<section class="setNewPass-section" id="setNewPass-area">
  <div class="container1">
      <div class="setNewPass-section-form">
          <div class="content">
              <div class="main-div" align="center">
                  <div class="title">
                    New Password
                  </div>
                  <div class="row">
                      <input type="number" name="code" id="code"  placeholder="Enter 6 Digit Code" required>
                  </div>
                  <div class="row">
                  <input type="password" name="pass" id="pass" placeholder="Set new password" required>
                  </div>
                  <div class="row">
                    <input type="password" name="repass" id="repass" placeholder="Re-type password" required>
                    </div>
                  <p id="alert"><p>
                  <div class="submit-button">
                      <button onclick="window.location.href ='./directorForgetPassUI.php';"><< Previous</button>
                      <button onclick="director_password()">Submit</button>
                      <button onclick="window.location.href ='./directorLoginUI.php';">Next >></button>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
      

</body>
</html>


