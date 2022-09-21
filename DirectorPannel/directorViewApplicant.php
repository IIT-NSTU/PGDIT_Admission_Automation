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
    <title>Applicants</title>
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
  text-align: right;
}

table {
  border-collapse: collapse;
  width: 100%;
}

/* _____________ */


.content .main-div .row table tr td {
   padding: 10px;
}
.content .main-div .row table tr td button{
    width: 80px;
   padding: 5px;
   border: none;
  background: #e0e0e0;
  box-shadow: inset 4px 4px 10px #cccccc,
              inset -10px -10px 10px #f4f4f4;
  height: 30px;
  border-radius: 10px;
  padding: 5px;
}

.content .main-div .row table tr td button:hover{
   color: rgb(11, 164, 113);
    box-shadow:  4px 4px 10px #d0d0d0,
    -4px -4px 14px #f0f0f0;    

}


    </style>
</head>
<body style="background:#e0e0e0">
    <?php include_once 'directorHeader.php'; ?>
  

<section class="setResult-section">
    <div class="container1">
        <div class="setResult-form" style="margin-top: 230px;">
            <div class="content">
                <div class="main-div ">
                    <div class="title">
                      Applicant's Information
                    </div>
                    <div class="row">
                        <table>
                            <th>Name</th>
                            <th>Father's Name</th>
                            <th>Phone</th>
                            <th>Details</th>
                            
                            
                        <?php
                        
             $db= new mysqli('localhost','root','1234mbrs','pgdit_admission');
            
                $result=$db->query("SELECT * FROM applicant as a join verification as v on a.phone=v.phone"
                        . "  where a.phone !='01930878889' and biller_id is not null");
                $num_result=$result->num_rows;
                
           for($i=0;$i<$num_result;$i++){
                $row= $result->fetch_assoc();
                
                echo "<tr> <td>".$row['name']."</td><td>".$row['father']."</td><td>".$row['phone']."</td><td><form action='ViewDetails.php' method='post'><button name='phone' value='".$row['phone']."'>See Details</button></form></td></tr>";
                
           }
                        ?>
                        
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


</body>
</html>