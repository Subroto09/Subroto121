<?php
session_start();
require_once 'dompdf/autoload.inc.php'; 
use Dompdf\Dompdf; 

$dompdf = new Dompdf();
$n=$_SESSION['name'];



$dompdf->loadHtml('
<h1>Player Report</h1>
<p>Name:'.$n.'</p>
<p>Top agent:'.$_SESSION['tagent'].'</p>
<p>Current Rating: '.$_SESSION["ttier"].'</p>
<p>Peak Rating: '.$_SESSION["tpeak"].'</p>
<p>Wins:'.$_SESSION["twin"].'</p>
<p>KDR:'.$_SESSION["tkd"].'</p>
'); 


$dompdf->setPaper('A4', 'landscape'); 
$dompdf->render(); 
$dompdf->stream("Player info - ".$n, array("Attachment" => 1));

?>