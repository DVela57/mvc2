<?php 
    namespace Dwes\Galaxias;


    const RADIO = 1.25; //millones de años luz

    function observar($mensaje) {
        print "<br>Estoy mirando a la galaxia " . $mensaje;
    }

    class Galaxia {
        function __construct() {
            $this->nacimiento();
        }

        function nacimiento() {
            print "<br>Soy una nueva galaxia";
        }

        static function  muerte() {
            print "<br>Me destruyo";
        }

        function __toString() {
            return " esto son Galaxias del tostring";
        }
    } //fin class Galaxia