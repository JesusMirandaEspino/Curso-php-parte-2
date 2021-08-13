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


echo '**************************//*******';
echo '**************************//*******';


$vida = [ 'fruta' => 'manzana', 'persona' =>  'hombre',  'animales' => [
    'perro', 'gato', 'gallina'
] ];

$cadena = serialize( $vida );

echo $cadena;


class objeto1 {
    public $valor1;
}


class objeto2 {
    public $valor2;
}


$obj1 = new objeto1();
$obj2 = new objeto2();


$obj1->valor1 = 'gato';
$obj2->valor2 = 'perro';

$obj1s = serialize($obj1);
$obj2s = serialize($obj2);

$data = unserialize( $obj1s, [ 'allowed_classes'=>true ] );

var_dump( $data );


$cadena = "hola \"  todos  \" por <b> este gran dia </b>, <i> jajaja </i>  ";
$a = htmlentities( $cadena );

$b = html_entity_decode($a);

echo '<br>';
echo $a . '<br>';
echo $b;

$url = 'nombre=Jesus&Apellido=Miranda';

foreach ( explode('&', $url ) as $cadena ) {
    $p = explode( '=', $cadena );
    if( $p ){
        printf("El valor del parametro \"%s\" es \"%s\" <br>",
        urldecode($p[0]) , urldecode( $p[1] ));
    }
}


$cadena = " hola 'a todos', como 'estan' ";

$cadena1 = addslashes( $cadena );

$cadena2 = stripslashes( $cadena );

echo $cadena1 . '   ';
echo $cadena2;

$html = '<p><Hola a todos</p>';
$js = "<script>alert('hola mundo')</script>";

echo htmlspecialchars( $html );
echo strip_tags( $js );

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