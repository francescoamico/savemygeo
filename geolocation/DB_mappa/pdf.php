<?php

   session_start();
   require('fpdf.php');
   include("config.inc.php");
   $pdf=new FPDF();
   $temp= "Utente ".$_SESSION["username"];
   $pdf->SetAutoPageBreak(false);
   $pdf->AddPage();
   $y_inizio = 40;
   $h = 6;
   $pdf->Image('css/img/logo.png',26);

   $pdf->SetFillColor(228,49,127);
   $pdf->SetFont('Arial','B',12);
   $pdf->SetY($y_inizio);
   $pdf->SetX(25);
   $pdf->Cell(80,6,$temp,1,0,'B',1);
   $y=$y_inizio;
   $pdf->SetFillColor(132,162,231);
   $y = $y + $h;

   $pdf->SetY($y_inizio+10);
   $pdf->SetX(25);
   $pdf->Cell(80,6,'Latitudine',1,0,'L',1);
   $pdf->Cell(80,6,'Longitudine',1,0,'L',1);

   $y=$y_inizio+10;
   $pdf->SetFillColor(232,232,232);
   $y = $y + $h;

   $result=$link->query("SELECT Latitudine, Longitudine FROM dati WHERE username='".$_SESSION["username"]."'");

   $i = 0;
   $max = 25;

   while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
       if ($i == $max){
           $pdf->AddPage();
           $pdf->SetY($y_inizio);
           $pdf->SetX(25);
           $pdf->Cell(80,6,'Latitudine',1,0,'L',1);
           $pdf->Cell(80,6,'Longitudine',1,0,'L',1);

           $y = $y + $h;
           $i = 0;
       }
       $latitudine = $row['Latitudine'];
       $longitudine = $row['Longitudine'];
       $pdf->SetY($y);
       $pdf->SetX(25);


       $pdf->Cell(80,6,$latitudine,1,0,'L',1);
       $pdf->Cell(80,6,$longitudine,1,0,'L',1);


       $y = $y + $h;

       $i = $i + 1;
   }
   mysqli_close($link);
   $pdf->Output();

?>