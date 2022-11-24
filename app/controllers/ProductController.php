<?php
    namespace App\Controllers;
    require "../product.php";

    use Dompdf\Dompdf;
    use \App\Models\Product;
    class ProductController {

        function __construct()
        {
            print "<br>Constructor clase ProductController";
        }

        function index() {
            
            $products = Product::all();
            require "../app/views/product/index.php";   
            //metodo home de controller de mvc00
        }
        public function show($args) {
            list($id) = $args;
            $product = Product::find($id);
            require('../app/views/product/show.php');
        }

        public function pdf() {
            //$products = \Product::all();

            include_once "../vendor/autoload.php";
            $dompdf = new Dompdf();
            $dompdf->loadHtml('<h1>Hola mundo</h1><br><a href="https://parzibyte.me/blog">By Parzibyte</a>');
            $dompdf->render();
            $contenido = $dompdf->output();
            $nombreDelDocumento = "hola.pdf";
            $bytes = file_put_contents($nombreDelDocumento, $contenido);
        }
    }//fin class