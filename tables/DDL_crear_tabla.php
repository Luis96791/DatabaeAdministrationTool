<?php

/**
 * @author gencyolcu
 * @copyright 2018
 */
    include 'C:\xampp\htdocs\ADMIN\Conexion.php';
    include 'C:\xampp\htdocs\ADMIN\Scripts.php';
            
    $script = new Script();
     
    $script->setDatabase($_GET['database']);
    $usuario = $_GET['usuario'];
    $contrasena = $_GET['contrasena'];
    $script->setNombreTabla($_GET['nombre_tabla']);
    $script->nuevaTablaDDL();        
?>
<html>
    <head>
        <title>Vista DDL</title>
        <h1 align="center">Vista DDL: <?php echo $script->getNombreTabla()?></h1>
        
        <style>
            textarea {
                width: 600; 
                height: 300;
            }
        </style>
    </head>
    
    
    <body>
        <form method="get" action="http://localhost:8080/ADMIN/tables/DDL_crear_tabla.php/?usuario=<?php echo $usuario;?>&
                                contrasena=<?php echo $contrasena;?>&
                                database=<?php echo $script->getDatabase();?>&
                                nombre_tabla=<?php echo $script->getNombreTabla();?>">
            <textarea width="500" height="250"><?php echo $script->getSql();?></textarea>
            <br><br>
            <input type="hidden" name="database" value="<?php echo $script->getDatabase()?>"/>
            <input type="hidden" name="usuario" value="<?php echo $usuario?>"/>
            <input type="hidden" name="contrasena" value="<?php echo $contrasena?>"/>
            <input type="hidden" name="nombre_tabla" value="<?php echo $script->getNombreTabla()?>"/>
            
            <input type="submit" name="ejecutar" value="Ejecutar"/>    
        </form>
        
    </body>
</html>

<?php 
    if(isset($_GET["ejecutar"])) {
        $conexion = new Conexion();
        $conexion->conectar($script->getDatabase(), $usuario, $contrasena);                        
        
        $result = odbc_exec($conexion->connection, $script->getSql());
        if(!$result) {
            echo "<script>alert('No se ha podido crear la tabla ".$script->getNombreTabla()."')</script>";
            echo odbc_error($conexion->connection).": ".odbc_errormsg($conexion->connection);
        } else {
            echo "<script>alert('Se ha creado la tabla ".$script->getNombreTabla()."')</script>";
                    
        }   
    }
?>