<?php
    namespace App\Controllers;
    include "../product.php";
    class ProductController {

        function __construct()
        {
            print "<br>Constructor clase ProductController";
        }

        function index() {
            
            $products = \Product::all();
            require "../views/home.php";
            //metodo home de controller de mvc00
        }
        function show() {
            $id = $_GET["id"];
            $product = \product::find($id);

            require "../views/show.php";
            //metodo show de controller de mvc00
        }

    }//fin class