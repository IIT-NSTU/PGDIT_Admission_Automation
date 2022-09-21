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
    <title>Admin Profile</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./adminProfile.css">
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
    <?php include_once 'adminHeader.php'; ?>
    
  <!-- ____________Admin Profile ___________ -->
  <section class="adminProfile-section">
    <div class="container1">
        <div class="adminProfile">
            <div class="content">
                <div class="main-div" align="center">
                    <div class="title">
                      Admin Profile
                    </div>
                    <div class="inner-div">
                      <div class="admin-info">
                      <div class="admin-photo" style="box-shadow: none">
                        <?php $dp=$_SESSION['photo'];
                        echo "<img style='width: 90px;height: 90px;' src='data:image/png;charset=utf8;base64,$dp'/>"; 
                        ?>
                      </div>
                        <div class="row">
                          Name : <label  for="name"><?php echo $_SESSION['name']; ?></label>
                          </div>
                          <div class="row">
                            Phone : <label  for="name"><?php echo $_SESSION['mobile']; ?></label>
                          </div>
                      </div>
                    </div>
                    <div class="change-admin-button">
                        <a href="./adminChangeUI.php"><button>Change Admin</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>

