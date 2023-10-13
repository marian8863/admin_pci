<?php
include '../config.php';
if(isset($_GET['get_id'])){
    $pid=$_GET['get_id'];


}

?>


<?php

require_once 'plugins/dompdf/autoload.inc.php';

use Dompdf\Dompdf;


$dompdf =new Dompdf();

// $html_file_content=file_get_contents('passenger_pdf.php');
// $dompdf->loadHtml($html_file_content);

$url = 'http://booking.pariscablimousine.fr/admin/passenger_pdf.php?get_id=' . urlencode($pid);
//$url = 'http://localhost/my_admin/admin/passenger_pdf.php?get_id=' . urlencode($pid);

$html_file_content = file_get_contents($url);
$dompdf->loadHtml($html_file_content);

// $html_file_content="
// <h1>Jayanth</h1> .$pp.
// ";
// $dompdf->loadHtml($html_file_content);
// $dompdf->set_option('isPhpEnabled', true);
$dompdf->setPaper('A4','P');

$dompdf->render();

$dompdf->stream('document',array('Attachment' =>0));
?>