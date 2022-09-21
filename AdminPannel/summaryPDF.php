<?php
session_start();
error_reporting(0);

  if(!isset($_SESSION['name'])){
    header("Location: directorLoginUI.php"); exit();
  }
  
require_once('../fpdf184/html_table.php');
                
                $db= new mysqli('localhost','root','','pgdit_admission');
            
                $result=$db->query("SELECT * FROM applicant as a join verification as v on a.phone=v.phone  where a.phone !='01930878889' and biller_id is not null");
                $num_result=$result->num_rows;
                $admission=$db->query("SELECT * FROM admission where admitted=1;");
                $admitted_result=$admission->num_rows;
                

$var1=123;
$pdf=new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',15);
$pdf->Cell(40,40,'PGDIT Batch-12 Admission Test 2022',0,2);

$pdf->SetFont('Arial','',12);
$html="<table border='0'>
<tr>
<td width='300' height='50'>Total Applicants</td><td width='300' height='50'>".$num_result."</td>
</tr>
<tr>
<td width='300' height='50'>Total Application fee</td><td width='300' height='50'>".($num_result*1000)."</td>
</tr>
<tr>
<td width='300' height='50'>Total Seat</td><td width='300' height='50'>25</td>
</tr>
<tr>
<td width='300' height='50'>Admitted Applicant</td><td width='300' height='50'>".$admitted_result."</td>
</tr>
<tr>
<td width='300' height='50'>Available Seat</td><td width='300' height='50'>".(25-$admitted_result)."</td>
</tr>
<tr>
<td width='300' height='50'> </td><td width='300' height='50'></td>
</tr></table>";
$pdf->WriteHTML($html);

$pdf->SetFont('Arial','B',10);

$html ="<table border='0'><tr><td width='100' height='50'></td><td width='400' height='50'>Date & Time:   ".date("F j, Y, g:i a", strtotime(date("F j, Y, g:i a"). ' + 4 hours'))."</td>
</tr>
</table>";

$pdf->WriteHTML($html);
$pdf->Output();

?>

