<?php
 require_once "db_conn.php";
 require_once "fpdf/fpdf.php";
  $result = "SELECT * FROM students ORDER BY id";
  $sql =$conn->query($result);

  $pdf = new FPDF(); 
  $pdf->AddPage(); 
  $pdf->SetFont('Arial','B',12); 
  
  while ($row = $sql->fetch_object()) { $id = $row->id;
    
  $first_name = $row->first_name;
  $last_name = $row->last_name;  
  $email = $row->email;
  $gender = $row->gender;

  $pdf->Cell(20,10,$id,1);
  $pdf->Cell(40,10,$first_name,1);
  $pdf->Cell(40,10,$last__name,1);
  $pdf->Cell(80,10,$email,1);
  $pdf->Cell(40,10,$gender,1); 
  $pdf-> Ln();
 } 

 $pdf-> Output(); 
?>