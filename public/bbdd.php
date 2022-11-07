<?php
    //mysql:dbname=<nombre_bbdd>;host=<ip|nombre>;
    $dsn = "mysql:dbname=demo;host=db";
    $usuario = "dbuser";
    $clave = "secret";

    
    try {
        $bd = new PDO($dsn,$usuario,$clave);
        print "<br>Conexion satisfactoria";
        $sql = "select nombreusu,password from credenciales";
        $registros = $bd->query($sql);
        if ($registros->rowCount() > 0) {
            print "<br>Numero de registros debueltos: " . $registros->rowCount();
            foreach($registros as $fila) {
                print "<br>Nombre de usuario: " . $fila['nombreusu'] .
                    " <br>Password: " . $fila['password'] . "<br>";
            }
        } else {
            print "<br>No se ha devuelto ninguna fila";
        }

    } catch (PDOException $e) {
        print "Mensaje de la excepcion: " . $e->getMessage();
    }

    