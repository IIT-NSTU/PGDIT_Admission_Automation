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
    <title>Notice</title>
    <link rel="stylesheet" href="./notice.css">
    
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

      <!-- Update  Notice -->
      <section class="updateNotice-section">
        <div class="container1">
            <form class="updateNotice-form" action="notice.php" method="post" enctype="multipart/form-data">
                <div class="content">
                    <div class="main-div" align="center">
                        <div class="title">
                          Update Notice
                        </div>
                        <div class="row" >
                            <input type="text" name="title" id="title" placeholder="Set Notice Title" required>
                        </div>
                        <div class="row">
                            <textarea name="message" id="message" cols="40" rows="5" placeholder="Set Notice Message" required></textarea>
                        </div>
                        Upload PDF File (If Needed):
                        <div class="row">
                        <input type="file" name="pdf" id="pdf" accept=".pdf">
                        </div>
                        <div class="submit-button">
                            <button>Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</body>
</html>

