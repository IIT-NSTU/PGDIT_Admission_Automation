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
  
<script src="./RecoveryAjax.js">
</script>
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

    <!-- Recover Biller Id -->
    <section class="div-full-container" id="billerId-recovery-area">
      <div class="div-formating">
        <div class="mb-3">
          <img class="div-image-formating" src="./img/loginicon.jpg" alt="">
          <div class="mb-3 title">
            <h3 class="div-title-formating">Recover Biller Id</h3>
          </div>
          <input type="number" class="form-control" name="phone" id="phone" placeholder="Enter Mobile Number" required>
        </div>
        <div class="mb-3">
            <p id="alert"><b>* Biller Id Will be sent to this number.</b></p>
        </div>
        <div class="button-div button-center">
          <button class="button-formating" onclick="billerRecovery()">Submit</button>
        </div>
      </div>
    </section>
  <script src="./js/bootstrap.bundle.js"></script>
  <script src="./app.js">  </script>
</body>
</html>