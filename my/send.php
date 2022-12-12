<?php
header("Content-Type: text/html;charset=utf-8");
require_once('SignatureClass.php');
$signatureObj = new SignatureClass();
$signatureObj->send($_POST['date'],$_POST['barra'],$_POST['cambio'],$_POST['efectivo'],$_POST['tarjeta'],$_POST['total'],$_POST['efectivoz'],$_POST['tarjetaz'],$_POST['totalz'],$_POST['diferencia'],$_POST['anticipada'],$_POST['camareros'],$_POST['firma']);
$conn = new mysqli("mysql-5707.dinaserver.com","cerob_cajas","PWqe66,84w/3","cerob_cajas");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8");

$fecha = $_POST['date'];
$barra = $_POST['barra'];
$cambio = $_POST['cambio'];
$efectivo = $_POST['efectivo'];
$tarjeta = $_POST['tarjeta'];
$total = $_POST['total'];
$efectivoz = $_POST['efectivoz'];
$tarjetaz = $_POST['tarjetaz'];
$totalz = $_POST['totalz'];
$diferencia = $_POST['diferencia'];
$anticipada = $_POST['anticipada'];
$camareros = $_POST['camareros'];


$sql = "INSERT INTO cajas_my (cb_barra, cb_fecha, cb_cambio, cb_efectivo, cb_tarjeta, cb_total, cb_efectivoz, cb_tarjetaz, cb_totalz, cb_diferencia, cb_anticipada, cb_camareros)
VALUES ('$barra', '$fecha', '$cambio','$efectivo','$tarjeta','$total','$efectivoz','$tarjetaz','$totalz','$diferencia','$anticipada','$camareros')";

if (mysqli_query($conn, $sql)) {
    echo '<div class="alert alert-success">CAJA '.$b.' ENVIADA <span aria-hidden="true" class="icon_close close-btn"></span></div>';
} else {
    // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    echo "Error: Haz las cajas a PAPEL y comunica esto a Alex";
}

mysqli_close($conn);
?>
