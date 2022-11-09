<?php
    //fochero que simula modelo con datos
    class Product {
        const PRODUCTS = [
            array(1,'Cortacesped'), 
            array(2,'Pizarra'), 
            array(3,'Billar'), 
            array(4,'Dardos')
        ];

        function __construct() /*const vacio*/ {}

        //devuelve todos los productos
        public static function all()
        {
            return Product::PRODUCTS;
        }

        //devolber un producto
        public static function find($id)
        {
            return Product::PRODUCTS[$id -1];
        }
    }