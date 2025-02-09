<?php

namespace app\reports;


use Dompdf\Dompdf;

use Dompdf\Options;



$options = new Options();

$options->set('isRemoteEnabled', TRUE); 

$dompdf = new Dompdf($options); //En caso de instanciar con opciones personalizadas

$dompdf->loadHtml($html);

$dompdf->setPaper('A4', 'landscape');

$dompdf->render();

$dompdf->stream("nombre_del_archivo", array("Attachment" => 0)); //para mostrarlo en una pestaña del navegador