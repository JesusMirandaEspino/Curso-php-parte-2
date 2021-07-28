<?php

    $nombre = $_POST['nombre'];
    $pass = $_POST['pass'];
    $comentarios = $_POST['comentarios'];
    $idioma = $_POST['idioma'];
    $estado = $_POST['estado'];
    $pasatiempos = $_POST['hobbies'];
    $comidas = $_POST['comidas'];

    $salto = '</br>';


    echo 'Bienvenido ' .  $nombre . $salto;
    echo 'Password jeje: ' .  $pass . $salto;
    echo 'Comentarios ' .  $comentarios . $salto;
    echo 'Idioma ' .  $idioma . $salto;
    echo 'Estado ' .  $estado . $salto;

    foreach( $pasatiempos as $pasatiempo ){
        echo 'Pasatiempo ' .  $pasatiempo . $salto;
    }

    foreach ($comidas as $comida) {
        echo 'Comida: ' .  $comida . $salto;
    }
    


?>