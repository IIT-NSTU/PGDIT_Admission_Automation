<?php
session_start();

  if(!isset($_SESSION['name'])){
    header("Location: directorLoginUI.php"); exit();
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Director Profile</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="../AdminPannel/adminProfile.css">
</head>
<body>
    <?php include_once 'directorHeader.php'; ?>
  <!-- ____________Admin Profile ___________ -->
  <section class="adminProfile-section">
    <div class="container1">
        <div class="adminProfile">
            <div class="content">
                <div class="main-div" align="center">
                    <div class="title">
                      Director's Profile
                    </div>
                    <div class="inner-div">
                      <div class="admin-info">
                          <div class="admin-photo" style="box-shadow: none">
                        <?php $dp=$_SESSION['photo'];
                        echo "<img style='width: 100px;height: 80px;' src='data:image/png;charset=utf8;base64,$dp'/>"; 
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
                        <a href="./directorChangeUI.php"><button>Change Director</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>
