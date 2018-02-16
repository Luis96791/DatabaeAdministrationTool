<?php

/**
 * @author gencyolcu
 * @copyright 2018
 */
    include 'C:\xampp\htdocs\ADMIN\Conexion.php';
    include 'C:\xampp\htdocs\ADMIN\Scripts.php';
    
    $script = new Script();
    
    $usuario = $_GET['usuario'];
    $contrasena = $_GET['contrasena'];
    $script->setDatabase($_GET['database']);
    $script->dropIndexDDL();   
    
    $_sql = "";
?>
<html>
    <head>
        <title>Eliminar Indice</title>
        <h1 align="center">Eliminar Indice
            <h3>Vista DDL</h3>
        </h1>
        
        <style>
            h1, h3 {
                align: "center";    
            }
            
            textarea {
                width: 400; 
                height: 200;
            }
        </style>
        
    </head>
    <body>
        <form method="get" action="http://localhost:8080/ADMIN/indexes/drop_index.php/?usuario=<?php echo $usuario;?>&
                                contrasena=<?php echo $contrasena;?>&
                                database=<?php echo $script->getDatabase();?>">
            <?php $_sql = $script->getSql() ?>
            <textarea name="nuevo_sql"><?php echo $_sql?></textarea>
            
            
            <input type="hidden" name="database" value="<?php echo $script->getDatabase()?>"/>
            <input type="hidden" name="usuario" value="<?php echo $usuario?>"/>
            <input type="hidden" name="contrasena" value="<?php echo $contrasena?>"/>
            
            <br />
            <input type="submit" name="ejecutar" value="Ejecutar"/>
        </form>
    </body>
</html>

<?php 
    
    $conexion = new Conexion();
    $conexion->conectar($script->getDatabase(), $usuario, $contrasena); 
    
    $result1 = odbc_tables($conexion->connection);
        
    $tables = array();
    echo "<label>Seleccione una Tabla: ";
        echo "<select name=table>";
    while(odbc_fetch_row($result1)){
        if(odbc_result($result1, "TABLE_TYPE")=="TABLE") {
            	echo "
                        <option value=".odbc_result($result1, 3).">".odbc_result($result1, 3)."</option>
                    ";
        }
    }
        echo "</select>";
    echo "</label>";

    if(isset($_GET["ejecutar"])) {
        $_sql = $_GET['nuevo_sql'];
                               
        $result = odbc_exec($conexion->connection, $_sql);
        if(!$result) {
            echo "<script>alert('No se ha podido eliminar el Indice..!')</script>";
            echo    odbc_error($conexion->connection).": ".odbc_errormsg($conexion->connection);
        } else {
            echo "<script>alert('Se ha eliminado el Indice..!')</script>";
        }
        odbc_close($conexion->connection);   
    }
?>