
<html>
    <head>
        <title>Menu Principal</title>
        <meta charset="utf-8"/>
        <link href="style/css/layout.css" rel="stylesheet" type="text/css"/>
        <link href="style/css/menu.css" rel="stylesheet" type="text/css"/>
                
    </head>
    <body>
    <?php 
        $usuario = $_POST['usuario'];
        $contrasena = $_POST['contrasena'];
        $database = $_POST['database'];
    ?>
        <header>
            <a class="stuts"></a>
        </header>
        
        <form method="GET">
            <div class="contaier">
                <ul id="nav">
                    <li>
                        <a class="hsubs" href="#">Tablas</a>
                        <ul class="subs">
                            <li>
                                <a href="http://localhost:8080/ADMIN/tables/nueva_tabla.php/?usuario=<?php echo $usuario;?>&
                                contrasena=<?php echo $contrasena;?>&
                                database=<?php echo $database;?>">
                                <input type="hidden"/>Nueva Tablas</a>
                            </li>
                            <li><a href="#">Editar Tabla</a></li>
                            <li>
                                <a href="http://localhost:8080/ADMIN/tables/drop_table.php/?usuario=<?php echo $usuario;?>&
                                contrasena=<?php echo $contrasena;?>&
                                database=<?php echo $database;?>">
                                <input type="hidden"/>Eliminar Tabla</a>
                            </li>
                            <li>
                                <a href="http://localhost:8080/ADMIN/tables/all_tables.php/?usuario=<?php echo $usuario;?>&
                                contrasena=<?php echo $contrasena;?>&
                                database=<?php echo $database;?>">
                                <input type="hidden"/>Listar Tablas</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li>
                        <a class="hsubs" href="#">Indices</a>
                        <ul class="subs">
                            <li>
                                <a href="http://localhost:8080/ADMIN/indexes/new_index.php/?usuario=<?php echo $usuario;?>&
                                contrasena=<?php echo $contrasena;?>&
                                database=<?php echo $database;?>">
                                <input type="hidden"/>Nuevo Indice</a>
                            </li>
                            <li><a href="#">Editar Indice</a></li>
                            <li>
                                <a href="http://localhost:8080/ADMIN/indexes/drop_index.php/?usuario=<?php echo $usuario;?>&
                                contrasena=<?php echo $contrasena;?>&
                                database=<?php echo $database;?>">
                                <input type="hidden"/>Eliminar Indice</a>
                            </li>
                            <li>
                                <a href="http://localhost:8080/ADMIN/indexes/all_indexes.php/?usuario=<?php echo $usuario;?>&
                                contrasena=<?php echo $contrasena;?>&
                                database=<?php echo $database;?>">
                                <input type="hidden"/>Listar Indices</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li>
                        <a class="hsubs" href="#">Procedimientos Almacenados</a>
                        <ul class="subs">
                            <li>
                                <a href="http://localhost:8080/ADMIN/procedures/new_procedure.php/?usuario=<?php echo $usuario;?>&
                                contrasena=<?php echo $contrasena;?>&
                                database=<?php echo $database;?>">
                                <input type="hidden"/>Nuevo Procedimiento</a>
                            </li>
                            <li><a href="#">Editar Procedimiento</a></li>
                            <li>
                                <a href="http://localhost:8080/ADMIN/procedures/drop_procedure.php/?usuario=<?php echo $usuario;?>&
                                contrasena=<?php echo $contrasena;?>&
                                database=<?php echo $database;?>">
                                <input type="hidden"/>Eliminar Procedimiento</a>
                            </li>
                            <li>
                                <a href="http://localhost:8080/ADMIN/procedures/all_procedures.php/?usuario=<?php echo $usuario;?>&
                                contrasena=<?php echo $contrasena;?>&
                                database=<?php echo $database;?>">
                                <input type="hidden"/>Listar Procedimientos</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li>
                        <a class="hsubs" href="#">Vistas</a>
                        <ul class="subs">
                            <li>
                                <a href="http://localhost:8080/ADMIN/views/new_view.php/?usuario=<?php echo $usuario;?>&
                                contrasena=<?php echo $contrasena;?>&
                                database=<?php echo $database;?>">
                                <input type="hidden"/>Nueva Vista</a>
                            </li>
                            <li><a href="#">Editar Vista</a></li>
                            <li>
                                <a href="http://localhost:8080/ADMIN/views/drop_view.php/?usuario=<?php echo $usuario;?>&
                                contrasena=<?php echo $contrasena;?>&
                                database=<?php echo $database;?>">
                                <input type="hidden"/>Eliminar Vista</a>
                            </li>
                            <li>
                                <a href="http://localhost:8080/ADMIN/views/all_views.php/?usuario=<?php echo $usuario;?>&
                                contrasena=<?php echo $contrasena;?>&
                                database=<?php echo $database;?>">
                                <input type="hidden"/>Listar Vistas</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li>
                        <a class="hsubs" href="#">Triggers</a>
                        <ul class="subs">
                            <li>
                                <a href="http://localhost:8080/ADMIN/triggers/new_trigger.php/?usuario=<?php echo $usuario;?>&
                                contrasena=<?php echo $contrasena;?>&
                                database=<?php echo $database;?>">
                                <input type="hidden"/>Nuevo Trigger</a>
                            </li>
                            <li><a href="#">Editar Trigger</a></li>
                            <li>
                                <a href="http://localhost:8080/ADMIN/triggers/drop_trigger.php/?usuario=<?php echo $usuario;?>&
                                contrasena=<?php echo $contrasena;?>&
                                database=<?php echo $database;?>">
                                <input type="hidden"/>Eliminar Trigger</a>
                            </li>
                            <li>
                                <a href="http://localhost:8080/ADMIN/triggers/all_triggers.php/?usuario=<?php echo $usuario;?>&
                                contrasena=<?php echo $contrasena;?>&
                                database=<?php echo $database;?>">
                                <input type="hidden"/>Listar Triggers</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li>
                        <a class="hsubs" href="#">Funciones</a>
                        <ul class="subs">
                            <li>
                                <a href="http://localhost:8080/ADMIN/functions/new_function.php/?usuario=<?php echo $usuario;?>&
                                contrasena=<?php echo $contrasena;?>&
                                database=<?php echo $database;?>">
                                <input type="hidden"/>Nueva Funcion</a>
                            </li>
                            <li><a href="#">Editar Funcion</a></li>
                            <li>
                                <a href="http://localhost:8080/ADMIN/functions/drop_function.php/?usuario=<?php echo $usuario;?>&
                                contrasena=<?php echo $contrasena;?>&
                                database=<?php echo $database;?>">
                                <input type="hidden"/>Eliminar Funcion</a>
                            </li>
                            <li>
                                <a href="http://localhost:8080/ADMIN/functions/all_functions.php/?usuario=<?php echo $usuario;?>&
                                contrasena=<?php echo $contrasena;?>&
                                database=<?php echo $database;?>">
                                <input type="hidden"/>Listar Funciones</a>
                            </li>
                        </ul>
                    </li>
                                                            
                    <div id="lavalmap"></div>
                </ul>
            </div>
            
        </form>
        <script src="http://code.jquery/jquery-1.11.0.min.js"></script>
        <script src="http://www.script-tutorials.com/assets/ads.js"></script>
    </body>
    
</html>
