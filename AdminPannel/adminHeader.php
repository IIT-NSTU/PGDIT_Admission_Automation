<?php
error_reporting(0);
  if(!isset($_SESSION['name'])){
    header("Location: directorLoginUI.php"); exit();
  }
?>
    <nav class="navbar">
        <!-- LOGO -->
        <div class="logo"><img src="./img/NstuLogo.png" alt=""></div>
        <!-- NAVIGATION MENU -->
        <div class="links">
            
            <div><a class="padding" href="./adminProfile.php">Profile</a></div>
            <div><a class="padding" href="./eventUI.php">Event</a></div>
            <div><a class="padding" href="./noticeUI.php">Notice</a></div>
            <div><a class="padding" href="./setResultUI.php">Result</a></div>
            <div><a class="padding" href="./admissionPannelUI.php">Admit</a></div>
            <div><a class="padding" href="./admissionSummary.php">Admission</a></div>
            <div><a class="padding" href="./complainUI.php">Complain</a></div>
            <div><a class="padding" href="./adminLogoutUI.php">Logout</a></div>
            
            
            
            
<!--             <ul class="nav-links menu">
            <li><a href="./noticeUI.php">Notice</a></li>
            <li><a href="./adminProfile.php">Profile</a></li>
            <li><a href="./setResultUI.php">Result</a></li>
            <li><a href="./admissionPannelUI.php">Admit</a></li>
            <li><a href="./complainUI.php">Complain</a></li>
            <li><a href="./admissionSummary.php">Admission</a></li>
             <li><a href="./adminLogoutUI.php">Logout</a></li>
        </ul>-->

        </div>
      </nav>

