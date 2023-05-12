<?php

require_once('tcpdf/tcpdf.php');

$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);

$pdf->AddPage();
$pdf->SetFont('helvetica', 'B', 16);
$pdf->Cell(0, 10, 'Olá, mundo!', 0, 1, 'C');
$pdf->Image('path/to/image.png', 10, 20, 50, 50, 'PNG');
$pdf->Output('meu-documento.pdf', 'I');
