<?php

$fechaInicial = '2015-05-16';
$fechaFinal = date('Y/d/m');


function diferenciaFechas( $fechaInicial, $fechaFinal ){
    $dias = ( strtotime( $fechaFinal ) - strtotime( $fechaInicial ) / ( 60*60*24) );
    $dias = abs( $dias );
    $dias = floor( $dias );
    echo $dias;
}


date_default_timezone_set( 'America/Mexico_City' );

echo date( 'D, d M Y H:i:s' );

echo '-----------';

echo strtotime( 'now' );


function calcularEdad( $fecha ){

    list( $Y, $m, $d ) = explode( '-', $fecha );

    return ( date(  'md' )<$m.$d? date('Y')-$Y-1 : date('Y')-$Y);

}


echo '*******************';

echo 'tu edad es de: ' . calcularEdad( '2001-05-01' );


echo '**************************//*****';





$monto = 1500;
$tasaIVA = 0.16;
$montoIVA = $monto * $tasaIVA ;
$granTotal = $monto + $montoIVA;


$retISR = 0.1;
$retIVA = 0.16667;

$montoRetIVA = $granTotal * $retIVA;
$montoRetISR = $granTotal * $retISR;

$total = ($granTotal - $montoRetIVA) - $montoRetISR;


printf( "<p>Monto: $%6.2f</p>", $total );


?>



<!DOCTYPE html>
<html lang="es">

<head>

    <!-- **************************  -->
    <!-- **************************  -->
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Jesus Miranda">
    <!-- **************************  -->
    <!-- **************************  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="INDEX,FOLLOW">
    <!-- **************************  -->
    <!-- **************************  -->
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/responsivo.css">
    <link rel="stylesheet" href="assets/css/estilos.css">
    <!-- **************************  -->
    <!-- **************************  -->
    <link rel="icon" type="image/png" href="">
    <!-- **************************  -->
    <!-- **************************  -->
    <title></title>


</head>

<body>


    <!-- **************************  -->
    <!-- **************************  -->
    <header>





    </header>


    <!-- **************************  -->
    <!-- **************************  -->
    <main>

    </main>


    <!-- **************************  -->
    <!-- **************************  -->
    <footer>


    </footer>


    <script src="assets/js/app.js"></script>

</body>

</html>