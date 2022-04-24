<!-- INICIO código medidor usuarios online miarroba.com  -->
<script type="text/javascript" src="https://online.miarroba.com/ver.php?id=13682200"></script>
<!-- FIN código medidor usuarios online miarroba.com  -->

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
    <link rel="icon" href="imagenes/cabecera/pulpo.png" type="image/png" />
    <link
      href="CSS/normalize.css"
      rel="stylesheet"
      type="text/css"
      media="screen"
    />
    <link
      href="CSS/proyecto.css"
      rel="stylesheet"
      type="text/css"
      media="screen"
    />
    <script src="JS/JS.js"></script>
  </head>

  <body>
    <?php
    require_once './PHP/menuIndex.php';
    ?>

    <main id="principal">
      <!-- Iniciamos el main -->

      <section id="primera-seccion">
        <div id="oferta">
          <p>
            OFERTA POR TIEMPO LIMITADO<br />
            Special Edition<br />
            GAMBA BLANCA 90/100<br />
            ESTUCHE 1 KG<br />
            30€ <br />
            Comprela ahora con un 20% de descuento. <br />
            Utilice este codigo Off20 <br />
            <a href="HTML/Todos-los-Productos.html">Comprar Ahora</a>
          </p>
        </div>
      </section>
      <section id="segunda-seccion">
        <div class="cajas_peques">
          <p>Repartimos a Nivel Gallego(Galicia)</p>
          <img
            src="imagenes/image/gal.png"
            id="galicia"
            alt="NivelGalicia"
            class="imagenes-sec2"
          />
        </div>
        <div class="cajas_peques">
          <p>Calidad 100% Extrema, Garntizada</p>
          <img
            src="imagenes/image/best.png"
            id="Calidad"
            alt="ExelenteCalidad"
            class="imagenes-sec2"
          />
        </div>
        <div class="cajas_peques">
          <p>Grandes Ofertas, Para Particulares/Empresas</p>
          <img
            src="imagenes/image/oferta.png"
            id="Descuentos"
            alt="ExelentesDescuentos"
            class="imagenes-sec2"
          />
        </div>
      </section>
    </main>
    <!-- Se cierra el main -->
    <aside>
      <nav class="lateral">
        <h2>Categorias</h2>
        <ul class="navegacion-lateral">
          <li><a href="HTML/bolleria.html">Galletas/Pan</a></li>
          <li><a href="HTML/carnes.html">Carnes</a></li>
          <li><a href="HTML/mariscos.html">Marisco</a></li>
          <li><a href="HTML/aceites.html">Aceites</a></li>
          <li><a href="HTML/lacteos.html">Lacteos</a></li>
        </ul>
      </nav>
    </aside>
    <!-- Pie de Pag -->
    <footer>
    <?php
    require_once './PHP/footer.php';
    ?>
    </footer>
    <!--End  Pie de Pag -->
  </body>
</html>
