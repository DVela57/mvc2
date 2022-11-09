<?php 

    require_once "product.php";
    class Controller {
        function __construct() {
            
        }
        /* 
        recoje todos los productos
        invoca una vista de todos los productos
        */
        public function home() {
            $products = Product::all();
            require "views/home.php";
        }
        /*
        Muestra un producto en particular
        del identificador que le pasemos
        llama a una vista de un producto*/
        public function show() {
            $id = $_GET["id"];
            $product = Product::find($id);
            require "views/show.php";
        }
    } //fin