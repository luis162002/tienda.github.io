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

    <main id="maris">
        <h1>Marisco</h1>
        <section>
            <article>
                <h5>Gambon</h5>
                <img src="../imagenes/productos/mariscos/Redimension_gambon.jpg" alt="Foto de gambon">
                <p>18.00€<br>
                    <a href="">Comprar</a>
                </p>
            </article>
            <article>
                <h5>Gamba pequeña</h5>
                <img src="../imagenes/productos/mariscos/Redimension_gamba.jpg" alt="Foto de gamba pequeña">
                <p>17.00€<br>
                    <a href="">Comprar</a>
                </p>
            </article>
            <article>
                <h5>Langostino</h5>
                <img src="../imagenes/productos/mariscos/Redimension_langostino.jpg" alt="Foto de langostino">
                <p>16.50€ <br>
                    <a href="">Comprar</a>
                </p>
            </article>
            <article>
                <h5>Mejillones</h5>
                <img src="../imagenes/productos/mariscos/Redimension_mejillon.jpg" alt="Foto de mejillones">
                <p>16.50€ <br>
                    <a href="">Comprar</a>
                </p>
            </article>
            <article>
                <h5>Pulpo</h5>
                <img src="../imagenes/productos/mariscos/Redimension_pulpo.jpg" alt="Imagen de pulpo">
                <p>12.50€ <br>
                    <a href="">Comprar</a>
                </p>
            </article>
            <article>
                <h5>Vieira</h5>
                <img src="../imagenes/productos/mariscos/Redimension_VIEIRA.jpg" alt="Foto de vieira">
                <p>10.50€ <br>
                    <a href="">Comprar</a>
                </p>
            </article>
        </section>
    </main>
    <footer>
        <!-- Pie de Pag -->
        <script>
            footer();
          </script>
    </footer>
    <!--End  Pie de Pag -->
</body>

</html>