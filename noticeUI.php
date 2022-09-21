<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet'
        integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js'
        integrity='sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM'
        crossorigin='anonymous'></script>
    
        <link rel="stylesheet" href="style.css">


    <title>Notice</title>
    <style>
        body {
            background-color: lavender;
        }
        .div-formating{
            width: 90%;
            margin-top: 0px;
        }
        .coverPage{
            height: 0px;
        }
        .container1{
            margin-top: 100px;
        }
        .container2 {
            background-color: lavender;
            border-radius: 10px;
            padding: 15px;
/*            box-shadow: 5px 5px 9px #b6b6c6, -5px -5px 9px #ffffff;*/
        }
        .py-5{
            padding-top: 0px;
        }
        .aboutTitle {
            display: flex;
            justify-content: center;
        }
        .aboutTitle h1{
            margin-bottom: 30px;
            font-size: 30px;
        }
        .modal-body{
        text-align: justify;
    }
    .container button{
        /* background: black; */
        /* height: 45px;
        width: 120px;
        border-radius: 5px;
        font-size: 16px; */
    }
    .card-body button:hover{
        background-color: rgb(1, 1, 169);

    }
    /* Card  */
    .card-text{
        text-align: justify;
    }
    .card{
        background: lavender;
        /* box-shadow:  inset 5px 5px 9px #b6b6c6,
    inset -5px -5px 9px #ffffff;; */
    }
</style>
</head>

<body>
    
    <?php require_once 'header.php'; ?>
    
    <div class='container1'>
        <section class='div-full-container' id='notice-area'>
            <!-- <div class='bg-light'> -->
            <div class='div-formating'>
                <div class='container2'>
                    <div style="display:flex;justify-content: center">
                        <img src="./img/noticeP.png" style="width:40px"></div>
                    <div class='aboutTitle div-title-formating'>
                        <h1>Notice Section</h1>
                    </div>
                    
                    <div class='row ' >
                    <!-- _____________   -->
                    
          <?php
error_reporting(0);

          $db = new mysqli('localhost', 'root', '', 'pgdit_admission');
          $result = $db->query("select * from notice");

          $num_result = $result->num_rows;

          for ($i = 0; $i < $num_result; $i++) {
            $row = $result->fetch_assoc();

            $btn = "";
            if ($row['file'] != "") {
                $btn="<a href='../PGDITAdmissionAutomation/AdminPannel/" . $row['file'] . "' download='doc.pdf'><button type='button' class='btn btn-dark'>Download</button></a>";
                           
            }
            
                    $str = "
                        <div class='col col-lg-4 mt-3'>
                            <div class='card'>
                                <div class='card-header'>
                                    " .$row['title']."
                                </div>
                                <div class='card-body'>
                                    <p class='card-text text-truncate'>" . $row['message'] . "</p>
                                    <!-- <a href='#' class='btn btn-primary'>Go somewhere</a> -->
                                    <button type='button' class='btn btn-dark' data-bs-toggle='modal'
                                        data-bs-target='#myModal".$i."'>
                                        See more
                                    </button>
                                </div>
                            </div>
                        </div>

            <div class='modal' id='myModal".$i."'>
                <div class='modal-dialog'>
                    <div class='modal-content'>
                        <div class='modal-header'>
                            <h4 class='modal-title'>" .$row['title']."</h4>
                            <button type='button' class='btn-close' data-bs-dismiss='modal'></button>
                        </div>  
                        <div class='modal-body'>
                        " . $row['message'] . "
                        </div>
                        <div class='modal-footer' >
                         ". $btn . "
                        <button type='button' class='btn btn-danger' data-bs-dismiss='modal'>Close</button>
                        </div>
                    </div>
                </div>
            
            </div>
            
                ";
            
            
                    echo "$str";  
          }
          ?>

                    </div>
                </div>
            </div>
            <!-- </div> -->

            <!-- __________Modal___________ -->
            <!-- The Modal 
            <div class='modal' id='myModal'>
                <div class='modal-dialog'>
                    <div class='modal-content'>
                        <div class='modal-header'>
                            <h4 class='modal-title'>Notice Heading</h4>
                            <button type='button' class='btn-close' data-bs-dismiss='modal'></button>
                        </div>  
                        <div class='modal-body'>
                            Notice description. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum expedita
                            voluptate eius vero tempora assumenda unde obcaecati praesentium. Accusamus quod qui magnam
                            itaque deleniti corrupti corporis amet soluta, dicta tempore veniam vero architecto, labore
                            ratione unde. Obcaecati voluptate incidunt ad quis minus, totam, exercitationem libero
                            inventore doloribus perferendis, modi suscipit?
                        </div>
                        <div class='modal-footer'>
                            <button type='button' class='btn btn-danger' data-bs-dismiss='modal'>Close</button>
                        </div>
                    </div>
                </div>
            </div>-->
        </section>
    </div>
</body>

</html>