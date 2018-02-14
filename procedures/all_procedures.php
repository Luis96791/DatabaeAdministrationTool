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
    
    $result = odbc_procedures($conexion->connection);

    echo "<table border = 1 cellspacing = 1 cellpadding = 1>
    		<tr>
                <th></th>
    			<th>PROCEDURE_QUALIFIER</th>
    			<th>PROCEDURE_OWNER</th>
    			<th>PROCEDURE_NAME</th>
            </tr>";
    
    $procedures = array();
    $contador = 0;
    while(odbc_fetch_row($result)){
        if(odbc_result($result, "PROCEDURE_TYPE")) {
                $contador++;
            	echo "
            		<tr>
                        <td>$contador</td>
            			<td>".odbc_result($result, 1)."</td>
            			<td>".odbc_result($result, 2)."</td>
            			<td>".odbc_result($result, 3)."</td>
            		</tr>";
        }
    }

    echo "</table>";
?>