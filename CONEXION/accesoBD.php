<?php
/** Xestión do acceso a bases de datos no servidor local empregando mysqli
**/
class accesoBD
{
    private $usuario;
    private $contrasinal;
    private $bd;

    public function __construct($usuario, $contrasinal, $bd)
    {
        $this->usuario = $usuario;
        $this->contrasinal = $contrasinal;
        $this->bd = $bd;
    }

    /** Método para establecer a conexión cunha base de datos **/
    public function abrirConexion()
    {
        $con = new mysqli('localhost', $this->usuario, $this->contrasinal, $this->bd);
        if ($con->connect_error) {
            echo "Erro na conexión a base de datos $this->bd:
 ($con->connect_errno) $con->connect_error\n";
            exit;
        }

        return $con;
    }

    /** Método para pechar a conexión cunha base de datos **/
    public function pecharConexion($con)
    {
        $con->close();
    }
}
