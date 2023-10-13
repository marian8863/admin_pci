<?php

require_once 'plugins/dompdf/autoload.inc.php';

use Dompdf\Dompdf;


$dompdf =new Dompdf();


include '../config.php';

if(isset($_GET['get_id'])){
    $pid=$_GET['get_id'];
    $sql="SELECT `passenger`.`passager_principal`,`passenger`.`contact_number`,
    `passenger`.`date_de_prise_en_charge`,`passenger`.`Time`,`passenger`.`adresse_du_pick_up`,
    `passenger`.`adresse_de_depose`,passenger.`nb_de_passager`,`passenger`.`options`,`driver`.`d_id`,`driver`.`dname`,
    `driver`.`dtp_num`,`passenger`.`Vehicule_num` from driver,passenger where `driver`.d_id=`passenger`.d_id and  `passenger`.p_id=$pid";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result)==1) {       
        $row=mysqli_fetch_assoc($result);
        $pp=$row['passager_principal'];
        $cn=$row['contact_number'];
        $dd=$row['date_de_prise_en_charge'];
        $tm=$row['Time'];
        $pu=$row['adresse_du_pick_up'];
        $dp=$row['adresse_de_depose'];
        $np=$row['nb_de_passager'];
        $op=$row['options'];
        $dn=$row['dname'];
        $dtn=$row['dtp_num'];
        $vn=$row['Vehicule_num'];

    }}

// $html_file_content=file_get_contents('passenger_pdf.php');
// $dompdf->loadHtml($html_file_content);

// $url = 'http://booking.pariscablimousine.fr/admin/passenger_pdf?get_id=' . urlencode($pid);
// //$url = 'http://localhost/my_admin/admin/passenger_pdf.php?get_id=' . urlencode($pid);

// $html_file_content = file_get_contents($url);
// $dompdf->loadHtml($html_file_content);

// $html_file_content="
// <h1>Jayanth</h1> .$pp.
// ";
// $dompdf->loadHtml($html_file_content);
// $dompdf->set_option('isPhpEnabled', true);

$dompdf->setPaper("A4", "portrait");

/**
 * Load the HTML and replace placeholders with values from the form
 */
$html = file_get_contents("passenger_pdf.php");

$html = str_replace(["{{ passager_principal }}", "{{ contact_number }}"], [$pp, $cn], $html);

$dompdf->loadHtml($html);



$dompdf->render();

$dompdf->stream('document',array('Attachment' =>0));
?>