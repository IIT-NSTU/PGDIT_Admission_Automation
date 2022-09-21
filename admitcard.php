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

$pdf->Cell(40,8,'PGDIT Batch-12 Admission Test 2022',0,2);

$pdf->Cell(40);
$pdf->SetFont('Times','U',18);
$pdf->Cell(40,8,'Admit Card',0,2);
$pdf->Cell(40,15,'',0,2);

$pdf->Image("image/qr.png", 85, 176, 40, 40);   // Rename QR with Roll if unnecessary incident occour.160
$pdf->Image("image/director_sign.png", 133, 180, 50, 32);

$pic = 'data://text/plain;base64,' .$photo;     // prepare a base64 encoded "data url" 158

define('DIRECTORY', 'image');
$content = file_get_contents($pic);
file_put_contents(DIRECTORY . '/applicant.png', $content);
$pdf->Image("image/applicant.png", 150, 92, 40,50, 'png');   //Background of Seal

$pdf->Image("image/iit_seal.png", 85, 75, 140, 100);  

$pdf->Cell(-60);
$pdf->SetFont('Arial','B',14);

$pdf->Cell(40,8,'Roll: '.$roll,0,2);
$pdf->SetFont('Arial','',14);
$pdf->Cell(40,8,'Name: '.$applicantname,0,2);
$pdf->Cell(40,8,"Father's Name: ".$fname,0,2);
$pdf->Cell(40,8,"Mother's Name: ".$mname,0,2);
$pdf->Cell(40,8,'',0,2);
$pdf->Cell(40,8,'Examination Center: Library Building, NSTU',0,2);
$pdf->Cell(0,8,'Date of Examination: 28 December, 2022',0,2);
$pdf->Cell(0,8,'Time: 10:00 AM to 11:00 AM',0,2);

$pdf->Cell(40,8,'',0,2);
$pdf->Cell(40,8,'',0,2);
$pdf->Cell(40,8,'',0,2);
$pdf->Cell(40,8,'',0,2);
$pdf->Cell(40,8,'',0,2);
$pdf->Cell(0,8,'_________________',0,0,'L');
$pdf->Cell(0,8,'_________________',0,0,'R');
$pdf->Ln();
$pdf->Cell(20);
$pdf->Cell(0,8,"Applicant's Signature",0,0,'L');
$pdf->Cell(0,8,"Director's Signature",0,2,'R');

$pdf->Ln();
$pdf->Cell(20);
$pdf->SetFont('Times','B',18);
$pdf->Cell(40,8,'Instructions',0,2,'C');
$pdf->SetFont('Arial','',12);
$pdf->Cell(40,8,"A. Bring 2 copies of this admit card in the exam hall.",0,2);
$pdf->Cell(40,8,"B. Don't bring any types of electronic device/s eg. mobile, calculator, watch, etc.",0,2);
$pdf->Cell(40,8,"C. Bring 2 copies of of your passport size photo in the exam hall.",0,2);
$pdf->Cell(40,8,"D. Present yourself in the exam hall before 30 minutes ago.",0,2);


$pdf->SetFont('Arial','',8);
$pdf->Cell(0,8,"Download Time:   ".date("F j, Y, g:i a", strtotime(date("F j, Y, g:i a"). ' + 4 hours')),0,2,'R');

$pdf->Output();
?>