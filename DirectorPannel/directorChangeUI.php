<?php
session_start();

  if(!isset($_SESSION['mobile']) || !isset($_SESSION['pass'])){
    header("Location: directorLoginUI.php"); exit();
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="../AdminPannel/setResult.css">
</head>
<body>
    <?php include_once 'directorHeader.php';?>
<!-- ________New Admin ______________ -->
<section class="newAdmin-section" id="newAdmin-area">
  <div class="container1">
      <form class="newAdmin" method='post' action="directorChange.php" enctype="multipart/form-data">
          <div class="content">
              <div class="main-div">
                  <div class="title">
                    Change Director 
                  </div>
                  <div class="row">
                      <input type="text" name="name" id="name"  placeholder="Enter name" required>
                  </div>
                  <div class="row">
                      <input type="number" name="phone" id="phone" placeholder="Mobile number" required>
                  </div>
                   Upload Photo (PNG Only): 
                  <div class="row">
                      <input class="noStyle"  type="file" name="image" id="image" accept=".png" required>
                    </div>
                  <div class="submit-button">
                      <button>Change</button>
                  </div>
              </div>
          </div>
        </form>
      </div>
</section>
</body>


