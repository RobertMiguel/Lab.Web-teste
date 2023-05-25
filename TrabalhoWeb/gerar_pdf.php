<?php

require_once('tcpdf/tcpdf.php');

require("conexao.php");

// Consulta SQL para obter os dados
$sql_code = "SELECT curso, COUNT(*) AS total_alunos, CONCAT(ROUND((COUNT(*) / (SELECT COUNT(*) FROM form3)) * 100, 2), '%') AS porcentagem_alunos FROM form3 WHERE curso IN ('comércio', 'administração', 'informática', 'enfermagem') GROUP BY curso";
$result = mysqli_query($mysqli, $sql_code);

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

// Caminhos para as imagens SVG do cabeçalho e rodapé
$caminhoCabecalho = 'img/header.svg';
$caminhoRodape = 'img/ondas-governo-rodape.svg';

// Adicionar cabeçalho
$pdf->SetHeaderData($caminhoCabecalho);

// Adicionar rodapé
$pdf->SetFooterData($caminhoRodape);

// Título
$pdf->SetFont('helvetica', 'B', 10);
$pdf->Cell(0, 10, 'Visão geral dos alunos do 1ª Ano 2023', 0, 1, 'C');

// Cabeçalho da tabela
$pdf->Cell(50, 10, 'Curso', 1, 0, 'C', 1);
$pdf->Cell(70, 10, 'Quant. Alunos', 1, 0, 'C', 1);
$pdf->Cell(50, 10, 'Porcentagem', 1, 1, 'C', 1);

// Preencher a tabela com os dados
while ($row = $result->fetch_assoc()) {
    $pdf->Cell(50, 10, $row['curso'], 1, 0, 'C');
    $pdf->Cell(70, 10, $row['total_alunos'], 1, 0, 'C');
    $pdf->Cell(50, 10, $row['porcentagem_alunos'], 1, 1, 'C');
}

// Consulta SQL para obter os dados
$sql_code = "SELECT empregadoMae, COUNT(*) AS quantidade, CONCAT(FORMAT(COUNT(*) * 100 / SUM(COUNT(*)) OVER(), 2), '%') AS porcentagem FROM form3 GROUP BY empregadoMae; ";
$result = mysqli_query($mysqli, $sql);

// Título
$pdf->SetFont('helvetica', 'B', 10);
$pdf->Cell(0, 10, 'Mães Empregadas', 0, 1, 'C');

// Cabeçalho da tabela
$pdf->Cell(50, 10, 'Curso', 1, 0, 'C', 1);
$pdf->Cell(70, 10, 'Quant. Alunos', 1, 0, 'C', 1);
$pdf->Cell(50, 10, 'Porcentagem', 1, 1, 'C', 1);

// Preencher a tabela com os dados
while ($row = $result->fetch_assoc()) {
    $pdf->Cell(50, 10, $row['empregadoMae'], 1, 0, 'C');
    $pdf->Cell(70, 10, $row['quantidade'], 1, 0, 'C');
    $pdf->Cell(50, 10, $row['porcentagem'], 1, 1, 'C');
}

// Consulta SQL para obter os dados
$sql_code = "SELECT empregadoMae, COUNT(*) AS quantidade, CONCAT(FORMAT(COUNT(*) * 100 / SUM(COUNT(*)) OVER(), 2), '%') AS porcentagem FROM form3 GROUP BY empregadoMae; ";
$result = mysqli_query($mysqli, $sql);

// Título
$pdf->SetFont('helvetica', 'B', 10);
$pdf->Cell(0, 10, 'Pais Empregados', 0, 1, 'C');

// Cabeçalho da tabela
$pdf->Cell(50, 10, 'Curso', 1, 0, 'C', 1);
$pdf->Cell(70, 10, 'Quant. Alunos', 1, 0, 'C', 1);
$pdf->Cell(50, 10, 'Porcentagem', 1, 1, 'C', 1);

// Preencher a tabela com os dados
while ($row = $result->fetch_assoc()) {
    $pdf->Cell(50, 10, $row['empregadoMae'], 1, 0, 'C');
    $pdf->Cell(70, 10, $row['quantidade'], 1, 0, 'C');
    $pdf->Cell(50, 10, $row['porcentagem'], 1, 1, 'C');
}



$pdf->Output('relatorio.pdf', 'D');

?>