<?php

require('./fpdf/fpdf.php');

$pdf = new FPDF();
//Agrega pagina
$pdf->AddPage();
//Setea fuente - 
$pdf->SetFont('Arial','',18);
$pdf->SetFillColor(220,220,220);
$pdf->Cell(70,10,utf8_decode('ORDEN DE COMPRA'),1,2,'C',true);
$pdf->Line(10,20,200,20);
$pdf->Ln();
$pdf->SetFont('Arial','',12);
$pdf->Cell(30,10,utf8_decode('Codigo:'),'',0,'L');
$pdf->Cell(50,10,utf8_decode('CC0001'),1,0,'C');
$pdf->Cell(5);
$pdf->Cell(60,10,utf8_decode('Fecha de contabilización:'),'',0,'L');
$pdf->Cell(30,10,utf8_decode('20/08/2021'),1,1,'C');
$pdf->Ln(3);
$pdf->Cell(30,10,utf8_decode('Proveedor:'),'',0,'L');
$pdf->Cell(50,10,utf8_decode('P96999930-700'),1,0,'C');
$pdf->Cell(5);
$pdf->Cell(60,10,utf8_decode('Fecha de entrega:'),'',0,'L');
$pdf->Cell(30,10,utf8_decode('20/08/2021'),1,1,'C');
$pdf->Ln(3);
$pdf->Cell(30,10,utf8_decode('Nombre:'),'',0,'L');
$pdf->Cell(50,10,utf8_decode('Inxap S.A.'),1,0,'C'); 
$pdf->Cell(5);
$pdf->Cell(60,10,utf8_decode('Fecha de documento:'),'',0,'L');
$pdf->Cell(30,10,utf8_decode('20/08/2021'),1,1,'C');
$pdf->Line(10,75,200,75);
$pdf->Ln(15);
//tabla
$pdf->SetFont('Arial','',14);
$pdf->SetFillColor(220,220,220);
$pdf->Cell(40,10,utf8_decode('Nro de artículo'),1,0,'L',true);
$pdf->Cell(30,10,utf8_decode('Nombre'),1,0,'L',true);
$pdf->Cell(40,10,utf8_decode('Cantidad'),1,0,'L',true);
$pdf->Cell(40,10,utf8_decode('Precio'),1,0,'L',true);
$pdf->Cell(40,10,utf8_decode('Total'),1,1,'L',true);
//row
$pdf->SetFont('Arial','',12);
$pdf->Cell(40,10,utf8_decode('243454'),1,0,'L');
$pdf->Cell(30,10,utf8_decode('teclado'),1,0,'L');
$pdf->Cell(40,10,utf8_decode('3'),1,0,'L');
$pdf->Cell(40,10,utf8_decode('2000'),1,0,'L');
$pdf->Cell(40,10,utf8_decode('6000'),1,1,'L');
//
$pdf->SetFont('Arial','',12);
$pdf->Cell(40,10,utf8_decode('243454'),1,0,'L');
$pdf->Cell(30,10,utf8_decode('teclado'),1,0,'L');
$pdf->Cell(40,10,utf8_decode('3'),1,0,'L');
$pdf->Cell(40,10,utf8_decode('2000'),1,0,'L');
$pdf->Cell(40,10,utf8_decode('6000'),1,1,'L');
//
$pdf->SetFont('Arial','',12);
$pdf->Cell(40,10,utf8_decode('243454'),1,0,'L');
$pdf->Cell(30,10,utf8_decode('teclado'),1,0,'L');
$pdf->Cell(40,10,utf8_decode('3'),1,0,'L');
$pdf->Cell(40,10,utf8_decode('2000'),1,0,'L');
$pdf->Cell(40,10,utf8_decode('6000'),1,1,'L');
//
$pdf->SetFont('Arial','',12);
$pdf->Cell(40,10,utf8_decode('243454'),1,0,'L');
$pdf->Cell(30,10,utf8_decode('teclado'),1,0,'L');
$pdf->Cell(40,10,utf8_decode('3'),1,0,'L');
$pdf->Cell(40,10,utf8_decode('2000'),1,0,'L');
$pdf->Cell(40,10,utf8_decode('6000'),1,1,'L');
//
$pdf->SetFont('Arial','',12);
$pdf->Cell(40,10,utf8_decode('243454'),1,0,'L');
$pdf->Cell(30,10,utf8_decode('teclado'),1,0,'L');
$pdf->Cell(40,10,utf8_decode('3'),1,0,'L');
$pdf->Cell(40,10,utf8_decode('2000'),1,0,'L');
$pdf->Cell(40,10,utf8_decode('6000'),1,1,'L');
//
$pdf->SetFont('Arial','',12);
$pdf->Cell(40,10,utf8_decode('243454'),1,0,'L');
$pdf->Cell(30,10,utf8_decode('teclado'),1,0,'L');
$pdf->Cell(40,10,utf8_decode('3'),1,0,'L');
$pdf->Cell(40,10,utf8_decode('2000'),1,0,'L');
$pdf->Cell(40,10,utf8_decode('6000'),1,1,'L');
//
$pdf->SetFont('Arial','',12);
$pdf->Cell(40,10,utf8_decode('243454'),1,0,'L');
$pdf->Cell(30,10,utf8_decode('teclado'),1,0,'L');
$pdf->Cell(40,10,utf8_decode('3'),1,0,'L');
$pdf->Cell(40,10,utf8_decode('2000'),1,0,'L');
$pdf->Cell(40,10,utf8_decode('6000'),1,1,'L');
//
$pdf->SetFont('Arial','',12);
$pdf->Cell(40,10,utf8_decode('243454'),1,0,'L');
$pdf->Cell(30,10,utf8_decode('teclado'),1,0,'L');
$pdf->Cell(40,10,utf8_decode('3'),1,0,'L');
$pdf->Cell(40,10,utf8_decode('2000'),1,0,'L');
$pdf->Cell(40,10,utf8_decode('6000'),1,1,'L');
//
$pdf->SetFont('Arial','',12);
$pdf->Cell(40,10,utf8_decode('243454'),1,0,'L');
$pdf->Cell(30,10,utf8_decode('teclado'),1,0,'L');
$pdf->Cell(40,10,utf8_decode('3'),1,0,'L');
$pdf->Cell(40,10,utf8_decode('2000'),1,0,'L');
$pdf->Cell(40,10,utf8_decode('6000'),1,1,'L');
//
$pdf->SetFont('Arial','',12);
$pdf->Cell(40,10,utf8_decode('243454'),1,0,'L');
$pdf->Cell(30,10,utf8_decode('teclado'),1,0,'L');
$pdf->Cell(40,10,utf8_decode('3'),1,0,'L');
$pdf->Cell(40,10,utf8_decode('2000'),1,0,'L');
$pdf->Cell(40,10,utf8_decode('6000'),1,1,'L');
//
$pdf->SetFont('Arial','',12);
$pdf->Cell(40,10,utf8_decode('243454'),1,0,'L');
$pdf->Cell(30,10,utf8_decode('teclado'),1,0,'L');
$pdf->Cell(40,10,utf8_decode('3'),1,0,'L');
$pdf->Cell(40,10,utf8_decode('2000'),1,0,'L');
$pdf->Cell(40,10,utf8_decode('6000'),1,1,'L');
//
$pdf->SetFont('Arial','',12);
$pdf->Cell(40,10,utf8_decode('243454'),1,0,'L');
$pdf->Cell(30,10,utf8_decode('teclado'),1,0,'L');
$pdf->Cell(40,10,utf8_decode('3'),1,0,'L');
$pdf->Cell(40,10,utf8_decode('2000'),1,0,'L');
$pdf->Cell(40,10,utf8_decode('6000'),1,1,'L');

//Totales
$pdf->Ln(10);

$pdf->Cell(90);
$pdf->Cell(60,10,utf8_decode('Total antes de descuento'),'LT',0,'L',true);
$pdf->Cell(40,10,utf8_decode('6000'),1,1,'L');

$pdf->Cell(90);
$pdf->Cell(30,10,utf8_decode('Descuento'),'L',0,'L',true);
$pdf->Cell(15,10,'10',1,0,'L');
$pdf->Cell(15,10,'%',0,0,'L',true);
$pdf->Cell(40,10,utf8_decode('6000'),1,1,'L');

$pdf->Cell(90);
$pdf->Cell(60,10,utf8_decode('Gastos adicionales'),'L',0,'L',true);
$pdf->Cell(40,10,utf8_decode('6000'),1,1,'L');

$pdf->Cell(90);
$pdf->Cell(60,10,utf8_decode('Impuesto'),'L',0,'L',true);
$pdf->Cell(40,10,utf8_decode('6000'),1,1,'L');

$pdf->Cell(90);

$pdf->Cell(60,10,utf8_decode('Total pago vencido'),'LB',0,'L',true);
$pdf->Cell(40,10,utf8_decode('6000'),1,1,'L');





$pdf->Output();
?>

