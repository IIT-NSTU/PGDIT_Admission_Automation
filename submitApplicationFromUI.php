
<?php
error_reporting(0);

include_once 'insert.php';
$result = Insert::insertQuery("Select * from `date_time` where NOW()>`start_date` and NOW()<`end_date` and `event_name`='Application deadline'");
$num_result = $result->num_rows;
$row = $result->fetch_assoc();
if($row['event_name']!='Application deadline'){
echo "<script type='text/javascript'>alert('Sorry! You can't apply before or after application deadline.');</script>";    
header("Location: index.php"); exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
<!--   <link rel="stylesheet" href="style.css"> -->
  <!-- <link rel="stylesheet" href="./billerID.css"> -->
  <link rel="stylesheet" href="./submitApplicationForm.css">
  <link rel="stylesheet" href="font-awesome.min.css">
  <link rel="stylesheet" href="./fontawesome/css/fontawesome.min.css">

  <title>Application Form</title>
  <style>
    header {
    position: fixed;
    top: 0px;
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 40px 100px;
    background: #070a35;
    height: 60px;
    z-index: 1;
}

header a img {
    width: 50px;
}

header ul {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
}

header ul li {
    list-style: none;
    position: relative;
}

ul li a {
    position: relative;
    text-decoration: none;
    color: var(--nav-item-color);
    font-size: 1.2rem;
    font-weight: 700;
    transition: 0.5s;
    padding: 8px;
    letter-spacing: .05rem;
}

ul li a:hover {
    color: rgb(30, 196, 152);
    border-radius: 5px;
} 
    .row .col-md-6 label{
      padding: 10px;
    }
  </style>
</head>

<body>

  <?php require_once  'header.php'; ?>
  <!-- ______________________ -->


  <section class="login-div personalInfo " id="personalInfo-area">
    <div class="form-div div-formating">
      <form class="loginform" action="submitApplicationFrom.php" method="post" enctype='multipart/form-data'>
        <div class="mb-3">
          <img class="div-image-formating" src="./img/loginicon.jpg" alt="">
          <h3>Personal Information</h2>

            <!-- First Name And Last Name -->
            <div class="row mt-3">
              <div class="col-sm-12 col-md-6 col-lg-6 box-Shadow mt-3">
              <label for="name" style="text-align:end;padding:10px;">Applicant's Name</label>
                <input class="full-width" type="text" name='name' placeholder=" Enter Name" required>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-6 box-Shadow mt-3">
              <label for="name" style="text-align:end ;">Nationality</label>
                <input class="full-width" type="text" name="nationality" placeholder="Enter Nationality" required>
              </div>
            </div>

            <!-- Father's And Mother's Name -->
            <div class="row mt-3">
              <div class="col-sm-12 col-md-6 col-lg-6 box-Shadow mt-3">
                <label for="fname">Father's Name</label>
                <input class="full-width" type="text" name="fname" placeholder="Enter Father's Name" required>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-6 box-Shadow mt-3">
              <label for="mname">Mother's Name</label>
                <input class="full-width" type="text" name="mname" placeholder="Enter Mother's Name" required>
              </div>
            </div>

            <!-- Date of Birth -->
            <div class="row mt-3">
              <div class="col-sm-12 col-md-6 col-lg-3 mt-3">
                <label for="date-of-birth">Enter Date of Birth</label>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-3 mt-3 box-Shadow">
                <input class="full-width" type="date" name="birth_date" required>
              </div>
            </div>

            <div class="row mt-3">
              <div class="col-sm-12 col-md-6 col-lg-3 mt-3">
                <label for="date-of-birth">Upload Photo (PNG only)</label>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-3 mt-3 box-Shadow">
                <input class="full-width" type="file" style="box-shadow: none;" name="image" accept=".png" required>
              </div>
            </div>
             <!-- Gender Part -->
            <div class="row mt-3">
              <div class="col-sm-12 col-md-6 col-lg-3 mt-3">
                <label for="gender">Gender</label>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-3 mt-3 box-Shadow">
              <input style="box-shadow: none;" type="radio" name="gender" id="male" value="Male" required>Male
                <input style="box-shadow: none;" type="radio" name="gender" id="male" value="Female">Female
                <input style="box-shadow: none;" type="radio" name="gender" id="male" value="Other">Other
              </div>
            </div>

           
            

            <!-- Religion And Blood Group -->
            <div class="row mt-3">
              <div class="col-sm-12 col-md-6 col-lg-6 box-Shadow mt-3">
              <label for="religion">Religion</label>
                <input class="full-width" type="text" name="religion" placeholder="Enter Religion" required>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-6 box-Shadow mt-3">
              <label for="blood_group">Blood group</label>
                <select class="neomorphisom full-width" name="blood_group" required>
                  <option value="" disabled selected>Select Blood Group</option>
                  <option value="A+">A+</option>
                  <option value="B+">B+</option>
                  <option value="O+">O+</option>
                  <option value="AB+">AB+</option>
                  <option value="A-">A-</option>
                  <option value="B-">B-</option>
                  <option value="O-">O-</option>
                  <option value="AB-">AB-</option>
                </select>
              </div>
            </div>

            <!-- National ID And Email Address -->

            <div class="row mt-3">
              <!-- Mobile Number  -->
              <div class="row mt-3">
                <div class="col-sm-12 col-md-6 col-lg-6 box-Shadow mt-3">
                <label for="Mobile">Mobile </label>
                  <input class="full-width" type="text" name="Mobile" placeholder="Enter Mobile Number" required pattern="^((01){1}[3456789]{1}[0-9]{8})$">
                </div>
              </div>

              <div class="col-sm-12 col-md-6 col-lg-6 box-Shadow mt-3">
              <label for="nid_number">National ID </label>
                <input class="full-width" type="number" name="nid_number" placeholder=" National ID " required>
              </div>
            </div>

            <!-- Present Address And Permanent Address -->
            <div class="row mt-3">
              <div class="col-sm-12 col-md-6 col-lg-6 box-Shadow mt-3">
              <label for="permanent_address">Permanent Address </label>
                <textarea class="full-width neomorphisom" name="permanent_address" cols="25" rows="3" placeholder="Enter Permanent Address" required></textarea>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-6 box-Shadow mt-3">
              <label for="present_address"> Present Address</label>
                <textarea class="full-width neomorphisom" name="present_address" cols="25" rows="3" placeholder="Enter Present Address" required></textarea>
              </div>
            </div>
        </div>
        <div class="mb-3 ">
          <img class="div-image-formating" src="./img/academic.png" alt="" style="margin-top:30px ;">


          <div class="div-title-formating">
            <h3>Academic Qualification</h2>
          </div>
          <!-- SSC Result Information -->
          <div class="row mt-3">
            <div class="row">
              <h5>SSC or Equivalent Level</h4>
                <div class="col-sm-12 col-md-6 col-lg-4 box-Shadow mt-3">
                <label for="ssc_exam">Exam</label>
                  <select class="neomorphisom full-width" name="ssc_exam" required>
                    <option value="" selected disabled>Select Exam</option>
                    <option value="S.S.C">S.S.C</option>
                    <option value="Dakhil">Dakhil</option>
                    <option value="S.S.C Vocational">S.S.C Vocational</option>
                    <option value="O level">O level</option>
                    <option value="S.S.C equivalent">S.S.C equivalent</option>
                  </select>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 box-Shadow mt-3">
                <label for="board">Board</label>
                  <select class="neomorphisom full-width" name="ssc_board" required>
                    <option value="" selected disabled>Select Board</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Cumilla">Cumilla</option>
                    <option value="Mymensing">Mymensing</option>
                    <option value="Basishal">Basishal</option>
                    <option value="Rajshahi">Rajshahi</option>
                    <option value="Jashore">Jashore</option>
                    <option value="Chattogram">Chattogram</option>
                    <option value="Sylhet">Sylhet</option>
                    <option value="Dinajpur">Dinajpur</option>
                    <option value="Madrasha">Madrasha</option>
                    <option value="Technical">Technical</option>
                    <option value="Others">Other</option>
                  </select>
                </div>


                <div class="col-sm-12 col-md-6 col-lg-4 box-Shadow mt-3">
                  <label for="ssc_roll">Exam Roll</label>
                  <input class="full-width" type="number" placeholder="SSC Exam Roll" name="ssc_roll" required>
                </div>
            </div>


            <div class="row">
              <div class="col-sm-12 col-md-6 col-lg-4 box-Shadow mt-3">
                <label for="ssc_group">Group</label>
                <select class="neomorphisom full-width" name="ssc_group" required>
                  <option value="" selected disabled>Select Group</option>
                  <option value="Science">Science</option>
                  <option value="Business Studies">Business Studies</option>
                  <option value="Humanities">Humanities</option>
                  <option value="Others">Others</option>
                </select>
              </div>

              <div class="col-sm-12 col-md-6 col-lg-4 box-Shadow mt-3">
                <label for="ssc_year">Passing Year</label>
                <input class="full-width" type="number" placeholder="SSC Passing year" min="1990" max="2024" name="ssc_year" required>
              </div>

              <div class="col-sm-12 col-md-6 col-lg-4 box-Shadow mt-3">
                <label for="ssc_result">Result</label>
                <input class="full-width" type="text" name="ssc_result" placeholder="SSC Result (GPA Out of 5.00)" required>
              </div>
            </div>
          </div>


          <!-- HSC Result In formation -->
          <div class="row mt-3">
            <div class="row">
              <h5>HSC or Equivalent Level</h4>
                <div class="col-sm-12 col-md-6 col-lg-4 box-Shadow mt-3">
                  <label for="hsc_exam">Exam</label>
                  <select class="neomorphisom full-width" name="hsc_exam" required>
                    <option value="" selected disabled>Select Exam</option>
                    <option value="H.S.C">H.S.C</option>
                    <option value="Alim">Alim</option>
                    <option value="Diploma in Engineering/Architechture">Diploma in Engineering/Architechture</option>
                    <option value="A level">A level</option>
                    <option value="H.S.C equivalent">H.S.C equivalent</option>
                  </select>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 box-Shadow mt-3">
                  <label for="hsc_board">Board</label>
                  <select class="neomorphisom full-width" name="hsc_board" required>
                    <option value="" selected disabled>Select Board</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Cumilla">Cumilla</option>
                    <option value="Mymensing">Mymensing</option>
                    <option value="Barishal">Barishal</option>
                    <option value="Rajshahi">Rajshahi</option>
                    <option value="Jashore">Jashore</option>
                    <option value="Chattogram">Chattogram</option>
                    <option value="Sylhet">Sylhet</option>
                    <option value="Dinajpur">Dinajpur</option>
                    <option value="Madrasha">Madrasha</option>
                    <option value="Technical">Technical</option>
                    <option value="Others">Others</option>
                  </select>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 box-Shadow mt-3">
                  <label for="hsc_roll">Exam Roll</label>
                  <input class="full-width" type="number" placeholder="HSC Exam Roll" name="hsc_roll" required>
                </div>
            </div>
            <div class="row">
              <div class="col-sm-12 col-md-6 col-lg-4 box-Shadow mt-3">
                <label for="hsc_group">Group</label>
                <select class="neomorphisom full-width" name="hsc_group" required>
                  <option value="" selected disabled>Select Group</option>
                  <option value="Science">Science</option>
                  <option value="Business Studies">Business Studies</option>
                  <option value="Humanities">Humanities</option>
                  <option value="Others">Others</option>
                </select>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-4 box-Shadow mt-3">
                <label for="hsc_year">Passing Year</label>
                <input class="full-width" type="number" name="hsc_year" placeholder="HSC Passing year" min="1990" max="2024" required>

              </div>
              <div class="col-sm-12 col-md-6 col-lg-4 box-Shadow mt-3">
                <label for="hsc_result">Result</label>
                <input class="full-width" type="text" name="hsc_result" placeholder="HSC Result (GPA Out of 5.00)" required>
              </div>
            </div>

          </div>

          <!-- Graduation Level  -->

          <div class="row mt-3">
            <div class="row">
              <h5>Graduation Level</h4>
                <div class="col-sm-12 col-md-6 col-lg-4 box-Shadow mt-3">
                  <label for="program_name">Program Name</label>
                  <input class="neomorphisom full-width " type="text" name="program_name" placeholder="Programm Name (ie. BSc in CSE)" required>

                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 box-Shadow mt-3">
                  <label for="institute">University Name</label>
                  <input class="full-width" type="text" name="institute" placeholder="University/Institute Name" required>
                </div>

            </div>

            <div class="row">
              <div class="col-sm-12 col-md-6 col-lg-4 box-Shadow mt-3">
              <label for="course_duration">Course Duration</label>
                <select class="neomorphisom full-width" name="course_duration" required>
                  <option value="" selected disabled>Course Duration</option>
                  <option value="1 Year">1 Year</option>
                  <option value="2 Years">2 Years</option>
                  <option value="3 Years">3 Years</option>
                  <option value="4 Years">4 Years</option>
                  <option value="5 Years">5 Years</option>
                </select>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-4 box-Shadow mt-3">
                <label for="year">Passing Year</label>
                <input class="full-width" type="number" name="year" placeholder="Passing year" min="1990" max="2024" required>
              </div>

              <div class="col-sm-12 col-md-6 col-lg-4 box-Shadow mt-3">
                <label for="result">Result</label>
                <input class="full-width" type="text" name="result" placeholder="Result (CGPA)" required>
              </div>
              <!-- <div class="col-sm-12 col-md-6 col-lg-4 box-Shadow mt-3">
                <input class="full-width" type="checkbox" name="" placeholder="Result (CGPA)" required style="box-shadow: none;">I am sure that this information is valid.
              </div> -->
            </div>






            <div class="row">
              
              <div class="col" style="display:block ;">
              <div class="content mt-3">
                <p style="text-align: center;"> <input type="checkbox" name="check" style="box-shadow: none;"> I hereby declare that all the above information are correct and assure that I will abide by all the rules.</p>
              </div>
              </div>
            </div>





          </div>
          <div class="button-div button-center">
            <button class="button-formating" name="submit">Submit</button>
          </div>
      </form>
  </section>



  <script src="./js/bootstrap.bundle.js"></script>
  <script src="./app.js"> </script>
</body>

</html>