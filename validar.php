<?php

    $nombre = $_POST['nombre'];
    $pass = $_POST['pass'];
    $comentarios = $_POST['comentarios'];
    $idioma = $_POST['idioma'];
    $estado = $_POST['estado'];

    $salto = '</br>';


    echo 'Bienvenido ' .  $nombre . $salto;
    echo 'Password jeje: ' .  $pass . $salto;
    echo 'Comentarios ' .  $comentarios . $salto;
    echo 'Idioma ' .  $idioma . $salto;
    echo 'Estado ' .  $estado . $salto;

?>