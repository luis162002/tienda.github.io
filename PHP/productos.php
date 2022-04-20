<?php
function productos($enviado)
{

    //Incluir el documento donde tengo el objeto de hacer conexion
    require_once '../CONEXION/accesoBD.php';

    //Datos para la base de datos
    $usuario = 'root';
    $contraseña = '';
    $BD = 'PRODUCTOS';
    $tabla = $enviado;

    //Conectar a base de datos
    $db = new accesoBD($usuario, $contraseña, $BD);
    $mysqli = $db->abrirConexion();
    $mysqli->set_charset('utf8');

    // comprobar la conexion
    if ($mysqli->connect_errno) {
        die('Error de conexion: ' . $mysqli->connect_errno);
    } else {
        //Mando a traer todos los datos de la BD
        $result = $mysqli->query('SELECT * FROM '.$tabla.';');

        //Si la base de datos no esta vacia
        if ($result->num_rows > 0) {
            //Pinto los datos
            while ($datos = $result->fetch_assoc()) {

                echo 'Tengo que hacer lo de los productos...(lacteos,carnes,etc)';
            }
        } else {
            echo 'No hay productos...';
        }
    }
}
