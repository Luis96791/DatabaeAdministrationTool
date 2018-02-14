<?php

/**
 * @author gencyolcu
 * @copyright 2018
 */

    include 'C:\xampp\htdocs\ADMIN\Conexion.php';
    
    $usuario = $_GET['usuario'];
    $contrasena = $_GET['contrasena'];
    $database = $_GET['database'];
    
    $conexion = new Conexion();
    $conexion->conectar($database, $usuario, $contrasena);
    
    $result = odbc_exec($conexion->connection, "select * from sysindexes");

    echo "<table border = 1 cellspacing = 1 cellpadding = 1>
    		<tr>
                <th></th>
    			<th>NAME</th>
            </tr>";
    
    $indexes = array();
    $contador = 0;
    while(odbc_fetch_row($result)){
        $contador++;
    	echo "
    		<tr>
                <td>$contador</td>
    			<td>".odbc_result($result, 1)."</td>
    		</tr>";
    }

    echo "</table>";

?>