
<?php
    session_start();
error_reporting(0);
    
    if(isset($_SESSION['roll'])){
      header("Location: dashboard.php");exit();
    }

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <title>PGDIT Automation</title>
  <style>
      .coverPage {
     height: 0vh; 
  
}
  </style>
</head>

<body>
    
    <?php
error_reporting(0);
require_once 'header.php'; ?>

  <!-- Login Area Section -->

  <section class="login-div" id="login-area">
      <form class="loginform" action="dashboard.php" method="post">
      <div class="mb-3">
        <img src="./img/loginicon.jpg" alt="">
        <div class="mb-3 title">
          <h3>Login</h3>
        </div>
        <input type="number" class="form-control" name="phone" placeholder="Enter Your Mobile Number" required>
      </div>
      <div class="mb-3">
        <input type="number" class="form-control" name="billerid" placeholder="Enter BillerId" required>
      </div>
      <div class="mb-3">
        <a href="./billerIdRecoveryUI.php">Forget Biller Id ?</a>
      </div>
      <div class="button-div">
        <button>LogIn</button>
      </div>
    </form>
  </section>

  <script src="./js/bootstrap.bundle.js"></script>
  <script src="./app.js">  </script>

</body>

</html>
