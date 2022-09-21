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
    <title>Admission Summery</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <style>

        /* UTILITIES */
* {
 margin: 0;
 padding: 0;
 box-sizing: border-box;
}
body {
 font-family: cursive;
}
a {
 text-decoration: none;
}
li {
 list-style: none;
}

/* ______________ */



/* NAVBAR STYLING STARTS */
.navbar {

position: fixed;
width: 100%;
top: 0;

 display: flex;
 align-items: center;
 justify-content: space-between;
 padding: 5px;
 background-color: rgb(26, 29, 29);
 color: #fff;
}
.nav-links a {
 color: #fff;
}

.logo img{
  width: 50px;
}
/* NAVBAR MENU */
.menu {
 display: flex;
 gap: 1em;
 font-size: 18px;
}

.menu li:hover {
 background-color: #4c9e9e;
 border-radius: 5px;
 transition: 0.3s ease;
}
.menu li {
 padding: 5px 14px;
}
/* DROPDOWN MENU */
.services {
 position: relative; 
}
.dropdown {
 background-color: rgb(159, 199, 190);
 padding: 1em 0;
 position: absolute; /*WITH RESPECT TO PARENT*/
 display: none;
 border-radius: 8px;
 top: 35px;
}
.dropdown li + li {
 margin-top: 10px;
}
.dropdown li {
 padding: 0.5em 1em;
 width: 8em;
 text-align: center;
}
.dropdown li:hover {
 background-color: #4c9e9e;
}
.services:hover .dropdown {
 display: block;
}
/* ______________ */


/*RESPONSIVE NAVBAR MENU STARTS*/
/* CHECKBOX HACK */
input[type=checkbox]{
 display: none;
} 
/*HAMBURGER MENU*/
.hamburger {
 display: none;
 font-size: 24px;
 user-select: none;
}
/* APPLYING MEDIA QUERIES */
@media (max-width: 768px) {
.menu { 
 display:none;
 position: absolute;
 /* background-color:teal; */
  background: black; 
   margin-top: 28px; 
 right: 0;
 left: 0;
 text-align: center;
 padding: 16px 0;
}
.menu li:hover {
 display: inline-block;
 background-color:#67e8e6;
 transition: 0.3s ease;
}
.menu li + li {
 margin-top: 12px;
}
input[type=checkbox]:checked ~ .menu{
 display: block;
}
.hamburger {
 display: block;
}
.dropdown {
 left: 50%;
 top: 30px;
 transform: translateX(35%);
}
.dropdown li:hover {
 background-color: #4c9e9e;
}
}


/* _______Set Result_______ */

body{
margin: 0;
padding: 0;
}
.container1{
    width: 100%;
    background: #e0e0e0;
    margin: auto;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}
.container1 .setResult-form{
    width: 60%;
}
.content{
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 24px;
    background: #e0e0e0;
    box-shadow:  14px 14px 14px #d0d0d0,
                -14px -14px 14px #f0f0f0;                      
    padding: 20px;
    border-radius: 20px;
}
.content .main-div{
    margin-bottom: 35px;
}
.content .main-div .title{
    text-align: center;
    font-size: 40px;
    margin-bottom: 20px;
}
.content .main-div .row{
    display: flex;
    justify-content: space-around;
}

/* ____________________ */
table, td, th {
  padding: 5px;
  border: 1px solid black;
  text-align: left;
}

table, td {
  border: 1px solid black;
  text-align: start;
  
}

table {
  border-collapse: collapse;
  width: 100%;
}

/* _____________ */


.content .main-div .row table tr td {
   padding: 10px;
   justify-content: center;
   align-items: center;
}
.content .main-div .row table tr td button{
  
  width: 122px;
  border: none;
  background: #e0e0e0;
  box-shadow: inset 4px 4px 10px #cccccc,
              inset -10px -10px 10px #f4f4f4;
  height: 30px;
  border-radius: 5px;
  padding: 5px;
}

.content .main-div .row table tr td button:hover{
   color: rgb(11, 164, 113);
    box-shadow:  4px 4px 10px #d0d0d0,
    -4px -4px 14px #f0f0f0;    

}


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
  

<section class="setResult-section">
    <div class="container1">
        <div class="setResult-form">
            <div class="content">
                <div class="main-div ">
                    <div class="title">
                      Admission Related Information
                    </div>
                    <div class="row">
                        
                        <table>
                            
                            <tr><td>Admission Report</td><td><div style="display: flex;justify-content: center;align-items: center;"><a href='./summaryPDF.php' download='pgdit-admission-report.pdf'><button>Download</button></a></div></td></tr>
                            <tr><td>Database Backup File</td><td><form action='exportDB.php' method='post'><div style='display: flex;justify-content: center;align-items: center;'><button name='backup'>Download </button></div></form></td></tr>
                            <tr><td>Start New Admission</td><td><form action='resetDBConfirmationUI.php' method='post'><div style='display: flex;justify-content: center;align-items: center;'><button name='clear'>Reset Server</button></div></form></td></tr>
                
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


</body>
</html>


