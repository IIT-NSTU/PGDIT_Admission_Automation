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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous">
    </script>
    <title>Event</title>

    <style>
        body {
            background-color: #e0e0e0;
        }
        
        
        /*   _________________*/
        
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
        background: #e0e0e0;
    }
    a:hover{
        color: yellow;
    }
    .link-style{
        
    }
    .padding{
        padding: 5px;
    }
        
        
        
        
/*   _________________*/
        
       
        .container {
            margin-top: 35px;
            width: 55%;
        }

        .container1 {
            background-color: #e0e0e0;
            border-radius: 10px;
            padding: 15px;
            box-shadow: 5px 5px 9px #b6b6c6, -5px -5px 9px #ffffff;
        }

        .aboutTitle {
            display: flex;
            justify-content: center;
            flex-direction: column;
        }

        .aboutTitle .image,
        .title {
            display: flex;
            justify-content: center;
        }

        .aboutTitle h1 {
            margin-bottom: 30px;
        }

        .aboutTitle img {
            width: 40px;
        }

        .input-area {
            background-color: #e0e0e0;
            margin-bottom: 50px;
        }

        .container1 .main {
            width: 80%;
            margin: auto;
        }

        .input-area .row1 input {
            background-color: #e0e0e0;
            box-shadow: inset 5px 5px 9px #b6b6c6,
                inset -5px -5px 9px #ffffff;
            ;
        }

        .input-area .row1 button {
            margin-top: 15px;
        }

        .input-area .row1 button:hover {
            background-color: darkblue;
        }
        .table-div{
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>
    
    <div>
         <?php include_once 'adminHeader.php'; ?>
    </div>
    
    <div class="container">
        <section class="div-full-container" id="notice-area">
            <!-- <div class="bg-light"> -->
            <div class="div-formating">
                <div class="container1 py-5">
                    <div class="aboutTitle div-title-formating">
                        <div class="image">
                            <img src="./img/event.png" alt="">
                        </div>
                        <div class="title">
                            <h1>Event</h1>
                        </div>
                    </div>
                    <!-- _____________   -->
                    <div class="main">
                        <div class="input-area form-control">
                            <form action="event.php" method="post">
                                <div class="row1 mt-3">
                                    <label for="event">Select Event Name</label>
                                    <select name="event" style="background:lavender">
                                    <option value="Application deadline">Application deadline</option>
                                    <option value="Admit card download" selected>Admit card download</option>
                                    <option value="Admission Test" selected>Admission Test</option>
                                    <option value="Result Publication" selected>Result Publication</option>
                                    <option value="Admission deadline">Admission deadline</option>
                                    </select>
                                </div>
                                <div class="row1 mt-3">
                                    <label for="sdate">Start Date</label> 
                                    <input type="date" name="start" class="form-control" required placeholder="YYYY-MM-DD" min="2022-01-01">
                                </div>
                                <div class="row1 mt-3">
                                     <label for="edate">End Date</label>
                                    <input type="date" name="end" class="form-control" required placeholder="YYYY-MM-DD" min="2022-01-01">
                                </div>
                                <div class="row1">
                                    <button name="insert" class="form-control btn btn-dark">Submit</button>
                                    <button name="update" class="form-control btn btn-dark">Update</button>
                                </div>
                            </form>
                        </div>
                        <div class="table-div" >
                        <table border="1">
                            <thead><th>Event Name</th><th>Start Date</th><th>End Date</th></thead> 
         <?php
          require_once 'C:\xampp\htdocs\PGDITAdmissionAutomation\insert.php';
          $result = Insert::insertQuery("select * from date_time");

          $num_result = $result->num_rows;

          for ($i = 0; $i < $num_result; $i++) {
            $row = $result->fetch_assoc();
            echo "<tr><td>".$row['event_name']."</td><td>".$row['start_date']."</td><td>".$row['end_date']."</td></tr>";
          }
                                ?>
                                    
                                </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>