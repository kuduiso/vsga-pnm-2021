<?php
require './vendor/autoload.php';

use Dompdf\Dompdf;

$dompdf = new Dompdf();

$kodeHTML = '<h1 style="text-align:center;">Halo semua...!!!</h1>';
$kodeHTML .= '<table border="1" width="100%">';
$kodeHTML .= '<tr><td>Nama:</td><td>Miftahul Fauza Ridhoi</td></tr>';
$kodeHTML .= '<tr><td>Umur:</td><td>21</td></tr>';
$kodeHTML .= '<tr><td>Alamat:</td><td>Magetan</td></tr>';
$kodeHTML .= '</table>';

$dompdf->loadHtml($kodeHTML);
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$dompdf->stream('jwd-biodata.pdf', ["Attachment" => false]);