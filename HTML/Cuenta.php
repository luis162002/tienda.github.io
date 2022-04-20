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
<?php
    require_once '../PHP/menu.php';
    ?>

    <main id="cuenta">
        <form action="cuentas.html" method="get">

            <fieldset>
                <legend>Identificate</legend>
                <p>
                    <label for="nombre">Nombre </label>
                    <input obligatorio="on" type="text" name="nombre" id="nombre" maxlength=10 />
                </p>

                <p>
                    <label for="apellidos">Apellidos</label>
                    <input obligatorio="on" type="text" name="apellidos" id="apellidos" maxlength=50 />
                </p>

                <p>
                    <label>Provincia </label>

                    <select id="provincia" name="provincia">

            <option value="" selected="selected">- selecciona -</option>

            <option value="Lugo">- Lugo -</option>

            <option value="Meira">- Meira -</option>

            <option value="Foz">- Foz -</option>

            <option value="Barreiros">- Barreiros -</option>
          </select>
                </p>
                <p>
                    <label for="correo">Correo electronico</label>
                    <input obligatorio="on" type="email" name="email" id="email" maxlength=50 />
                </p>

            </fieldset>

            <fieldset>
                <legend>Datos de la cuenta</legend>
                <p>
                    <label for="nombre">Nombre de Usuario(10 Max)</label>
                    <input obligatorio="on" type="text" name="nombre_usuario" id="nombre_usuario" maxlength=10 />
                </p>

                <p>
                    <label for="contrasinal">Contraseña</label>
                    <input type="password" name="contraseña1" id="contraseña1" size="10" maxlength="10" />
                </p>

                <p>
                    <label for="contrasinal">Repite la Contraseña</label>
                    <input type="password" name="contraseña2" id="contraseña2" size="10" maxlength="10" />

                </p>

            </fieldset>
            <fieldset>
                <p></p>
                <input type="reset" name="limpar" value="Borrar datos" />
                <input type="button" name="crear" value="Crear Cuenta" />
            </fieldset>
        </form>
    </main>
    <footer>
        <!-- Pie de Pag -->
        <?php
    require_once '../PHP/footer.php';
    ?>
    </footer>
    <!--End  Pie de Pag -->
</body>

</html>