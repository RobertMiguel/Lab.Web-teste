<?php

require_once('tcpdf/tcpdf.php');

require("conexao.php");

// Consulta SQL para obter os dados
$sql = "SELECT curso, COUNT(*) AS total_alunos, CONCAT(ROUND((COUNT(*) / (SELECT COUNT(*) FROM form3)) * 100, 2), '%') AS porcentagem_alunos FROM form3 WHERE curso IN ('comércio', 'administração', 'informática', 'enfermagem') GROUP BY curso";
$result = mysqli_query($mysqli, $sql);

// Criar o objeto PDF
$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8');
$pdf->SetCreator('Trabalho Web');
$pdf->SetAuthor('Trabalho Web');
$pdf->SetTitle('Relatório em PDF');
$pdf->SetAutoPageBreak(true, 10);

// Adicionar página
$pdf->AddPage();

// Configurações da tabela
$pdf->SetFont('helvetica', 'B', 12);
$pdf->SetFillColor(180, 180, 180);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetDrawColor(0, 0, 0);

// Arquivos do Header e Footer 

$headerFile = 'img/header.svg';
$footerFile = 'img/ondas-governo-rodape.png';
$header = file_get_contents($headerFile);
$footer = file_get_contents($footerFile);

// Adicionar Header e Footer
$pdf->setHeaderData($headerFile);
$pdf->setFooterData($footerFile);

// Cabeçalho da tabela
$pdf->setFont('helvetica','B', 14);
$pdf->Cell(0, 10, 'Visão geral dos alunos do 1ª Ano 2023');
$pdf->Cell(50, 10, 'Curso', 1, 0, 'C', 1);
$pdf->Cell(70, 10, 'Quant. Alunos', 1, 0, 'C', 1);
$pdf->Cell(50, 10, 'Porcentagem', 1, 1, 'C', 1);

// Preencher a tabela com os dados
while ($row = $result->fetch_assoc()) {
    $pdf->Cell(50, 10, $row['curso'], 1, 0, 'C');
    $pdf->Cell(70, 10, $row['total_alunos'], 1, 0, 'C');
    $pdf->Cell(50, 10, $row['porcentagem_alunos'], 1, 1, 'C');
}

$pdf->Output('relatorio.pdf', 'D');

?>