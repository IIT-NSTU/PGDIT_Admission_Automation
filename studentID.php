<?php
    session_start();
error_reporting(0);
    
    if(!isset($_SESSION['roll'])){
      header("Location: applicant_loginUI.php");exit();
    }
    
require_once('Login.php');
    
    $applicant_login=new ApplicantLogin();
    $applicant_context= new LoginContext($applicant_login);
    $applicant_context->execute($_SESSION['phone'], $_SESSION['biller_id']);
    
            $roll=$applicant_login->id;            $applicantname=$applicant_login->applicantname;
            $fname=$applicant_login->fname;        $mname=$applicant_login->mname;
            $address=$applicant_login->address;    $photo=$applicant_login->photo;
            $txn=$applicant_login->txn;            $score=$applicant_login->score;
            $admitted=$applicant_login->admitted;
    
require_once('fpdf184/fpdf.php');
require_once('phpqrcode/qrlib.php');
require('qr.php');

                
// PDF Admit Card
$pdf = new FPDF();
$pdf->AddPage();

$pdf->SetRightMargin(30);
$pdf->Cell(40);

$pdf->Image('image/iit.png',20,25,170,30);

$pdf->SetFont('Times','B',18);
$pdf->Cell(40,8,'',0,2);
$pdf->Cell(40,8,'',0,2);
$pdf->Cell(40,8,'',0,2);
$pdf->Cell(40,8,'',0,2);
$pdf->Cell(40,8,'',0,2);
$pdf->Cell(40,10,'',0,2);

//$pdf->Cell(40,8,'',0,2,'C');

$pdf->Cell(40);
$pdf->SetFont('Times','U',18);
$pdf->Cell(40,8,'Student ID Card : PGDIT Batch-12',0,2,'C');
$pdf->Cell(40,15,'',0,2);
  // Rename QR with Roll if unnecessary incident occour.160
$pdf->Image("image/director_sign.png", 27,110, 50, 32); 

$pic = 'data://text/plain;base64,' .$photo;     // prepare a base64 encoded "data url" 158

define('DIRECTORY', 'image');
$content = file_get_contents($pic);
file_put_contents(DIRECTORY . '/applicant.png', $content);
$pdf->Image("image/applicant.png", 150, 92, 40,50, 'png');   //Background of Seal

$pdf->Image("image/iit_seal.png", 85, 75, 140, 100);  

$pdf->Cell(-60);
$pdf->SetFont('Arial','B',14);

$pdf->Cell(40,8,'ID: '.$roll,0,2);
$pdf->SetFont('Arial','',14);
$pdf->Cell(40,8,'Name: '.$applicantname,0,2);
$pdf->Cell(40,8,"Father's Name: ".$fname,0,2);

$pdf->Cell(40,8,'',0,2);
$pdf->Cell(40,8,'',0,2);
$pdf->Cell(0,8,'_________________',0,0,'L');
$pdf->Ln();
$pdf->Cell(20);
$pdf->Cell(0,8,"Director's Signature",0,2,'L');

$pdf->Output();
?>

