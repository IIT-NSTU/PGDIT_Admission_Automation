<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <title>PGDIT Automation</title>
  <style>
    .coverPage {
      height: 0vh;
    }


    body {
      font-family: 'Work Sans', sans-serif;
      background-color: #E6E6FA;
    }

    .faq-heading {
      border-bottom: #777;
      padding: 20px 60px;
    }

    .faq-container {
      display: flex;
      justify-content: center;
      flex-direction: column;
    }

    .hr-line {
      width: 60%;
      margin: auto;

    }

    .faq-page {
      /* background-color: #eee; */
      color: #444;
      cursor: pointer;
      padding: 30px 20px;
      width: 60%;
      border: none;
      outline: none;
      transition: 0.4s;
      margin: auto;
    }

    .faq-body {
      margin: auto;
      /* text-align: center; */
      width: 50%;
      padding: auto;

    }

    .active,
    .faq-page:hover {
      background-color: #F9F9F9;
    }

    .faq-body {
      padding: 0 18px;
      background-color: white;
      display: none;
      overflow: hidden;
    }

    .faq-page:after {
      content: '\02795';

      font-size: 13px;
      color: #777;
      float: right;
      margin-left: 5px;
    }

    .active:after {
      content: "\2796";

    }
  </style>
</head>

<body>
  <?php
error_reporting(0);
require_once 'header.php'; ?>
  <!-- ___________FAQ_________________ -->

  <section class="div-full-container" id="faq-area">
    <form class="div-formating">
      <div class="mb-3">
        <img class="div-image-formating" src="./img/faq.png" alt="">
        <div class="mb-3 title div-title-formating">
          Frequently Asked Questions
        </div>
      </div>

      <main>
        <section class="faq-container">
          <div class="faq-one">
            <!-- faq question -->
            <h3 class="faq-page">What is PGDIT?</h3>
            <!-- faq answer -->
            <div class="faq-body" style=" text-align: justify;">
                <p>Post Graduate Diploma in Information Technology (PGDIT) is a postgraduate diploma level course.
The program has been designed to produce IT postgraduates who are able to think critically and have
several high-level skills in the IT field that can be applied in a wide range of situations. This diploma
will also introduce you to research in IT. The program's unique focus on the management of technology
effectively prepares students for successful careers in the dynamic and fast-paced information
technology marketplace.</p>
            </div>
          </div>
          <hr class="hr-line">
          <div class="faq-two">
            <!-- faq question -->
            <h3 class="faq-page">How to Apply? </h3>
            <!-- faq answer -->
            <div class="faq-body" style=" text-align: justify;">
                <p>At first, user needs to visit PGDIT website. Then user needs to select apply option. After selecting apply
option, application form will appear. User must fill up all the information the click on the submit button.
After clicking the submit button payment option will appear. User needs to pay by Bkash. After
successful payment, user will get a transaction id. To get biller id, user needs to go on get biller id option
and give input phone number and transaction id then biller id will send to this number. For login into
dashboard user, user must enter the biller id and the phone number.</p>
            </div>
          </div>
          <hr class="hr-line">
          <div class="faq-three">
            <!-- faq question -->
            <h3 class="faq-page">What is the payment procedure?</h3>
            <!-- faq answer -->
            <div class="faq-body" style=" text-align: justify;">
                <p>After fill up and submit the application form, user will be redirected to Payment option. User needs to
pay by Bkash from any Bkash account and user needs to collect the transaction id for further needs.</p>
            </div>
          </div>
        </section>
      </main>

    </form>
  </section>


  <script>
    var faq = document.getElementsByClassName("faq-page");
    var i;
    for (i = 0; i < faq.length; i++) {
      faq[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var body = this.nextElementSibling;
        if (body.style.display === "block") {
          body.style.display = "none";
        } else {
          body.style.display = "block";
        }
      });
    }
  </script>
</body>

</html>