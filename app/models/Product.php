<?php
namespace App\Models;

require_once '../core/Model.php';

use PDO;
use Core\Model;


/**
*
*/
class Product extends Model
{
    public static function all(){
        $db = Product::db();
        $statement = $db->query('SELECT * FROM products');
        $products = $statement->fetchAll(PDO::FETCH_CLASS, Product::class);
        return $products;
     }//TODO }
    public static function find($id){
        $db = Product::db();
        $stmt = $db->prepare('SELECT * FROM products WHERE id=:id');
        $stmt ->execute(array(':id' => $id));
        $stmt ->setFetchMode(PDO::FETCH_CLASS, Product::class);
        $product = $stmt ->fetch(PDO::FETCH_CLASS);
        return $product;
     }//TODO }
    public function insert(){ }//TODO }
    public function delete(){ }//TODO }
    public function save(){ }//TODO }
}