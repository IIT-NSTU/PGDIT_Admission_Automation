<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
    
    <title>Faculty Members</title>

    <style>
          body {
            background-color: lavender;
        }
        .div-formating{
            width: 90%;
        }
        .coverPage{
            height: 0px;
        }
        .container{
            margin-top: 100px;
        }
        .container2 {
            background-color: lavender;
            border-radius: 10px;
            padding: 15px;
/*            box-shadow: 5px 5px 9px #b6b6c6, -5px -5px 9px #ffffff;*/
        }
        .aboutTitle {
            display: flex;
            justify-content: center;
        }
        .aboutTitle h1{
            margin-bottom: 30px;
        }
    .card{
        height: 320px;
        margin: 10px;
        background-color: rgb(215, 215, 249);
    }
        .card-header{
            display: flex;
            justify-content: center;
        }
        .card-header img{
            width: 90px;
            border-radius: 50%;
        }
        .card-title{
            display: flex;
            justify-content: center;
        }
        .card-text{
            display: flex;
            justify-content: center;
            font-size: 17px;
        }
    </style>
</head>
<body>
    <?php
error_reporting(0);
require_once 'header.php'; ?>
    
    <div class="container1">
        <section class="div-full-container" id="notice-area">
            <!-- <div class="bg-light"> -->
            <div class="div-formating">
                <div class="container2 py-5">
                    <div class="aboutTitle div-title-formating">
                        <h1>Faculty Members</h1>
                    </div>
                    <!-- _____________   
                        <div class="col col-lg-4  col-md-4 col-sm-6">
                            <div class="card">
                                <div class="card-header">
                                    <img src="./img/maleAvatar2.png" alt="">
                                </div>
                                <div class="card-body">
                                    <h6 class="card-title">
                                        Dr.  Md. Nuruzzaman Bhuiyan
                                    </h6>
                                    <p class="card-text">
                                       Assitant Professor 
                                       IIT, NSTU
                                    </p>
                                </div>
                            </div>
                        </div> -->

                    <div class="row">
                        
                         <div class="col col-lg-4  col-md-4 col-sm-6">
                            <div class="card">
                                <div class="card-header">
                                    <img src="./img/nuruzzamanSir.jpg" alt="">
                                </div>
                                <div class="card-body">
                                    <h6 class="card-title">
                                        Dr.  Md. Nuruzzaman Bhuiyan
                                    </h6>
                                    <p class="card-text">
                                       Assitant Professor 
                                       IIT, NSTU
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col col-lg-4  col-md-4 col-sm-6">
                            <div class="card">
                                <div class="card-header">
                                    <img src="./img/sumonSir.jpg" alt="">
                                </div>
                                <div class="card-body">
                                    <h6 class="card-title">
                                       Md. Auhidur Rahaman
                                    </h6>
                                    <p class="card-text">
                                       Assitant Professor 
                                       IIT, NSTU
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="col col-lg-4  col-md-4 col-sm-6">
                            <div class="card">
                                <div class="card-header">
                                    <img src="./img/dipaMam.jpg" alt="">
                                </div>
                                <div class="card-body">
                                    <h6 class="card-title">
                                       Dipanita Saha
                                    </h6>
                                    <p class="card-text">
                                       Assitant Professor 
                                       IIT, NSTU
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col col-lg-4  col-md-4 col-sm-6">
                            <div class="card">
                                <div class="card-header">
                                    <img src="./img/frMam2.jpg" alt="">
                                </div>
                                <div class="card-body">
                                    <h6 class="card-title">
                                        Falguni Roy
                                    </h6>
                                    <p class="card-text">
                                       Assitant Professor 
                                       IIT, NSTU
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col col-lg-4  col-md-4 col-sm-6">
                            <div class="card">
                                <div class="card-header">
                                    <img src="./img/dipokSir.jpg" alt="">
                                </div>
                                <div class="card-body">
                                    <h6 class="card-title">
                                        Dipok Chandra Das
                                    </h6>
                                    <p class="card-text">
                                       Assitant Professor 
                                       IIT, NSTU
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col col-lg-4  col-md-4 col-sm-6">
                            <div class="card">
                                <div class="card-header">
                                    <img src="./img/ifteSir.jpg" alt="">
                                </div>
                                <div class="card-body">
                                    <h6 class="card-title">
                                        Md. Iftekharul Alam Efat
                                    </h6>
                                    <p class="card-text">
                                       Assitant Professor 
                                       IIT, NSTU
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col col-lg-4  col-md-4 col-sm-6">
                            <div class="card">
                                <div class="card-header">
                                    <img src="./img/tasniaMam.jpg" alt="">
                                </div>
                                <div class="card-body">
                                    <h6 class="card-title">
                                        Tasnia Ahmed
                                    </h6>
                                    <p class="card-text">
                                       Assitant Professor 
                                       IIT, NSTU
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col col-lg-4  col-md-4 col-sm-6">
                            <div class="card">
                                <div class="card-header">
                                    <img src="./img/eushaSir.jpg" alt="">
                                </div>
                                <div class="card-body">
                                    <h6 class="card-title">
                                        Md. Eusha Kadir
                                    </h6>
                                    <p class="card-text">
                                       Lecturer
                                       IIT, NSTU
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col col-lg-4  col-md-4 col-sm-6">
                            <div class="card">
                                <div class="card-header">
                                    <img src="./img/tasnimMam.jpg" alt="">
                                </div>
                                <div class="card-body">
                                    <h6 class="card-title">
                                        Tasnim Rahman
                                    </h6>
                                    <p class="card-text">
                                       Lecturer
                                       IIT, NSTU
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col col-lg-4  col-md-4 col-sm-6">
                            <div class="card">
                                <div class="card-header">
                                    <img src="./img/nazmunMam.jpg" alt="">
                                </div>
                                <div class="card-body">
                                    <h6 class="card-title">
                                        Nazmun Nahar
                                    </h6>
                                    <p class="card-text">
                                       Lecturer
                                       IIT, NSTU
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col col-lg-4  col-md-4 col-sm-6">
                            <div class="card">
                                <div class="card-header">
                                    <img src="./img/rafidSir.jpg" alt="">
                                </div>
                                <div class="card-body">
                                    <h6 class="card-title">
                                     Rafid Mostafiz
                                    </h6>
                                    <p class="card-text">
                                       Lecturer
                                       IIT, NSTU
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col col-lg-4  col-md-4 col-sm-6">
                            <div class="card">
                                <div class="card-header">
                                    <img src="./img/hasanSir.jpg" alt="">
                                </div>
                                <div class="card-body">
                                    <h6 class="card-title">
                                        Md Hasan Imam
                                    </h6>
                                    <p class="card-text">
                                       Lecturer
                                       IIT, NSTU
                                    </p>
                                </div>
                            </div>
                        </div>

                        


                    </div>
                </div>
            </div>
            <!-- </div> -->

            <!-- __________Modal___________ -->
            <!-- The Modal -->
       
        </section>
    </div>
    
</body>
</html>