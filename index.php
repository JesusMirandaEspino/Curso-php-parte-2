<?php


if(isset($_POST['nombre'] ) ){

    $nombre = $_POST['nombre'];
    $pass = $_POST['pass'];
    $comentarios = $_POST['comentarios'];
    $idioma = $_POST['idioma'];
    $estado = $_POST['estado'];
    $pasatiempos = $_POST['hobbies'];
    $comidas = $_POST['comidas'];

    $salto = '</br>';


    $error = [];

    if ($nombre === '') {
        array_push($error, '<p>' .  'Por favor escribe el nombre'  . '</p>');
    }

    if ($pass === '') {
        array_push($error, '<p>' .  'Por favor escribe la clave'  . '</p>');
    }

    if ($comentarios === '') {
        array_push($error, '<p>' .  'Por favor escribe los comentarios'  . '</p>');
    }

    if( isset($pasatiempos ) ){
        if( count($pasatiempos) == 0 ){
            array_push($error, '<p>' .  'Por escoge algun pasatiempo'  . '</p>');
        }
    }

    if (count($error) > 0) {

        foreach ($error as $err) {
            echo '<p>' .  $err .   '</p>';
        }
    } else {

        echo 'Bienvenido ' .  $nombre . $salto;
        echo 'Password jeje: ' .  $pass . $salto;
        echo 'Comentarios ' .  $comentarios . $salto;
        echo 'Idioma ' .  $idioma . $salto;
        echo 'Estado ' .  $estado . $salto;



        foreach ($pasatiempos as $pasatiempo) {
            echo 'Pasatiempo ' .  $pasatiempo . $salto;
        }

        foreach ($comidas as $comida) {
            echo 'Comida: ' .  $comida . $salto;
        }
    }
    


}



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


        <section class="fila">

            <div class="contenedor1">


                <form action="index.php" method="POST" class="col-full-12">

                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre">

                    <label for="pass">Password</label>s
                    <input type="text" name="pass" id="pass">
                    <label for="pass">Comentarios</label>
                    <textarea name="comentarios" id="comentarios"></textarea>

                    <select id="idioma" name="idioma">

                        <option value="es">Español</option>
                        <option value="in">Ingles</option>
                        <option value="ja">Japones</option>

                    </select>

                    <input type="radio" name="estado" id="casado" value="casado">
                    <input type="radio" name="estado" id="soltero" value="soltero">
                    <input type="radio" name="estado" id="viudo" value="viudo">

                    <label for=""> <input type="checkbox" name="hobbies[]" value="leer" id="leer"> Leer</label>
                    <label for=""> <input type="checkbox" name="hobbies[]" value="programar" id="programar"> programar</label>
                    <label for=""> <input type="checkbox" name="hobbies[]" value="musica" id="musica"> musica</label>
                    <label for=""> <input type="checkbox" name="hobbies[]" value="peliculas" id="peliculas"> peliculas</label>


                    <select multiple="multiple" name="comidas[]" >

                        <option value="pastel">Pastel</option>
                        <option value="cereal">cereal</option>
                        <option value="bistek">bistek</option>
                        <option value="pescado">pescado</option>
                        <option value="pollo">pollo</option>


                    </select>

                    <input type="submit" value="Enviar datos">


                </form>


            </div>

        </section>


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