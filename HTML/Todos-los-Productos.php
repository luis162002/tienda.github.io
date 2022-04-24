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
    <script src="../JS/JS.js"></script>
</head>

<body>
    <!-- <script>
        displayMenu('h');
    </script> -->
    <?php
    require_once '../PHP/menu.php';
    ?>

    <main id="todosproductos">
        <!-- Iniciamos el main -->
        <section>
            <h1>TODOS LOS PRODUCTOS</h1>
            <div class="cajas">
                <!-- Pintar las categorias desde una base d datos -->
                <?php
                //Incluir el documento donde tengo las funciones de php
                require_once '../PHP/categorias.php';

                //Llamar a la funcion de categorias
                productos('CATEGORIAS');

                ?>


            </div>
        </section>
    </main>
    <!-- Se cierra el main -->

    <footer>
    <?php
    require_once '../PHP/footer.php';
    ?>
    </footer>
    <!--End  Pie de Pag -->
</body>

</html>