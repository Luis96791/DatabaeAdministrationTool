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
    
    $result = odbc_exec($conexion->connection, "select * from sysobjects where type = 'TR'");
    
    echo "<table border = 1 cellspacing = 1 cellpadding = 1>
    		<tr>
                <th></th>
    			<th>TRIGGER_NAME</th>
    			<th>TYPE</th>
            </tr>";
    
    $triggers = array();
    $contador = 0;
    while(odbc_fetch_row($result)){
        $contador++;
        echo "
    		<tr>
                <td>$contador</td>
    			<td>".odbc_result($result, 1)."</td>
    			<td>".odbc_result($result, 4)."</td>
    		</tr>";
    }
    echo "</table>";
?>