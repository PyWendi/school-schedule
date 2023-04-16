*<?php
    require_once("../../vendor/autoload.php");
    
    require("getHtml.php");

    use Dompdf\Dompdf;

    $dompdf = new Dompdf();

    $dompdf->loadHtml($html);

    $dompdf->render();

    $dompdf->stream("EDT du ".$dateNorm.".pdf");

    
    die();
?>
