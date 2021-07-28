<?php




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


                <form action="validar.php" method="POST" class="col-full-12">

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

                    </select  >

                    <input type="radio" name="estado" id="casado" value="casado">
                    <input type="radio" name="estado" id="soltero" value="soltero">
                    <input type="radio" name="estado" id="viudo" value="viudo">

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