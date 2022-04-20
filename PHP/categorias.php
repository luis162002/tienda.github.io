<?php
function categorias()
{

    //Incluir el documento donde tengo el objeto de hacer conexion
    require_once '../CONEXION/accesoBD.php';

    //Datos para la base de datos
    $usuario = 'root';
    $contraseña = '';
    $BD = 'PRODUCTOS';

    //Conectar a base de datos
    $db = new accesoBD($usuario, $contraseña, $BD);
    $mysqli = $db->abrirConexion();
    $mysqli->set_charset('utf8');

    // comprobar la conexion
    if ($mysqli->connect_errno) {
        die('Error de conexion: ' . $mysqli->connect_errno);
    } else {
        //Mando a traer todos los datos de la BD
        $result = $mysqli->query('SELECT * FROM CATEGORIAS;');

        //Si la base de datos no esta vacia
        if ($result->num_rows > 0) {
            //Pinto los datos
            while ($datos = $result->fetch_assoc()) {

                echo '<div>
                                <p>
                                    <img src="' . $datos['src'] . '" alt="' . $datos['alt'] . '" /> <br>
                                    <a href="' . $datos['href'] . '">' . $datos['nome'] . '</a> 
                                </p>
                            </div>';
            }
        } else {
            echo 'No hay productos...';
        }
    }
}
