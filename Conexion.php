<?php

/**
 * @author gencyolcu
 * @copyright 2018
 */

class Conexion {
    public $connection;
    public $HOST = "DESKTOP-CHGF1UJ";
    
    function conectar($database, $usuario, $contrasena) {
        error_reporting(0);
        $this->connection = odbc_connect("Driver={Devart ODBC Driver for ASE};Server=DESKTOP-CHGF1UJ;Database=".$database.";", 
                $usuario, $contrasena);
        if($this->connection) {
            return true;
        }
        else {
            echo "<script>alert('No se ha podido establecer la conexión')</script>";
            return false;
        }
    }
}
?>