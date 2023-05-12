<?php
require 'vendor/autoload.php';

use Dompdf\Dompdf;

// cria um novo objeto Dompdf
$dompdf = new Dompdf();

// carrega o conteúdo HTML que será convertido em PDF
$html = '<h1>Olá, mundo!</h1>';
$dompdf->loadHtml($html);

// define o tamanho e a orientação da página
$dompdf->setPaper('A4', 'portrait');

// renderiza o HTML como PDF
$dompdf->render();

// gera a saída do PDF gerado
$dompdf->stream('documento.pdf');

?>
