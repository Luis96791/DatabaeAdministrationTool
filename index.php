
<html>
    <head>
        <meta charset="utf-8"/>
        <link href="style/css/layout.css" rel="stylesheet" type="text/css"/>
        <link href="style/css/menu.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <header>
            <a class="stuts"></a>
        </header>
        <?php 
            $usuario = $_POST['usuario'];
            $contrasena = $_POST['contrasena'];
            $database = $_POST['database'];
        ?>
        <form method="POST" action="all_tables.php">
        
            <div class="contaier">
                <ul id="nav">
                    <li>
                        <a class="hsubs" href="#">Tablas</a>
                        <ul class="subs">
                            <li><a href="#">Crear Tabla</a></li>
                            <li><a href="#">Editar Tabla</a></li>
                            <li><a href="#">Eliminar Tabla</a></li>
                            <li><a href="all_tables.php">Listar Tablas</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="hsubs" href="#">Funciones</a>
                        <ul class="subs">
                            <li><a href="#">Crear Funcion</a></li>
                            <li><a href="#">Editar Funcion</a></li>
                            <li><a href="#">Eliminar Funcion</a></li>
                            <li><a href="#">Listar Funciones</a></li>
                        </ul>
                    </li>
                    <div id="lavalmap"></div>
                    #AQUI DEBE SEGUIR
                </ul>
            </div>
        </form>
        <script src="http://code.jquery/jquery-1.11.0.min.js"></script>
        <script src="http://www.script-tutorials.com/assets/ads.js"></script>
    </body>
    
</html>
