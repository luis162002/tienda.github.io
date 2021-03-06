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

    <main id="lact">
        <h1>Lacteos</h1>
        <section>
            <article>
                <h5>Leche Feiraco Desnatada</h5>
                <img src="../imagenes/productos/lacteos/Redimencion_desnatada.jpg" alt="Foto de leche desnatada">
                <p>8.00€<br>
                    <a href="">Comprar</a>
                </p>
            </article>
            <article>
                <h5>Leche Feiraco Entera</h5>
                <img src="../imagenes/productos/lacteos/Redimencion_entera.jpg" alt="Foto de leche Entera">
                <p>8.00€<br>
                    <a href="">Comprar</a>
                </p>
            </article>
            <article>
                <h5>Nata para montar</h5>
                <img src="../imagenes/productos/lacteos/Redimencion_nata.jpg" alt="Foto de nata para montar">
                <p>6.00€<br>
                    <a href="">Comprar</a>
                </p>
            </article>
            <article>
                <h5>Leche Feiraco semidesnatada</h5>
                <img src="../imagenes/productos/lacteos/Redimencion_semi.jpg" alt="Foto de leche semidesnatada">
                <p>8.00€<br>
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