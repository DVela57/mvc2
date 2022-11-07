<?php
  require_once "../credenciales.php";
     function insertar() {
        try {
            $bd = new PDO(dsn,usuario,clave);
            print "<br>Conexion satisfactoria";
            $insr = "INSERT INTO `credenciales`(`nombreusu`, `password`)
            VALUES ('usuario2'
            ,'$2y$10\$nnRv6KWZ/mDhYpn2WXxd5eHYcdLBiaFO.bXekEtUZ81h8iTjl6c2u')";
            $bd->insr;
            print "<br>Insertado con exito";
        } catch (PDOException $e) {
            print "Mensaje de la excepcion: " . $e->getMessage();
        }
     }
     insertar();
     function actualizar() {
        try {
            $bd = new PDO(dsn,usuario,clave);
            print "<br>Conexion satisfactoria";
            $act = "UPDATE `credenciales` SET `nombreusu`='usuarioCambiado'
             WHERE nombreusu = 'usuario2'; ";
            $bd->$act;
            print "<br>Actualizado con exito";
        } catch (PDOException $e) {
            print "Mensaje de la excepcion: " . $e->getMessage();
        }
     }
     function eliminar() {
        try {
            $bd = new PDO(dsn,usuario,clave);
            print "<br>Conexion satisfactoria";
            $elim = "DELETE FROM `credenciales` WHERE nombreusu = 'usuarioCambiado'";
            $bd->$elim;
            print "<br>Eliminado con exito";
        } catch (PDOException $e) {
            print "Mensaje de la excepcion: " . $e->getMessage();
        }
     }