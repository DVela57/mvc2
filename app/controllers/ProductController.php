<?php
    namespace App\Controllers;
    require "../product.php";
    class ProductController {

        function __construct()
        {
            print "<br>Constructor clase ProductController";
        }

        function index() {
            
            $products = \Product::all();
            require "../app/views/product.php";
            //metodo home de controller de mvc00
        }
        function show() {
            $id = $_GET["id"];
            $product = \Product::find($id);

            require "../app/views/show.php";
            //metodo show de controller de mvc00
        }

    }//fin class