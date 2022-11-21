<?php 
    class Login {

        protected $nombreusu = null;
        protected $password = null;
        
        public static function all() {
            $dsn = "mysql:host=db;dbname=demo";
            $usuario = "dbuser";
            $password = "secret";

            try {
                $db = new PDO($dsn, $usuario, $password);
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = "SELECT * FROM credenciales";
                $sentencia = $db->prepare($sql);
                $sentencia->setFetchMode(PDO::FETCH_CLASS, "Login");

                $sentencia->execute();
              /*  while($obj = $sentencia->fetch()) {
                    print "<br>nombre: " . $obj->nombreusu .
                     " contraseña: " . $obj->password ;
                }*/
                $credenciales = $sentencia->fetchAll(PDO::FETCH_CLASS, "Login");
                foreach ($credenciales as $credencial) {
                    print "<br>nombre: ". $credencial->nombreusu.
                     " contraseña: ". $credencial->password ;
                }

            } catch (PDOException $e) {
                print "<br>Error conexion" . $e->getMessage();
            }
        }
    }

    print "<h2>Login</h2>";
    Login::all();