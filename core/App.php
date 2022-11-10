<?php

    class App {
        function __construct() {
            if (isset($_GET["url"]) && !empty($_GET["url"])) {
                $url = $_GET["url"];
            } else {
                $url = "home";
            }
            $arguments = explode('/', trim($url,'/'));
            $controllerName = array_shift($arguments);
            $controllerName = ucwords($controllerName)
            . "Controller";
            if(count($arguments) > 0) {
                $method = array_shift($arguments);
                
            } else {
                $method = "index";
            }
            $file = "app/controllers/" .
             $controllerName . ".php";
            if (file_exists($file)) {
                require_once $file;
            } else {
                http_response_code(404);
                die("No encotrado");
            }

            $controllerObject = new $controllerName();
            if (method_exists($controllerObject, $method)) {
                $controllerObject->$method($arguments);
            } else {
                http_response_code(404);
                die("No encotrado");
            }


        }//fin construction
    }//fin class