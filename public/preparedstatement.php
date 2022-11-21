<?php

    $dsn = "mysql:dbname=demo;host=db";
    $usuario = "dbuser";
    $password = "secret";

    /**
     * Premarar la consulta -> prepare
     * vincular los datos -> bindParameters / bindValue
     * ejecutar la sentencia -> execute();
     */

    try {
        $db  = new PDO($dsn,$usuario,$password);
        //stablish error level
        $db->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //preparacion por nombre
        //$sentencia = $db->prepare("INSERT INTO
        //credenciales (nombreusu,password) VALUES (:nombre, :clave)");

        //preparacion por posicion
        $sentencia = $db->prepare("INSERT INTO
        credenciales (nombreusu,password) VALUES (?, ?)");
        $nombre = "Galicia";
        $clave = "3416";

        //$sentencia->bindParam(':nombre', $nombre);
        //$sentencia->bindParam(':clave', $clave);

        $sentencia->bindParam(1, $nombre);
        $sentencia->bindParam(2, $clave);

        //$sentencia->bindValue(":nombre", $nombre);
        //$sentencia->bindValue(":clave", $clave);

        //$nombre = "Pedro";
        //$clave = "789";

        $sentencia->execute();

        /*$resultado = $sentencia->fetchAll();

        if ($resultado == null) {
            echo "No se encontró ninguna consulta";
            return;
        } else {
            foreach ($resultado as $r) {
                echo $r['nombre']. " - ". $r['clave']. "\n";
            }
            echo "\n";
            return;
            //echo $sentencia->rowCount();
        }*/
        print "exito";
        
    } catch (PDOException $e) {
        print "Error producido al conectar: " . $e->getMessage;
    }