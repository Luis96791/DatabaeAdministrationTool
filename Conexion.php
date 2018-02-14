<?php

/**
 * @author gencyolcu
 * @copyright 2018
 */

class Conexion {
       
    function conectar($database, $usuario, $contrasena) {
        error_reporting(0);
        $connection = odbc_connect("Driver={Devart ODBC Driver for ASE};Server=DESKTOP-CHGF1UJ;Database=".$database.";", 
                $usuario, $contrasena);
        if($connection) {
            return true;
        }
        else {
            echo "<script>alert('No se ha podido establecer la conexión')</script>";
            return false;
        }
    }
}
?>