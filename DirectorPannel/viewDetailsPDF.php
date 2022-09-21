<?php
session_start();

  if(!isset($_SESSION['name'])){
    header("Location: directorLoginUI.php"); exit();
 
  }
  
require_once('../fpdf184/html_table.php');
                
                $db= new mysqli('localhost','root','1234mbrs','pgdit_admission');
               
                $result=$db->query("SELECT * FROM applicant as a join verification as v on a.phone=v.phone
                        join ssc_info as s on v.phone=s.phone
                        join hsc_info as h on v.phone=h.phone
                        join graduation_info as g on g.phone=v.phone
                        where a.phone ='".$_SESSION['phone']."'");
                
                $num_result=$result->num_rows;
                $row= $result->fetch_assoc();
                
              //  echo "<b>Basic Information</b></br>";
                

$pdf=new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',15);
$pdf->Cell(40,40,'PGDIT Batch-12 Admission Test 2022',0,2);

$pdf->SetFont('Arial','',10);
$pdf->Cell(40,20,"Personal Information:  ".$row['name'],0,2);
$html="<table border='1'>
<tr>
<td width='170' height='50'>Father's Name</td>
<td width='130' height='50'>Phone</td>
<td width='100' height='50'>Gender</td>
<td width='250' height='50'>Present Address</td> 
</tr>
<tr></tr><tr>
<td width='170' height='50'>".$row['father']."</td>
<td width='130' height='50'>".$row['phone']."</td>
<td width='100' height='50'>".$row['gender']."</td>
<td width='250' height='50'>".$row['present_address']."</td> 
</tr></table>";
$pdf->WriteHTML($html);

           
                $result=$db->query("SELECT * FROM applicant as a join verification as v on a.phone=v.phone
                        join ssc_info as s on v.phone=s.phone
                        where a.phone ='".$_SESSION['phone']."'");
                
                $num_result=$result->num_rows;
                $row= $result->fetch_assoc();
                
$pdf->SetFont('Arial','',10);
$pdf->Cell(40,20,'Secondary Examination Information',0,2);
$html="<table border='1'>
<tr>
<td width='150' height='50'>Exam Name</td><td width='150' height='50'>Board</td>
<td width='50' height='50'>Year</td><td width='100' height='50'>Group</td>
<td width='100' height='50'>Roll</td><td width='100' height='50'>Result</td>
</tr>
<tr>
<td width='150' height='50'>".$row['exam_name']."</td><td width='150' height='50'>".$row['board']."</td>
<td width='50' height='50'>".$row['year']."</td><td width='100' height='50'>".$row['group']."</td>
<td width='100' height='50'>".$row['ssc_roll']."</td><td width='100' height='50'>".$row['result']."</td>
</tr>";
$pdf->WriteHTML($html);



                $result=$db->query("SELECT * FROM applicant as a join verification as v on a.phone=v.phone
                        join hsc_info as h on v.phone=h.phone
                        where a.phone ='".$_SESSION['phone']."'");
                
                $num_result=$result->num_rows;
                $row= $result->fetch_assoc();
                
$pdf->SetFont('Arial','',10);
$pdf->Cell(40,20,'Higher Secondary Examination Information',0,2);
$html="<table border='1'>
<tr>
<td width='150' height='50'>Exam Name</td><td width='150' height='50'>Board</td>
<td width='50' height='50'>Year</td><td width='100' height='50'>Group</td>
<td width='100' height='50'>Roll</td><td width='100' height='50'>Result</td>
</tr>
<tr>
<td width='150' height='50'>".$row['exam_name']."</td><td width='150' height='50'>".$row['board']."</td>
<td width='50' height='50'>".$row['year']."</td><td width='100' height='50'>".$row['group']."</td>
<td width='100' height='50'>".$row['hsc_roll']."</td><td width='100' height='50'>".$row['result']."</td>
</tr>";
$pdf->WriteHTML($html);



                $result=$db->query("SELECT * FROM applicant as a join verification as v on a.phone=v.phone
                        join graduation_info as g on g.phone=v.phone
                        where a.phone ='".$_SESSION['phone']."'");
                
                $num_result=$result->num_rows;
                $row= $result->fetch_assoc();
                
$pdf->SetFont('Arial','',10);
$pdf->Cell(40,20,'Graduation Information',0,2);
$html="<table border='1'>
<tr>
<td width='150' height='50'>Program</td><td width='200' height='50'>Institute</td>
<td width='100' height='50'>Passing Year</td><td width='100' height='50'>Duration</td>
<td width='100' height='50'>Result</td>
</tr>
<tr>
<td width='150' height='50'>".$row['program_name']."</td><td width='200' height='50'>".$row['institute']."</td>
<td width='100' height='50'>".$row['year']."</td><td width='100' height='50'>".$row['course_duration']."</td>
<td width='100' height='50'>".$row['result']."</td> 
</tr>";
$pdf->WriteHTML($html);









$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,20,"Date & Time:   ".date("F j, Y, g:i a", strtotime(date("F j, Y, g:i a"). ' + 4 hours')),0,2);


$pdf->Output();

?>