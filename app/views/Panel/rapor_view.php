<?php
    
 include 'system/libs/fpdf.php';
 ob_start();
 $pdf = new FPDF();
 $pdf->AddPage();
 $pdf->SetFont('Arial','B',14);
 $pdf->Cell(175,12,"Secili Tarihlerdeki Alis islemi",1,0,'C');
    foreach( $islemler as $key=>$value){
        $pdf->SetFont('Arial','',8);	
        $pdf->Ln();
        foreach($value as $key2=>$value2){
            $pdf->Cell(25,12,htmlspecialchars($value2),1);
        }
    }
    $pdf->Output();
    ob_end_flush(); 
 
?>

         
      
      