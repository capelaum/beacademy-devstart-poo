<?php

ini_set('display_errors', 1);

include "./vendor/autoload.php";

use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();

$html = '';

for ($i = 1; $i <= 10; $i++) {
  $html .= "<p>{$i} - Item</p>";
}

$dompdf->loadHtml('<h1>Hello PHP</h1>' . $html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("dompdf_out.pdf", array("Attachment" => false));

exit(0);
