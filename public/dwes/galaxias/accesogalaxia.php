<?php 
    namespace Dwes\Galaxias;


    print "<br> Namespace actual : " . __NAMESPACE__;

    /**
     * direccionamiento namespace:
     * sin direccionamiento
     * direccionamiento relativo
     * direccionamiento absolute
     */
    include "galaxia1.php";
    print "<h2>Sin direccionamiento</h2>";

    print "<br>Radio de la galaxia: " . RADIO;
    observar("via lactea");
    $gl = new Galaxia();
    Galaxia::muerte();

    include "pegaso/pegaso.php";

    print "<h2>Direccionamiento Relativo</h2>";

    print "<br>Radio de la galaxia: " . Pegaso\RADIO ;
    Pegaso\observar("via lactea");
    $gl = new Pegaso\Galaxia();
    Pegaso\Galaxia::muerte();

    print "<h2>Direccionamiento absoluto</h2>";

    print "<br>Radio de la galaxia: " . \Dwes\Galaxias\Pegaso\RADIO ;
    \Dwes\Galaxias\Pegaso\observar("via lactea");
    $gl = new \Dwes\Galaxias\Pegaso\Galaxia();
    \Dwes\Galaxias\Pegaso\Galaxia::muerte();


    use const \Dwes\Galaxias\Pegaso\RADIO;
    use function \Dwes\Galaxias\observar;
    use \Dwes\Galaxias\Galaxia;
    print "<br>Radio de la galaxia: " . RADIO;
    print "<br>" . observar("otra galaxia");
    print "<br>Objeto de galaxia". new Galaxia();

    //alias namespace
    use \Dwes\Galaxias\Pegaso as Seiya;
    Seiya\observar("Observando a Seiya");