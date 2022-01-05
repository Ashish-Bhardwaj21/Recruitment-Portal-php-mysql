<?php
require('fpdf.php');
$pdf=new FPDF();

if(isset($_POST['create']))
{
    $conn=new mysqli("localhost","root","","dbmsppart2");


    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $uname=$_POST['uname'];
    $gender=$_POST['gender'];
    $pnum=$_POST['pnum'];
    $dob=$_POST['dob'];
    $email=$_POST['email'];
    $status=$_POST['status'];
    $nation=$_POST['nation'];
    $hsi=$_POST['hsi'];
    $hsy=$_POST['hsy'];
    $hsp=$_POST['hsp'];
    $ini=$_POST['ini'];
    $iny=$_POST['iny'];
    $inp=$_POST['inp'];
    $bti=$_POST['bti'];
    $bty=$_POST['bty'];
    $btp=$_POST['btp'];
    $mti=$_POST['mti'];
    $mty=$_POST['mty'];
    $mtp=$_POST['mtp'];
    $pti=$_POST['pti'];
    $pty=$_POST['pty'];
    $ptp=$_POST['ptp'];
    $expp=$_POST['expp'];
    $rpj=$_POST['rpj'];
    $rpub=$_POST['rpub'];
    $cowk=$_POST['cowk'];
    $bguid=$_POST['bguid'];
    $mguid=$_POST['mguid'];
    $pguid=$_POST['pguid'];
    $acname=$_POST['acname'];
    $acnum=$_POST['acnum'];
    $bankn=$_POST['bankn'];
    $ifscn=$_POST['ifscn'];
    $brancn=$_POST['brancn'];
    $feep=$_POST['feep'];
    $uyp=$_FILES['uyp']['name'];
    $acc=$_FILES['acc']['name'];
    $sic=$_FILES['sic']['name'];

    $sql="INSERT INTO `dbmspart2`(`profile photo`, `first name`, `last name`, `father name`, `gender`, `phone number`, `dob`, `email`, `status`, `nation`, `high school board`, `high school year`, `high school marks`, `intermediate school board`, `intermediate schoo lyear`, `intermediate school marks`, `b.tech college`, `b.tech year`, `b.tech percent`, `m.tech college`, `m.tech year`, `m.tech percent`, `phd college`, `phd year`, `phd percent`, `experience`, `research project`, `research publications`, `consultancy works`, `b.tech guided`, `m.tech guided`, `phd guided`, `account holder name`, `account number`, `bank name`, `ifsc code`, `branch name`, `fees`, `signature`, `adharcard`) VALUES ('$uyp','$fname','$lname','$uname','$gender','$pnum','$dob','$email','$status','$nation','$hsi','$hsy','$hsp','$ini','$iny','$inp','$bti','$bty','$btp','$mti','$mty','$mtp','$pti','$pty','$ptp','$expp','$rpj','$rpub','$cowk','$bguid','$mguid','$pguid','$acname','$acnum','$bankn','$ifscn','$brancn','$feep','$acc','$sic')";
    $query=mysqli_query($conn,$sql);

    if($query)
    {
    $pdf->AddPage();
    $pdf->SetFont("Arial","B",19);
    $pdf->Image($uyp,160,10,50,50);

    $pdf->Cell(145,10,"Personal Information",0,1,'C');

    $pdf->Cell(45,10,"First name",1,0);
    $pdf->Cell(100,10,$fname,1,1);

    $pdf->Cell(45,10,"Last name",1,0);
    $pdf->Cell(100,10,$lname,1,1);

    $pdf->Cell(45,10,"Father name",1,0);
    $pdf->Cell(100,10,$uname,1,1);

    $pdf->Cell(45,10,"Gender",1,0);
    $pdf->Cell(100,10,$gender,1,1);

    $pdf->Cell(45,10,"Phone num.",1,0);
    $pdf->Cell(100,10,$pnum,1,1);

    $pdf->Cell(45,10,"Date of Birth",1,0);
    $pdf->Cell(100,10,$dob,1,1);

    $pdf->Cell(45,10,"Email",1,0);
    $pdf->Cell(100,10,$email,1,1);

    $pdf->Cell(45,10,"Marri Status",1,0);
    $pdf->Cell(100,10,$status,1,1);

    $pdf->Cell(45,10,"Nationality",1,0);
    $pdf->Cell(100,10,$nation,1,1);

    $pdf->Ln();

    $pdf->Cell(195,10,"Educational Qualifications",0,1,'C');

    $pdf->Cell(55,10,"Class",1,0);
    $pdf->Cell(55,10,"board",1,0);
    $pdf->Cell(45,10,"Year",1,0);
    $pdf->Cell(40,10,"Mark(%)",1,1);

    $pdf->Cell(55,10,"High School",1,0);
    $pdf->Cell(55,10,$hsi,1,0);
    $pdf->Cell(45,10,$hsy,1,0);
    $pdf->Cell(40,10,$hsp,1,1);

    $pdf->Cell(55,10,"Intermediate",1,0);
    $pdf->Cell(55,10,$ini,1,0);
    $pdf->Cell(45,10,$iny,1,0);
    $pdf->Cell(40,10,$inp,1,1);

    $pdf->Cell(55,10,"Degree",0,0);
    $pdf->Cell(55,10,"Institute Name",0,0);
    $pdf->Cell(45,10,"Year",0,0);
    $pdf->Cell(40,10,"Mark(%)",0,1);

    $pdf->Cell(55,10,"Btech",1,0);
    $pdf->Cell(55,10,$bti,1,0);
    $pdf->Cell(45,10,$bty,1,0);
    $pdf->Cell(40,10,$btp,1,1);

    $pdf->Cell(55,10,"Mtech",1,0);
    $pdf->Cell(55,10,$mti,1,0);
    $pdf->Cell(45,10,$mty,1,0);
    $pdf->Cell(40,10,$mtp,1,1);

    $pdf->Cell(55,10,"phd",1,0);
    $pdf->Cell(55,10,$pti,1,0);
    $pdf->Cell(45,10,$pty,1,0);
    $pdf->Cell(40,10,$ptp,1,1);

    $pdf->ln();

    $pdf->Cell(195,10,"Experience",0,1,'C');
    $pdf->Cell(195,10,$expp,1,1);

    $pdf->ln();

    $pdf->Cell(195,10,"Research Projects",0,1,'C');
    $pdf->Cell(195,10,$rpj,1,1);

    $pdf->ln();

    $pdf->Cell(195,10,"Research Publications",0,1,'C');
    $pdf->Cell(195,10,$rpub,1,1);

    $pdf->ln();

    $pdf->Cell(195,10,"Consultancy works",0,1,'C');
    $pdf->Cell(195,10,$cowk,1,1);

    $pdf->ln();

    $pdf->Cell(195,10,"btech guided",0,1,'C');
    $pdf->Cell(195,10,$bguid,1,1);

    $pdf->ln();

    $pdf->Cell(195,10,"mtech guided",0,1,'C');
    $pdf->Cell(195,10,$mguid,1,1);

    $pdf->ln();

    $pdf->Cell(195,10,"phd guided",0,1,'C');
    $pdf->Cell(195,10,$pguid,1,1);

    $pdf->ln();

    $pdf->Cell(195,10,"Fees Details",0,1,'C');
    
    $pdf->Cell(70,10,"Account Holder Name",1,0);
    $pdf->Cell(125,10,$acname,1,1);

    $pdf->Cell(70,10,"Account Number",1,0);
    $pdf->Cell(125,10,$acnum,1,1);

    $pdf->Cell(70,10,"Bank Name",1,0);
    $pdf->Cell(125,10,$bankn,1,1);

    $pdf->Cell(70,10,"IFSC code",1,0);
    $pdf->Cell(125,10,$ifscn,1,1);

    $pdf->Cell(70,10,"Branch name",1,0);
    $pdf->Cell(125,10,$brancn,1,1);

    $pdf->Cell(70,10,"Fees Paid",1,0);
    $pdf->Cell(125,10,$feep,1,1);
    
    $pdf->ln(20);
    $pdf->Cell(195,10,"Signature:",0,1);
    $pdf->Image($sic,50,250,45,25);


    $pdf->AddPage();

    $pdf->Image($acc,10,10,170,80);

$pdf->Output();
    }

}
?>