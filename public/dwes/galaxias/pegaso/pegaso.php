<?php 
    namespace Dwes\Galaxias\Pegaso;


    const RADIO = 0.75; //millones de años luz

    function observar($mensaje) {
        print "<br>Estoy Diriiendome a la galaxia " . $mensaje;
    }

    class Galaxia {
        function __construct() {
            $this->nacimiento();
        }

        function nacimiento() {
            print "<br>Soy una Galaxia nueva";
        }

        static function  muerte() {
            print "<br>Estoy Destruciating";
        }

    } //fin class Galaxia