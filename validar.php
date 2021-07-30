<?php

    $nombre = $_POST['nombre'];
    $pass = $_POST['pass'];
    $comentarios = $_POST['comentarios'];
    $idioma = $_POST['idioma'];
    $estado = $_POST['estado'];
    $pasatiempos = $_POST['hobbies'];
    $comidas = $_POST['comidas'];

    $salto = '</br>';


    $error = [];

    if( $nombre === '' ){
        array_push($error, '<p>' .  'Por favor escribe el nombre'  . '</p>'   ) ;

    }
    
    if($pass === '' ){
        array_push($error, '<p>' .  'Por favor escribe la clave'  . '</p>');

    }
    
    if ($comentarios === '') {
    array_push($error, '<p>' .  'Por favor escribe los comentarios'  . '</p>');

    }

    if( count( $error ) > 0 ){

        foreach( $error as $err ){
            echo '<p>'.  $err .   '</p>';
        }

    }else{

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
    }
    



?>


