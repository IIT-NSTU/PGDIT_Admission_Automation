<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <title>PGDIT Automation</title>
</head>

<body>
    
    <?php
error_reporting(0);
require_once 'header.php'; ?>
     <marquee style="
               top: 85px;
               position: absolute;
               color: black;">
          <a style="z-index: 999;" href="noticeUI.php">Click here</a> to see update notice for PGDIT admission
      </marquee>
    
        <section class="about " id="about-area">
          <div class="bg-light">
            <div class="container py-5">
              <div class="aboutTitle">
                <h1>IIT, NSTU</h1>
              </div>
              <div class="row align-items-center mb-5">
                <div class="col-lg-6 order-2 order-lg-1">
                  <h2 class="font-weight-light">
                    Director's Speach
                  </h2>
                  <p class="font-italic text-muted mb-4">
                    Institute of Information Technology is one of the fastest growing Institute at NSTU. The study at this Institute is based on three core values: professionalism, excellence and respect. By establishing these principles, IIT ensures that graduates from this Institute can effectively contribute in the industry.</p>
                </div>
                <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2">
                    <img src="./img/directorpic1.jpg" alt="" class="img-fluid mb-4 mb-lg-0">
                </div>
              </div>
              <div class="row align-items-center">
                <div class="col-lg-5 px-5 mx-auto">
                    <img src="./img/CentralLibrary1.jpeg" alt="" class="img-fluid mb-4 mb-lg-0">
                </div>
                <div class="col-lg-6">
                  <h2 class="font-weight-light">IIT NSTU</h2>
                  <p class="font-italic text-muted mb-4">
                    Institute of Information Technology, NSTU aims to be the producer of future leaders in Software Engineering. In this course, it is intended to open up new horizons and advance the frontiers of knowledge in Software Engineering.</p>
                </div>
              </div>
              <div class="row mb-4 mt-3">
                <div class="col-lg-6">
                  <h2 class="t">
                   Faculty Members
                  </h2>
                  <p class="font-italic text-muted">
                   Institute of Information Technology(IIT) of Noakhali Science of Technology University is established
                   in 2015.IIT, NSTU is an educational institution aimed at developing efficient human resource in the
                   field of information technology. In IIT, NSTU there are 12 well qualified teachers.
                  </p>
                  <form action="faculty.php" >
                  <button class='btn btn-danger' name="faculty">See more</button>
                  </form>
                </div>
              </div>
      
            </div>
          </div>
        </section>


  <script src="./js/bootstrap.bundle.js"></script>
  <script src="./app.js">  </script>

</body>

</html>
