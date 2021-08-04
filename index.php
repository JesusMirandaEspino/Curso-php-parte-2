<?php

if( isset($_GET['animal']) ){

    $animal = $_GET['animal'];

    
    if( $animal == 'gato'){
        header('Location:https://www.latimes.com/espanol/vida-y-estilo/articulo/2020-08-08/hoyla-recuento-11-cosas-aman-gatos-top');

    }
}



$t = time();

$fecha = date( 'd/m/Y', $t );
$hora = date( 'h:i:s', $t );
$dia = date( 'l', $t );
$diames = date('j', $t);
$mes = date('F', $t);
$year = date('Y', $t);
$hora = date('H', $t);

echo $t;

echo '<p>' .  $fecha .  '</p>';
echo '<p>' .  $hora .  '</p>';
echo '<p>' .  $dia .  '</p>';
echo '<p>' .  $diames .  '</p>';
echo '<p>' .  $mes .  '</p>';
echo '<p>' .  $hora .  '</p>';
echo '<p>' .  $year .  '</p>';
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


        <form action="index.php" method="GET">

            <label for="animal">¿Que soy?</label>
            <input type="radio" name="animal" id="perro" value="perro"> <label for="perro">Perro</label>
            <input type="radio" name="animal" id="gato" value="gato"> <label for="gato">Gato</label>
            <input type="submit" value="Enviar">






        </form>



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