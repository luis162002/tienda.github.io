<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!--<!DOCTYPE html>
<html>-->
<!--

-->

<head>
    <title>Proyecto Web</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="icon" href="../imagenes/cabecera/pulpo.png" type="image/png">
    <link href="../CSS/normalize.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="../CSS/proyecto.css" rel="stylesheet" type="text/css" media="screen" />
    <link rel="stylesheet" href="../CSS/menuIndex.css">
</head>

<body>
    <?php
    require_once '../PHP/menu.php';
    ?>

    <main id="boller">
        <h1>Bolleria</h1>
        <section>
             <?php
                    //Incluir el documento donde tengo las funciones de php
                    require_once '../PHP/categorias.php';

                    //Llamar a la funcion de categorias
                    productos('bolleria');

                    ?>
        </section>
    </main>
    <footer>
        <!-- Pie de Pag -->
        <script>
            footer();
        </script>
    </footer>
    <!--End  Pie de Pag -->
      <!-- Llamo a los js -->
    <!-- <script src="../JS/JS.js"></script> -->
    <script src="../JS/menuIndex.js"></script>
</body>

</html>