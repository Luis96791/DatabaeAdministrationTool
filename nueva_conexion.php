<?php
    include 'Conexion.php';
    $usuario = $contrasena = $database = "";
?>

<html>
    <head>
        <title>Acceder</title>
    </head>
    
    <body>
        <?php
            error_reporting(0); 
            $usuario = test_input($_POST["usuario"]);
            $contrasena = test_input($_POST["contrasena"]);
            $database = test_input($_POST["database"]);
            
            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
        ?>
        <?php
            if(!empty($usuario) || !empty($contrasena) || !empty($database)){
                $conexion = new Conexion();
                if($conexion->conectar($database, $usuario, $contrasena)) {
                    header("HTTP/1.1 302 Moved Temporarily");
                    header("Location: index.php");
                }    
            }
        ?>
        <form method="POST" action="index.php">
            <div>
                <label>Usuario:  
                    <input type="text" name="usuario" value="<?php echo $usuario;?>"/>
                </label>
            </div>
            <br><br>
            <div>
                <label>Contraseña:
                    <input type="password" name="contrasena" value="<?php echo $contrasena;?>"/>
                </label>
            </div>
            <br><br>
            <div>
                <label>Base de Datos:
                    <select name="database">
                        <option value="<?php echo $database="master"?>">master</option>
                        <option value="<?php echo $database="model"?>">model</option>
                        <option value="<?php echo $database="pubs2"?>">pubs2</option>
                        <option value="<?php echo $database="pubs3"?>">pubs3</option>
                        <option value="<?php echo $database="sybpcidb"?>">sybpcidb</option>
                        <option value="<?php echo $database="sybsystemdb"?>">sybsystemdb</option>
                        <option value="<?php echo $database="sybsystemprocs"?>">sybsystemprocs</option>
                        <option value="<?php echo $database="tempdb"?>">tempdb</option>
                        <option value="<?php echo $database="test"?>">test</option>
                    </select>
                    <!--<input type="text" name="database" value="<?php echo $database;?>"/>-->
                </label>
            </div>
            <br><br>
            <input type="submit" name="submit" value="Submit"/>
        </form>
    </body>
     
</html>
