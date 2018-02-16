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
    $script->newProcedureDDL();   
    
    $_sql = "";
?>
<html>
    <head>
        <title>Nuevo Procedimiento</title>
        <h1 align="center">Crear Procedimiento
            <h3>Vista DDL</h3>
        </h1>
        
        <style>
            h1, h3 {
                align: "center";    
            }
            
            textarea {
                width: 600; 
                height: 300;
            }
        </style>
        
    </head>
    <body>
        <form method="get" action="http://localhost:8080/ADMIN/procedures/new_procedure.php/?usuario=<?php echo $usuario;?>&
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
    if(isset($_GET["ejecutar"])) {
        $_sql = $_GET['nuevo_sql'];
        $conexion = new Conexion();
        $conexion->conectar($script->getDatabase(), $usuario, $contrasena);                        
        
        $result = odbc_exec($conexion->connection, $_sql);
        if(!$result) {
            echo "<script>alert('No se ha podido crear el procedimiento..!')</script>";
            echo    odbc_error($conexion->connection).": ".odbc_errormsg($conexion->connection);
        } else {
            echo "<script>alert('Se ha creado el nuevo Procedimiento..!')</script>";
        }   
    }
?>
