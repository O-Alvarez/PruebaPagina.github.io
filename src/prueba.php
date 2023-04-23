<?php
require_once 'html2pdf/vendor/autoload.php';
use Spipu\Html2Pdf\Html2Pdf;
// Obtener el contenido HTML del div
$html = file_get_contents('.../index.html');

// Crear una instancia de Html2Pdf
$pdf = new Html2Pdf('P', 'A4', 'es');

// Agregar el contenido HTML al PDF
$pdf->writeHTML($html);

// Descargar el archivo PDF
$pdf->output('archivo.pdf');
?>