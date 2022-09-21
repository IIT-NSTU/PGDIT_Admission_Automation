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
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./setResult.css">
    
    <style>
    .navbar{
            background: #070a35;
            height: 80px;
            background: #070a35;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
    }
    .navbar .logo img{
        width: 50px;
    }
    .navbar .links{
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        
    }
    a{
        text-decoration: none;
        color: white;
    }
    form button{
        background: lavender;
    }
    a:hover{
        color: yellow;
    }
    .link-style{
        
    }
    .padding{
        padding: 5px;
    }
    </style>
    
</head>
<body>
    <?php include_once 'adminHeader.php';  ?>
<!-- ________New Admin ______________ -->
<section class="newAdmin-section" id="newAdmin-area">
  <div class="container1">
      <form class="newAdmin" method='post' action="adminChange.php" enctype="multipart/form-data">
          <div class="content">
              <div class="main-div">
                  <div class="title">
                    Change Admin 
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
</html>