<?php

/**
 * @author gencyolcu
 * @copyright 2018
 */

    $connection = odbc_connect("Driver={Devart ODBC Driver for ASE};Server=DESKTOP-CHGF1UJ;Database=master;", 
                "proyecto", "16261995leff");
    
    if($connection) {
        echo "Conectado..!";
    } else {
        echo "No conectado";
    }
?>