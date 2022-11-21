<?php 
    namespace Core;

    class Model
    {
       protected static function db()
        {
            $dsn = 'mysql:dbname=mvc;host=db';
            $usuario = 'root';
            $contraseña = 'password';
            try {
                $db = new \PDO($dsn, $usuario, $contraseña);
                $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            } catch (\PDOException $e) {
                echo 'Falló la conexión: ' . $e->getMessage();
            }
            return $db;
        }
    }