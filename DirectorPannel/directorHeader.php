<?php

  if(!isset($_SESSION['name'])){
header("Location: adminLoginUI.php"); exit();
  }

?>


    <nav class="navbar">
        <!-- LOGO -->
        <div class="logo"><img src="./img/NstuLogo.png" alt=""></div>
        <!-- NAVIGATION MENU -->
        <ul class="nav-links menu">
            <li><a href="./directorProfile.php">Profile</a></li>
            <li><a href="./directorViewApplicant.php">View Applicant</a></li>
            <li><a href="./summary.php">Summary</a></li>
            <li><a href="./directorLogoutUI.php">Logout</a></li>
        </ul>
      </nav>
