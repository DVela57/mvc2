<?php
    //print "<h2>Contenido Privado</h2>";
    require_once"../controller.php";
        //recurso : controller
        //accion: metodos del controller
        //paramentros : find -> id de procucto

    $app = new Controller();
    //defino variable de peticion en la url
    //reconger el metodo que pasan como parametro
    //si no pasa ninguna cargar el metodo home
    if(isset($_GET["method"])) {
        $method = $_GET["method"];
    } else {
        $method = "home";
    }

    //2 - verificar que el metodo introducido
    // existe y es valido

    if(method_exists($app, $method)) {
        $app->$method();
    } else {
        http_response_code(404);
        die("Metodo no encontrado.");
    }
    
